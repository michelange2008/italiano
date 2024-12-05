<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tags') -> insert([
            ['name' => "animaux"],
            ['name' => "vacances"],
            ['name' => "maison"],
            ['name' => "dehors"],
            ['name' => "nature"],
            ['name' => "autre"],
        ]);
        //
    }
}
