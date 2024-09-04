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
        Schema::create('user_practicas', function(Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('password');
            $table->text('email');
            $table->text('cell');
            $table->timestamps(); // Agrega esta línea para incluir created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_practicas');
    }
};
