<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Student;


class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'total',
        'installment1',
        'slip1_photo',
        'paid_unpaid1',
        'installment2',
        'slip2_photo',
        'paid_unpaid2',
        
       
    ];

    public function user(){
        
        return $this->belongsTo('App\Models\User');
    }
}

