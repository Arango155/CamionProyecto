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
        Schema::create('predio', function (Blueprint $table) {
            $table->unsignedBigInteger('codigo_predio')->primary();
            $table->string('nombre_predio', 105);
            $table->string('direccion', 175);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('predio');
    }
};
