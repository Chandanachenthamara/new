<?php

namespace App\Models;
use App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'phone_number',
        'email',
    ];

}
