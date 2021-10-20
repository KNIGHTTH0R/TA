<?php

namespace App\Models\Category;

use App\Models\Campaign\Campaign;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category\CategoryRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    use CategoryRelationship;

    protected $fillable = [
        'title',
    ];
}
