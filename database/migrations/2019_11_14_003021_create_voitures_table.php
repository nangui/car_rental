<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voitures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('annonce_id');
            $table->unsignedBigInteger('modele_id');
            $table->unsignedBigInteger('carburant_id');
            $table->unsignedBigInteger('constructeur_id');
            $table->unsignedBigInteger('transmission_id');
            $table->unsignedBigInteger('carosserie_id');
            $table->year('year');
            $table->integer('mileage');
            $table->boolean('state');
            $table->string('color');
            $table->string('cylinder');
            $table->integer('number_of_horses');
            $table->dateTime('customs_clearance');
            $table->string('chassis_number');
            $table->integer('liter');
            $table->string('image');
            $table->foreign('annonce_id')->references('id')->on('annonces')->onDelete('cascade');
            $table->foreign('modele_id')->references('id')->on('modeles')->onDelete('cascade');
            $table->foreign('carburant_id')->references('id')->on('carburants')->onDelete('cascade');
            $table->foreign('constructeur_id')->references('id')->on('constructeurs')->onDelete('cascade');
            $table->foreign('transmission_id')->references('id')->on('transmissions')->onDelete('cascade');
            $table->foreign('carosserie_id')->references('id')->on('carosseries')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('voitures');
    }
}
