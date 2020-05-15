<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeilnehmersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teilnehmers', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('anrede');
            $table->string('vornahme', 100);
            $table->string('nachname', 100);
            $table->string('firma', 100);
            $table->string('strasse', 100);
            $table->string('nr', 100);
            $table->string('plz', 100);
            $table->string('ort', 100);
            $table->string('email', 100);
            $table->string('ustidnr', 100)->unique();
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
        Schema::dropIfExists('teilnehmers');
    }
}
