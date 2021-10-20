<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Campaign\Campaign;
use App\Models\Transaction\Transaction;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function show(Campaign $campaign)
    {
        $campaign->load('distributions');
        $transactions = Transaction::where('campaign_id', $campaign->id)
                ->success()
                ->get();
        $collect = Transaction::where('campaign_id', $campaign->id)
                ->success()
                ->collect();
        $top_donaturs = Transaction::where('campaign_id', $campaign->id)
                ->amount()
                ->take(3)
                ->get();

        //12.345.678 => 12345678
        $target = str_replace('.', '', $campaign->target);

        $average = ((int) $collect / (int) $target) * 100;
        //12.345678 => 12.34
        $progress = round($average, 2);

        return view('client.campaign.detail', compact('campaign', 'transactions', 'collect', 'top_donaturs', 'progress'));
    }

    public function form(Campaign $campaign)
    {
        return view('client.campaign.form', compact('campaign'));
    }
}
