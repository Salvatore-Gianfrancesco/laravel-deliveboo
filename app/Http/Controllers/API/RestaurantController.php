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
                'results' => 'Restaurant not found'
            ]);
        }
    }
}
