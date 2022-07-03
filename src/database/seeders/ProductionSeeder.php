<?php

namespace Database\Seeders;

use Database\Seeders\User\DefaultUserSeeder;
use Illuminate\Database\Seeder;

class ProductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DefaultUserSeeder::class,
        ]);
    }
}
