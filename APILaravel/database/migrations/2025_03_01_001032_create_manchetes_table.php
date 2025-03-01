<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. id, title, conteudo, data
     */
    public function up(): void
    {
        Schema::create('manchetes', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->longText('conteudo');
            $table->datetime('data');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manchetes');
    }
};
