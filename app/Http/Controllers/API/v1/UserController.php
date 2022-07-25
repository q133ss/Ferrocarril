<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function info(){
        return Auth()->user();
    }

    public function infoById($user_id){
        return User::findOrFail($user_id);
    }
}
