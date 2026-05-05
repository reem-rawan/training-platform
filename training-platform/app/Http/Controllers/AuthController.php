<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'required|in:student,company,admin',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password, // بدون تشفير مؤقت
            'role' => $request->role,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Registered successfully',
            'data' => $user
        ], 200);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('Email', $request->email)
                    ->where('Password', $request->password)
                    ->where('Status', 'نشط')
                    ->first();

        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'بيانات الدخول غير صحيحة'
            ], 401);
        }

        return response()->json([
            'status' => true,
            'message' => 'Login successful',
            'data' => $user
        ], 200);
    }
}