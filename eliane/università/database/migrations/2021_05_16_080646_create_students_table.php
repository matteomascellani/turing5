<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
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

            $table->string('nome');
            $table->string('cognome');
            $table->string('data_nascita');
            $table->string('citta_residenza');
            $table->string('indirizzo');
            $table->integer('cap');
            $table->string('paese');
            $table->string('email')->nullable();
            $table->integer('telephono')->nullable();
            $table->string('corso_frequantato');





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
