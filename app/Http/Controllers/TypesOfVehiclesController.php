<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypesOfVehicle;

class TypesOfVehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typesOfVehicles = TypesOfVehicle::all();
        return view('typeOfVehicle',  ['typesOfVehicles' => $typesOfVehicles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newTypeVehicle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = ["vehicle" => $request->input('vehicle')];
        TypesOfVehicle::create($datos);

        return redirect()->route('type-of-vehicles.index');
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
        $typeOfVehicle = TypesOfVehicle::find($id);
        return view('editTypeVehicle', ['typeOfVehicle' =>  $typeOfVehicle] );    
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
        $typeOfVehicle = TypesOfVehicle::findorFail($id);
        $typeOfVehicle->update($request->all());
        return redirect()->route('type-of-vehicles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $typeOfVehicle = TypesOfVehicle::findorFail($id);
        $typeOfVehicle->delete();
        return redirect()->route('type-of-vehicles.index');
    }
}
