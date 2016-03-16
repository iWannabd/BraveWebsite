<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sains', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('namatim');
            $table->string('nama1');
            $table->string('nama2');
            $table->string('sekolah');
            $table->string('jenjang');
            $table->string('kontak');
            $table->string('email');
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
        Schema::drop('sains');
    }
}
