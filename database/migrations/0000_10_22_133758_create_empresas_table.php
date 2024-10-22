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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string(column:'pais', length:40);
            $table->string(column:'nombre', length:80);
            $table->string(column:'tipo', length:40);
            $table->string(column:'rut', length:15);
            $table->string(column:'telefono', length:40);
            $table->string(column:'correo', length:50);
            $table->integer(column:'cantidad_impuesto');
            $table->string(column:'nombre_impuesto', length:20);
            $table->string(column:'moneda', length:30);
            $table->string(column:'direccion', length:90);
            $table->string(column:'ciudad', length:30);
            $table->string(column:'region', length:20);
            $table->string(column:'codigo_postal', length:20);
            $table->text(column:'logo');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
