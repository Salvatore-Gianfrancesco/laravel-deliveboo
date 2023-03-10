<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Faker\Generator as Faker;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = config('db.users');
        foreach ($users as $user) {
            $new_user = new User();
            $new_user->name = $user['name'];
            $new_user->email = $user['email'];
            $new_user->password = Hash::make($user['password']);
            $new_user->save();
        }

        $restaurants = config('db.restaurants');
        foreach ($restaurants as $restaurant) {
            $new_restaurant = new Restaurant();
            $new_restaurant->user_id = $restaurant['user_id'];
            $new_restaurant->company_name = $restaurant['company_name'];
            $new_restaurant->slug = Str::slug($restaurant['company_name']);
            $new_restaurant->description = $restaurant['description'];
            $new_restaurant->address = $faker->streetAddress();
            $new_restaurant->piva = $faker->numerify('###########');
            // $new_restaurant->image;
            // $new_restaurant->min_order = $faker->randomElement([5, 10, 15, 20]);
            $new_restaurant->delivery = $faker->randomElement([0, 1, 2, 3]);
            $new_restaurant->closing_time = $restaurant['closing_time'];
            $new_restaurant->save();

            $new_restaurant->types()->attach($restaurant['types']);
        }
    }
}
