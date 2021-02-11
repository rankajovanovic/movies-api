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
         \App\Models\User::factory(50)->create();
        // \App\Models\Movie::factory(100)->create();
    }

    //php artisan db:seed
}
