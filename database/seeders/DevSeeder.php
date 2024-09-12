<?php

namespace Database\Seeders;

use Database\Seeders\Local\User;
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
            // user
            User\DefaultUserSeeder::class,
            User\UserSeeder::class,
        ]);
    }
}
