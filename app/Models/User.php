<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use App\Models\examResult;
use App\Models\Student;
use App\Models\Payment;
use App\Models\Event;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
       
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function roles(){
    //     return $this->belongsTo('App\Models\Role');
    // }

    public function student(){
        return $this->hasOne('App\Models\Student');
    }

    public function examResult(){
        return $this->hasOne(examResult::class);
    }
    
    public function payment(){
        return $this->hasOne(Payment::class);
    }

    public function event(){
        return $this->hasOne(Event::class);
    }
   
    public function stdSession(){
        return $this->hasMany(StdSession::class);
    }
}
