<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\AuthResource;
use App\User;

class AuthController extends Controller
{

    use ApiResponseTrait;

    // Registeration
    public function register(Request $request) {

        $validated = $request->validate([
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
            'username' => ['required'],
            'verified' => [''],
            'is_deleted' => [''],
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


        // checking if the validation fails not working ? why ???

        // if ($validated->fails()) {
        //     return response()->json(['error'=>$validated->errors()], 401);
        // }

        // if($validated->fails()){
        //     return $this->sendError('Validation Error.', $validated->errors());
        // }

        $newUser = User::create([
            'fname_en' => $validated['fname_en'],
            'fname_ar' => $validated['fname_ar'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'gender' => $validated['gender'],
            'birthdate' => $validated['birthdate'],
            'nationality' => $validated['nationality'],
            'national_id' => $validated['national_id'],
            'phone_number' => $validated['phone_number'],
            'home_phone' => $request['home_phone'],
            'username' => $validated['username'],
            'verified' => $request['verified'] ?: 0,
            'is_deleted' => $request['is_deleted'] ?: 0,
            'upload_file' => $validated['upload_file'],
            'university_id' => $validated['university_id'],
            'faculty_id' => $validated['faculty_id'],
            'department_id' => $validated['department_id'],
            'degree_id' => $validated['degree_id'],
            'employment_case_id' => $validated['employment_case_id'],
        ]);
        $accessToken =  $newUser->createToken('authToken')->accessToken;

        // also when insert wrong data I can't return errors in the response
        if ($newUser) {
            return $this->apiResponse([new AuthResource($newUser), 'access_token' => $accessToken], null, 200);
        }
        return $this->apiResponse(null, 'Un Known Error', 400);
    }
}
