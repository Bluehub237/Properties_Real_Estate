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
        Schema::create('contrats', function (Blueprint $table) {
            $table->id();
            $table->string('contrat_number')->unique();
            $table->foreignId('property_id')->constrained()->onDelete('cascade');
            $table->foreignId('tenant_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('owner_id')->constrained('users')->onDelete('cascade');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->integer('amount', 10);
            $table->integer('deposit', 10)->nullable();
            $table->text('terms')->nullable();
            $table->enum('status', ['en_attente_signature', 'signe', 'actif', 'expire', 'resilie'])->default('en_attente_signature');
            $table->text('owner_signature')->nullable();
            $table->longText('tenant_signature')->nullable();
            $table->timestamp('signed_at')->nullable();
            $table->string('pdf_path')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrats');
    }
};
