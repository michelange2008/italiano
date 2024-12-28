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
        Schema::create('verbes', function (Blueprint $table) {
            $table->id();
            $table->string('italiano', 191);
            $table->tinyInteger('group')->nullable();
            $table->boolean('irregolare');
            $table->text('francese');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verbes');
    }
};
