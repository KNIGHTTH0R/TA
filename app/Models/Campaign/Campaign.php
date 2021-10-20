<?php

namespace App\Models\Campaign;

use App\Models\Campaign\CampaignScope;
use Illuminate\Database\Eloquent\Model;
use App\Models\Campaign\CampaignAccessor;
use App\Models\Campaign\CampaignRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Campaign extends Model
{
    use HasFactory;
    use CampaignScope;
    use CampaignAccessor;
    use CampaignRelationship;


    protected $fillable = [
        'title',
        'slug',
        'image',
        'stories',
        'target',
        'date_end'
    ];
}
