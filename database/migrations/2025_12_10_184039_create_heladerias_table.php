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
        Schema::create('heladerias', function (Blueprint $table) {
            $table->id(); // int, auto_increment, primary key
            $table->string('Nombre', 255)->nullable(); // varchar(255), utf8mb4
            $table->string('Telefono', 20)->nullable(); // varchar(20), utf8mb4
            $table->string('Horarios', 255)->nullable(); // varchar(255), utf8mb4
            $table->string('Direccion', 255)->nullable(); // varchar(255), utf8mb4
            $table->boolean('Delivery')->nullable(); // tinyint(1), nullable
            $table->string('Foto', 255)->nullable(); // varchar(255), utf8mb4
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heladerias');
    }
};
