<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// ✅ استيراد الموديلات المستخدمة في العلاقات
use App\Models\User;
use App\Models\Appointement;

class Children extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function appointements()
    {
        return $this->hasMany(Appointement::class, 'child_id');
    }
}