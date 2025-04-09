<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('service_types', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // contoh: "packing", "cargo", dsb
            $table->timestamps();
        });

        // Seed default data (opsional)
        DB::table('service_types')->insert([
            ['name' => 'Packing'],
            ['name' => 'Jasa angkutan atau pindahan'],
            ['name' => 'Cargo'],
            ['name' => 'Penitipan barang atau sewa gudang'],
            ['name' => 'Beli kardus'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_types');
    }
};
