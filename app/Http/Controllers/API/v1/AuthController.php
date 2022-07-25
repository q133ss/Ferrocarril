<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Services\Auth\LoginService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(RegisterRequest $request){
        return LoginService::register($request);
    }

    public function login(LoginRequest $request){
        return LoginService::login($request);
    }
}
