<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShiftApplication extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'employee_id',
        'comment',
    ];
    
    //リレーション
    public function employee()   
    {
        return $this->belongsTo(Employee::class);
    }
    
    public function shiftAccept()   
    {
        return $this->hasOne(ShiftAccept::class);
    }
    
    public function shiftPatterns()   
    {
        return $this->hasMany(ShiftPattern::class);
    }
}
