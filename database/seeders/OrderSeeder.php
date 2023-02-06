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
        for ($i = 0; $i < 20; $i++) {
            $order = new Order();
            $order->client_firstname = $faker->firstName();
            $order->client_lastname = $faker->lastName();
            $order->client_address = $faker->streetAddress();
            $order->client_phone = $faker->phoneNumber();
            $order->total_amount = $faker->randomFloat(2, 10, 50);
            $order->delivery_time = $faker->time();
            $order->is_delivered = false;
            $order->datetime = $faker->dateTimeInInterval('-1 day', '+3 days');

            /* for ($j = 0; $j < 2; $j++) {
                if ($i <= 10) {
                    $plate = $faker->randomElement([1, 2, 3, 4, 5]);
                } else {
                    $plate = $faker->randomElement([6, 7, 8, 9, 10]);
                }
                $quantity = $faker->randomElement([1, 2, 3]);
                $plate_quantity = [$plate, $quantity];
                // dd($plate_quantity);

                $order->plate()->attach($plate);
            } */

            $order->save();
        }
    }
}
