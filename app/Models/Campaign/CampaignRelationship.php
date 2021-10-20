<?php

namespace App\Models\Campaign;

use App\Models\Category\Category;
use App\Models\Transaction\Transaction;
use App\Models\Distribution\Distribution;

trait CampaignRelationship
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function distributions()
    {
        return $this->hasMany(Distribution::class);
    }
}
