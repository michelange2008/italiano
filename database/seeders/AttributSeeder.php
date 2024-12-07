<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AttributSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('attributs') -> insert([
            ['name' => "n.m."],
            ['name' => "n.f."],
            ['name' => "v."],
            ['name' => "adj."],
            ['name' => "adv."],
            ['name' => "pron."],
            ['name' => "div."],
        ]);
    }
}
