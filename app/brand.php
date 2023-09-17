<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    public function car(){
        return $this->hasMany(car::class);
    }
    protected $table = 'brans';
}
