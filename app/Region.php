<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    public function cities(){
        return $this->hasMany(City::class);
    }
}
