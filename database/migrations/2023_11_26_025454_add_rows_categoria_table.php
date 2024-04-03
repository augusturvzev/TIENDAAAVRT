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
        DB::table('categoria')->insert([
            'nombre'=>'Articulos de Escritorio ',
            'descripcion'=>'Los artículos de oficina esenciales son todos los 
            suministros de consumo que necesita a diario.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('categoria')
        ->where('nombre', 'Articulos de Escritorio')
        ->where('descripcion', 'Los artículos de oficina esenciales 
        son todos los suministros de consumo que necesita a diario')
        ->delete();
    }
};
