<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class bookings extends Model
{
    protected $table='bookings';
    
    public function User(){
        return $this->belongsTo('App\User');
    }
}
