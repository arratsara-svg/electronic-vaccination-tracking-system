<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('appointements', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('doctor')->nullable();
            $table->string('date')->nullable();
            $table->string('message')->nullable();
            $table->string('status')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('doctor_id')->nullable();
            $table->unsignedBigInteger('children_id')->nullable();
            $table->unsignedBigInteger('vacc_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('set null');
            $table->foreign('children_id')->references('id')->on('childrens')->onDelete('set null');
            $table->foreign('vacc_id')->references('id')->on('vaccs')->onDelete('set null');

            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('appointements');
    }
};