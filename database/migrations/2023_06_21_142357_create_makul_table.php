<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMakulTable extends Migration
{
    public function up()
    {
        Schema::create('makul', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kode');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('makul');
    }
}
