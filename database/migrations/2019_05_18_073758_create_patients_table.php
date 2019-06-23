<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_file')->nullable();
            $table->string('name');
            $table->string('fathers_name');
            $table->Integer('national_code');
            $table->string('doctor');
            $table->string('sickness_type');
            $table->string('insurance_type');
            $table->string('insurance');
            $table->date('date_transplant');
            $table->string('transplant_hospital');
            $table->string('transplant_doctor');
            $table->string('drug');
            $table->string('home_adres');
            $table->string('work_adres');
            $table->integer('home_phone');
            $table->integer('work_phone');
            $table->integer('cellphone');
            $table->integer('required_phone');
            $table->integer('account_number');
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
        Schema::dropIfExists('patients');
    }
}
