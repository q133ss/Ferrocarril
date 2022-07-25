<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Complation\StoreRequest;
use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintsController extends Controller
{
    public function store(StoreRequest $request){
        return Complaint::create($request->validated());
    }

    public function get(){
        return Auth()->user()->complaints;
    }
}
