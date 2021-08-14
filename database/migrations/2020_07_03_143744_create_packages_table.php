<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->text('photo');
            $table->unsignedBigInteger('subphotography_id');
            $table->unsignedBigInteger('type_id');
            $table->integer('price');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('subphotography_id')
                  ->references('id')->on('subphotographies')
                  ->onDelete('cascade');

            $table->foreign('type_id')
                  ->references('id')->on('types')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
