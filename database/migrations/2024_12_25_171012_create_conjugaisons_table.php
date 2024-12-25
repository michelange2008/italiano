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
        Schema::create('conjugaisons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('verbe_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('temp_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('subject', 191);
            $table->string('conjugated_form', 191);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conjugaisons');
    }
};
