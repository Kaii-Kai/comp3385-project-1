<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PropertyController extends Controller
{
     public function create()
    {
        return view('properties-form');
    }

    public function store(Request $request)::RedirectResponse{
		$prop = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
			'num_of_bedrooms' => 'required|integer',
			'num_of_bathrooms' => 'required|integer',
			'location' => 'required|string',
            'price' => 'required|numeric',
			'property_type' => 'required|in:House,Apartment',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('photo')) {
			$prop['photo'] = $request->file('photo')->store('photos', 'public');
		} else {
			$prop['photo'] = null;
		}

        Property::create($prop);

        return redirect('/properties')->with('success', 'Property created successfully!');
    }

    public function list()
    {
        $properties = Property::all();
        return view('list-of-properties', compact('properties'));
    }

    public function show($id)
    {
		$property = Property::findOrFail($id);
		
        return view('individual-property', compact('property'));
    }
}
