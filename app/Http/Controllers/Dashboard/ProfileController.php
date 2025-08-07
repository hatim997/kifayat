<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function index()
    {
        try {
            $user = Auth::user();
            return view('dashboard.profile.index', compact('user'));
        } catch (\Throwable $th) {
            // throw $th;
            Log::error("Profile View Failed:" . $th->getMessage());
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
        }
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:255',
            'profile_img' => 'nullable|image|mimes:jpeg,png,jpg|max:5140',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }
        try {
            $user = User::findOrFail(Auth::user()->id);
            $user->name = $request->name;
            $user->phone = $request->phone;

            if ($request->hasFile('profile_img')) {
                if (isset($user->profile_img) && File::exists(public_path($user->profile_img))) {
                    File::delete(public_path($user->profile_img));
                }
                $Image = $request->file('profile_img');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_img.' . $Image_ext;

                $Image_path = 'uploads/profiles';
                $Image->move(public_path($Image_path), $Image_name);
                $user->profile_img = $Image_path . "/" . $Image_name;
            }

            $user->save();

            return redirect()->route('profile.index')->with('success', 'Profile Updated Successfully');
        } catch (\Throwable $th) {
            Log::error('Profile Update Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}
