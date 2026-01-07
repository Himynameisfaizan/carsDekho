<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car_lead extends Model
{
    protected $fillable = ['name', 'phone', 'email', 'address'];
    public function preferences()
    {
        return $this->hasMany(Car_preference::class, 'car_lead_id');
    }
}
