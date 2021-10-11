<?php

namespace App\Models;

use App\Models\Transaction;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'image',
        'email',
        'username',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function transanctions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function getImageAttribute($image)
    {
        if ($image != null) {
            return asset('donaturs/' . $image);
        } else {
            return 'https://ui-avatars.com/api?name=' . str_replace(' ', '+', $this->name)
                . '&background=4e73df&color=ffffff&size=100';
        }
    }
}
