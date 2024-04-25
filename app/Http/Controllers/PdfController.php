<?php

namespace App\Http\Controllers;

use App\Models\Vehicles;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function print($id){
        $datos = Vehicles::find($id);
        $pdf = Pdf::loadView('pay',['datos' => $datos]);
        return $pdf->stream();
    }
}
