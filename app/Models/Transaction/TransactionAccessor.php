<?php

namespace App\Models\Transaction;

trait TransactionAccessor
{
    public function getAmountAttribute($value)
    {
        return str_replace(',','.', number_format(($value)));
    }
}
