<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    public function brand(){
        return $this->belongsTo(brand::class);
    }

    public function cart(){
        return $this->hasMany(cart::class);
    }

    public function transaction(){
        return $this->hasMany(transaction::class);
    }
    protected $table = 'cars';
}
