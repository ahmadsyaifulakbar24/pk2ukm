<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'education',
            'param' => 'SD',
            'active' => true,
            'order' => 1,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'education',
            'param' => 'SLTP',
            'active' => true,
            'order' => 2,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'education',
            'param' => 'SLTA',
            'active' => true,
            'order' => 3,
        ]);
        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'education',
            'param' => 'DIPLOMA',
            'active' => true,
            'order' => 4,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'education',
            'param' => 'S1',
            'active' => true,
            'order' => 5,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'education',
            'param' => 'S2',
            'active' => true,
            'order' => 6,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'education',
            'param' => 'S3',
            'active' => true,
            'order' => 7,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'religion',
            'param' => 'Islam',
            'active' => true,
            'order' => 1,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'religion',
            'param' => 'Kristen',
            'active' => true,
            'order' => 2,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'religion',
            'param' => 'Katolik',
            'active' => true,
            'order' => 3,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'religion',
            'param' => 'Hindu',
            'active' => true,
            'order' => 4,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'religion',
            'param' => 'Buddha',
            'active' => true,
            'order' => 5,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'religion',
            'param' => 'Konghucu',
            'active' => true,
            'order' => 1,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'business_status',
            'param' => 'UMKM',
            'active' => true,
            'order' => 1,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'business_status',
            'param' => 'Koperasi',
            'active' => true,
            'order' => 2,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'business_status',
            'param' => 'Tidak Memiliki Usaha',
            'active' => true,
            'order' => 3,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'business_sector',
            'param' => 'Fashion',
            'active' => true,
            'order' =>  1,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'business_sector',
            'param' => 'Kuliner',
            'active' => true,
            'order' =>  2,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'business_sector',
            'param' => 'Home Decor',
            'active' => true,
            'order' =>  3,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'business_sector',
            'param' => 'INdustri dan Jasa',
            'active' => true,
            'order' =>  4,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'business_sector',
            'param' => 'Pariwisata',
            'active' => true,
            'order' =>  5,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'business_sector',
            'param' => 'Perikanan',
            'active' => true,
            'order' =>  6,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'business_sector',
            'param' => 'Pertanian dan Perkebunan',
            'active' => true,
            'order' =>  7,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'position_umkm',
            'param' => 'Pelaku Usaha Mikro',
            'active' => true,
            'order' =>  1,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'position_umkm',
            'param' => 'Pelaku Usaha Kecil',
            'active' => true,
            'order' =>  2,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'position_umkm',
            'param' => 'Calon Wirausaha',
            'active' => true,
            'order' =>  3,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'type_koperasi',
            'param' => 'Koperasi Produksi',
            'active' => true,
            'order' =>  1,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'type_koperasi',
            'param' => 'Koperasi Konsumsi',
            'active' => true,
            'order' =>  2,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'type_koperasi',
            'param' => 'Koperasi Simpan Pinjam',
            'active' => true,
            'order' =>  3,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'type_koperasi',
            'param' => 'Koperasi Serba Usaha',
            'active' => true,
            'order' =>  4,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'position_koperasi',
            'param' => 'Pengurus Koperasi',
            'active' => true,
            'order' =>  1,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'position_koperasi',
            'param' => 'Pengawas Koperasi',
            'active' => true,
            'order' =>  2,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'position_koperasi',
            'param' => 'Pengelola Koperasi',
            'active' => true,
            'order' =>  3,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'position_koperasi',
            'param' => 'Dewan Pengawas Koperasi',
            'active' => true,
            'order' =>  4,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'training_needs',
            'param' => 'Perkoperasian',
            'active' => true,
            'order' =>  1,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'training_needs',
            'param' => 'Kewirausahaan',
            'active' => true,
            'order' =>  2,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'training_needs',
            'param' => 'Keterampilan Teknis',
            'active' => true,
            'order' =>  3,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'training_needs',
            'param' => 'Manajerial',
            'active' => true,
            'order' =>  4,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'training_needs',
            'param' => 'Kompetensi (SKKNI)',
            'active' => true,
            'order' =>  5,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'training_needs',
            'param' => 'Teknologi Informasi',
            'active' => true,
            'order' =>  6,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'training_type',
            'param' => 'Pelatihan Perkoperasian',
            'active' => true,
            'order' =>  1,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'training_type',
            'param' => 'Kewirausahaan',
            'active' => true,
            'order' =>  2,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'training_type',
            'param' => 'Keterampilan Teknis (Vocational)',
            'active' => true,
            'order' =>  3,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'training_type',
            'param' => 'Teknologi Informasi',
            'active' => true,
            'order' =>  4,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'training_type',
            'param' => 'Kompetensi Berdasarkan Standar Kompetensi Kerja Nasional Indonesia',
            'active' => true,
            'order' =>  5,
        ]);

        DB::table('params')->insert([
            'parent_id' => NULL,
            'category_param' => 'training_type',
            'param' => 'Manajerial',
            'active' => true,
            'order' =>  6,
        ]);
    }
}
