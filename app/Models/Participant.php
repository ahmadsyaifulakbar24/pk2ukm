<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Participant extends Model
{
    use HasFactory;

    protected $table = 'participants';
    protected $fillable = [
        'training_id',

        // general data participant
        'name',
        'gender',
        'religion_id',
        'id_number',
        'place_birth',
        'date_birth',
        'education_id',
        'phone_number', 
        'email',
        'province_id',
        'districts_city_id',
        'profile_photo',

        // participant status
        'business_status_id',

        // Data UMKMM
        'name_umkm', 
        'address_umkm',
        'business_sector_id',
        'date_establieshment_umkm', 
        'no_iumk',
        'position_umkm_id',
        'business_turnover',
        'number_employees',

        // data koperasi
        'name_koperasi',
        'address_koperasi',
        'type_koperasi_id',
        'date_establishment_koperasi',
        'registrasion_number_koperasi',
        'position_koperasi_id',
    ]; 


    protected $appends = [
        'profile_photo_url'
    ];

    public function getProfilePhotoUrlAttribute()
    {
        return url('') . Storage::url($this->attributes['profile_photo']);
    }

    public function training ()
    {
        return $this->belongsTo(Training::class, 'training_id');
    }

    public function monitoring()
    {
        return $this->hasOne(Monitoring::class, 'participant_id');
    }
    public function religion()
    {
        return $this->belongsTo(Param::class, 'religion_id');
    }

    public function education()
    {
        return $this->belongsTo(Param::class, 'education_id');
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }

    public function districts_city()
    {
        return $this->belongsTo(DistrictsCity::class, 'districts_city_id');
    }

    public function business_status()
    {
        return $this->belongsTo(Param::class, 'business_status_id');
    }

    public function type_koperasi()
    {
        return $this->belongsTo(Param::class, 'type_koperasi_id');
    }

    public function position_koperasi()
    {
        return $this->belongsTo(Param::class, 'position_koperasi_id');
    }

    public function business_sector()
    {
        return $this->belongsTo(Param::class, 'business_sector_id');
    }

    public function position_umkm()
    {
        return $this->belongsTo(Param::class, 'position_umkm_id');
    }
}
