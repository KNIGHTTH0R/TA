<?php

namespace App\Models\Transaction;

use App\Models\User\User;
use App\Models\Campaign\Campaign;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction\TransactionScope;
use App\Models\Transaction\TransactionAccessor;
use App\Models\Transaction\TransactionRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;
    use TransactionScope;
    use TransactionAccessor;
    use TransactionRelationship;

    protected $fillable = [
        'invoice',
        'campaign_id',
        'user_id',
        'amount',
        'anonim',
        'pay',
        'pray',
        'snap_token',
        'status'
    ];
}
