<?php

namespace Database\Factories;

use App\Models\User\User;
use App\Models\Campaign\Campaign;
use App\Models\Transaction\Transaction;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $campaign_id = Campaign::pluck('id')->toArray();

        $arr_status = ['pending', 'cancel', 'expired', 'success'];
        $image = array_rand($arr_status, 4);
        $index = rand(0,3);

        $users = User::pluck('id')->toArray();

        return [
            'invoice' => 'INV'.Str::random(20),
            'user_id' => rand(min($users), max($users)),
            'campaign_id' => rand(min($campaign_id), max($campaign_id)),
            'amount' => rand(20000000,40000000),
            'anonim' => rand(0,1),
            'status' => $arr_status[$index]
        ];
    }
}
