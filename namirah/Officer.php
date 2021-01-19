<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Officer extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('census_officers')->insert([
            ['id' => 1, 'name' => "Zin Ko Ko"],
            ['id' => 2, 'name' => "Haikal"],
            ['id' => 3, 'name' => "Mus"],
            ['id' => 4, 'name' => "Salbiah"],
            ['id' => 5, 'name' => "Namirah"],
        ]);
    }
}
