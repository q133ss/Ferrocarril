<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginService{
    static function register(Request $request){
        $validated = $request->validated();
        if(!User::where('email', $validated['email'])->first()) {
            $validated['password'] = Hash::make($validated['password']);
            $user = User::create($validated);
            $token = $user->createToken($validated['device_name'])->plainTextToken;
            return ['user' => $user, 'token' => $token];
        }else{
            return response('Пользователь с таким Email существует', 504)->header('Content-Type', 'application/json');;
        }
    }

    static function login(Request $request){
        $validated = $request->validated();
        $user = User::where('email', $validated['email'])->first();
        if($user){
            if(Hash::check($validated['password'], $user->password)){
                $token = $user->createToken($validated['device_name'])->plainTextToken;
                Auth::login($user);
                return response()->json(['token' => $token]);
            }else{
                return response('Неверный пароль', 504)->header('Content-Type', 'application/json');
            }
        }else{
            return response('Пользователь с таким Email не найден', 504)->header('Content-Type', 'application/json');
        }
    }
}
