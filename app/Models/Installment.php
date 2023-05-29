<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Installment extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'token_id',
        'emi_amount',
    ];

}
