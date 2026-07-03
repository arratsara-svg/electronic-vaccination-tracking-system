<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('childrens', function (Blueprint $table) {
            $table->id();
            $table->string('namechild')->nullable();
            $table->integer('birthchild')->nullable();
            $table->string('addresschild')->nullable();
            $table->string('father');
            $table->string('mother');
            $table->string('vaccchild');
            $table->date('datechild');
            $table->string('healthcenter')->nullable();
            $table->date('nextvisit');
            $table->unsignedBigInteger('users_id')->nullable(); // ربط الطفل بالمستخدم
            $table->foreign('users_id')->references('id')->on('users')->onDelete('set null');

            $table->timestamps(); 
        });
    }

 
    public function down(): void
    {
        Schema::dropIfExists('childrens');
    }
};