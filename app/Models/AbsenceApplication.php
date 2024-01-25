<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absence_applications extends Model
{
    use HasFactory;
    
    
    //リレーション
    public function employee()   
    {
        return $this->belongsTo(Employee::class);
    }
    
    public function absenceAccept()   
    {
        return $this->hasOne(AbsenceAccept::class);
    }
    
    public function absenceShift()   
    {
        return $this->hasOne(AbsenceShift::class);
    }
}
