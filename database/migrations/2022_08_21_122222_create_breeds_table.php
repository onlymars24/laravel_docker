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
        Schema::create('breeds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('life_expectancy');
            $table->integer('funny_fact');
            $table->integer('user_id');
            $table->timestamps();
            /*
            имя
            пользователь-создатель
            средняя продолжительность жизни
            забавный факт

            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('breeds');
    }
};
