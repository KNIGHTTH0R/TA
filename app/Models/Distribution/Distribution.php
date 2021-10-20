<?php

namespace App\Models\Distribution;

use App\Models\Campaign\Campaign;
use Illuminate\Database\Eloquent\Model;
use App\Models\Distribution\DistributionRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Distribution extends Model
{
    use HasFactory;
    use DistributionRelationship;

    protected $fillable = [
        'amount',
        'stories',
    ];
}
