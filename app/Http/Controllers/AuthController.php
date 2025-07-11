<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function create() { 
        return inertia('Auth/Login');
    }
    
    public function store(AuthRequest $request){
        $data = $request->validated();

        if(!Auth::attempt($data,true)){
             throw ValidationException::withMessages([
                'email' => 'Authentication failed'
            ]); 
        }

        $request->session()->regenerate();
        return redirect()->intended();
    }

    public function destroy(){
        
    }
}