<?php

namespace App\Http\Controllers;

use App\DataTables\CityDataTable;
use App\Models\City;
use App\Models\Country;
use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;

class CityController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CityDataTable $dataTable)
    {
        return $dataTable->render('city.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::pluck('name', 'id')->all();
        $data = compact('countries');
        return view('city.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCityRequest $request)
    {
        $data = $request->all();
        City::create($data);
        return redirect(route('city.index'))->with(['success' => 'Data berhasil ditambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = City::find($id);
        return $data->name."<br>".$data->country->name."<br>".$data->district;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $countries = Country::pluck('name', 'id')->all();
        $city = City::find($id);
        $data = compact('city','countries');
        return view('city.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCityRequest  $request
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCityRequest $request, $id)
    {
        $city = City::find($id);
        $data = $request->all();
        $city->update($data);
        return redirect(route('city.index'))->with(['success' => 'Data berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy($city)
    {
        City::destroy($city);  
        return redirect(route('city.index'))->with(['success' => 'Data berhasil dihapus']);
    }
}
