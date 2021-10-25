<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:database/migrations/2021_10_25_043209_create_students.php
            $table->string('nim', 10);
            $table->string('name', 30);
            $table->string('class', 10);
            $table->string('department', 30);
            $table->string('phone_number', 13);
=======
            $table->string('nim',10);
            $table->string('name',30);
            $table->string('class',10);
            $table->string('department',30);
            $table->string('phone_number',13);
>>>>>>> ba7a5c5719bd32033b275f418e057f21aeaf6372:database/migrations/2021_10_24_194811_create_students.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
