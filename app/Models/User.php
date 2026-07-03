<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Childrens;
use App\Models\Appointement;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'password',
    ];

   
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

   
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

   
    protected $appends = [
        'profile_photo_url',
    ];
        // علاقة المستخدم بالأطفال
    public function childrens()
{
    return $this->hasMany(Children::class, 'users_id'); // ✅ صحيح
}


    // علاقة المستخدم بالحجوزات
    public function appointements()
    {
        return $this->hasMany(Appointement::class, 'users_id');
    }

}