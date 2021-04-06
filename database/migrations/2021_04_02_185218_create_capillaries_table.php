<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapillariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capillaries', function (Blueprint $table) {
            $table->id();
            $table->string('capillary_type', 350);
            $table->unsignedBigInteger('capillary_material')->nullable();
            $table->timestamps();

            $table->foreign('capillary_material')->references('id')->on('capillary_materials')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('capillaries');
    }
}
