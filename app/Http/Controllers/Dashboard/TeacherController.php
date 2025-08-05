<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TeacherController extends Controller
{
    public function teacherPortal()
    {
        try {
            return view('dashboard.teachers.index');
        } catch (\Throwable $th) {
            // throw $th;
            Log::error("Teacher Portal View Failed:" . $th->getMessage());
            return redirect()->route('choose-portal')->with('error', "Something went wrong! Please try again later");
        }
    }

    public function teacherAnswerKit()
    {
        try {
            return view('dashboard.teachers.answer-kit');
        } catch (\Throwable $th) {
            // throw $th;
            Log::error("Teacher Answer kit View Failed:" . $th->getMessage());
            return redirect()->route('choose-portal')->with('error', "Something went wrong! Please try again later");
        }
    }

    public function teacherResourceKit()
    {
        try {
            return view('dashboard.teachers.resource-kit');
        } catch (\Throwable $th) {
            // throw $th;
            Log::error("Teacher Resource kit View Failed:" . $th->getMessage());
            return redirect()->route('choose-portal')->with('error', "Something went wrong! Please try again later");
        }
    }
}
