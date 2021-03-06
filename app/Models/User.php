<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'province_id',
        'districts_city_id',
        'order_province',
        'order_city',
        'role_id',
        'profile_photo_path',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function  training()
    {
        return $this->hasMany(Training::class, 'user_id');
    }

    public function skpd()
    {
        return $this->hasOne(Skpd::class, 'user_id', 'id');
    }

    public function budged_performance()
    {
        return $this->hasOne(BudgedPerformance::class, 'user_id');
    }

    public function  companion()
    {
        return $this->hasOne(Companion::class, 'user_id');
    }

    public function companion_parent()
    {
        return $this->hasMany(Companion::class, 'parent_user_id');
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }

    public function districts_city()
    {
        return $this->belongsTo(DistrictsCity::class, 'districts_city_id');
    }
}
