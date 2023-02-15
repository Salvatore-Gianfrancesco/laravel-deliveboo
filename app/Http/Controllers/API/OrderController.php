<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function save_order($cart, $client)
    {
        $cart = json_decode($cart);
        $client = json_decode($client);

        return [$cart, $client];
    }
}
