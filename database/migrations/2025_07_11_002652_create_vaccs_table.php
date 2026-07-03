<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('vaccs', function (Blueprint $table) {
            $table->id();
            $table->string('name_vacc'); // اسم اللقاح
            $table->text('type_vacc')->nullable(); // نوع اللقاح
            $table->timestamps();

        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('vaccs');
    }
};