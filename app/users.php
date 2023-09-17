<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    public function cart(){
        return $this->hasMany(cart::class);
    }

    public function transaction(){
        return $this->hasMany(transaction::class);
    }

    protected $table = 'users';
}
