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
        Schema::create('transportation_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained()->onDelete('cascade');
            $table->double('pickup_lat');
            $table->double('pickup_lng');
            $table->integer('pickup_floor');
            $table->boolean('pickup_has_lift');
            $table->double('dropoff_lat');
            $table->double('dropoff_lng');
            $table->integer('dropoff_floor');
            $table->boolean('dropoff_has_lift');
            $table->text('item_description');
            $table->unsignedTinyInteger('assistance_needed')->default(1); // max 5
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transportation_details');
    }
};
