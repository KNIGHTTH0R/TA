<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view('client.auth.register');
    }

    public function store(RegisterRequest $registerRequest)
    {
        dd($registerRequest->validated());
    }
}
