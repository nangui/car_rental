<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('site_address')->nullable();
            $table->string('email')->nullable();
            $table->string('site_phone')->nullable();
            $table->string('site_name')->nullable();
            $table->string('site_slogan')->nullable();
            $table->string('site_copyright')->nullable();
            $table->string('site_facebook')->nullable();
            $table->string('site_twitter')->nullable();
            $table->string('site_linkedin')->nullable();
            $table->string('site_latitude')->nullable();
            $table->string('site_longitude')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
