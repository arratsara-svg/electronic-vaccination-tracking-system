<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('speciality')->nullable();
            $table->string('room')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('health_centers_id')->nullable(); // مركز صحي
            $table->foreign('health_centers_id')->references('id')->on('health_centers')->onDelete('set null');

            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};