<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('shift_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees', 'employee_id');
            $table->string('comment');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('shift_applications');
    }
};
