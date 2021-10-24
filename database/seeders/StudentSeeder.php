<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim' =>'2031710042',
            'name' =>'Sarindah Karina Br Sitepu',
            'class' =>'MI-2F',
            'departement' => 'Teknologi Informasi',
            'phone_number' => '082267550842',
        ]);

        DB::table('students')->insert([
            'nim' =>'2031710160',
            'name' =>'Achmad Nova Ardiansyah',
            'class' =>'MI-2F',
            'departement' => 'Teknologi Informasi',
            'phone_number' => '081997122673',
        ]);

        DB::table('students')->insert([
            'nim' =>'20710026',
            'name' =>'Aisyah Ulil Maulina',
            'class' =>'MI-2F',
            'departement' => 'Teknologi Informasi',
            'phone_number' => '08980571729',
        ]);
    }
}
