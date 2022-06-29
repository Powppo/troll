<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAfterOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('after_offers', function (Blueprint $table) {
            $table->id();
            $table->string('category_id');
            $table->string('item_name');
            $table->string('slug');
            $table->integer('quantity');
            $table->string('country_id');
            $table->string('city_id');
            $table->string('image');
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
        Schema::dropIfExists('after_offers');
    }
}
