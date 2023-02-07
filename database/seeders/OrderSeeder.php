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
        for ($i = 1; $i <= 20; $i++) {
            $order = new Order();

            if ($i <= 10) {
                $order->restaurant_id = '1';
            } else {
                $order->restaurant_id = '2';
            }

            $order->client_firstname = $faker->firstName();
            $order->client_lastname = $faker->lastName();
            $order->client_address = $faker->streetAddress();
            $order->client_phone = $faker->phoneNumber();
            $order->total_amount = $faker->randomFloat(2, 10, 50);
            $order->delivery_time = $faker->time();
            $order->is_delivered = false;
            $order->save();

            if ($i <= 10) {
                $plates = $faker->randomElements([1, 2, 3, 4, 5], 2);
            } else {
                $plates = $faker->randomElements([6, 7, 8, 9, 10], 2);
            }
            $quantity = $faker->randomElement([1, 2, 3]);
            $order->plates()->attach($plates, array('quantity' => $quantity));
        }
    }
}
