<?php

namespace App\Models;

use App\Models\User;
use App\Models\Campaign;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice',
        'campaign_id',
        'user_id',
        'amount',
        'anonim',
        'pay',
        'pray',
        // 'snap_token',
        'status'
    ];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getAmountAttribute($value)
    {
        return str_replace(',','.', number_format(($value)));
    }

    public function scopeAmount($query)
    {
        return $query->where('status', 'success')->orderByDesc('amount');
    }

    public function scopeSuccess($query)
    {
        return $query->where('status', 'success')->orderByDesc('created_at');
    }

    public function scopeUserId($query)
    {
        return $query->where('user_id', auth()->user()->id); // get transaction user login
    }

    public function scopePending($query)
    {
        return $query->where('status', 'pending')->orderByDesc('created_at');
    }

    public function scopeFailed($query)
    {
        return $query->where('status', 'failed')->orderByDesc('created_at');
    }

    public function scopeExpired($query)
    {
        return $query->where('status', 'expired')->orderByDesc('created_at');
    }

    public function scopeCollect($query)
    {
        return $query->sum('amount');
    }
}
