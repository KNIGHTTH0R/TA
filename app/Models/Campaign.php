<?php

namespace App\Models;

use DateTime;
use App\Models\Category;
use App\Models\Transaction;
use App\Models\Distribution;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'stories',
        'target',
        'date_end'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function transanctions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function distributions()
    {
        return $this->hasMany(Distribution::class);
    }

    public function getTargetAttribute($value)
    {
        return str_replace(',','.', number_format($value));
    }

    public function getDateEndAttribute($value)
    {
        $now = new DateTime(date('Y-m-d'));
        $target = new DateTime($value);
        $duration = $now->diff($target);

        return $duration->format('%a');
    }
}
