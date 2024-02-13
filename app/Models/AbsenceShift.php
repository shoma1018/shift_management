<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsenceShift extends Model
{
     use HasFactory;
    
    public $timestamps = false;
    
    protected $fillable = [
        'id',
        'absence_application_id',
        'date',
        'start_time',
        'end_time',
        'substitute',
        'reason',
    ];
    
    //リレーション
    public function absenceApplication()   
    {
        return $this->belongsTo(AbsenceApplication::class);
    }
}
