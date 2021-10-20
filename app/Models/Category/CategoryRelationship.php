<?php

namespace App\Models\Category;

use App\Models\Campaign\Campaign;

trait CategoryRelationship
{
    public function campaigns()
    {
        return $this->hasMany(Campaign::class);
    }
}
