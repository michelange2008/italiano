<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TempsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('temps')->insert([
            [ 'name' => 'presente'],
            [ 'name' => 'passato prossimo'],
            [ 'name' => 'imperfecto'],
            [ 'name' => 'futuro'],
            [ 'name' => 'condizionale'],
            [ 'name' => 'imperativo'],
        ]);
    }
}
