<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Hash;
>>>>>>> ba7a5c5719bd32033b275f418e057f21aeaf6372

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
<<<<<<< HEAD
            'nim' =>'2031710026',
=======
            'nim' =>'20710026',
>>>>>>> ba7a5c5719bd32033b275f418e057f21aeaf6372
            'name' =>'Aisyah Ulil Maulina',
            'class' =>'MI-2F',
            'departement' => 'Teknologi Informasi',
            'phone_number' => '08980571729',
        ]);
<<<<<<< HEAD

=======
>>>>>>> ba7a5c5719bd32033b275f418e057f21aeaf6372
    }
}
