<?php

namespace Database\Seeders;

use App\Models\Plate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class PlateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $plates = config('db.plates');
        foreach ($plates as $plate) {
            $new_plate = new Plate();
            $new_plate->restaurant_id = $plate['restaurant_id'];
            $new_plate->name = $plate['name'];
            $new_plate->slug = Str::slug($plate['name']);
            $new_plate->description = $plate['description'];
            $new_plate->price = $plate['price'];
            $new_plate->visibility = true;
            // $new_plate->image;
            $new_plate->save();
        }
    }
}
