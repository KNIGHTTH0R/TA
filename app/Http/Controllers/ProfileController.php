<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        return view('admin.profile.show');
    }

    public function update(UpdateProfileRequest $request)
    {
        auth()->user()->update($request->validated());

        return back()->with('success', 'Profile has been successfully updated');
    }
}
