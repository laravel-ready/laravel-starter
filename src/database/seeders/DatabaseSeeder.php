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
    public function run(): void
    {
        if (!$this->container->isProduction()) {
            $this->call([DevSeeder::class]);
        } else {
            $this->call([ProdSeeder::class]);
        }
    }
}
