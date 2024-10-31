<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Display a list of users
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    // Show the form for creating a new user
    public function create()
    {
        return view('users.create');
    }

    // Store a new user in the database
    public function store(Request $request)
    {
        $request->validate([
            'id_role' => 'required|integer',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:6',
            'email_pengguna' => 'required|email|unique:users,email_pengguna',
            'nama_pengguna' => 'required|string',
        ]);

        User::create([
            'id_role' => $request->id_role,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email_pengguna' => $request->email_pengguna,
            'nama_pengguna' => $request->nama_pengguna,
        ]);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    // Show the form for editing the specified user
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    // Update the specified user in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_role' => 'required|integer',
            'username' => 'required|unique:users,username,' . $id . ',id_pengguna',
            'email_pengguna' => 'required|email|unique:users,email_pengguna,' . $id . ',id_pengguna',
            'nama_pengguna' => 'required|string',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'id_role' => $request->id_role,
            'username' => $request->username,
            'email_pengguna' => $request->email_pengguna,
            'nama_pengguna' => $request->nama_pengguna,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    // Delete the specified user (soft delete)
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
