<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function show()
    {
        return view('admin.password.show');
    }

    public function update(UpdatePasswordRequest $request)
    {
        if (!Hash::check($request->password, auth()->user()->password)) {
            return back()->with('failure', 'The provided password does not match out records');
        }

        auth()->user()->update(['password' => bcrypt( $request->new_password)]);

        return back()->with('success', 'Password has been successfully updated');
    }
}
