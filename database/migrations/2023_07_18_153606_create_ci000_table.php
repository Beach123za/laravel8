<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCi000Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ci000', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('i00')->nullable();
            $table->float('f00')->nullable();
            $table->string('s00')->nullable();
            $table->date('d00')->nullable();
            $table->text('t00')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ci000');
    }
}
