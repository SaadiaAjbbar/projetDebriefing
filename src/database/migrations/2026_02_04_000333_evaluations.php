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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('competence_id')->constrained()->cascadeOnDelete();
            $table->foreignId('debriefing_id')->constrained()->cascadeOnDelete();
             $table->string('test');
            $table->foreignId('etudiant_id')->constrained('users')->cascadeOnDelete();
            $table->string('niveau'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
