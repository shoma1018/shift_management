<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absence_accepts extends Model
{
    use HasFactory;
    
    
    //リレーション
    public function absenceApplication()   
    {
        return $this->belongsTo(AbsenceApplication::class);
    }
    
}
