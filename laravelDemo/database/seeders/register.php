<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class register extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\studentModel::factory(2)->create();
    }
}
