<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function register(Request $request)

    {
    
    $attr = $request->validate([
    
    'gebruikersnaam' => 'required|string',
    
    'password' => 'required|string|min:6'
    
    ]);
    
    $user = User::create([
    
    'gebruikersnaam' => $attr['gebruikersnaam'],
    
    'password' => bcrypt($attr['password'])
    
    ]);
    
    return response()->json(['message' => 'Registration successful'], 200);
    
    }
    
    public function login(Request $request)
    
    {
    
    $attr = $request->validate([
    
    'password' => 'required|string|min:6'
    
    ]);
    
    if (!Auth::attempt($attr)) {
    
    return response()->json(['message' => 'Credentials not match'], 401);
    
    }
    
    $response = [
    
    'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
    
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
