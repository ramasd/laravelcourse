<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Court;
use App\Type;
use App\City;

class AdminCourtsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.courts.list', array('courts' => Court::all()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courts.create',  array('types' => Type::all(), 'cities' => City::all()));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $court = new Court;
        $court->title = $request->get('title');
        $court->address = $request->get('address');
        $court->description = $request->get('description');
        $court->type_id = $request->get('type_id');
        $court->city_id = $request->get('city_id');
        $court->save();
		return redirect('admin/aiksteles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.courts.edit',
        array('court' => Court::find($id), 'types' => Type::all(), 'cities' => City::all()));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $court = Court::find($id);
        $court->title = $request->get('title'); 
        $court->address = $request->get('address');
        $court->description = $request->get('description');
        $court->type_id = $request->get('type_id');
        $court->city_id = $request->get('city_id');
        $court->save();
		return redirect('admin/aiksteles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Court::find($id)->delete();
        return redirect('admin/aiksteles');
    }
}
