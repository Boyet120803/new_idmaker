<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return response()->json([
            'message' => 'Hello',
        ]);
    }


     public function update(Request $request, $id) {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'message' => 'User not found.'
            ], 404);
        }

        $request->validate([
            'first_name' => 'string|max:255',
            'last_name' => 'string|max:255',
            'middle_name' => 'string|max:255',
            'email' => 'string|email|max:255|unique:users,email,' . $id,
        ]);

        $user->update($request->only([
            'first_name',
            'middle_name',
            'last_name',
            'email'
        ]));

        return response()->json([
            'message' => 'User updated successfully',
            'user' => $user,
        ]);
    }
}
