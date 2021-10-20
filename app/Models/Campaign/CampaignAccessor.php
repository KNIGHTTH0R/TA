<?php

namespace App\Models\Campaign;

use DateTime;

trait CampaignAccessor
{
    public function getTargetAttribute($value)
    {
        return str_replace(',','.', number_format($value));
    }

    public function getFormatDateEndAttribute()
    {
        $now = new DateTime(date('Y-m-d'));
        $target = new DateTime($this->date_end);
        $duration = $now->diff($target);

        return $duration->format('%a');
    }
}
