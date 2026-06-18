<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return view('properties.index');
    }

    public function home() {
        $properties=Property::all();
        return view('welcome', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('properties.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        //
    }
    public function filter(Request $request) {
        
        if($request->inputTitle) {

            $properties = Property::where('title','LIKE', '%'.$request->inputTitle.'%')->
            orWhere('description','LIKE', '%'.$request->inputTitle.'%')->get();

            return view('properties.filtered', compact('properties'));
        }

        if($request->cityInput) {
            $properties = Property::where('city','LIKE', '%'.$request->cityInput.'%')->get();

            return view('properties.filtered', compact('properties'));
        }

        if($request->roomsInput) {
            $properties = Property::where('rooms','LIKE', '%'.$request->roomsInput.'%')->get();

            return view('properties.filtered', compact('properties'));
        }
            return back();

    }
}
