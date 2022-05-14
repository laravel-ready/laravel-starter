<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Database\Seeders\User\DefaultUserSeeder;

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
