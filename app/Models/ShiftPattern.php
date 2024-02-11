<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShiftPattern extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    
    protected $fillable = [
        'id',
        'shift_application_id',
        'day',
        'start_time',
        'end_time',
    ];
    
    //リレーション
    public function shiftApplication()   
    {
        return $this->belongsTo(ShiftApplication::class);
    }
}
