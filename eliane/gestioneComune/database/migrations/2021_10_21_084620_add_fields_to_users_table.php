<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username',191)->nullable();
            $table->string('lastname',191)->nullable();
            $table->string('phone')->nullable();
            $table->string('zip',191)->nullable();
            $table->string('city',191)->nullable();
            $table->string('birth_date')->nullable();
            $table->string('birth_place',191)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
            $table->dropColumn('lastname');
            $table->dropColumn('phone');
            $table->dropColumn('zip');
            $table->dropColumn('city');
            $table->dropColumn('birth_date');
            $table->dropColumn('birth_place');
        });
    }
}
