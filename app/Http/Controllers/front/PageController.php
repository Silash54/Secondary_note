<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Level;
use App\Models\Team;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    public function __construct()
    {
        $level=Level::all();
        $teams=Team::orderBy('id','desc')->get();
        View::share([
            'level'=>$level,
            'teams'=>$teams
        ]);
    }
    public function course_detail($id)
    {
        $level = Level::with('course')->find($id);
        return view('front.layout.level_details',compact('level'));
    }
    public function course_syllabus($id)
    {
        $syllabusPath=Level::find($id);
        $syllabusDetails=Level::find($id);
        
        return view('front.layout.syllabus', compact('syllabusPath','syllabusDetails'));
    }
    public function note()
    {
        return "hello note";
    }
    public function home()
    {
        return view('front.layout.home');
    }
}
