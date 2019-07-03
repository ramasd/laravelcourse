<?php
namespace App\Http\Controllers;

use App\City;
use App\Http\Requests\CreateCityRequest;

class AdminCitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // grąžina aikštelių sąrašą
    {
        return view('admin.cities.list', array('cities' => City::all()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // grąžina naujos aikštelės įvedimo formą
    {
        return view('admin.cities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCityRequest $request) // išsaugo naujai įvestą aikštelę
    {
        $city = new City;
        $city->title = $request->get('title');
        $city->save();
        return redirect('admin/miestai');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) // grąžiną konkrečios aikštelės redagavimo formą
    {
        return view('admin.cities.edit', array('city' => City::find($id)));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateCityRequest $request, $id) // išsaugo redaguotus aikštelės duomenis
    {
        $city = City::find($id);
        $city->title = $request->get('title');
        $city->save();
        return redirect('admin/miestai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) // ištrina konkrečią aikštelę
    {
        City::find($id)->delete();
        return redirect('admin/miestai');
    }
}
