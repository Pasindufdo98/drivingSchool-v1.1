<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'nic',
        'contact',
        'address',
        'bloodGroup',
        'classA',
        'classA_transmission',
        'classB',
        'classB_transmission',
        'classB1',
        'classCE',

        
       
        
    ];

    public function user(){
        
        return $this->belongsTo('App\Models\User');
    }
}
