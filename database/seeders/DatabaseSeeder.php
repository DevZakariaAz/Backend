<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Call your EvenementSeeder here to run it
        $this->call([
            EvenementSeeder::class,
        ]);
    }
}
