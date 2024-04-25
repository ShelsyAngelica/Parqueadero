<?php

namespace App\Http\Controllers;

use App\Models\Rate;
use App\Models\Vehicles;
use Illuminate\Http\Request;
use App\Models\TypesOfVehicle;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Carbon;



class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicles::with('typesOfVehicles')->get();
        return view('vehicles', ['vehicles' => $vehicles]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typesOfVehicles = TypesOfVehicle::all();
        return view('newVehicles',['typesOfVehicles' => $typesOfVehicles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        $datos['entry_date'] = Carbon::now('America/Bogota');
        Vehicles::create($datos);
        return redirect()->route('vehicles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicles  $vehicles
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicles $vehicles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicles  $vehicles
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $datos = Vehicles::find($id);
        if($datos->value){
            dd('rda mani ya pagate');
        }
        else{
            //obtengo la fecha de entrada 
            $datos = Vehicles::find($id);
            $entry_date = $datos->entry_date; 

            //guardo la fecha de salida
            $datos->update([ 
                'departure_date' => Carbon::now('America/Bogota')
            ]);
                    
            $entry_date_parse     = Carbon::parse($entry_date);
            $departure_date_parse = Carbon::parse($datos->departure_date);
            $final_date = $entry_date_parse->diff($departure_date_parse);

            //obtengo la tarifa del tipo de vehiculo que quieren pagar
            $rate = Rate::where(['type_vehicle_id' => $datos->type_vehicle_id, 'time' => 'minuto'])->first();

            //realizamos el calculo del valor a pagar
            $value = $rate->value * $final_date->i;
            $datos->update([ 
                'value' => $value
            ]);

            return redirect()->route('pdf', $id);
        }
    }

    /**
    * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicles  $vehicles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicles $vehicles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicles  $vehicles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicles $vehicles)
    {
        //
    }
}