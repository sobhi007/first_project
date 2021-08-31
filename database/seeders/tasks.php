<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class tasks extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tasks::table([
            'title' =>Str::random(8),
            'discription'=>Str::random(8),

        ]);
    }
}
