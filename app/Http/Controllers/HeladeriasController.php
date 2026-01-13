<?php

namespace App\Http\Controllers;

use App\Models\Heladeria;
use Illuminate\Http\Request;

class HeladeriasController extends Controller
{

    public function index(){

        $heladerias = Heladeria::all();

        return view('heladerias.heladerias', [
            'heladerias' => $heladerias
        ]);
    }

    public function show($id){

        $id = Heladeria::find($id);

        return view('heladerias.show',[
            'heladeria' => $id
        ]);
    }
}
