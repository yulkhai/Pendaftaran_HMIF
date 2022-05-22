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
        Schema::create('register', function (Blueprint $table) {
            $table->string('nama');
            $table->string('nim');
            $table->integer('angkatan');
            $table->string('email');
            $table->string('departemen1');
            $table->text('alasan1');
            $table->string('departemen2');
            $table->text('alasan2');
            $table->string('pindah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register');
    }
};
