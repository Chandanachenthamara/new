<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Newcustomer extends Authenticatable
{
    protected $table = 'customer';
    public $timestamps = false;
    protected $guarded = [];

}
