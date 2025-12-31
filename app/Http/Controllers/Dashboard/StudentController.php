<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\AnimationClass;
use App\Models\ClassChapter;
use App\Models\UraanUrduClass;
use App\Models\UrduClassChapter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

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

    public function studentAnimations()
    {
        try {
            $animationClasses = AnimationClass::with('classChapters')->get();
            return view('dashboard.students.animation', compact('animationClasses'));
        } catch (\Throwable $th) {
            // throw $th;
            Log::error("Student Animations View Failed:" . $th->getMessage());
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
        }
    }
    public function chapterDetails($classSlug, $chapterSlug)
    {
        try {
            $animationClass = AnimationClass::where('slug', $classSlug)->first();
            $classChapter = ClassChapter::with('chapterContents')->where('slug', $chapterSlug)->where('class_id', $animationClass->id)->first();
            return view('dashboard.students.chapter-details', compact('classChapter'));
        } catch (\Throwable $th) {
            // throw $th;
            Log::error("Student Animations View Failed:" . $th->getMessage());
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
        }
    }

    public function preview(Request $request)
    {
        $file = $request->file; // swf path

        return view('dashboard.students.animation-preview', compact('file'));
    }

    public function uraanUrduSeries()
    {
        try {
            $urduClasses = UraanUrduClass::with('classChapters')->get();
            return view('dashboard.students.uraan-urdu-series', compact('urduClasses'));
        } catch (\Throwable $th) {
            // throw $th;
            Log::error("Student Uraan Urdu Series View Failed:" . $th->getMessage());
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
        }
    }

    public function urduChapterDetails($classSlug, $chapterSlug)
    {
        try {
            $urduClass = UraanUrduClass::where('slug', $classSlug)->first();
            $classChapter = UrduClassChapter::with('chapterContents')->where('slug', $chapterSlug)->where('urdu_class_id', $urduClass->id)->first();
            return view('dashboard.students.urdu-chapter-details', compact('classChapter'));
        } catch (\Throwable $th) {
            // throw $th;
            Log::error("Student Uraan Urdu Series View Failed:" . $th->getMessage());
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
        }
    }

    public function urduPreview(Request $request)
    {
        $file = $request->file; // swf path

        return view('dashboard.students.urdu-preview', compact('file'));
    }
}
