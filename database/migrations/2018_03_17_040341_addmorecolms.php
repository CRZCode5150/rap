<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Addmorecolms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('createaun', 50);
            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->string('city', 50);
            $table->string('state', 50);
            $table->string('zipcode', 50);

            $table->boolean('isartist');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
