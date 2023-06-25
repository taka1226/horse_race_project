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
        Schema::create('races', function (Blueprint $table) {
            $table->id();
            $table->date('held_year')->comment('開催年');
            $table->integer('race_genre')->nullable()->comment('レース名');
            $table->string('weather_id')->comment('天気');
            $table->integer('riding_ground_id')->comment('馬場状態');
            $table->float('cushion_value')->comment('クッション値');
            $table->float('water content')->comment('含水率');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('races');
    }
};
