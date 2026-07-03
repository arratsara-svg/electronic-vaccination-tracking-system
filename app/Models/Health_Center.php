<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// ✅ إضافة التعريف بالموديل المرتبط
use App\Models\Doctor;

class HealthCenter extends Model
{
    use HasFactory;

    public function doctors()
    {
        return $this->hasMany(Doctor::class, 'healthcenter_id');
    }
}