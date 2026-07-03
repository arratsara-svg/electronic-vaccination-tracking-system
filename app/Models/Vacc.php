<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// ✅ إضافة هذا السطر لتعريف Appointement
use App\Models\Appointement;

class Vacc extends Model
{
    use HasFactory;

    public function appointements()
    {
        return $this->hasMany(Appointement::class, 'vacc_id');
    }
}