<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShiftAccept extends Model
{
    use HasFactory;
    
    
    //リレーション
    public function shiftApplication()   
    {
        return $this->belongsTo(ShiftApplication::class);
    }
}
