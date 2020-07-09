<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = ['destination_name', 'location', 'address', 'price', 'description', 'rating', 'img'];
}
