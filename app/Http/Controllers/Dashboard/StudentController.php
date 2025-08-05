<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StudentController extends Controller
{
    public function studentPortal()
    {
        try {
            return view('dashboard.students.index');
        } catch (\Throwable $th) {
            // throw $th;
            Log::error("Student Portal View Failed:" . $th->getMessage());
            return redirect()->route('choose-portal')->with('error', "Something went wrong! Please try again later");
        }
    }

    public function studentVideos()
    {
        try {
            return view('dashboard.students.videos');
        } catch (\Throwable $th) {
            // throw $th;
            Log::error("Student Videos View Failed:" . $th->getMessage());
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
        }
    }

    public function studentAudios()
    {
        try {
            return view('dashboard.students.audios');
        } catch (\Throwable $th) {
            // throw $th;
            Log::error("Student Audios View Failed:" . $th->getMessage());
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
        }
    }
}
