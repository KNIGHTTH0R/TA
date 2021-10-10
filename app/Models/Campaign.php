<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Transaction;
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
}
