<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAccountRequest;
use Illuminate\Http\Request;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;
 use Illuminate\Support\Facades\Hash;

class UserAccountController extends Controller
{
    public function create(){
        return inertia('UserAccount/Create');
    }

    public function store(UserAccountRequest $request){
        $data = $request->validated();
        $user = User::create($data);
        Auth::login($user);

         return redirect()->route('listing.index')
            ->with('success', 'Account created!');
    }
}