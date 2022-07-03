<?php

namespace Database\Seeders;

use Database\Seeders\User\DefaultUserSeeder;
use Database\Seeders\User\UserDevSeeder;
use Illuminate\Database\Seeder;

class DevelopmentSeeder extends Seeder
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
            UserDevSeeder::class,
        ]);
    }
}
