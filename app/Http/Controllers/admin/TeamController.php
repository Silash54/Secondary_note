<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $totalProfile=Team::count();
        if($totalProfile<3){
            return view('admin.team.create');
        }
        return view('admin.team.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email'
        ]);

        $team = new Team();
        $team->name = $request->name;
        $team->email = $request->email;
        $team->phone = $request->phone;
        if ($request->hasFile('image')) {
            // Retrieve the uploaded file
            $file = $request->file('image');

            // Generate a unique name for the file
            $newName = time() . '.' . $file->getClientOriginalExtension();

            // Move the file to the 'images' directory within the 'public' folder
            $file->move(public_path('images'), $newName);

            // Save the file path to the 'image' attribute of the $team model
            $team->image = "images/$newName";
        }

        $team->save();
        return redirect()->route('teams.index');
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
        $team = Team::find($id);
        return view('admin.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = Team::find($id);
        $team->delete();
        return redirect()->route('teams.index');
    }
}
