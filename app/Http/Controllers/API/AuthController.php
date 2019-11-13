<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\AuthResource;
use Illuminate\Support\Facades\Auth;
use Validator;
use Carbon\Carbon;
use App\Notifications\SignupActivate;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\User;

class AuthController extends Controller
{

    use ApiResponseTrait;

    // Registeration
    public function register(Request $request) {

        $validated = Validator::make($request->all(), [
            'fname_en' => ['required', 'string', 'max:255'],
            'fname_ar' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'gender' => ['required'],
            'birthdate' => ['required'],
            'nationality' => ['required'],
            'national_id' => ['required'],
            'phone_number' => ['required'],
            'home_phone' => [''],
            'username' => ['required', 'unique:users'],
            // 'verified' => [''],
            // 'is_deleted' => [''],
            'upload_file' => [''],
            'university_id' => ['required'],
            'faculty_id' => ['required'],
            'department_id' => ['required'],
            'degree_id' => ['required'],
            'employment_case_id' => ['required'],
            // 'attendance_id' => [''],
        ]);
        // temporarily : I skipped validating this values [home_phone, verified, is_deleted] on purpose => $request
        // refactoring this later

        if ($validated->fails()) {
            return response()->json(['errors'=>$validated->errors()], 401);
        }

        $input = $request->all();
        $input['password'] = Hash::make($request['password']);
        $input['activation_token'] = Str::random(60);
        // $input['verified'] = $request['verified'] ?: 0;
        // $input['is_deleted'] = $request['is_deleted'] ?: 0;
        $newUser = User::create($input);

        $newUser->notify(new SignupActivate($newUser));

        $accessToken =  $newUser->createToken('authToken')->accessToken;

        if ($newUser) {
            return $this->apiResponse([new AuthResource($newUser), 'access_token' => $accessToken], null, 200);
        }
        return $this->apiResponse(null, 'Un Known Error', 400);
    }

    // Account Activation
    public function signupActivate($token)
{
    $user = User::where('activation_token', $token)->first();
    if (!$user) {
        return response()->json([
            'message' => 'This activation token is invalid.'
        ], 404);
    }
    $user->active = true;
    $user->activation_token = '';
    $user->save();
    return $user;
}

    // Login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean',
        ]);

        $credentials = request(['email', 'password']);
        $credentials['active'] = 1;
        $credentials['deleted_at'] = null;

        if(!Auth::attempt($credentials))
        return $this->apiResponse(null, 'Unauthorised' , 401);

        $user = $request->user();

        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;

        if ($request->remember_me)
        $token->expires_at = Carbon::now()->addWeeks(1);

        $token->save();

        return $this->apiResponse([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString(),
            'name' => $user->fname_en,
            'email' => $user->email,
        ], null, 200);
    }

    // Logout
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
}
