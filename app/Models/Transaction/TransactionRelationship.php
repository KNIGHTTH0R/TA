<?php

namespace App\Models\Transaction;

use App\Models\User\User;
use App\Models\Campaign\Campaign;

trait TransactionRelationship
{
    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
