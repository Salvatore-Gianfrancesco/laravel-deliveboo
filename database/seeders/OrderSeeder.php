<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 1; $i <= 10; $i++) {
            $order = new Order();
            $order->restaurant_id = '1';
            $order->client_firstname = $faker->firstName();
            $order->client_lastname = $faker->lastName();
            $order->client_address = $faker->streetAddress();
            $order->client_phone = $faker->phoneNumber();
            $order->total_amount = $faker->randomFloat(2, 10, 50);
            $order->delivery_time = $faker->time();
            $order->is_delivered = false;
            $order->save();

            $plates = $faker->randomElements([1, 2, 3, 4, 5, 6, 7, 8, 9], 2);
            $quantity = $faker->randomElements([1, 2, 3], 2);

            for ($j = 0; $j < count($plates); $j++) {
                $order->plates()->attach($plates[$j], array('quantity' => $quantity[$j]));
            }
        }
    }
}
