<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function index()
    {
        return inertia('Index/Index',[
            'message' => 'Hello from laravel',
        ]);
    }       

    public function show()
    {
        return inertia('Index/Show');
    }
}