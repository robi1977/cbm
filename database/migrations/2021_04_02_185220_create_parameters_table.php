<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parameters', function (Blueprint $table) {
            $table->id();
            $table->string('parameter_value');
            $table->unsignedBigInteger('sample_id')->nullable();
            $table->unsignedBigInteger('parameter_type_id')->nullable();
            $table->timestamps();

            $table->foreign('sample_id')->references('id')->on('samples')->onDelete('set null');
            $table->foreign('parameter_type_id')->references('id')->on('parameter_types')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parameters');
    }
}
