<?php

namespace Database\Seeders;

use App\Models\Ibukota;
use App\Models\Negara;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        // ]);
        Negara::factory(10)->create();

        Ibukota::factory(10)->create();
    }
}
