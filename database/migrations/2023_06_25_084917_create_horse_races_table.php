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
        Schema::create('horse_races', function (Blueprint $table) {
            $table->comment('馬とレースの関係+その時の馬の情報');
            $table->id();
            $table->integer('race_id');
            $table->integer('horse_id');
            $table->integer('weight')->nullable()->comment('体重');
            $table->integer('corner_1_order')->nullable()->comment('1コーナー通過順');
            $table->integer('corner_2_order')->nullable()->comment('2コーナー通過順');
            $table->integer('corner_3_order')->nullable()->comment('3コーナー通過順');
            $table->integer('corner_4_order')->nullable()->comment('4コーナー通過順');
            $table->integer('goal_order')->comment('着順');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horse_races');
    }
};
