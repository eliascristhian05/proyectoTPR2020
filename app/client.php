<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    protected $table = 'client';

    //relacion uno a muchos
    public function bill(){

        return this->hasMany('App\bill');
    }
]