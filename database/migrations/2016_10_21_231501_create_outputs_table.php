<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outputs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lot_quantity');
            $table->integer('unit_quantity');
            $table->integer('package_id')->unsigned();
            $table->string('time');
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');
            $table->string('remarks');
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
        Schema::table('outputs', function ($table) {
            $table->dropForeign('outputs_package_id_foreign');
        });
        Schema::dropIfExists('outputs');
    }
}
