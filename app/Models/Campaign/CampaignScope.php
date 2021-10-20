<?php

namespace App\Models\Campaign;

trait CampaignScope
{
    public function scopeActive($query)
    {
        return $query->where('date_end', '>', date('Y-m-d'));
    }
}
