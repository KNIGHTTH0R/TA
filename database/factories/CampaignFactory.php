<?php

namespace Database\Factories;

use App\Models\Campaign;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CampaignFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Campaign::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence();

        $arr_img = ['children', 'homeless', 'student', 'fashion'];
        $image = array_rand($arr_img, 3);
        $index = rand(0,2);

        $category_id = Category::pluck('id')->toArray();

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'category_id' => rand(min($category_id), max($category_id)),
            'image' => 'https://source.unsplash.com/204x204/?'.$arr_img[$index],
            'stories' => $this->faker->paragraph(5),
            'target' => rand(10000000, 50000000),
            'date_end' => '2022-12-12'
        ];
    }
}
