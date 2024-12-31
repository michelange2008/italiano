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
            [ 'name' => 'presente', "rank" => 1],
            [ 'name' => 'participo_passato', "rank" => 6],
            [ 'name' => 'imperfecto', "rank" => 2],
            [ 'name' => 'futuro', "rank" => 3],
            [ 'name' => 'condizionale', "rank" => 4],
            [ 'name' => 'imperativo', "rank" => 5],
            [ 'name' => 'congiuntivo', "rank" => 7],
        ]);
    }
}
