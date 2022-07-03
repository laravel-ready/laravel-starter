<?php

namespace Database\Seeders;

use Database\Seeders\User\DefaultUserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // add seeder classes here
            // DefaultUserSeeder::class,
        ]);
    }
}
