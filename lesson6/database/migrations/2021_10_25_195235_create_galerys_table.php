<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalerysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_galerys', function (Blueprint $table) {
            $table->BigInteger('id')->autoIncrement();
            $table->foreignId('user_id')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('name');
            $table->timestamps();


        });

        Schema::create('galerys', function (Blueprint $table) {
            $table->BigInteger('id')->autoIncrement();
            $table->foreignId('user_id')
                ->constrained('users');
            $table->BigInteger('category_id');
            $table->string('name');
            $table->timestamps();
            $table->foreign('category_id')
                ->references('id')->on('category_galerys');

        });

        Schema::create('images', function (Blueprint $table) {
            $table->BigInteger('id')->autoIncrement();
            $table->foreignId('user_id')
                ->constrained('users');
            $table->BigInteger('galerys_id');
            $table->string('url_img');
            $table->timestamps();
            $table->foreign('galerys_id')
                ->references('id')->on('galerys');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galerys');
        Schema::dropIfExists('category_galerys');
    }
}
