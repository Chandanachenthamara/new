<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'amount',       
        'fk_customer_id', 
        'paymnet_date',      
    ];


    public function purchase(){
        return $this->hasOne('App\Models\Purchase', 'id', 'fk_purchase_id');
    }

   
}
