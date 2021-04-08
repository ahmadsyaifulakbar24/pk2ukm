<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
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
        'province',
        'districts_city_id',

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
    
    use HasFactory;
}
