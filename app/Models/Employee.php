<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Employee extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable;
    protected $primarykey = 'employee_id';
    protected $fillable = [
        'employee_id',
        'name',
        'email',
        'password',
        'genders',
        'birthdays',
        'date_of_joining_company',
        'employment_status',
        'multi_auth_user_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
    //リレーション
    public function multiAuthUser()   
    {
        return $this->belongsTo(MultiAuthUser::class);
    }
    
    public function shiftApplications()   
    {
        return $this->hasMany(ShiftApplication::class);
    }
    
    public function absenceApplications()   
    {
        return $this->hasMany(AbsenceApplication::class);
    }
}

