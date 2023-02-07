<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Type;
use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $restaurant = Restaurant::where('id', '=', $user->id)->first();
        // $types = Type::all();

        return view('restaurant.show', compact('restaurant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRestaurantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRestaurantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        if ($restaurant->id == Auth::user()->id) {
            $types = Type::all();

            return view('restaurant.edit', compact('restaurant', 'types'));
        } else {
            return view('404');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRestaurantRequest  $request
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRestaurantRequest $request, Restaurant $restaurant)
    {
        $val_data = $request->validated();

        if ($request->hasFile('image')) {
            if ($restaurant->image) {
                Storage::delete($restaurant->image);
            }
            $image = Storage::put('uploads', $request['image']);
            $val_data['image'] = $image;
        }

        $restaurant_slug = Restaurant::createSlug($val_data['company_name']);
        $val_data['slug'] = $restaurant_slug;

        $restaurant->update($val_data);

        if ($request->has('types')) {
            $restaurant->types()->sync($val_data['types']);
        }

        return to_route('admin.restaurant.index', $restaurant->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }
}
