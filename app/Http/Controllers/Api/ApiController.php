<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelicula;

class ApiController extends Controller
{
    //
   
    public function index()
    {
        $peliculas = Pelicula::select(['id', 'nombre'])->get();
        return response()->json($peliculas);
    }

    public function ordenAscendente()
    {
        $peliculas = Pelicula::select(['id', 'nombre'])->orderBy('id', 'asc')->get();
        return response()->json($peliculas);
    }

    public function ordenDescendente()
    {
        $peliculas = Pelicula::select(['id', 'nombre'])->orderBy('id', 'desc')->get();
        return response()->json($peliculas);
    }
    

    public function movie($idPelicula)
    {
        $pelicula = Pelicula::find($idPelicula);
        $peliculas = Pelicula::select(['id', 'nombre'])->where('id', $idPelicula)->get();
        return response()->json($peliculas);
    }

    public function update(Request $request, $idPelicula)
    {
        $pelicula = Pelicula::find($idPelicula);
        $pelicula->update($request->all());
        return response()->json($pelicula);
    }
    
    public function create(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'año' => 'required|integer',
            'estudio' => 'required',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        Pelicula::create($request->all());

        return response()->json(['message' => 'Pelicula creada']);
    }
    
}
