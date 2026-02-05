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
    {   Schema::disableForeignKeyConstraints();
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            /* description */
            $table->string('title');
            $table->text('description');
            $table->string('category');
            $table->integer('price');
            $table->integer('deposit');
            $table->integer('months')->default(3);
            $table->string('status')->default('pending');
            /* media */
            $table->json('photos')->nullable(); // Stocke les chemins des photos
            $table->string('video')->nullable();
            /* location */
            $table->string('address');
            $table->string('city');
            $table->string('neighborhood');
            /* description */
            $table->decimal('lot_size', 10, 2);
            $table->integer('rooms')->default(1);
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('floors');
            /* amenities */
            $table->json('amenities')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
