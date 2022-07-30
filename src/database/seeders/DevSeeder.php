<?php

namespace Database\Seeders;

use Database\Seeders\Local\User\DefaultUserSeeder;
use Database\Seeders\Local\User\UserSeeder;
use Illuminate\Database\Seeder;

class DevSeeder extends Seeder
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
            UserSeeder::class,
        ]);
    }
}
