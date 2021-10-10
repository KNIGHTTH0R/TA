<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormDonateRequest;
use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function show(Campaign $campaign)
    {
        return view('client.campaign.detail', compact('campaign'));
    }

    public function form(Campaign $campaign)
    {
        return view('client.campaign.form', compact('campaign'));
    }

    public function store(FormDonateRequest $formDonateRequest, Campaign $campaign)
    {
        dd($formDonateRequest->validated());
    }
}
