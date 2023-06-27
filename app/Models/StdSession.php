<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StdSession extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'id',
        'date',
        'time',
        'attendance',
    ];
    
    public function user(){
        
        return $this->belongsTo(User::class);
    }
}
