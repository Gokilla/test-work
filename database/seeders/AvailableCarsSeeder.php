<?php

namespace Database\Seeders;

use App\Models\AvailableCar;
use Illuminate\Database\Seeder;

class AvailableCarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AvailableCar::factory()
            ->count(4)
            ->create();
    }
}
