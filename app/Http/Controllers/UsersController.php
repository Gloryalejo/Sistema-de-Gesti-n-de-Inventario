<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{




    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users = User::get();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:50|string',
            'last_name' => 'required|max:70|string',
            'role_id' => 'required',
            'email' => 'required|max:255|string',
            'password' => 'required|max:255|string'
        ]);

        User::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'role_id' => $request->role_id,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect('users/create')->with('status', 'User Created');
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
        $users = User::findOrFail($id);
        return view('user.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:50|string',
            'last_name' => 'required|max:70|string',
            'role_id' => 'required',
            'email' => 'required|max:255|string',
            'password' => 'required|max:255|string'
        ]);

        User::findOrFail($id)->update([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'role_id' => $request->role_id,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->back()->with('status', 'User Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect()->back()->with('status', 'User Deleted');
    }
}
