<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Turn;

class TurnsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Turn::updateOrCreate([
            'id' => 1,
            'name' => '右回り'
        ],
        [
            'name' => '右回り'
        ]);
        Turn::updateOrCreate([
            'id' => 2,
            'name' => '左回り'
        ],
        [
            'name' => '左回り'
        ]);
    }
}
