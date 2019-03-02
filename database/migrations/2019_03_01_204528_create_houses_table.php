<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id');
            $table->string('type');
            $table->string('size');
            $table->text('description');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('lga');
            $table->string('street');
            $table->string('avatar');
            $table->integer('no_of_room');
            $table->integer('no_of_bath');
            $table->float('amount', 20, 2);
            $table->boolean('sold')->default(false);
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
        Schema::dropIfExists('houses');
    }
}
