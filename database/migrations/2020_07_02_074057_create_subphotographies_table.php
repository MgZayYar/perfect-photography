<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubphotographiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subphotographies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('photography_id');
            $table->text('photo');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('photography_id')
                  ->references('id')->on('photographies')
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
        Schema::dropIfExists('subphotographies');
    }
}
