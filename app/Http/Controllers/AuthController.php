<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function create() { 
        return inertia('Auth/Login');
    }
    
    public function store(AuthRequest $request){
        dd($request->all());
    }

    public function destroy(){
        
    }
}