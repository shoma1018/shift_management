<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    use HasFactory;
    
    
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
