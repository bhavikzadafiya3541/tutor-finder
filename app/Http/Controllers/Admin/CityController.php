<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CityStoreRequest;
use App\Http\Requests\CityUpdateRequest;
use App\Models\City;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $cities = City::all();

        return view('admin.city.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.city.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CityStoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        City::create($data);

        return Redirect::route('admin.cities.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city): View
    {
        return view('admin.city.create', compact('city'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CityUpdateRequest $request, City $city): RedirectResponse
    {
        $data = $request->validated();

        $city->update($data);

        return Redirect::route('admin.cities.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city): RedirectResponse
    {
        $city->delete();

        return Redirect::route('admin.cities.index');
    }
}
