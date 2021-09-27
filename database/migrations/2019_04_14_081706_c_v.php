<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CV extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
        //
        Schema::create('cv', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cv');
            $table->string('StudentId');
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
        //
    }
}
