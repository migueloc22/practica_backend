<?php

namespace App\Http\Controllers;
use JWTAuth;
use JWTFactory;

use Illuminate\Http\Request;

class APILoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }
    public function login() {
        $credentials = request(['email', 'password']);
        $token;
        try {
            $token = JWTAuth::attempt($credentials);
            // if (!$token = JWTAuth::attempt($credentials)) {
            //     return response()->json(['error' => 'Unauthorized'], 401);
            // }
        } catch (JWTException $e) {
            return response()->json(['error' => 'Unauthorized'.$e], 500);
        }

        // $token=$token = auth('api')->attempt($credentials);
        return response()->json([
            'token' => $token,
            'expires' => auth('api')->factory()->getTTL() * 60,
        ]);
    }
}
    