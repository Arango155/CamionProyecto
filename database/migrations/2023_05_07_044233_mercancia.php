<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mercancia', function (Blueprint $table) {
            $table->unsignedBigInteger('codigo')->primary();
            $table->string('nombre', 105);
            $table->foreignId('id_tipo_mercancia')->references('id')->on('tipo_mercancia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('mercancia');
    }
};
