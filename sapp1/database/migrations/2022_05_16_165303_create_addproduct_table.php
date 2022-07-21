<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addproduct', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('catid')->unsigned();
            $table->foreign('catid')->references("id")->on("addcat");
            $table->string('pname');
            $table->string('pimg');
            $table->integer('qty');
            $table->string('price');
            $table->text('pdesc');
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
        Schema::dropIfExists('addproduct');
    }
}
