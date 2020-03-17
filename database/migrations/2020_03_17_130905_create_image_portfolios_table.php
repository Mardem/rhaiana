<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_portfolios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('path');

            // Esse é o relacionamento de um pra muitos => Veja no model ImagePortfolio.php o relacionamento
            $table->unsignedInteger('id_menu');
            $table->foreign('id_menu')->references('id')->on('menu_portfolios');
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
        Schema::dropIfExists('image_portfolios');
    }
}
