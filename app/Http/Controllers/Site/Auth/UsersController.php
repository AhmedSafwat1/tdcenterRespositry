<?php

namespace App\Http\Controllers\Site\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\{Faculty, User, University, Degree, EmploymentCase};
use Illuminate\Support\Facades\Hash;
use App\Helpers\UploadFile;
use Session;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('userAuth')->only(["showEditForm","saveEdit"]);
    }

    protected function getValidator($user = null)
    {
        $validator = [
            'fname_en' => ['required', 'string', 'max:255'],
            'fname_ar' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'gender' => ['required',"in:male,female"],
            'birthdate' => ['required',"date"],
            'nationality' => ['required',"string","max:255"],
            'national_id' => ['required',"integer"],
            'phone_number' => ['required',"numeric","min:5"],
            'home_phone' => ['nullable','numeric','min:5'],
            'username' => ['required', 'unique:users,username'],
            'upload_file' => ['nullable','file'],
            'university_id' => ['required','exists:universities,id'],
            'faculty_id' => ['required', 'exists:faculties,id'],
            'department_id' => ['required', 'exists:departments,id'],
            'degree_id' => ['required','exists:degrees,id'],
            'employment_case_id' => ['required', 'exists:employment_cases,id'],
        ];

        if($user){
            $validator['email'][4]  = $validator['email'][4].",".$user->id;
            $validator['username'][1]  = $validator['username'][1].",".$user->id;
            unset($validator['password']);
        }
        return $validator;

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function save($user, $request)
    {
        $user->fname_en          = $request->fname_en;
        $user->fname_ar          = $request->fname_ar;
        $user->email             = $request->email;
        $user->gender            = $request->gender;
        $user->nationality       = $request->nationality;
        $user->national_id       = $request->national_id;
        $user->phone_number      = $request->phone_number;
        $user->home_phone        = $request->home_phone;
        if(isset($request->password) && !is_null($request['password']))
            $user->password          = \Hash::make($request['password']);
        $user->username          = $request->username;
        $user->university_id     = $request->university_id;
        $user->faculty_id        = $request->faculty_id;
        $user->department_id     = $request->department_id;
        $user->degree_id         = $request->degree_id;
        $user->degree_id         = $request->degree_id;
        $user->birthdate         = $request->birthdate;
        $user->activation_token  = '';
        $user->upload_file       = '';
        $user->employment_case_id= $request->employment_case_id;
        if ($request->upload_file){
            $user->upload_file = UploadFile::uploadFile($request->upload_file,"users/file");
        }
        $user->save();
    }

    /*
     * show form Reiget
     *  route /site/register
     *  method Get
     *
     * */
    public function showRegistrationForm()
    {
        $lang           = \App::getLocale();
        $univercites    = University::with("faculties")->get();
        $facilites      =Faculty::with("departments")->get();
        $degres         = Degree::all();
        $employes       = EmploymentCase::all();
        return view('front.pages.reigster',compact(
            "univercites","lang","facilites",
            "degres","employes"
        ));
    }


    public function register(Request $request){

        $validator =  $this->getValidator();
        $this->validate($request,$validator);
        $user  = new User;
        $this->save($user, $request);
        auth()->login($user);
        Session::flash('success','Welcom in Site');
		return redirect("/");
    }


    // profile edit
    public function showEditForm(Request $request){
        $lang           = \App::getLocale();
        $user           = auth()->user();
//        dd($user->faculty);
        $user->load(["faculty.departments",'university.faculties']);
        $univercites    = University::with("faculties")->get();
        $facilites      =Faculty::with("departments")->get();
        $degres         = Degree::all();
        $employes       = EmploymentCase::all();
        return view('front.pages.editProfile',compact(
            "univercites","lang","facilites",
            "degres","employes","user"
        ));
    }

    // profile edit save
    public function saveEdit(Request $request){
        $lang           = \App::getLocale();
        $user           = User::findOrFail($request->id);
        $validator      =  $this->getValidator($user, $request);
        $this->validate($request,$validator);
        $this->save($user, $request);
        Session::flash('success','Done update ');
        return redirect()->back();

    }

    public function getFacitly(Request $request, $id){
        $lang           = \App::getLocale();
        $univercity = University::with("faculties")->find($id);
        if(!$univercity)
            return response()->json([
                "key" => 0 ,
                "data"=> "error not found"
            ]);
        $facylties  = $univercity->faculties;
        $html       = view("Ajex.Facylty")->with(["data"=>$facylties,"lang"=>$lang])->render();
        return response()->json([
            "key" => 1 ,
            "data"=> $html
        ]);
    }

    public function getDepartment(Request $request, $id){
        $lang           = \App::getLocale();
        $faculty = Faculty::with("departments")->find($id);
        if(!$faculty)
            return response()->json([
                "key" => 0 ,
                "data"=> "error not found"
            ]);
        $department  = $faculty->departments;
        $html        = view("Ajex.Facylty")->with(["data"=>$department,"lang"=>$lang,"flag"=>2])->render();
        return response()->json([
            "key" => 1 ,
            "data"=> $html
        ]);
    }
}
