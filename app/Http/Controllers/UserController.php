<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index()
    {
        return User::all();
    }

    public function store(Request $request){

        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
            'role' => 'required|ind:admin,karyawan'
        ]);

        $user = User::created([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);
    }

    public function show($id){
        return User::findOrFail($id);
    }

    public function update(Request $request, $id){
        $user = User::findOrFail($id);

        $request->validate([
            'username' => 'sometimes|unique:users,username,' . $id,
            'password' => 'sometimes|min:6',
            'role' => 'sometimes|in:admin,karyawan',
        ]);

        $user->update([
            'username' => $request->username ?? $user->username,
            'password' => $request->password ? Hash::make($request->password) : $user->password, // Hash jika password diubah
            'role' => $request->role ?? $user->role,
        ]);

        return response()->json($user, 200);
    }


    public function destroy($id){
        User::destroy($id);
        return response()->json(null,204);
    }
}
