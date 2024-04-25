<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;
    public $fillable = [
        "time",
        "value",
        "type_vehicle_id"
    ];

    public function typesOfVehicles()
    {
        return $this->belongsTo(TypesOfVehicle::class, 'type_vehicle_id');
    }
}
