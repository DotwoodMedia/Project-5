<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    public function register(Request $request)
    {
        $attr = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed'
        ]);

        $user = User::create([
            'name' => $attr['name'],
            'password' => bcrypt($attr['password']),
            'email' => $attr['email']
        ]);

        $response = [
            'access_token' => $user->createToken('API Token')->plainTextToken,
            'token_type' => 'Bearer'
        ];

        return response()->json($response, 200);
    }

    public function login(Request $request)
    {
        $attr = $request->validate([
            'email' => 'required|string|email|',
            'password' => 'required|string|min:6'
        ]);

        $user = User::where('email', $attr['email'])->first();
        if (!$user || !Hash::check($attr['password'], $user->password)) {
             return response()->json(['message' => 'Credentials not match'], 401);
        }

        $response = [
            'access_token' => $user->createToken('API Token')->plainTextToken,
            'token_type' => 'Bearer'
        ];

        return response()->json($response, 200);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return response()->json(['message' => 'Tokens Revoked'], 200);
    }
}
