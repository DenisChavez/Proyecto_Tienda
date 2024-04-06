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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',30);
            $table->string('marca',30);
            $table->string('descripcion');
            $table->integer('unidades');
            $table->double('precio');
            $table->string('imagen');
            $table->string('categoria',40);
            $table->string('usuario',40); //quien lo va a usar niños, mujeres hombres, niñas
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
