<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginService{
    static function login(Request $request){
        $validated = $request->validated();
        $user = User::where('email', $validated['email'])->first();
        if($user){
            if(Hash::check($validated['password'], $user->password)){
                $token = $user->createToken($validated['device_name'])->plainTextToken;
                Auth::login($user);
                return response()->json(['token' => $token]);
            }else{
                return response()->json('Неверный пароль');
            }
        }else{
            return response()->json('Пользователь с таким Email не найден');
        }
    }
}
