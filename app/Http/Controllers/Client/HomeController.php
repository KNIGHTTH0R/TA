<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::latest()->get();

        return view('layouts.client.app', compact('campaigns'));
    }
}
