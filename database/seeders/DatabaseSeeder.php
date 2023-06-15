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
        $this->call([
            TestSeeder::class,
            UserSeeder::class,
            AreaSeeder::class,
            ShopSeeder::class,
        ]);

        \App\Models\ContactForm::factory(110)->create();
    }
}
