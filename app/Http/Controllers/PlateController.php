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

        $plate_slug = Plate::createSlug($val_data['name']);
        $val_data['slug'] = $plate_slug;

        if ($request->hasFile('image')) {
            $image = Storage::put('uploads', $request['image']);
            $val_data['image'] = $image;
        }

        if ($request->visibility == 'on') {
            $val_data['visibility'] = true;
        } else {
            $val_data['visibility'] = false;
        }

        $val_data['restaurant_id'] = Auth::user()->id;

        $plate = Plate::create($val_data);

        return to_route('admin.plates.index')->with('message', "Piatto $plate->id inserito correttamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plate  $plate
     * @return \Illuminate\Http\Response
     */
    public function show(Plate $plate)
    {
        if ($plate->restaurant_id == Auth::user()->id) {
            return view('plates.show', compact('plate'));
        } else {
            return view('404');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plate  $plate
     * @return \Illuminate\Http\Response
     */
    public function edit(Plate $plate)
    {
        if ($plate->restaurant_id == Auth::user()->id) {
            return view('plates.edit', compact('plate'));
        } else {
            return view('404');
        }
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
        // dd($request->request);
        $val_data = $request->validated();

        $plate_slug = Plate::createSlug($val_data['name']);
        $val_data['slug'] = $plate_slug;

        if ($request->hasFile('image')) {
            if ($plate->image) {
                Storage::delete($plate->image);
            }
            $image = Storage::put('uploads', $request['image']);
            $val_data['image'] = $image;
        }

        if ($request->visibility == 'on') {
            $val_data['visibility'] = true;
        } else {
            $val_data['visibility'] = false;
        }

        $plate->update($val_data);

        return to_route('admin.plates.index')->with('message', "Piatto $plate->id modificato correttamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plate  $plate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plate $plate)
    {
        if ($plate->image) {
            Storage::delete($plate->image);
        }
        $plate->delete();
        
        return to_route('admin.plates.index');
    }
}
