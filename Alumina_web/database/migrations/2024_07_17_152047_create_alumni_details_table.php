<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni_details', function (Blueprint $table) {
            $table->id();
            $table->string('availability');
            $table->numeric('age');
            $table->string('country');
            $table->string('city');
            $table->string('workplace');
            $table->date('birthdate');

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
        Schema::dropIfExists('alumni_details');
    }
};
