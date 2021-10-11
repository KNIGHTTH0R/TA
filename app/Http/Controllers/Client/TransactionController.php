<?php

namespace App\Http\Controllers\Client;

use App\Models\Campaign;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FormDonateRequest;

class TransactionController extends Controller
{
    public function store(FormDonateRequest $formDonateRequest, Campaign $campaign)
    {
        dd($formDonateRequest->validated());
    }
}
