<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\{
    Event,
    Program,
    RequestType ,
    Request as RequetForm,
    Mail\SendMailable
};
use Illuminate\Support\Facades\App;
use Session;

class EventController extends Controller
{


    public function __construct()
    {
        $this->middleware('userAuth')->only(["booking","RequestForm","saveRequest"]);
    }
    public function index(Request $request){

        $lang = App::getLocale();
        $programs = Program::all();
        $events  = Event::with("program")->whereDate("event_start" , ">=", Carbon::now());
        $user    = auth()->user();
        if($user){
            $events= $events->whereDoesntHave("users",function ($query) use($user){
                $query->where("user_id",$user->id)->where("status","accept");;
            });
        }
        $events = $events->withCount("users")->latest("event_start")->get();
        return view('front.pages.test',compact("events","lang","programs"));
    }


    public function main(Request $request){
        $data    = ($request->date_search);
        $program = $request->program_id;
        $lang    = App::getLocale();
        $user    = $request->user_id;
        $events  = Event::with("program")->whereDate("event_start" , ">=", Carbon::now())->where("program_id",$program);
        $events  = $events->whereMonth("event_start", $data);
        if($user){
            $events= $events->whereDoesntHave("users",function ($query) use($user){
                $query->where("user_id",$user)->where("status","accept");
            });
        }
        $events      = $events->latest("event_start")->get();

        $html        = view("Ajex.search")->with(["events"=>$events,"lang"=>$lang])->render();
        return response()->json([
            "key" => 1 ,
            "data"=> $html
        ]);
    }


    public function details(Request $request, $id){
        $event   =  Event::with("program")->withCount("users")->findOrFail($id);
        $lang    = App::getLocale();

        $status  = "allow";
        if(auth()->user()){
            $check = auth()->user()->events()->wherePivot("event_id",$id)->first();

            if($check){
                $status = $check->pivot->status;
            }
        }

        return view('front.pages.detailsEvent',compact("event","lang","status"));
    }

    public function booking(Request $request, $id){

        $event     = Event::withCount("users")->with("users")->findOrFail($id);
        $lang      = App::getLocale();
        if($event->users_count == $event->capacity){
            $msg =  $lang == "ar"? "لقد تم  اكتمال عدد فى الحدث"  : " The Event is full now";
            Session::flash('danger',$msg);
            return redirect()->back();
        }
        auth()->user()->events()->sync($id);
        $msg =  $lang == "ar"? "لقد تم الحجز  فى الحدث"  : "done booked event ";
        Session::flash('success',$msg);
        return redirect()->route("event.details",["id"=>$id]);


    }

    public function myEvents(Request $request){
        if(auth()->user())
        {
            $lang    = App::getLocale();
            $events  = auth()->user()->events()->latest("event_start")->with("program")->get();

            return view("front.pages.booking",compact("lang","events"));
        }
        else{
            return redirect()->back();
        }
    }

    public function RequestForm(Request $request){
        $lang  = App::getLocale();
        $types = RequestType::all();
        return view("front.pages.requestForm",compact("lang","types"));
    }

    public function  saveRequest(Request $request){
        $this->validate($request,[
            "request_name"      =>"required|string|max:191",
            "request_type_id"   =>"required|exists:request_types,id"
        ]);

        $myRequest                  = new RequetForm;
        $myRequest->req_name        = $request->request_name;
        $myRequest->request_type_id = $request->request_type_id;
        $myRequest->user_id         = auth()->id();
        $myRequest->req_number      = uniqid();

        $myRequest->save();
        \Mail::to(auth()->user()->email)->send(new SendMailable(auth()->user(),$myRequest));
        Session::flash('success',__("messages.send"));
        return redirect()->back();
    }


}
