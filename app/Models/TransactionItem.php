<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    //relationship
	public function transaction()
	{
		return $this->belongsTo('App\Models\Transaction');
	}

	public function menu()
	{
		return $this->belongsTo('App\Models\Menu');
	}
}
