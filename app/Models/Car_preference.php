<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car_preference extends Model
{
    protected $fillable = ['customer_name', 'selected_options'];
}
