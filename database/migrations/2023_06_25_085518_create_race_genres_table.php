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
        Schema::create('race_genres', function (Blueprint $table) {
            $table->comment('レースの種類');
            $table->id();
            $table->string('name')->comment('レース名');
            $table->integer('month')->comment('開催月');
            $table->integer('week')->comment('開催週');
            $table->integer('race_rank_id')->comment('レースランク');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('race_genres');
    }
};
