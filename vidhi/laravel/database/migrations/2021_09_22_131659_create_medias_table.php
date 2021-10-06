<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medias', function (Blueprint $table) {
            $table->id();
            $table->integer('xref_id')->default(0);
            $table->string('reference_type',25)->nullable(true);
            $table->string('name',191)->nullable(true);
            $table->string('alias',191)->nullable(true);
            $table->string('path')->nullable(true);
            $table->string('url')->nullable(true);
            $table->string('caption',191)->nullable(true);
            $table->string('media_type',25)->nullable(true);
            $table->string('scope',191)->nullable(true);
            $table->string('state')->default(1)->nullable(true);

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
        Schema::dropIfExists('medias');
    }
}
