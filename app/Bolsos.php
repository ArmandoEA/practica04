<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bolsos extends Model
{
    protected $fillable = ['name', 'description', 'price', 'photo'];
}
