<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ahmad Syaiful AKbar',
            'username' => 'syaiful',
            'password' => Hash::make('12345678'),
            'role_id' => 1,
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Aceh',
            'username' => 'prov_aceh',
            'province_id' => 11,
            'districts_city_id' => NULL,
            'order_province' => 1,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'name' => 'Kab. Bener Meriah',
            'username' => 'din_kabbenermeriah',
            'province_id' => 11,
            'districts_city_id' => 1117,
            'order_province' => 1,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 4,
            'name' => 'Kab. Pidie Jaya',
            'username' => 'din_kabpidiejaya',
            'province_id' => 11,
            'districts_city_id' => 1118,
            'order_province' => 1,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 5,
            'name' => 'Kota Banda Aceh',
            'username' => 'din_kotabandaaceh',
            'province_id' => 11,
            'districts_city_id' => 1171,
            'order_province' => 1,
            'order_city' => 4,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 6,
            'name' => 'Kota Langsa',
            'username' => 'din_kotalangsa',
            'province_id' => 11,
            'districts_city_id' => 1173,
            'order_province' => 1,
            'order_city' => 5,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 7,
            'name' => 'Kota Lhokseumawe',
            'username' => 'din_kotalhokseumawe',
            'province_id' => 11,
            'districts_city_id' => 1174,
            'order_province' => 1,
            'order_city' => 6,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 8,
            'name' => 'Kota Sabang',
            'username' => 'din_kotasabang',
            'province_id' => 11,
            'districts_city_id' => 1172,
            'order_province' => 1,
            'order_city' => 7,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 9,
            'name' => 'Bali',
            'username' => 'prov_bali',
            'province_id' => 51,
            'districts_city_id' => NULL,
            'order_province' => 2,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 10,
            'name' => 'Kab. Badung',
            'username' => 'din_kabbadung',
            'province_id' => 51,
            'districts_city_id' => 5103,
            'order_province' => 2,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 11,
            'name' => 'Kab. Bangli',
            'username' => 'din_kabbangli',
            'province_id' => 51,
            'districts_city_id' => 5106,
            'order_province' => 2,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 12,
            'name' => 'Kab. Buleleng',
            'username' => 'din_kabbuleleng',
            'province_id' => 51,
            'districts_city_id' => 5108,
            'order_province' => 2,
            'order_city' => 4,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 13,
            'name' => 'Kab. Gianyar',
            'username' => 'din_kabgianyar',
            'province_id' => 51,
            'districts_city_id' => 5104,
            'order_province' => 2,
            'order_city' => 5,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 14,
            'name' => 'Kab. Karangasem',
            'username' => 'din_kabkarangasem',
            'province_id' => 51,
            'districts_city_id' => 5107,
            'order_province' => 2,
            'order_city' => 6,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 15,
            'name' => 'Kab. Klungkung',
            'username' => 'din_kabklungkung',
            'province_id' => 51,
            'districts_city_id' => 5105,
            'order_province' => 2,
            'order_city' => 7,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 16,
            'name' => 'Kab. Tabanan',
            'username' => 'din_kabtabanan',
            'province_id' => 51,
            'districts_city_id' => 5102,
            'order_province' => 2,
            'order_city' => 8,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 17,
            'name' => 'Kota Denpasar',
            'username' => 'din_kotadenpasar',
            'province_id' => 51,
            'districts_city_id' => 5171,
            'order_province' => 2,
            'order_city' => 9,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 18,
            'name' => 'Banten',
            'username' => 'prov_banten',
            'province_id' => 36,
            'districts_city_id' => NULL,
            'order_province' => 3,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 19,
            'name' => 'Kab. Lebak',
            'username' => 'din_kablebak',
            'province_id' => 36,
            'districts_city_id' => 3602,
            'order_province' => 3,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 20,
            'name' => 'Kab. Pandeglang',
            'username' => 'din_kabpandeglang',
            'province_id' => 36,
            'districts_city_id' => 3601,
            'order_province' => 3,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 21,
            'name' => 'Kab. Serang',
            'username' => 'din_kabserang',
            'province_id' => 36,
            'districts_city_id' => 3604,
            'order_province' => 3,
            'order_city' => 4,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 22,
            'name' => 'Kab. Tangerang',
            'username' => 'din_kabtangerang',
            'province_id' => 36,
            'districts_city_id' => 3603,
            'order_province' => 3,
            'order_city' => 5,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 23,
            'name' => 'Kota Cilegon',
            'username' => 'din_kotacilegon',
            'province_id' => 36,
            'districts_city_id' => 3672,
            'order_province' => 3,
            'order_city' => 6,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 24,
            'name' => 'Kota Tangerang',
            'username' => 'din_kotatangerang',
            'province_id' => 36,
            'districts_city_id' => 3671,
            'order_province' => 3,
            'order_city' => 7,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 25,
            'name' => 'Kota Tangerang Selatan',
            'username' => 'din_kotatangerangselatan',
            'province_id' => 36,
            'districts_city_id' => 3674,
            'order_province' => 3,
            'order_city' => 8,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 26,
            'name' => 'Bengkulu',
            'username' => 'prov_bengkulu',
            'province_id' => 17,
            'districts_city_id' => NULL,
            'order_province' => 4,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 27,
            'name' => 'Kab. Bengkulu Selatan',
            'username' => 'din_kabbengkuluselatan',
            'province_id' => 17,
            'districts_city_id' => 1701,
            'order_province' => 4,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 28,
            'name' => 'Kab. Bengkulu Utara',
            'username' => 'din_kabbengkuluutara',
            'province_id' => 17,
            'districts_city_id' => 1703,
            'order_province' => 4,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 29,
            'name' => 'Kab. Muko-muko',
            'username' => 'din_kabmuko-muko',
            'province_id' => 17,
            'districts_city_id' => 1706,
            'order_province' => 4,
            'order_city' => 4,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 30,
            'name' => 'Kab. Rejang Lebong',
            'username' => 'din_kabrejanglebong',
            'province_id' => 17,
            'districts_city_id' => 1702,
            'order_province' => 4,
            'order_city' => 5,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 31,
            'name' => 'Kota Bengkulu',
            'username' => 'din_kotabengkulu',
            'province_id' => 17,
            'districts_city_id' => 1771,
            'order_province' => 4,
            'order_city' => 6,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 32,
            'name' => 'D.I. Yogyakarta',
            'username' => 'prov_yogyakarta',
            'province_id' => 34,
            'districts_city_id' => NULL,
            'order_province' => 5,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 33,
            'name' => 'Kab. Bantul',
            'username' => 'din_kabbantul',
            'province_id' => 34,
            'districts_city_id' => 3402,
            'order_province' => 5,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 34,
            'name' => 'Kab. Gunung Kidul',
            'username' => 'din_kabgunungkidul',
            'province_id' => 34,
            'districts_city_id' => 3403,
            'order_province' => 5,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 35,
            'name' => 'Kab. Kulon Progo',
            'username' => 'din_kabkulonprogo',
            'province_id' => 34,
            'districts_city_id' => 3401,
            'order_province' => 5,
            'order_city' => 4,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 36,
            'name' => 'Kab. Sleman',
            'username' => 'din_kabsleman',
            'province_id' => 34,
            'districts_city_id' => 3404,
            'order_province' => 5,
            'order_city' => 5,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 37,
            'name' => 'Kota Yogyakarta',
            'username' => 'din_kotayogyakarta',
            'province_id' => 34,
            'districts_city_id' => 3471,
            'order_province' => 5,
            'order_city' => 6,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 38,
            'name' => 'DKI Jakarta',
            'username' => 'prov_dkijakarta',
            'province_id' => 31,
            'districts_city_id' => NULL,
            'order_province' => 6,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 39,
            'name' => 'Gorontalo',
            'username' => 'prov_gorontalo',
            'province_id' => 75,
            'districts_city_id' => NULL,
            'order_province' => 7,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 40,
            'name' => 'Kab. Gorontalo',
            'username' => 'din_kabgorontalo',
            'province_id' => 75,
            'districts_city_id' => 7502,
            'order_province' => 7,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 41,
            'name' => 'Kota Gorontalo',
            'username' => 'din_kotagorontalo',
            'province_id' => 75,
            'districts_city_id' => 7571,
            'order_province' => 7,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 42,
            'name' => 'Jambi',
            'username' => 'prov_jambi',
            'province_id' => 15,
            'districts_city_id' => NULL,
            'order_province' => 8,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 43,
            'name' => 'Kab. Bungo',
            'username' => 'din_kabbungo',
            'province_id' => 15,
            'districts_city_id' => 1509,
            'order_province' => 8,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 44,
            'name' => 'Kab. Tanjung Jabung Barat',
            'username' => 'din_kabtanjungjabungbarat',
            'province_id' => 15,
            'districts_city_id' => 1507,
            'order_province' => 8,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 45,
            'name' => 'Kota Jambi',
            'username' => 'din_kotajambi',
            'province_id' => 15,
            'districts_city_id' => 1571,
            'order_province' => 8,
            'order_city' => 4,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 46,
            'name' => 'Kota Sungai Penuh',
            'username' => 'din_kotasungaipenuh',
            'province_id' => 15,
            'districts_city_id' => 1572,
            'order_province' => 8,
            'order_city' => 5,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 47,
            'name' => 'Jawa Barat',
            'username' => 'prov_jawabarat',
            'province_id' => 32,
            'districts_city_id' => NULL,
            'order_province' => 9,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 48,
            'name' => 'Kab. Bandung Barat',
            'username' => 'din_kabbandungbarat',
            'province_id' => 32,
            'districts_city_id' => 3217,
            'order_province' => 9,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 49,
            'name' => 'Kab. Bogor',
            'username' => 'din_kabbogor',
            'province_id' => 32,
            'districts_city_id' => 3201,
            'order_province' => 9,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 50,
            'name' => 'Kab. Garut',
            'username' => 'din_kabgarut',
            'province_id' => 32,
            'districts_city_id' => 3205,
            'order_province' => 9,
            'order_city' => 4,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 51,
            'name' => 'Kab. Karawang',
            'username' => 'din_kabkarawang',
            'province_id' => 32,
            'districts_city_id' => 3215,
            'order_province' => 9,
            'order_city' => 5,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 52,
            'name' => 'Kab. Kuningan',
            'username' => 'din_kabkuningan',
            'province_id' => 32,
            'districts_city_id' => 3208,
            'order_province' => 9,
            'order_city' => 6,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 53,
            'name' => 'Kab. Purwakarta',
            'username' => 'din_kabpurwakarta',
            'province_id' => 32,
            'districts_city_id' => 3214,
            'order_province' => 9,
            'order_city' => 7,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 54,
            'name' => 'Kab. Sumedang',
            'username' => 'din_kabsumedang',
            'province_id' => 32,
            'districts_city_id' => 3211,
            'order_province' => 9,
            'order_city' => 8,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 55,
            'name' => 'Kab. Tasikmalaya',
            'username' => 'din_kabtasikmalaya',
            'province_id' => 32,
            'districts_city_id' => 3206,
            'order_province' => 9,
            'order_city' => 9,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 56,
            'name' => 'Kota Bandung',
            'username' => 'din_kotabandung',
            'province_id' => 32,
            'districts_city_id' => 3273,
            'order_province' => 9,
            'order_city' => 10,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 57,
            'name' => 'Kota Banjar',
            'username' => 'din_kotabanjar',
            'province_id' => 32,
            'districts_city_id' => 3279,
            'order_province' => 9,
            'order_city' => 11,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 58,
            'name' => 'Kota Bekasi',
            'username' => 'din_kotabekasi',
            'province_id' => 32,
            'districts_city_id' => 3275,
            'order_province' => 9,
            'order_city' => 12,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 59,
            'name' => 'Kota Cimahi',
            'username' => 'din_kotacimahi',
            'province_id' => 32,
            'districts_city_id' => 3277,
            'order_province' => 9,
            'order_city' => 13,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 60,
            'name' => 'Kota Cirebon',
            'username' => 'din_kotacirebon',
            'province_id' => 32,
            'districts_city_id' => 3209,
            'order_province' => 9,
            'order_city' => 14,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 61,
            'name' => 'Kota Depok',
            'username' => 'din_kotadepok',
            'province_id' => 32,
            'districts_city_id' => 3276,
            'order_province' => 9,
            'order_city' => 15,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 62,
            'name' => 'Kota Sukabumi',
            'username' => 'din_kotasukabumi',
            'province_id' => 32,
            'districts_city_id' => 3202,
            'order_province' => 9,
            'order_city' => 16,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 63,
            'name' => 'Kota Tasikmalaya',
            'username' => 'din_kotatasikmalaya',
            'province_id' => 32,
            'districts_city_id' => 3206,
            'order_province' => 9,
            'order_city' => 17,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 64,
            'name' => 'Jawa Tengah',
            'username' => 'prov_jawatengah',
            'province_id' => 33,
            'districts_city_id' => NULL,
            'order_province' => 10,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 65,
            'name' => 'Kab. Batang',
            'username' => 'din_kabbatang',
            'province_id' => 33,
            'districts_city_id' => 3325,
            'order_province' => 10,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 66,
            'name' => 'Kab. Blora',
            'username' => 'din_kabblora',
            'province_id' => 33,
            'districts_city_id' => 3316,
            'order_province' => 10,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 67,
            'name' => 'Kab. Boyolali',
            'username' => 'din_kabboyolali',
            'province_id' => 33,
            'districts_city_id' => 3309,
            'order_province' => 10,
            'order_city' => 4,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 68,
            'name' => 'Kab. Cilacap',
            'username' => 'din_kabcilacap',
            'province_id' => 33,
            'districts_city_id' => 3301,
            'order_province' => 10,
            'order_city' => 5,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 69,
            'name' => 'Kab. Jepara',
            'username' => 'din_kabjepara',
            'province_id' => 33,
            'districts_city_id' => 3320,
            'order_province' => 10,
            'order_city' => 6,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 70,
            'name' => 'Kab. Kebumen',
            'username' => 'din_kabkebumen',
            'province_id' => 33,
            'districts_city_id' => 3305,
            'order_province' => 10,
            'order_city' => 7,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 71,
            'name' => 'Kab. Kendal',
            'username' => 'din_kabkendal',
            'province_id' => 33,
            'districts_city_id' => 3324,
            'order_province' => 10,
            'order_city' => 8,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 72,
            'name' => 'Kab. Klaten',
            'username' => 'din_kabklaten',
            'province_id' => 33,
            'districts_city_id' => 3310,
            'order_province' => 10,
            'order_city' => 9,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 73,
            'name' => 'Kab. Kudus',
            'username' => 'din_kabkudus',
            'province_id' => 33,
            'districts_city_id' => 3319,
            'order_province' => 10,
            'order_city' => 10,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 74,
            'name' => 'Kab. Magelang',
            'username' => 'din_kabmagelang',
            'province_id' => 33,
            'districts_city_id' => 3371,
            'order_province' => 10,
            'order_city' => 11,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 75,
            'name' => 'Kab. Pati',
            'username' => 'din_kabpati',
            'province_id' => 33,
            'districts_city_id' => 3318,
            'order_province' => 10,
            'order_city' => 12,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 76,
            'name' => 'Kab. Pekalongan',
            'username' => 'din_kabpekalongan',
            'province_id' => 33,
            'districts_city_id' => 3326,
            'order_province' => 10,
            'order_city' => 13,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 77,
            'name' => 'Kab. Purbalingga',
            'username' => 'din_kabpurbalingga',
            'province_id' => 33,
            'districts_city_id' => 3303,
            'order_province' => 10,
            'order_city' => 14,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 78,
            'name' => 'Kab. Purworejo',
            'username' => 'din_kabpurworejo',
            'province_id' => 33,
            'districts_city_id' => 3306,
            'order_province' => 10,
            'order_city' => 15,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 79,
            'name' => 'Kab. Rembang',
            'username' => 'din_kabrembang',
            'province_id' => 33,
            'districts_city_id' => 3317,
            'order_province' => 10,
            'order_city' => 16,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 80,
            'name' => 'Kab. Semarang',
            'username' => 'din_kabsemarang',
            'province_id' => 33,
            'districts_city_id' => 3322,
            'order_province' => 10,
            'order_city' => 17,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 81,
            'name' => 'Kab. Sragen',
            'username' => 'din_kabsragen',
            'province_id' => 33,
            'districts_city_id' => 3314,
            'order_province' => 10,
            'order_city' => 18,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 82,
            'name' => 'Kab. Sukoharjo',
            'username' => 'din_kabsukoharjo',
            'province_id' => 33,
            'districts_city_id' => 3311,
            'order_province' => 10,
            'order_city' => 19,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 83,
            'name' => 'Kab. Tegal',
            'username' => 'din_kabtegal',
            'province_id' => 33,
            'districts_city_id' => 3328,
            'order_province' => 10,
            'order_city' => 20,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 84,
            'name' => 'Kab. Wonogiri',
            'username' => 'din_kabwonogiri',
            'province_id' => 33,
            'districts_city_id' => 3312,
            'order_province' => 10,
            'order_city' => 21,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 85,
            'name' => 'Kab. Wonosobo',
            'username' => 'din_kabwonosobo',
            'province_id' => 33,
            'districts_city_id' => 3307,
            'order_province' => 10,
            'order_city' => 22,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 86,
            'name' => 'Kota Magelang',
            'username' => 'din_kotamagelang',
            'province_id' => 33,
            'districts_city_id' => 3317,
            'order_province' => 10,
            'order_city' => 23,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 87,
            'name' => 'Kota Pekalongan',
            'username' => 'din_kotapekalongan',
            'province_id' => 33,
            'districts_city_id' => 3375,
            'order_province' => 10,
            'order_city' => 24,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 88,
            'name' => 'Kota Salatiga',
            'username' => 'din_kotasalatiga',
            'province_id' => 33,
            'districts_city_id' => 3373,
            'order_province' => 10,
            'order_city' => 25,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 89,
            'name' => 'Kota Semarang',
            'username' => 'din_kotasemarang',
            'province_id' => 33,
            'districts_city_id' => 3374,
            'order_province' => 10,
            'order_city' => 26,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 90,
            'name' => 'Kota Surakarta',
            'username' => 'din_kotasurakarta',
            'province_id' => 33,
            'districts_city_id' => 3372,
            'order_province' => 10,
            'order_city' => 27,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 91,
            'name' => 'Kota Tegal',
            'username' => 'din_kotategal',
            'province_id' => 33,
            'districts_city_id' => 3376,
            'order_province' => 10,
            'order_city' => 28,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 92,
            'name' => 'Jawa Timur',
            'username' => 'prov_jawatimur',
            'province_id' => 35,
            'districts_city_id' => NULL,
            'order_province' => 11,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 93,
            'name' => 'Kab. Bangkalan',
            'username' => 'din_kabbangkalan',
            'province_id' => 35,
            'districts_city_id' => 3526,
            'order_province' => 11,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 94,
            'name' => 'Kab. Banyuwangi',
            'username' => 'din_kabbanyuwangi',
            'province_id' => 35,
            'districts_city_id' => 3510,
            'order_province' => 11,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 95,
            'name' => 'Kab. Blitar',
            'username' => 'din_kabblitar',
            'province_id' => 35,
            'districts_city_id' => 3505,
            'order_province' => 11,
            'order_city' => 4,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 96,
            'name' => 'Kab. Bojonegoro',
            'username' => 'din_kabbojonegoro',
            'province_id' => 35,
            'districts_city_id' => 3522,
            'order_province' => 11,
            'order_city' => 5,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 97,
            'name' => 'Kab. Bondowoso',
            'username' => 'din_kabbondowoso',
            'province_id' => 35,
            'districts_city_id' => 3511,
            'order_province' => 11,
            'order_city' => 6,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 98,
            'name' => 'Kab. Gresik',
            'username' => 'din_kabgresik',
            'province_id' => 35,
            'districts_city_id' => 3525,
            'order_province' => 11,
            'order_city' => 7,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 99,
            'name' => 'Kab. Jember',
            'username' => 'din_kabjember',
            'province_id' => 35,
            'districts_city_id' => 3509,
            'order_province' => 11,
            'order_city' => 8,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 100,
            'name' => 'Kab. Jombang',
            'username' => 'din_kabjombang',
            'province_id' => 35,
            'districts_city_id' => 3517,
            'order_province' => 11,
            'order_city' => 9,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 101,
            'name' => 'Kab. Kediri',
            'username' => 'din_kabkediri',
            'province_id' => 35,
            'districts_city_id' => 3506,
            'order_province' => 11,
            'order_city' => 10,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 102,
            'name' => 'Kab. Lamongan',
            'username' => 'din_kablamongan',
            'province_id' => 35,
            'districts_city_id' => 3524,
            'order_province' => 11,
            'order_city' => 11,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 103,
            'name' => 'Kab. Lumajang',
            'username' => 'din_kablumajang',
            'province_id' => 35,
            'districts_city_id' => 3508,
            'order_province' => 11,
            'order_city' => 12,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 104,
            'name' => 'Kab. Madiun',
            'username' => 'din_kabmadiun',
            'province_id' => 35,
            'districts_city_id' => 3519,
            'order_province' => 11,
            'order_city' => 13,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 105,
            'name' => 'Kab. Magetan',
            'username' => 'din_kabmagetan',
            'province_id' => 35,
            'districts_city_id' => 3520,
            'order_province' => 11,
            'order_city' => 14,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 106,
            'name' => 'Kab. Malang',
            'username' => 'din_kabmalang',
            'province_id' => 35,
            'districts_city_id' => 3507,
            'order_province' => 11,
            'order_city' => 15,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 107,
            'name' => 'Kab. Mojokerto',
            'username' => 'din_kabmojokerto',
            'province_id' => 35,
            'districts_city_id' => 3516,
            'order_province' => 11,
            'order_city' => 16,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 108,
            'name' => 'Kab. Nganjuk',
            'username' => 'din_kabnganjuk',
            'province_id' => 35,
            'districts_city_id' => 3518,
            'order_province' => 11,
            'order_city' => 17,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 109,
            'name' => 'Kab. Ngawi',
            'username' => 'din_kabngawi',
            'province_id' => 35,
            'districts_city_id' => 3521,
            'order_province' => 11,
            'order_city' => 18,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 110,
            'name' => 'Kab. Pacitan',
            'username' => 'din_kabpacitan',
            'province_id' => 35,
            'districts_city_id' => 3501,
            'order_province' => 11,
            'order_city' => 19,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 111,
            'name' => 'Kab. Pamekasan',
            'username' => 'din_kabpamekasan',
            'province_id' => 35,
            'districts_city_id' => 3528,
            'order_province' => 11,
            'order_city' => 20,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 112,
            'name' => 'Kab. Pasuruan',
            'username' => 'din_kabpasuruan',
            'province_id' => 35,
            'districts_city_id' => 3575,
            'order_province' => 11,
            'order_city' => 21,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 113,
            'name' => 'Kab. Ponorogo',
            'username' => 'din_kabponorogo',
            'province_id' => 35,
            'districts_city_id' => 3502,
            'order_province' => 11,
            'order_city' => 22,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 114,
            'name' => 'Kab. Probolinggo',
            'username' => 'din_kabprobolinggo',
            'province_id' => 35,
            'districts_city_id' => 3513,
            'order_province' => 11,
            'order_city' => 23,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 115,
            'name' => 'Kab. Sampang',
            'username' => 'din_kabsampang',
            'province_id' => 35,
            'districts_city_id' => 3527,
            'order_province' => 11,
            'order_city' => 24,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 116,
            'name' => 'Kab. Sidoarjo',
            'username' => 'din_kabsidoarjo',
            'province_id' => 35,
            'districts_city_id' => 3515,
            'order_province' => 11,
            'order_city' => 25,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 117,
            'name' => 'Kab. Situbondo',
            'username' => 'din_kabsitubondo',
            'province_id' => 35,
            'districts_city_id' => 3512,
            'order_province' => 11,
            'order_city' => 26,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 118,
            'name' => 'Kab. Sumenep',
            'username' => 'din_kabsumenep',
            'province_id' => 35,
            'districts_city_id' => 3529,
            'order_province' => 11,
            'order_city' => 27,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 119,
            'name' => 'Kab. Trenggalek',
            'username' => 'din_kabtrenggalek',
            'province_id' => 35,
            'districts_city_id' => 3503,
            'order_province' => 11,
            'order_city' => 28,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 120,
            'name' => 'Kab. Tuban',
            'username' => 'din_kabtuban',
            'province_id' => 35,
            'districts_city_id' => 3523,
            'order_province' => 11,
            'order_city' => 29,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 121,
            'name' => 'Kab. Tulungagung',
            'username' => 'din_kabtulungagung',
            'province_id' => 35,
            'districts_city_id' => 3504,
            'order_province' => 11,
            'order_city' => 30,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 122,
            'name' => 'Kota Batu',
            'username' => 'din_kotabatu',
            'province_id' => 35,
            'districts_city_id' => 3579,
            'order_province' => 11,
            'order_city' => 31,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 123,
            'name' => 'Kota Blitar',
            'username' => 'din_kotablitar',
            'province_id' => 35,
            'districts_city_id' => 3572,
            'order_province' => 11,
            'order_city' => 32,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 124,
            'name' => 'Kota Kediri',
            'username' => 'din_kotakediri',
            'province_id' => 35,
            'districts_city_id' => 3571,
            'order_province' => 11,
            'order_city' => 33,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 125,
            'name' => 'Kota Madiun',
            'username' => 'din_kotamadiun',
            'province_id' => 35,
            'districts_city_id' => 3577,
            'order_province' => 11,
            'order_city' => 34,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 126,
            'name' => 'Kota Malang',
            'username' => 'din_kotamalang',
            'province_id' => 35,
            'districts_city_id' => 3573,
            'order_province' => 11,
            'order_city' => 35,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 127,
            'name' => 'Kota Mojokerto',
            'username' => 'din_kotamojokerto',
            'province_id' => 35,
            'districts_city_id' => 3576,
            'order_province' => 11,
            'order_city' => 36,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 128,
            'name' => 'Kota Pasuruan',
            'username' => 'din_kotapasuruan',
            'province_id' => 35,
            'districts_city_id' => 3575,
            'order_province' => 11,
            'order_city' => 37,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 129,
            'name' => 'Kota Probolinggo',
            'username' => 'din_kotaprobolinggo',
            'province_id' => 35,
            'districts_city_id' => 3574,
            'order_province' => 11,
            'order_city' => 38,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 130,
            'name' => 'Kota Surabaya',
            'username' => 'din_kotasurabaya',
            'province_id' => 35,
            'districts_city_id' => 3578,
            'order_province' => 11,
            'order_city' => 39,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 131,
            'name' => 'Kalimantan Barat',
            'username' => 'prov_kalimantanbarat',
            'province_id' => 61,
            'districts_city_id' => NULL,
            'order_province' => 12,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 132,
            'name' => 'Kab. Kapuas Hulu',
            'username' => 'din_kabkapuashulu',
            'province_id' => 61,
            'districts_city_id' => 6108,
            'order_province' => 12,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 133,
            'name' => 'Kab. Ketapang',
            'username' => 'din_kabketapang',
            'province_id' => 61,
            'districts_city_id' => 6106,
            'order_province' => 12,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 134,
            'name' => 'Kab. Sambas',
            'username' => 'din_kabsambas',
            'province_id' => 61,
            'districts_city_id' => 6101,
            'order_province' => 12,
            'order_city' => 4,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 135,
            'name' => 'Kab. Sanggau',
            'username' => 'din_kabsanggau',
            'province_id' => 61,
            'districts_city_id' => 6105,
            'order_province' => 12,
            'order_city' => 5,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 136,
            'name' => 'Kab. Sekadau',
            'username' => 'din_kabsekadau',
            'province_id' => 61,
            'districts_city_id' => 6109,
            'order_province' => 12,
            'order_city' => 6,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 137,
            'name' => 'Kota Pontianak',
            'username' => 'din_kotapontianak',
            'province_id' => 61,
            'districts_city_id' => 6171,
            'order_province' => 12,
            'order_city' => 7,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 138,
            'name' => 'Kota Singkawang',
            'username' => 'din_kotasingkawang',
            'province_id' => 61,
            'districts_city_id' => 6172,
            'order_province' => 12,
            'order_city' => 8,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 139,
            'name' => 'Kalimantan Selatan',
            'username' => 'prov_kalimantanselatan',
            'province_id' => 63,
            'districts_city_id' => NULL,
            'order_province' => 13,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 140,
            'name' => 'Kab. Barito Kuala',
            'username' => 'din_kabbaritokuala',
            'province_id' => 63,
            'districts_city_id' => 6304,
            'order_province' => 13,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 141,
            'name' => 'Kab. Hulu Sungai Tengah',
            'username' => 'din_kabhulusungaitengah',
            'province_id' => 63,
            'districts_city_id' => 6307,
            'order_province' => 13,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 142,
            'name' => 'Kab. Kotabaru',
            'username' => 'din_kabkotabaru',
            'province_id' => 63,
            'districts_city_id' => 6302,
            'order_province' => 13,
            'order_city' => 4,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 143,
            'name' => 'Kab. Tanah Laut',
            'username' => 'din_kabtanahlaut',
            'province_id' => 63,
            'districts_city_id' => 6301,
            'order_province' => 13,
            'order_city' => 5,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 144,
            'name' => 'Kota Banjar Baru',
            'username' => 'din_kotabanjarbaru',
            'province_id' => 63,
            'districts_city_id' => 6372,
            'order_province' => 13,
            'order_city' => 6,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 145,
            'name' => 'Kota Banjarmasin',
            'username' => 'din_kotabanjarmasin',
            'province_id' => 63,
            'districts_city_id' => 6371,
            'order_province' => 13,
            'order_city' => 7,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 146,
            'name' => 'Kalimantan Tengah',
            'username' => 'prov_kalimantantengah',
            'province_id' => 62,
            'districts_city_id' => NULL,
            'order_province' => 14,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 147,
            'name' => 'Kab. Barito Timur',
            'username' => 'din_kabbaritotimur',
            'province_id' => 62,
            'districts_city_id' => 6212,
            'order_province' => 14,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 148,
            'name' => 'Kab. Katingan',
            'username' => 'din_kabkatingan',
            'province_id' => 62,
            'districts_city_id' => 6209,
            'order_province' => 14,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 149,
            'name' => 'Kab. Kotawaringin Barat',
            'username' => 'din_kabkotawaringinbarat',
            'province_id' => 62,
            'districts_city_id' => 6201,
            'order_province' => 14,
            'order_city' => 4,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 150,
            'name' => 'Kab. Kotawaringin Timur',
            'username' => 'din_kabkotawaringintimur',
            'province_id' => 62,
            'districts_city_id' => 6202,
            'order_province' => 14,
            'order_city' => 5,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 151,
            'name' => 'Kota Palangkaraya',
            'username' => 'din_kotapalangkaraya',
            'province_id' => 62,
            'districts_city_id' => 6271,
            'order_province' => 14,
            'order_city' => 6,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 152,
            'name' => 'Kalimantan Timur',
            'username' => 'prov_kalimantantimur',
            'province_id' => 64,
            'districts_city_id' => NULL,
            'order_province' => 15,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 153,
            'name' => 'Kab. Kutai Timur',
            'username' => 'din_kabkutaitimur',
            'province_id' => 64,
            'districts_city_id' => 6404,
            'order_province' => 15,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 154,
            'name' => 'Kab. Paser',
            'username' => 'din_kabpaser',
            'province_id' => 64,
            'districts_city_id' => 6401,
            'order_province' => 15,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 155,
            'name' => 'Kota Balikpapan',
            'username' => 'din_kotabalikpapan',
            'province_id' => 64,
            'districts_city_id' => 6471,
            'order_province' => 15,
            'order_city' => 4,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 156,
            'name' => 'Kota Bontang',
            'username' => 'din_kotabontang',
            'province_id' => 64,
            'districts_city_id' => 6474,
            'order_province' => 15,
            'order_city' => 5,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 157,
            'name' => 'Kota Samarinda',
            'username' => 'din_kotasamarinda',
            'province_id' => 64,
            'districts_city_id' => 6472,
            'order_province' => 15,
            'order_city' => 6,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 158,
            'name' => 'Kalimantan Utara',
            'username' => 'prov_kalimantanutara',
            'province_id' => 65,
            'districts_city_id' => NULL,
            'order_province' => 16,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 159,
            'name' => 'Kab. Bulungan',
            'username' => 'din_kabbulungan',
            'province_id' => 65,
            'districts_city_id' => 6502,
            'order_province' => 16,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 160,
            'name' => 'Kab. Malinau',
            'username' => 'din_kabmalinau',
            'province_id' => 65,
            'districts_city_id' => 6501,
            'order_province' => 16,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 161,
            'name' => 'Kepulauan Bangka Belitung',
            'username' => 'prov_bangkabelitung',
            'province_id' => 19,
            'districts_city_id' => NULL,
            'order_province' => 17,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 162,
            'name' => 'Kab. Bangka',
            'username' => 'din_kabbangka',
            'province_id' => 19,
            'districts_city_id' => 1901,
            'order_province' => 17,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 163,
            'name' => 'Kab. Bangka Barat',
            'username' => 'din_kabbangkabarat',
            'province_id' => 19,
            'districts_city_id' => 1903,
            'order_province' => 17,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 164,
            'name' => 'Kab. Bangka Tengah',
            'username' => 'din_kabbangkatengah',
            'province_id' => 19,
            'districts_city_id' => 1904,
            'order_province' => 17,
            'order_city' => 4,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 165,
            'name' => 'Kab. Belitung',
            'username' => 'din_kabbelitung',
            'province_id' => 19,
            'districts_city_id' => 1902,
            'order_province' => 17,
            'order_city' => 5,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 166,
            'name' => 'Kab. Belitung Timur',
            'username' => 'din_kabbelitungtimur',
            'province_id' => 19,
            'districts_city_id' => 1906,
            'order_province' => 17,
            'order_city' => 6,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 167,
            'name' => 'Kota Pangkal Pinang',
            'username' => 'din_kotapangkalpinang',
            'province_id' => 19,
            'districts_city_id' => 1971,
            'order_province' => 17,
            'order_city' => 7,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 168,
            'name' => 'Kepulauan Riau',
            'username' => 'prov_kepulauanriau',
            'province_id' => 21,
            'districts_city_id' => NULL,
            'order_province' => 18,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 169,
            'name' => 'Kab. Bintan',
            'username' => 'din_kabbintan',
            'province_id' => 21,
            'districts_city_id' => 2102,
            'order_province' => 18,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 170,
            'name' => 'Kab. Natuna',
            'username' => 'din_kabnatuna',
            'province_id' => 21,
            'districts_city_id' => 2103,
            'order_province' => 18,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 171,
            'name' => 'Kota Batam',
            'username' => 'din_kotabatam',
            'province_id' => 21,
            'districts_city_id' => 2171,
            'order_province' => 18,
            'order_city' => 4,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 172,
            'name' => 'Kota Tanjungpinang',
            'username' => 'din_kotatanjungpinang',
            'province_id' => 21,
            'districts_city_id' => 2172,
            'order_province' => 18,
            'order_city' => 5,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 173,
            'name' => 'Lampung',
            'username' => 'prov_lampung',
            'province_id' => 18,
            'districts_city_id' => NULL,
            'order_province' => 19,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 174,
            'name' => 'Kab. Lampung Timur',
            'username' => 'din_kablampungtimur',
            'province_id' => 18,
            'districts_city_id' => 1804,
            'order_province' => 19,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 175,
            'name' => 'Kab. Pesawaran',
            'username' => 'din_kabpesawaran',
            'province_id' => 18,
            'districts_city_id' => 1809,
            'order_province' => 19,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 176,
            'name' => 'Kab. Pesisir Barat',
            'username' => 'din_kabpesisirbarat',
            'province_id' => 18,
            'districts_city_id' => 1813,
            'order_province' => 19,
            'order_city' => 4,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 177,
            'name' => 'Kab. Tulang Bawang',
            'username' => 'din_kabtulangbawang',
            'province_id' => 18,
            'districts_city_id' => 1808,
            'order_province' => 19,
            'order_city' => 5,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 178,
            'name' => 'Kota Bandar Lampung',
            'username' => 'din_kotabandarlampung',
            'province_id' => 18,
            'districts_city_id' => 1871,
            'order_province' => 19,
            'order_city' => 6,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 179,
            'name' => 'Kota Metro',
            'username' => 'din_kotametro',
            'province_id' => 18,
            'districts_city_id' => 1872,
            'order_province' => 19,
            'order_city' => 7,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 180,
            'name' => 'Maluku',
            'username' => 'prov_maluku',
            'province_id' => 81,
            'districts_city_id' => NULL,
            'order_province' => 20,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 181,
            'name' => 'Kab. Maluku Tenggara',
            'username' => 'din_kabmalukutenggara',
            'province_id' => 81,
            'districts_city_id' => 8102,
            'order_province' => 20,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 182,
            'name' => 'Kota Ambon',
            'username' => 'din_kotaambon',
            'province_id' => 81,
            'districts_city_id' => 8171,
            'order_province' => 20,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 183,
            'name' => 'Kota Tual',
            'username' => 'din_kotatual',
            'province_id' => 81,
            'districts_city_id' => 8172,
            'order_province' => 20,
            'order_city' => 4,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 184,
            'name' => 'Maluku Utara',
            'username' => 'prov_malukuutara',
            'province_id' => 82,
            'districts_city_id' => NULL,
            'order_province' => 21,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 185,
            'name' => 'Kab. Halmahera Utara',
            'username' => 'din_kabhalmaherautara',
            'province_id' => 82,
            'districts_city_id' => 8205,
            'order_province' => 21,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 186,
            'name' => 'Kota Ternate',
            'username' => 'din_kotaternate',
            'province_id' => 82,
            'districts_city_id' => 8271,
            'order_province' => 21,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 187,
            'name' => 'Kota Tidore Kepulauan',
            'username' => 'din_kotatidorekepulauan',
            'province_id' => 82,
            'districts_city_id' => 8272,
            'order_province' => 21,
            'order_city' => 4,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 188,
            'name' => 'Nusa Tenggara Barat',
            'username' => 'prov_nusatenggarabarat',
            'province_id' => 52,
            'districts_city_id' => NULL,
            'order_province' => 22,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 189,
            'name' => 'Kab. Bima',
            'username' => 'din_kabbima',
            'province_id' => 52,
            'districts_city_id' => 5206,
            'order_province' => 22,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 190,
            'name' => 'Kab. Dompu',
            'username' => 'din_kabdompu',
            'province_id' => 52,
            'districts_city_id' => 5205,
            'order_province' => 22,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 191,
            'name' => 'Kab. Lombok Barat',
            'username' => 'din_kablombokbarat',
            'province_id' => 52,
            'districts_city_id' => 5201,
            'order_province' => 22,
            'order_city' => 4,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 192,
            'name' => 'Kab. Lombok Tengah',
            'username' => 'din_kablomboktengah',
            'province_id' => 52,
            'districts_city_id' => 5202,
            'order_province' => 22,
            'order_city' => 5,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 193,
            'name' => 'Kab. Lombok Timur',
            'username' => 'din_kablomboktimur',
            'province_id' => 52,
            'districts_city_id' => 5203,
            'order_province' => 22,
            'order_city' => 6,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 194,
            'name' => 'Kab. Lombok Utara',
            'username' => 'din_kablombokutara',
            'province_id' => 52,
            'districts_city_id' => 5208,
            'order_province' => 22,
            'order_city' => 7,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 195,
            'name' => 'Kab. Sumbawa',
            'username' => 'din_kabsumbawa',
            'province_id' => 52,
            'districts_city_id' => 5204,
            'order_province' => 22,
            'order_city' => 8,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 196,
            'name' => 'Kab. Sumbawa Barat',
            'username' => 'din_kabsumbawabarat',
            'province_id' => 52,
            'districts_city_id' => 5207,
            'order_province' => 22,
            'order_city' => 9,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 197,
            'name' => 'Kota Bima',
            'username' => 'din_kotabima',
            'province_id' => 52,
            'districts_city_id' => 5272,
            'order_province' => 22,
            'order_city' => 10,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 198,
            'name' => 'Kota Mataram',
            'username' => 'din_kotamataram',
            'province_id' => 52,
            'districts_city_id' => 5271,
            'order_province' => 22,
            'order_city' => 11,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 199,
            'name' => 'Nusa Tenggara Timur',
            'username' => 'prov_nusatenggaratimur',
            'province_id' => 53,
            'districts_city_id' => NULL,
            'order_province' => 23,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 200,
            'name' => 'Kab. Belu',
            'username' => 'din_kabbelu',
            'province_id' => 53,
            'districts_city_id' => 5306,
            'order_province' => 23,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 201,
            'name' => 'Kab. Ende',
            'username' => 'din_kabende',
            'province_id' => 53,
            'districts_city_id' => 5311,
            'order_province' => 23,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 202,
            'name' => 'Kab. Flores Timur',
            'username' => 'din_kabflorestimur',
            'province_id' => 53,
            'districts_city_id' => 5309,
            'order_province' => 23,
            'order_city' => 4,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 203,
            'name' => 'Kab. Kupang',
            'username' => 'din_kabkupang',
            'province_id' => 53,
            'districts_city_id' => 5303,
            'order_province' => 23,
            'order_city' => 5,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 204,
            'name' => 'Kab. Lembata',
            'username' => 'din_kablembata',
            'province_id' => 53,
            'districts_city_id' => 5308,
            'order_province' => 23,
            'order_city' => 6,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 205,
            'name' => 'Kab. Manggarai',
            'username' => 'din_kabmanggarai',
            'province_id' => 53,
            'districts_city_id' => 5313,
            'order_province' => 23,
            'order_city' => 7,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 206,
            'name' => 'Kab. Manggarai Timur',
            'username' => 'din_kabmanggaraitimur',
            'province_id' => 53,
            'districts_city_id' => 5319,
            'order_province' => 23,
            'order_city' => 8,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 207,
            'name' => 'Kab. Nagekeo',
            'username' => 'din_kabnagekeo',
            'province_id' => 53,
            'districts_city_id' => 5318,
            'order_province' => 23,
            'order_city' => 9,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 208,
            'name' => 'Kab. Sikka',
            'username' => 'din_kabsikka',
            'province_id' => 53,
            'districts_city_id' => 5310,
            'order_province' => 23,
            'order_city' => 10,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 209,
            'name' => 'Kab. Sumba Barat Daya',
            'username' => 'din_kabsumbabaratdaya',
            'province_id' => 53,
            'districts_city_id' => 5317,
            'order_province' => 23,
            'order_city' => 11,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 210,
            'name' => 'Kab. Timor Tengah Utara',
            'username' => 'din_kabtimortengahutara',
            'province_id' => 53,
            'districts_city_id' => 5305,
            'order_province' => 23,
            'order_city' => 12,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 211,
            'name' => 'Kota Kupang',
            'username' => 'din_kotakupang',
            'province_id' => 53,
            'districts_city_id' => 5371,
            'order_province' => 23,
            'order_city' => 13,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 212,
            'name' => 'Papua',
            'username' => 'prov_papua',
            'province_id' => 94,
            'districts_city_id' => NULL,
            'order_province' => 24,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 213,
            'name' => 'Kab. Jayapura',
            'username' => 'din_kabjayapura',
            'province_id' => 94,
            'districts_city_id' => 9403,
            'order_province' => 24,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 214,
            'name' => 'Kab. Merauke',
            'username' => 'din_kabmerauke',
            'province_id' => 94,
            'districts_city_id' => 9401,
            'order_province' => 24,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 215,
            'name' => 'Papua Barat',
            'username' => 'prov_papuabarat',
            'province_id' => 91,
            'districts_city_id' => NULL,
            'order_province' => 25,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 216,
            'name' => 'Kab. Sorong',
            'username' => 'din_kabsorong',
            'province_id' => 91,
            'districts_city_id' => 9107,
            'order_province' => 25,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 217,
            'name' => 'Riau',
            'username' => 'prov_riau',
            'province_id' => 14,
            'districts_city_id' => NULL,
            'order_province' => 26,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 218,
            'name' => 'Kab. Bengkalis',
            'username' => 'din_kabbengkalis',
            'province_id' => 14,
            'districts_city_id' => 1408,
            'order_province' => 26,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 219,
            'name' => 'Kab. Indragiri Hulu',
            'username' => 'din_kabindragirihulu',
            'province_id' => 14,
            'districts_city_id' => 1402,
            'order_province' => 26,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 220,
            'name' => 'Kab. Kampar',
            'username' => 'din_kabkampar',
            'province_id' => 14,
            'districts_city_id' => 1406,
            'order_province' => 26,
            'order_city' => 4,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 221,
            'name' => 'Kab. Kuantan Singingi',
            'username' => 'din_kabkuantansingingi',
            'province_id' => 14,
            'districts_city_id' => 1401,
            'order_province' => 26,
            'order_city' => 5,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 222,
            'name' => 'Kab. Pelalawan',
            'username' => 'din_kabpelalawan',
            'province_id' => 14,
            'districts_city_id' => 1404,
            'order_province' => 26,
            'order_city' => 6,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 223,
            'name' => 'Kab. Rokan Hilir',
            'username' => 'din_kabrokanhilir',
            'province_id' => 14,
            'districts_city_id' => 1409,
            'order_province' => 26,
            'order_city' => 7,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 224,
            'name' => 'Kab. Rokan Hulu',
            'username' => 'din_kabrokanhulu',
            'province_id' => 14,
            'districts_city_id' => 1407,
            'order_province' => 26,
            'order_city' => 8,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 225,
            'name' => 'Kab. Siak',
            'username' => 'din_kabsiak',
            'province_id' => 14,
            'districts_city_id' => 1405,
            'order_province' => 26,
            'order_city' => 9,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 226,
            'name' => 'Kota Dumai',
            'username' => 'din_kotadumai',
            'province_id' => 14,
            'districts_city_id' => 1473,
            'order_province' => 26,
            'order_city' => 10,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 227,
            'name' => 'Kota Pekanbaru',
            'username' => 'din_kotapekanbaru',
            'province_id' => 14,
            'districts_city_id' => 1471,
            'order_province' => 26,
            'order_city' => 11,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 228,
            'name' => 'Sulawesi Barat',
            'username' => 'prov_sulawesibarat',
            'province_id' => 76,
            'districts_city_id' => NULL,
            'order_province' => 27,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 229,
            'name' => 'Sulawesi Selatan',
            'username' => 'prov_sulawesiselatan',
            'province_id' => 73,
            'districts_city_id' => NULL,
            'order_province' => 28,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 230,
            'name' => 'Kab. Bantaeng',
            'username' => 'din_kabbantaeng',
            'province_id' => 73,
            'districts_city_id' => 7303,
            'order_province' => 28,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 231,
            'name' => 'Kab. Barru',
            'username' => 'din_kabbarru',
            'province_id' => 73,
            'districts_city_id' => 7310,
            'order_province' => 28,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 232,
            'name' => 'Kab. Bulukumba',
            'username' => 'din_kabbulukumba',
            'province_id' => 73,
            'districts_city_id' => 7302,
            'order_province' => 28,
            'order_city' => 4,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 233,
            'name' => 'Kab. Enrekang',
            'username' => 'din_kabenrekang',
            'province_id' => 73,
            'districts_city_id' => 7316,
            'order_province' => 28,
            'order_city' => 5,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 234,
            'name' => 'Kab. Pangkajene Kepulauan',
            'username' => 'din_kabpangkajenekepulauan',
            'province_id' => 73,
            'districts_city_id' => 7309,
            'order_province' => 28,
            'order_city' => 6,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 235,
            'name' => 'Kab. Sinjai',
            'username' => 'din_kabsinjai',
            'province_id' => 73,
            'districts_city_id' => 7307,
            'order_province' => 28,
            'order_city' => 7,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 236,
            'name' => 'Kab. Soppeng',
            'username' => 'din_kabsoppeng',
            'province_id' => 73,
            'districts_city_id' => 7312,
            'order_province' => 28,
            'order_city' => 8,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 237,
            'name' => 'Kab. Tana Toraja',
            'username' => 'din_kabtanatoraja',
            'province_id' => 73,
            'districts_city_id' => 7318,
            'order_province' => 28,
            'order_city' => 9,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 238,
            'name' => 'Kab. Wajo',
            'username' => 'din_kabwajo',
            'province_id' => 73,
            'districts_city_id' => 7313,
            'order_province' => 28,
            'order_city' => 10,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 239,
            'name' => 'Kota Makassar',
            'username' => 'din_kotamakassar',
            'province_id' => 73,
            'districts_city_id' => 7371,
            'order_province' => 28,
            'order_city' => 11,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 240,
            'name' => 'Kota Palopo',
            'username' => 'din_kotapalopo',
            'province_id' => 73,
            'districts_city_id' => 7373,
            'order_province' => 28,
            'order_city' => 12,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 241,
            'name' => 'Kota Parepare',
            'username' => 'din_kotaparepare',
            'province_id' => 73,
            'districts_city_id' => 7372,
            'order_province' => 28,
            'order_city' => 13,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 242,
            'name' => 'Sulawesi Tengah',
            'username' => 'prov_sulawesitengah',
            'province_id' => 72,
            'districts_city_id' => NULL,
            'order_province' => 29,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 243,
            'name' => 'Kab. Banggai',
            'username' => 'din_kabbanggai',
            'province_id' => 72,
            'districts_city_id' => 7202,
            'order_province' => 29,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 244,
            'name' => 'Kab. Donggala',
            'username' => 'din_kabdonggala',
            'province_id' => 72,
            'districts_city_id' => 7205,
            'order_province' => 29,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 245,
            'name' => 'Kab. Parigi Moutong',
            'username' => 'din_kabparigimoutong',
            'province_id' => 72,
            'districts_city_id' => 7208,
            'order_province' => 29,
            'order_city' => 4,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 246,
            'name' => 'Kab. Toli-Toli',
            'username' => 'din_kabtoli-toli',
            'province_id' => 72,
            'districts_city_id' => 7206,
            'order_province' => 29,
            'order_city' => 5,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 247,
            'name' => 'Kota Palu',
            'username' => 'din_kotapalu',
            'province_id' => 72,
            'districts_city_id' => 7271,
            'order_province' => 29,
            'order_city' => 6,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 248,
            'name' => 'Sulawesi Tenggara',
            'username' => 'prov_sulawesitenggara',
            'province_id' => 74,
            'districts_city_id' => NULL,
            'order_province' => 30,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 249,
            'name' => 'Kab. Buton',
            'username' => 'din_kabbuton',
            'province_id' => 74,
            'districts_city_id' => 7401,
            'order_province' => 30,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 250,
            'name' => 'Kab. Kolaka',
            'username' => 'din_kabkolaka',
            'province_id' => 74,
            'districts_city_id' => 7404,
            'order_province' => 30,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 251,
            'name' => 'Kab. Kolaka Utara',
            'username' => 'din_kabkolakautara',
            'province_id' => 74,
            'districts_city_id' => 7408,
            'order_province' => 30,
            'order_city' => 4,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 252,
            'name' => 'Kota Bau-Bau',
            'username' => 'din_kotabau-bau',
            'province_id' => 74,
            'districts_city_id' => 7472,
            'order_province' => 30,
            'order_city' => 5,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 253,
            'name' => 'Kota Kendari',
            'username' => 'din_kotakendari',
            'province_id' => 74,
            'districts_city_id' => 7471,
            'order_province' => 30,
            'order_city' => 6,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 254,
            'name' => 'Sulawesi Utara',
            'username' => 'prov_sulawesiutara',
            'province_id' => 71,
            'districts_city_id' => NULL,
            'order_province' => 31,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 255,
            'name' => 'Kota Bitung',
            'username' => 'din_kotabitung',
            'province_id' => 71,
            'districts_city_id' => 7172,
            'order_province' => 31,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 256,
            'name' => 'Kota Kotamobagu',
            'username' => 'din_kotakotamobagu',
            'province_id' => 71,
            'districts_city_id' => 7174,
            'order_province' => 31,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 257,
            'name' => 'Kota Manado',
            'username' => 'din_kotamanado',
            'province_id' => 71,
            'districts_city_id' => 7171,
            'order_province' => 31,
            'order_city' => 4,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 258,
            'name' => 'Kota Tomohon',
            'username' => 'din_kotatomohon',
            'province_id' => 71,
            'districts_city_id' => 7173,
            'order_province' => 31,
            'order_city' => 5,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 259,
            'name' => 'Sumatera Barat',
            'username' => 'prov_sumaterabarat',
            'province_id' => 13,
            'districts_city_id' => NULL,
            'order_province' => 32,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 260,
            'name' => 'Kab. Agam',
            'username' => 'din_kabagam',
            'province_id' => 13,
            'districts_city_id' => 1307,
            'order_province' => 32,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 261,
            'name' => 'Kab. Dharmasraya',
            'username' => 'din_kabdharmasraya',
            'province_id' => 13,
            'districts_city_id' => 1311,
            'order_province' => 32,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 262,
            'name' => 'Kab. Kepulauan Mentawai',
            'username' => 'din_kabkepulauanmentawai',
            'province_id' => 13,
            'districts_city_id' => 1301,
            'order_province' => 32,
            'order_city' => 4,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 263,
            'name' => 'Kab. Lima Puluh Kota',
            'username' => 'din_kablimapuluhkota',
            'province_id' => 13,
            'districts_city_id' => 1308,
            'order_province' => 32,
            'order_city' => 5,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 264,
            'name' => 'Kab. Padang Pariaman',
            'username' => 'din_kabpadangpariaman',
            'province_id' => 13,
            'districts_city_id' => 1306,
            'order_province' => 32,
            'order_city' => 6,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 265,
            'name' => 'Kab. Pasaman',
            'username' => 'din_kabpasaman',
            'province_id' => 13,
            'districts_city_id' => 1309,
            'order_province' => 32,
            'order_city' => 7,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 266,
            'name' => 'Kab. Pasaman Barat',
            'username' => 'din_kabpasamanbarat',
            'province_id' => 13,
            'districts_city_id' => 1312,
            'order_province' => 32,
            'order_city' => 8,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 267,
            'name' => 'Kab. Pesisir Selatan',
            'username' => 'din_kabpesisirselatan',
            'province_id' => 13,
            'districts_city_id' => 1302,
            'order_province' => 32,
            'order_city' => 9,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 268,
            'name' => 'Kab. Sijunjung',
            'username' => 'din_kabsijunjung',
            'province_id' => 13,
            'districts_city_id' => 1304,
            'order_province' => 32,
            'order_city' => 10,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 269,
            'name' => 'Kab. Solok',
            'username' => 'din_kabsolok',
            'province_id' => 13,
            'districts_city_id' => 1303,
            'order_province' => 32,
            'order_city' => 11,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 270,
            'name' => 'Kab. Solok Selatan',
            'username' => 'din_kabsolokselatan',
            'province_id' => 13,
            'districts_city_id' => 1310,
            'order_province' => 32,
            'order_city' => 12,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 271,
            'name' => 'Kab. Tanah Datar',
            'username' => 'din_kabtanahdatar',
            'province_id' => 13,
            'districts_city_id' => 1305,
            'order_province' => 32,
            'order_city' => 13,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 272,
            'name' => 'Kota Bukittinggi',
            'username' => 'din_kotabukittinggi',
            'province_id' => 13,
            'districts_city_id' => 1375,
            'order_province' => 32,
            'order_city' => 14,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 273,
            'name' => 'Kota Padang',
            'username' => 'din_kotapadang',
            'province_id' => 13,
            'districts_city_id' => 1371,
            'order_province' => 32,
            'order_city' => 15,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 274,
            'name' => 'Kota Padang Panjang',
            'username' => 'din_kotapadangpanjang',
            'province_id' => 13,
            'districts_city_id' => 1374,
            'order_province' => 32,
            'order_city' => 16,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 275,
            'name' => 'Kota Pariaman',
            'username' => 'din_kotapariaman',
            'province_id' => 13,
            'districts_city_id' => 1377,
            'order_province' => 32,
            'order_city' => 17,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 276,
            'name' => 'Kota Payakumbuh',
            'username' => 'din_kotapayakumbuh',
            'province_id' => 13,
            'districts_city_id' => 1376,
            'order_province' => 32,
            'order_city' => 18,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 277,
            'name' => 'Kota Sawahlunto',
            'username' => 'din_kotasawahlunto',
            'province_id' => 13,
            'districts_city_id' => 1373,
            'order_province' => 32,
            'order_city' => 19,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 278,
            'name' => 'Kota Solok',
            'username' => 'din_kotasolok',
            'province_id' => 13,
            'districts_city_id' => 1372,
            'order_province' => 32,
            'order_city' => 20,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 279,
            'name' => 'Sumatera Selatan',
            'username' => 'prov_sumateraselatan',
            'province_id' => 16,
            'districts_city_id' => NULL,
            'order_province' => 33,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 280,
            'name' => 'Kab. Muara Enim',
            'username' => 'din_kabmuaraenim',
            'province_id' => 16,
            'districts_city_id' => 1603,
            'order_province' => 33,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 281,
            'name' => 'Kab. Musi Banyuasin',
            'username' => 'din_kabmusibanyuasin',
            'province_id' => 16,
            'districts_city_id' => 1606,
            'order_province' => 33,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 282,
            'name' => 'Kab. Musi Rawas',
            'username' => 'din_kabmusirawas',
            'province_id' => 16,
            'districts_city_id' => 1605,
            'order_province' => 33,
            'order_city' => 4,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 283,
            'name' => 'Kab. Ogan Komering Ulu',
            'username' => 'din_kabogankomeringulu',
            'province_id' => 16,
            'districts_city_id' => 1608,
            'order_province' => 33,
            'order_city' => 5,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 284,
            'name' => 'Kab. Ogan Komering Ulu Timur',
            'username' => 'din_kabogankomeringulutimur',
            'province_id' => 16,
            'districts_city_id' => 1609,
            'order_province' => 33,
            'order_city' => 6,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 285,
            'name' => 'Kab. Penukal Abab Lematang Ilir (PALI)',
            'username' => 'din_kabpenukalabablematangilir',
            'province_id' => 16,
            'districts_city_id' => 1612,
            'order_province' => 33,
            'order_city' => 7,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 286,
            'name' => 'Kota Lubuklinggau',
            'username' => 'din_kotalubuklinggau',
            'province_id' => 16,
            'districts_city_id' => 1674,
            'order_province' => 33,
            'order_city' => 8,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 287,
            'name' => 'Kota Pagar Alam',
            'username' => 'din_kotapagaralam',
            'province_id' => 16,
            'districts_city_id' => 1673,
            'order_province' => 33,
            'order_city' => 9,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 288,
            'name' => 'Kota Palembang',
            'username' => 'din_kotapalembang',
            'province_id' => 16,
            'districts_city_id' => 1671,
            'order_province' => 33,
            'order_city' => 10,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 289,
            'name' => 'Kota Prabumulih',
            'username' => 'din_kotaprabumulih',
            'province_id' => 16,
            'districts_city_id' => 1672,
            'order_province' => 33,
            'order_city' => 11,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 290,
            'name' => 'Sumatera Utara',
            'username' => 'prov_sumaterautara',
            'province_id' => 12,
            'districts_city_id' => NULL,
            'order_province' => 34,
            'order_city' => 1,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 291,
            'name' => 'Kab. Batu Bara',
            'username' => 'din_kabbatubara',
            'province_id' => 12,
            'districts_city_id' => 1219,
            'order_province' => 34,
            'order_city' => 2,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 292,
            'name' => 'Kab. Deli Serdang',
            'username' => 'din_kabdeliserdang',
            'province_id' => 12,
            'districts_city_id' => 1212,
            'order_province' => 34,
            'order_city' => 3,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 293,
            'name' => 'Kab. Karo',
            'username' => 'din_kabkaro',
            'province_id' => 12,
            'districts_city_id' => 1211,
            'order_province' => 34,
            'order_city' => 4,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 294,
            'name' => 'Kab. Mandailing Natal',
            'username' => 'din_kabmandailingnatal',
            'province_id' => 12,
            'districts_city_id' => 1202,
            'order_province' => 34,
            'order_city' => 5,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 295,
            'name' => 'Kab. Nias',
            'username' => 'din_kabnias',
            'province_id' => 12,
            'districts_city_id' => 1201,
            'order_province' => 34,
            'order_city' => 6,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 296,
            'name' => 'Kab. Nias Selatan',
            'username' => 'din_kabniasselatan',
            'province_id' => 12,
            'districts_city_id' => 1214,
            'order_province' => 34,
            'order_city' => 7,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 297,
            'name' => 'Kab. Samosir',
            'username' => 'din_kabsamosir',
            'province_id' => 12,
            'districts_city_id' => 1217,
            'order_province' => 34,
            'order_city' => 8,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 298,
            'name' => 'Kab. Serdang Bedagai',
            'username' => 'din_kabserdangbedagai',
            'province_id' => 12,
            'districts_city_id' => 1218,
            'order_province' => 34,
            'order_city' => 9,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 299,
            'name' => 'Kab. Tapanuli Tengah',
            'username' => 'din_kabtapanulitengah',
            'province_id' => 12,
            'districts_city_id' => 1204,
            'order_province' => 34,
            'order_city' => 10,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 300,
            'name' => 'Kota Binjai',
            'username' => 'din_kotabinjai',
            'province_id' => 12,
            'districts_city_id' => 1276,
            'order_province' => 34,
            'order_city' => 11,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 301,
            'name' => 'Kota Gunung Sitoli',
            'username' => 'din_kotagunungsitoli',
            'province_id' => 12,
            'districts_city_id' => 1278,
            'order_province' => 34,
            'order_city' => 12,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 302,
            'name' => 'Kota Medan',
            'username' => 'din_kotamedan',
            'province_id' => 12,
            'districts_city_id' => 1275,
            'order_province' => 34,
            'order_city' => 13,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 303,
            'name' => 'Kota Padang Sidempuan',
            'username' => 'din_kotapadangsidempuan',
            'province_id' => 12,
            'districts_city_id' => 1277,
            'order_province' => 34,
            'order_city' => 14,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 304,
            'name' => 'Kota Pematang Siantar',
            'username' => 'din_kotapematangsiantar',
            'province_id' => 12,
            'districts_city_id' => 1273,
            'order_province' => 34,
            'order_city' => 15,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 305,
            'name' => 'Kota Sibolga',
            'username' => 'din_kotasibolga',
            'province_id' => 12,
            'districts_city_id' => 1271,
            'order_province' => 34,
            'order_city' => 16,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 306,
            'name' => 'Kota Tanjung Balai',
            'username' => 'din_kotatanjungbalai',
            'province_id' => 12,
            'districts_city_id' => 1272,
            'order_province' => 34,
            'order_city' => 17,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 307,
            'name' => 'Kota Tebing Tinggi',
            'username' => 'din_kotatebingtinggi',
            'province_id' => 12,
            'districts_city_id' => 1274,
            'order_province' => 34,
            'order_city' => 18,
            'password' => Hash::make(12345678),
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'role_id' => NULL,
            'profile_photo_path' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
    }
}
