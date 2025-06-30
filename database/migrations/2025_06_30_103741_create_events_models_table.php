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
        Schema::create('events_models', function (Blueprint $table) {
            $table->id();
            $table->string('vorname');
            $table->string('nachname');
            $table->string('betreff');
            $table->text('nachricht');
            $table->dateTime('datum_ab');
            $table->dateTime('datum_bis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events_models');
    }
};
