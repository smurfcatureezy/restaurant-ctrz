<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //relationship
    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }

    public function transaction_items()
    {
    	return $this->hasMany('App\Models\TransactionItem');
    }
}
