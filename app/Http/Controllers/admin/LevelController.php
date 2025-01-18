<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $level=Level::all();
        //return $level;
        return view('admin.level.index',compact('level'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.level.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request;
        $request->validate([
            'class'=>'required|integer'
        ]);
        $level=new Level();
        $level->class=$request->class;
        if ($request->hasFile('syllabus')) {
            $file = $request->file('syllabus');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('pdf'), $filename);
            $level->syllabus = "pdf/$filename"; // Store the relative path
        }
        $level->save();
        return redirect()->route('level.index');
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
        $level=Level::find($id);
        return view('admin.level.edit',compact('level'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'class'=>'required|max:255'
        ]);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $level=Level::findOrFail($id);
        $level->delete();
        return redirect()->route('level.index');
    }
}
