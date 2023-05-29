<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'fk_cus_id',
        'description',
        'email',
        'pay_mode',
        'pay_type',
        'token',
        'date_reg',
        'token_string',
        'total_amount'
    ];

    public function tokens(){
        return $this->hasOne('App\Models\Token', 'id', 'token');
    }

    public function payments(){
        return $this->hasMany('App\Models\Payment', 'fk_purchase_id', 'id');
    }

    public function customer(){
        return $this->hasOne('App\Models\Customer', 'id', 'fk_cus_id');
    }

    public function getSumAttribute(){
        return $this->payments()->sum('amount');
    }

    public function installments(){
        return $this->hasMany('App\Models\Installment', 'token_id', 'token');
    }
}
