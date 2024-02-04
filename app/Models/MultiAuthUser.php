<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultiAuthUser extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
    ];
    
     //リレーション
    public function admins()   
    {
        return $this->hasMany(Admin::class);
    }
    
    public function employees()   
    {
        return $this->hasMany(Employee::class);
    }
}
