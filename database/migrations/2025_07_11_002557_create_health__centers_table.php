<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('health_centers', function (Blueprint $table) {
            $table->id();
                $table->string('name');      // اسم المركز
            $table->string('address');   // عنوان المركز
            $table->string('phone');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('health_centers');
    }
};