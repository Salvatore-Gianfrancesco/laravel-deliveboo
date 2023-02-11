<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'results' => Restaurant::with('plates', 'orders', 'types')->paginate(6)
        ]);
    }

    public function show($slug)
    {
        $restaurant = Restaurant::with('plates', 'orders', 'types')->where('slug', $slug)->first();

        if ($restaurant) {
            return response()->json([
                'success' => true,
                'results' => $restaurant
            ]);
        } else {
            return response()->json([
                'success' => false,
                'results' => 'Ristorante non trovato'
            ]);
        }
    }

    public function filter($types)
    {
        $types = explode("+", $types);
        $restaurants = Restaurant::with('plates', 'orders', 'types')->get();

        $temp_restaurants = [];
        foreach ($restaurants as $restaurant) {
            $restaurant_types = [];
            foreach ($restaurant->types as $type) {
                array_push($restaurant_types, $type->name);
            }

            $valid = true;
            $i = 0;
            while ($valid && $i < count($types)) {
                if (!in_array($types[$i], $restaurant_types)) {
                    $valid = false;
                }
                $i++;
            }

            if ($valid) {
                array_push($temp_restaurants, $restaurant);
            }
        }

        if (count($temp_restaurants) !== 0) {
            return response()->json([
                'success' => true,
                'results' => $temp_restaurants
            ]);
        } else {
            return response()->json([
                'success' => false,
                'results' => 'Nessun ristorante trovato con questi parametri'
            ]);
        }
    }
}
