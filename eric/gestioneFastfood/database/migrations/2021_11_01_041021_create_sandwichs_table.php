<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSandwichsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sandwichs', function (Blueprint $table) {
            $table->id();
            $table->string('nome',191)->nullable();
            $table->string('origine',191)->nullable();
            $table->integer('peso')->nullable();
            $table->integer('prezzo')->nullable();

            $table->softdeletes();
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
        Schema::dropIfExists('sandwichs');
        $table->softdeletes('deleted_at');
    }
}
