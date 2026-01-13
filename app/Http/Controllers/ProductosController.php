<?php

namespace App\Http\Controllers;

use App\Models\Postre;
use App\Models\Torta;
use App\Models\Sabores;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function sabores(){

        $chocolates = Sabores::where('categoria', 'Chocolates')->get();
        $cremas = Sabores::where('categoria', 'Cremas')->get();
        $especiales = Sabores::where('categoria', 'Especiales')->get();
        $mousses = Sabores::where('categoria', 'Mousses')->get();
        $frutasCrema = Sabores::where('categoria', 'Frutas a la crema')->get();
        $frutasNaturales = Sabores::where('categoria', 'Frutas naturales')->get();
        $dulceDeleche = Sabores::where('categoria', 'Dulce de leche')->get();
        $tortas = Sabores::where('categoria', 'tortas')->get();
        $sabores = Sabores::all();

        return view('products.sabores',[
            'sabores' => $sabores,
            'chocolates' => $chocolates,
            'cremas' => $cremas,
            'especiales' => $especiales,
            'mousses' => $mousses,
            'frutasCrema' => $frutasCrema,
            'frutasNaturales' => $frutasNaturales,
            'dulceDeleche' => $dulceDeleche,
            'tortas' => $tortas,
        ]);
    }

    public function tortas(){
        $tortas = Postre::where('categoria', 'tortas')->get();

        return view('products.tortas', [
            'tortas' => $tortas
        ]);
    }
    public function postres(){
        $postres = Postre::all();

        return view('products.postres', [
            'postres' => $postres
        ]);
    }
}
