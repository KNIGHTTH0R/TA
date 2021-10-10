<?php

namespace Database\Seeders;

use App\Models\Distribution;
use Illuminate\Database\Seeder;

class DistributionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Distribution::factory(2)->create();
    }
}
