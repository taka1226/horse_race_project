<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RaceRank;

class RaceRanksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        RaceRank::updateOrCreate([
            'id' => 1,
            'name' => 'G1'
        ],
        [
            'name' => 'G1',
        ]);
        RaceRank::updateOrCreate([
            'id' => 2,
            'name' => 'G2'
        ],
        [
            'name' => 'G2'
        ]);
        RaceRank::updateOrCreate([
            'id' => 3,
            'name' => 'G3'
        ],
        [
            'name' => 'G3'
        ]);
        RaceRank::updateOrCreate([
            'id' => 4,
            'name' => 'オープンクラス'
        ],
        [
            'name' => 'オープンクラス'
        ]);
        RaceRank::updateOrCreate([
            'id' => 5,
            'name' => 'その他'
        ],
        [
            'name' => 'その他'
        ]);

    }
}
