<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventaristypeTable extends Migration
{
    public function up()
    {
        Schema::create('inventaristype', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_bar');
            $table->integer('total_jumlah');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inventaristype');
    }
}
