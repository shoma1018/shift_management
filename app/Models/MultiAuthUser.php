<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class multi_auth_user extends Model
{
    use HasFactory;
    
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
