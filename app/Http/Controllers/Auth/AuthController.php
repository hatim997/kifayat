<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function studentLogin()
    {
        if (Auth::check()) {
            return redirect()->route('student.portal');
        } else {
            return view('auth.student-login');
        }
    }

    public function teacherLogin()
    {
        if (Auth::check()) {
            return redirect()->route('teacher.portal');
        } else {
            return view('auth.teacher-login');
        }
    }

    public function student_login_attempt(Request $request)
    {
        // Validate the form
        $rules = [
            'email' => 'required|email|max:50',
            'password' => 'required',
        ];

        // If captcha is used
        // if (config('captcha.version') !== 'no_captcha') {
        //     $rules['g-recaptcha-response'] = 'required|captcha';
        // } else {
        //     $rules['g-recaptcha-response'] = 'nullable';
        // }

        $validate = Validator::make($request->all(), $rules);
        if ($validate->fails()) {
            return Redirect::back()->withErrors($validate)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            $userfind = User::where('email', $request->email)->first();

            if ($userfind) {
                // Check if the password is correct
                if (Hash::check($request->password, $userfind->password)) {
                    // Password matched
                    $remember_me = $request->remember ? true : false;
                    Auth::attempt(['email' => $userfind->email, 'password' => $request->password], $remember_me);

                    if (Auth::check()) {
                        return redirect()->route('student.portal')->with('success', "Login successfully!");
                    } else {
                        return redirect()->back()->withInput($request->all())->with('error', 'Authentication Error');
                    }
                } else {
                    return redirect()->back()->withInput($request->all())->with('error', 'Password is mismatch');
                }
            } else {
                return redirect()->back()->withInput($request->all())->with('error', "Invalid credentials");
            }
        } catch (\Throwable $th) {
            Log::error("Failed to Login:" . $th->getMessage());
            return redirect()->back()->withInput($request->all())->with('error', "Something went wrong! Please try again later");
        }
    }

    public function teacher_login_attempt(Request $request)
    {
        // Validate the form
        $rules = [
            'email' => 'required|email|max:50',
            'password' => 'required',
        ];

        // If captcha is used
        // if (config('captcha.version') !== 'no_captcha') {
        //     $rules['g-recaptcha-response'] = 'required|captcha';
        // } else {
        //     $rules['g-recaptcha-response'] = 'nullable';
        // }

        $validate = Validator::make($request->all(), $rules);
        if ($validate->fails()) {
            return Redirect::back()->withErrors($validate)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            $userfind = User::where('email', $request->email)->first();

            if ($userfind) {
                // Check if the password is correct
                if (Hash::check($request->password, $userfind->password)) {
                    // Password matched
                    $remember_me = $request->remember ? true : false;
                    Auth::attempt(['email' => $userfind->email, 'password' => $request->password], $remember_me);

                    if (Auth::check()) {
                        return redirect()->route('teacher.portal')->with('success', "Login successfully!");
                    } else {
                        return redirect()->back()->withInput($request->all())->with('error', 'Authentication Error');
                    }
                } else {
                    return redirect()->back()->withInput($request->all())->with('error', 'Password is mismatch');
                }
            } else {
                return redirect()->back()->withInput($request->all())->with('error', "Invalid credentials");
            }
        } catch (\Throwable $th) {
            Log::error("Failed to Login:" . $th->getMessage());
            return redirect()->back()->withInput($request->all())->with('error', "Something went wrong! Please try again later");
        }
    }

    public function logout()
    {
        try {
            Auth::logout();
            Log::info("Logout Successfully!");
            return Redirect::route('choose-portal')->with('success', 'Logout Successfully!');
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return Redirect::back()->with('error', "Something went wrong! Please try again later");
        }
    }
}
