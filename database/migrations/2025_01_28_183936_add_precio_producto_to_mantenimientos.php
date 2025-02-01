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
        Schema::table('detalles_mantenimiento', function (Blueprint $table) {
            $table->decimal('precio_producto', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detalles_mantenimiento', function (Blueprint $table) {
            $table->dropColumn('precio_producto');
        });
    }
};
