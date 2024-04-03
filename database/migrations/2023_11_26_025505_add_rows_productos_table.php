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
        DB::table('productos')->insert([
            'nombre'=>'Silla Gamer',
            'descripcion'=>'Sumérgete en el mundo del gaming con nuestra Silla Gamer de 
            última generación, que combina comodidad y estilo para brindarte una 
            experiencia única',
             'precio'=>100.00,
             'id_categoria'=>1,
             'inventario' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('productos')
        ->where('nombre', 'Silla Gamer')
        ->where('descripcion', 'Sumérgete en el mundo del gaming con nuestra Silla Gamer de 
        última generación, que combina comodidad y estilo para brindarte una 
        experiencia única')
        ->where('precio', 100.00)
        ->where('id_categoria', 1)
        ->where('inventario',10)
        ->delete();
    }
};
