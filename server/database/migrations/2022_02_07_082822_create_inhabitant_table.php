<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInhabitantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inhabitant', function (Blueprint $table) {
            $table->id();
            $table->text("nome");
            $table->text("foto");
            $table->text("comune");
            $table->text("provincia");
            $table->text("indirizzo");
            $table->text("CAP");
            $table->text("nApp");
            $table->text("uc");
            $table->boolean("remota");
            $table->text("contab");
            $table->text("sonda");
            $table->text("dispositivi");
            $table->text("timestamps");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inhabitant');
    }
}
