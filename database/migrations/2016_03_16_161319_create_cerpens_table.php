<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCerpensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cerpens', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('nama');
            $table->string('sekolah');
            $table->string('surel');
            $table->string('kontak');
            $table->string('judul');
            $table->tinyInteger('bayar')->default(0);
            $table->string('slug')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cerpens');
    }
}
