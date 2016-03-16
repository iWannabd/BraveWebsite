<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKartulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartuls', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('namaketua');
            $table->string('namaanggota1');
            $table->string('namaanggota2');
            $table->string('sekolah');
            $table->string('surelketua');
            $table->string('kontakketua');
            $table->string('tema');
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
        Schema::drop('kartuls');
    }
}
