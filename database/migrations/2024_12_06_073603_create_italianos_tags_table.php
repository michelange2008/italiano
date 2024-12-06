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
        Schema::create('italianos_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('italianos_id')->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade') ;
            $table->foreignId('tags_id')->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade') ;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('italianos_tags');
    }
};
