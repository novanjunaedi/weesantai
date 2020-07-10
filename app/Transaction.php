<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['name', 'email', 'payment', 'destination_name', 'price', 'buy_date', 'valid_until'];


}
