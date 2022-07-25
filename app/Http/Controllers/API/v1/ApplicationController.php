<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Appication\StoreRequest;
use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function store(StoreRequest $request){
        return Application::create($request->validated());
    }

    public function get(){
        return Auth()->user()->applications;
    }
}
