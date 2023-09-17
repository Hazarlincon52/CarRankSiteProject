<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    public function users(){
        return $this->belongsTo(users::class);
    }

    public function car(){
        return $this->belongsTo(car::class);
    }
    
    protected $table = 'carts';
}
