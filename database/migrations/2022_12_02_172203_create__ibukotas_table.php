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
        Schema::create('ibukotas', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_ibukota')->default(0);
            $table->string('nama_ibukota');
            $table->foreignId('negara_id')->unique()->constrained();
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
        Schema::dropIfExists('ibukotas');
    }
};
