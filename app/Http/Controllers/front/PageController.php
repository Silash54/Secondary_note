<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Level;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    public function __construct()
    {
        $level=Level::all();
        View::share([
            'level'=>$level
        ]);
    }
    public function course_detail($id)
    {
        $level = Level::with('course')->find($id);
        return view('front.layout.level_details',compact('level'));
    }
    public function home()
    {
        return view('front.layout.home');
    }
}
