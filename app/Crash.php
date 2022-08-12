<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crash extends Model 
{
    protected $table = 'crash';

    protected $fillable = ['multiplier', 'profit', 'hash', 'status'];
}