<?php
namespace App\Http\Controllers;

use App\Court;
use App\Type;
use App\City;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CreateCourtRequest;

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
        return view('admin.courts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCourtRequest $request)
    {
        $court = new Court;
        $court->title = $request->input('title');
        $court->address = $request->input('address');
        $court->description = $request->input('description');
        $court->type_id = $request->input('type_id');
        $court->city_id = $request->input('city_id');
        if($request->hasFile('image')) {
            $court->img = $request->file('image')->hashName(); //$court->img = $request->image->hashName();
            $request->image->store('public');
        }
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
        $court = Court::find($id);
        $type = Type::find($court->type_id);
        $city = City::find($court->city_id);
        return view('admin.courts.court', ['court' => $court, 'type' => $type, 'city' => $city]);
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
    public function update(CreateCourtRequest $request, $id)
    {
        $court = Court::find($id);
        $court->title = $request->input('title'); 
        $court->address = $request->input('address');
        $court->description = $request->input('description');
        $court->type_id = $request->input('type_id');
        $court->city_id = $request->input('city_id');
        if($request->hasFile('image')) {
            $court->img = $request->file('image')->hashName();
            $request->image->store('public');
        } else {
            $court->img = null;
        }
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
