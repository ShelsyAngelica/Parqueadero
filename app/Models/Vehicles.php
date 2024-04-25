<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    use HasFactory;
    public $fillable = [
        "car_plate",
        "type_vehicle_id",
        "entry_date",
        "departure_date",
        "value"
    ];

    public function typesOfVehicles()
    {
        return $this->belongsTo(TypesOfVehicle::class, 'type_vehicle_id');
    }
}
