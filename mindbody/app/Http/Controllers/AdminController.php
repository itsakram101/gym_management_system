<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = User::where('role','ADM')->get();

        return view('admins.index',compact('admins')); 
            

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'ADM'
        ]);

        User::create([
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            "password" => Hash::make($request->input('password')),
            "role" => "ADM",
        ]);

        return redirect()->route('admins.index')
            ->with('success','Admin created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(User $admin)
    {
        return view('admins.show',compact('admin'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(User $admin)
    {
        return view('admins.edit',compact('admin'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $admin)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'ADM'
        ]);

        $admin->update($request->all());

        return redirect()->route('admins.index')
            ->with('success','Admin updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $admin)
    {
        // $admin->delete();

        // return redirect()->route('admins.index')
        //     ->with('success','Admin deleted successfully');
    }
}
