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
    Schema::dropIfExists('productes');
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('productes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('descripcio');
            $table->double('preu', 8, 2);
            $table->integer('stock');
            $table->string('imatge');
            $table->timestamps();
        });
    }};
