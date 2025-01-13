<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Level;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $course=Course::all();
        return view('admin.course.index',compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $class=Level::all();
        return view('admin.course.create',compact('class'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request;
        $request->validate([
            'subject'=>'required',
            'class'=>'required'
        ]);
        $course=new Course();
        $course->title=$request->subject;
        $course->description=$request->description;
        $course->level_id=$request->class;
        $course->save();
        return redirect()->route('course.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course=Course::find($id);
            return view('admin.course.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'subject'=>'required',
            'class'=>'required'
        ]);
        $course=Course::find($id);
        $course->title=$request->subject;
        $course->description=$request->description;
        $course->level_id=$request->class;
        $course->update();
        return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course=Course::find($id);
        $course->delete();
        return redirect()->route('course.index');
    }
}
