<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Models\Campaign\Campaign;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::latest()->active()->get();

        return view('layouts.client.app', compact('campaigns'));
    }
}
