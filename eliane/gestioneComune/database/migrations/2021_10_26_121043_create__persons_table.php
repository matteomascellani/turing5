<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_persons', function (Blueprint $table) {
            $table->id();
            $table->string('nome')-> nullable();
            $table->string('cognome')-> nullable();
            $table->string('data_nascita')-> nullable();
            $table->string('address')-> nullable();
            $table->string('zip')-> nullable();
            $table->string('city')-> nullable();
            $table->string('country')-> nullable();
            $table->string('email')-> nullable();
            $table->string('phone')-> nullable();
            $table->string('professione')-> nullable();

            $table->softDeletes('delete_at');
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
        Schema::dropIfExists('_persons');

    }
}
