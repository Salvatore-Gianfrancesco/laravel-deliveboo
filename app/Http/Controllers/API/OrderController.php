<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Plate;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function save_order($cart, $client)
    {
        $cart = json_decode($cart);
        $client = json_decode($client);
        $restaurant = Restaurant::where('id', '=', $cart->restaurant)->first();
        // dd($restaurant);

        $order = new Order();
        $order->restaurant_id = $cart->restaurant;
        $order->client_firstname = $client->client_firstname->value;
        $order->client_lastname = $client->client_lastname->value;
        $order->client_address = $client->client_address->value;
        $order->client_phone = $client->client_phone->value;
        $order->delivery_time = $client->delivery_time->value;

        $total_amount = 0;
        for ($i = 0; $i < count($cart->quantity); $i++) {
            $total_amount = $total_amount + $cart->quantity[$i] * $cart->plates->prices[$i];
        }
        $total_amount += $restaurant->delivery;
        $total_amount = round($total_amount, 2);
        $order->total_amount = $total_amount;

        $order->save();

        for ($j = 0; $j < count($cart->quantity); $j++) {
            $plate = Plate::where('name', '=', $cart->plates->plates[$j])->first();
            $plate_id = $plate->id;
            $quantity = $cart->quantity[$j];
            $order->plates()->attach($plate_id, array('quantity' => $quantity));
        }

        return response()->json([
            'success' => true,
            'results' => 'Ordine salvato correttamente'
        ]);
    }
}
