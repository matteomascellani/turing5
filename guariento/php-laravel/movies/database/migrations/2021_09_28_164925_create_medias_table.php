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
            $table->string('reference_type', 25)->nullable();
            $table->string('name', 255)->nullable();
            $table->string('alias', 255)->nullable();
            $table->text('path')->nullable();
            $table->text('url')->nullable();
            $table->string('caption', 255)->nullable();
            $table->string('media_type', 25)->nullable();
            $table->string('scope', 255)->nullable();
            $table->boolean('state')->default(1);
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
