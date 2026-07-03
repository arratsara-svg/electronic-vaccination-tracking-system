<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// ✅ تعريف الموديلات المرتبطة
use App\Models\Appointement;
use App\Models\HealthCenter;

class Doctor extends Model
{
    use HasFactory;

    public function appointements()
    {
        return $this->hasMany(Appointement::class, 'doctor_id');
    }

    public function healthcenter()
    {
        return $this->belongsTo(HealthCenter::class, 'health_centers_id');
    }
}