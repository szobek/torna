<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
'num',
        'floor',
        'description',
        'img_dir',
        'climatic',
        'window',
        'mirror',
        'price'
        */
        Schema::create('room', function (Blueprint $table) {
            $table->id();
            $table->integer('num');
            $table->integer('floor');
            $table->text('description');
            $table->boolean('climatic')->default(false);
            $table->boolean('window')->default(false);
            $table->boolean('mirror')->default(false);
            $table->integer('price');
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
        Schema::dropIfExists('room');
    }
};
