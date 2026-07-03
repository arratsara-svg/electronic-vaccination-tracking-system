<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// ✅ تعريف الكلاسات المرتبطة
use App\Models\User;
use App\Models\Doctor;
use App\Models\Children;
use App\Models\Vacc;

class Appointement extends Model
{
    use HasFactory;

    protected $table = 'appointements';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    public function child()
    {
        return $this->belongsTo(Children::class, 'child_id');
    }

    public function vacc()
    {
        return $this->belongsTo(Vacc::class, 'vacc_id');
    }
}
