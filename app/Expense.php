<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = ['user_id','expenses_type_id','received_amount','paid_amount','payment_date','notes'];


     /**
     * Get the  Expense user .
     */
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }


    

    /**
     * Get the  Expense type  .
     */
    public function expenseType()
    {
        return $this->belongsTo('App\ExpensesType','expenses_type_id');
    }

}
