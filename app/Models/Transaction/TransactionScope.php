<?php

namespace App\Models\Transaction;

trait TransactionScope
{
    public function scopeAmount($query)
    {
        return $query->where('status', 'success')->orderByDesc('amount');
    }

    public function scopeUserId($query)
    {
        return $query->where('user_id', auth()->user()->id); // get transaction user login
    }

    public function scopeSuccess($query)
    {
        return $query->where('status', 'success')->orderByDesc('created_at');
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
