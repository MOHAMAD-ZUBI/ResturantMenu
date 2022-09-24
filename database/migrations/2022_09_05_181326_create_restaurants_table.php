<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {

            $table->id();
            $table->string('about')->nullable();
            $table->string('logo')->nullable();
            $table->text('description')->nullable();
            $table->string('name');
            $table->string('instagram')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('phone')->nullable();
            $table->string('location')->nullable();
            $table->string('image')->nullable();
            $table->string('status', 6)->default('false');
            $table->string('workinghours')->nullable();
            $table->foreignId('user_id');
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
        Schema::dropIfExists('restaurants');
    }
}
