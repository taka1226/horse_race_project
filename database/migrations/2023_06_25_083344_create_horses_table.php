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
        Schema::create('horses', function (Blueprint $table) {
            $table->comment('馬');
            $table->id();
            $table->integer('sex')->comment('性別');
            $table->date('birth_date')->comment('生年月日');
            $table->integer('trainer_id')->comment('調教師');
            $table->integer('owner_id')->comment('馬主');
            $table->integer('producer_id')->comment('生産者');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horses');
    }
};
