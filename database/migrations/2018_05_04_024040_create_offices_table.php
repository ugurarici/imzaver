<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('city_id');
            $table->integer('county_id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('phone');
            $table->text('address');
            $table->string('coordinates')->nullable();
            $table->text('formatted_address')->nullable();
            $table->string('gmaps_place_id')->nullable();
            $table->boolean('is_checked')->default(false);
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
        Schema::dropIfExists('offices');
    }
}
