<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function index() {
        $countries = Country::all();
        return view("countries.index", compact("countries"));
    }

    public function show(Country $country) {
        return view("countries.show", compact("country"));
    }

    public function create() {
        return view("countries.create");
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "name" => ["required", "max:100"],
            "area_km2" => ["required", "numeric", "between:0,99999999.99"],
            "population" => ["required", "integer"],
        ]);
        Country::create([
            "name" => $validated["name"],
            "area_km2" => $validated["area_km2"],
            "population" => $validated["population"]
        ]);
        return redirect("/countries");
    }

    public function edit(Country $country) {
        return view("countries.edit", compact("country"));
    }

    public function update(Request $request, Country $country) {
        $validated = $request->validate([
            "name" => ["required", "max:100"],
            "area_km2" => ["required", "numeric", "between:0,99999999.99"],
            "population" => ["required", "integer"],
        ]);

        $country->name = $validated["name"];
        $country->area_km2 = $validated["area_km2"];
        $country->population = $validated["population"];
        $country->save();

        return redirect("/countries");
    }

    public function destroy(Country $country) {
        $country->delete();
        return redirect("/countries");
    }

    public function apiIndex(){
        return Country::all();
    }
}
