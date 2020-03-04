<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\landlords;
class Room extends Model
{
    protected $table='rooms';
    

    public function landlord(){
        return $this->belongsTo('App\landlords');
    }
}
