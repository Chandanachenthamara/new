<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Eloquent;

class Visits extends Authenticatable
{
    protected $table = 'visits';
    public $timestamps = false;
protected $guarded = [];



   
}

