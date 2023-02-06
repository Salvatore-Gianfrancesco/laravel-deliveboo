<?php

namespace App\Http\Controllers;

use App\Models\Plate;
use App\Http\Requests\StorePlateRequest;
use App\Http\Requests\UpdatePlateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PlateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $plates = Plate::where('restaurant_id', '=', $user->id)->get();
        return view('plates.index', compact('plates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePlateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlateRequest $request)
    {
        $val_data = $request->validated();
        // if ($request->hasFile('cover_image')) {

        //     $cover_image = Storage::put('uploads', $val_data['cover_image']);
        //     $val_data['cover_image'] = $cover_image;
        // }
        $plate_slug = Plate::createSlug($val_data['name']);
        $val_data['slug'] = $plate_slug;
        // dd($val_data);
        Plate::create($val_data);

        return to_route('admin.plates.index')->with('message', 'Plate added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plate  $plate
     * @return \Illuminate\Http\Response
     */
    public function show(Plate $plate)
    {
        return view('plates.show', compact('plate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plate  $plate
     * @return \Illuminate\Http\Response
     */
    public function edit(Plate $plate)
    {
        return view('plates.edit', compact('plate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlateRequest  $request
     * @param  \App\Models\Plate  $plate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlateRequest $request, Plate $plate)
    {
        $val_data = $request->validated();
        // if ($request->hasFile('cover_image')) {

        //     $cover_image = Storage::put('uploads', $val_data['cover_image']);
        //     $val_data['cover_image'] = $cover_image;
        // }
        $plate_slug = Plate::createSlug($val_data['name']);
        $val_data['slug'] = $plate_slug;
        // dd($val_data);

        $plate->update($val_data);
        return to_route('admin.plates.index')->with('message', 'Plate modified');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plate  $plate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plate $plate)
    {
        $plate->delete();
        return to_route('admin.plates.index');
    }
}
