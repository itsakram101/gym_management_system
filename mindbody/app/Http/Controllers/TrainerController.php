<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all trainers from users table by role
        $trainers = User::where('role','TRN')->get();
        //compact returns data as an array
        return view('trainers.index',compact('trainers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validating inputs
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'TRN'
        ]);
        //insert into database
        User::create([
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            "password" => Hash::make($request->input('password')),
            "role" => "TRN",
        ]);
        //redirect to a route with a message sent
        return redirect()->route('trainers.index')
            ->with('success','Trainer created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $trainer
     * @return \Illuminate\Http\Response
     */
    public function show(User $trainer)
    {
        return view('trainers.show',compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $trainer
     * @return \Illuminate\Http\Response
     */
    public function edit(User $trainer)
    {
        return view('trainers.edit',compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $trainer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $trainer)
    {
        //validating inputs
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'TRN'
        ]);
        //updates database table based on requested data
        $trainer->update($request->all());

        return redirect()->route('trainers.index')
            ->with('success','Trainer updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $trainer
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $trainer)
    {
        //deletes trainer from users table with the id that came naturally in the url
        $trainer->delete();

        return redirect()->route('trainers.index')
            ->with('success','Trainer deleted successfully');
    }
}
