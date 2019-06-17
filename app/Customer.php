<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    public function debts()
    {
        return $this->hasMany(Debt::class, 'customer_id');
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'customer_id');
    }
}
