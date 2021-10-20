<?php

namespace App\Models\Distribution;

use App\Models\Campaign\Campaign;

trait DistributionRelationship
{
    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
}
