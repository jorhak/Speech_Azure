<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ubicacion;

class UbicacionController extends Controller
{
    public function guardarUbicacion(Request $request)
    {
	$ubicacion = new Ubicacion();
	$ubicacion->longitud = $request->longitud;
	$ubicacion->latitud = $request->latitud;
	
	$ubicacion->save();
	return redirect(route('main.index'));
    }

    public function index()
    {
	$ubicaciones = Ubicacion::all();
	return view('main.index', compact('ubicaciones'));
    }
}
