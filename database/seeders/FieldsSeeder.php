<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Turn;
use App\Models\Field;

class FieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //
        $turn_right = Turn::where('name', '右回り')->first();
        $turn_left = Turn::where('name', '左回り')->first();

        Field::updateOrCreate([
            'id' => 1,
            'name' => '東京',
            'turn_id' => $turn_left->id
        ],
        [
            'name' => '東京',
            'turn_id' => $turn_left->id
        ]);
        Field::updateOrCreate([
            'id' => 2,
            'name' => '中山',
            'turn_id' => $turn_right->id
        ],
        [
            'name' => '中山',
            'turn_id' => $turn_right->id
        ]);
        Field::updateOrCreate([
            'id' => 3,
            'name' => '阪神',
            'turn_id' => $turn_right->id
        ],
        [
            'name' => '阪神',
            'turn_id' => $turn_right->id
        ]);
        Field::updateOrCreate([
            'id' => 4,
            'name' => '京都',
            'turn_id' => $turn_right->id
        ],
        [
            'name' => '京都',
            'turn_id' => $turn_right->id
        ]);
        Field::updateOrCreate([
            'id' => 5,
            'name' => '小倉',
            'turn_id' => $turn_right->id
        ],
        [
            'name' => '小倉',
            'turn_id' => $turn_right->id
        ]);
        Field::updateOrCreate([
            'id' => 6,
            'name' => '福島',
            'turn_id' => $turn_right->id
        ],
        [
            'name' => '福島',
            'turn_id' => $turn_right->id
        ]);
        Field::updateOrCreate([
            'id' => 7,
            'name' => '札幌',
            'turn_id' => $turn_right->id
        ],
        [
            'name' => '札幌',
            'turn_id' => $turn_right->id
        ]);
        Field::updateOrCreate([
            'id' => 8,
            'name' => '函館',
            'turn_id' => $turn_right->id
        ],
        [
            'name' => '函館',
            'turn_id' => $turn_right->id
        ]);
        Field::updateOrCreate([
            'id' => 9,
            'name' => '新潟',
            'turn_id' => $turn_left->id
        ],
        [
            'name' => '新潟',
            'turn_id' => $turn_left->id
        ]);
        Field::updateOrCreate([
            'id' => 10,
            'name' => '中京',
            'turn_id' => $turn_left->id
        ],
        [
            'name' => '中京',
            'turn_id' => $turn_left->id
        ]);
    }
}
