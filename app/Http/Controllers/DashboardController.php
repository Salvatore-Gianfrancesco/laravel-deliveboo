<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $restaurant = Restaurant::where('id', '=', $user->id)->first();
        // dd($user);
        return view('dashboard', compact('restaurant'));
        //   $user = User::find(auth()->user()->id);
    }
}
