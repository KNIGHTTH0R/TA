<?php

namespace Database\Factories;

use App\Models\Campaign\Campaign;
use App\Models\Distribution\Distribution;
use Illuminate\Database\Eloquent\Factories\Factory;

class DistributionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Distribution::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $campaign_id = Campaign::pluck('id')->toArray();

        return [
            'campaign_id' => rand(min($campaign_id), max($campaign_id)),
            'amount' => rand(1500000, 3000000),
            'stories' => $this->faker->paragraph(4)
        ];
    }
}
