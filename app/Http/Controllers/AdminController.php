<?php

namespace App\Http\Controllers;

use Artisan;
use App\Models\Torta;
use App\Models\Postre;
use App\Models\Sabores;
use App\Models\Heladeria;
use Illuminate\Http\Request;
use App\View\Components\Productos;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $heladerias = Heladeria::all();
        $sabores = Sabores::all();
        //$tortas = Torta::all();

        // Cargamos la configuración actual o un array vacío si no existe
        $config = config('landing') ?? [];

        return view('dashboard', [
            'heladerias' => $heladerias,
            'sabores' => $sabores,
            //'tortas' => $tortas,
            'config' => $config
        ]);
    }

    public function landingUpdate(Request $request)
    {
        // 1. Validamos TODOS los campos que vienen del formulario
        $data = $request->validate([
            'titulo'      => 'required|string|max:255',
            'descripcion' => 'required|string',
            'whatsapp'    => 'nullable|string',
            'card_1'      => 'required|string|max:100', // Título Card 1
            'card_2'      => 'required|string|max:100', // Título Card 2
            'card_3'      => 'required|string|max:100', // Título Card 3

            'inv_titulo'  => 'required|string',
            'inv_desc'    => 'required|string',
            'log_titulo'  => 'required|string',
            'log_desc'    => 'required|string',
        ]);

        // 2. Guardar en el archivo config/landing.php
        $export = var_export($data, true);
        $content = "<?php\n\nreturn {$export};";

        // Es importante que el servidor tenga permisos de escritura en este archivo
        file_put_contents(config_path('landing.php'), $content);

        // 3. Limpiar caché para que Laravel lea el archivo nuevo inmediatamente
        \Illuminate\Support\Facades\Artisan::call('config:clear');

        return back()->with('mensaje', 'Web actualizada correctamente');
    }



    //Obtener todas las heladerias para mostrar en el dashboard
    public function heladerias(){
        $heladerias = Heladeria::all();

        return view('components.layouts.auth.heladerias.heladerias-dashboard', [
            'heladerias' => $heladerias,
        ]);
    }


    //Agregar nueva heladeria a la base de datos
    public function crear(Heladeria $heladeria){

        $title = "Agregar nueva heladeria";

        return view('components.layouts.auth.heladerias.crear',[
            'title' => $title
        ]);
    }


    //Actualizar Heladeria
    public function update(Heladeria $heladeria){
        $title = $heladeria->Nombre;
        $heladeria = Heladeria::findOrFail($heladeria->id);

        return view('components.layouts.auth.heladerias.update',[
        'title' => $title,
        'heladeria' => $heladeria
        ]);
    }

    //Borrar heladeria de la base de datos
    public function destroy(Heladeria $heladeria){
        $heladeria->delete();

        return redirect()->route('dashboard.heladerias')->with('mensaje', 'Heladería eliminada correctamente.');
    }

    public function sabores(){
        $sabores = Sabores::all();

        return view('components.layouts.auth.sabores.sabores-dashboard', [
            'sabores' => $sabores,
        ]);
    }
    //Agregar sabor
    public function saboresCrear(){
        $sabores = Sabores::all();
        $title = "Sabores Sanfra";

        return view('components.layouts.auth.sabores.crear', [
            'sabores' => $sabores,
            'title' => $title
        ]);
    }
    //Actualizar sabor
    public function saboresUpdate(Sabores $sabor){
        $title = $sabor->Nombre;
        $sabor = Sabores::findOrFail($sabor->id);

        return view('components.layouts.auth.sabores.update',[
        'title' => $title,
        'sabor' => $sabor
        ]);
    }
    //Borrar sabor
    public function saboresDestroy($id)
    {
        // Buscar el sabor por su ID
        $sabor = Sabores::findOrFail($id);

        // Eliminarlo
        $sabor->delete();

        // Crear un mensaje flash
        session()->flash('mensaje', 'Sabor eliminado correctamente');

        // Redireccionar al listado de sabores
        return redirect()->route('dashboard.sabores');
    }


    //Tortas

    /*public function tortas(){
        $tortas = Torta::where('categoria', 'tortas')->get();
        return view('components.layouts.auth.tortas.tortas-dashboard',[
            'tortas' => $tortas
        ]);
    }

    //Agregar torta

    public function tortasCrear(){
        $tortas = Torta::all();
        $title = "Tortas Sanfra";

        return view('components.layouts.auth.tortas.crear', [
            'tortas' => $tortas,
            'title' => $title
        ]);
    }

    //Actualizar torta
    public function tortasUpdate(Torta $torta){
        $title = $torta->Nombre;
        $torta = Torta::findOrFail($torta->id);

        return view('components.layouts.auth.tortas.update',[
        'title' => $title,
        'torta' => $torta
        ]);
    }

    //Borrar tortas
    public function tortasDestroy($id)
    {
        // Buscar el sabor por su ID
        $torta = Torta::findOrFail($id);

        // Eliminarlo
        $torta->delete();

        // Crear un mensaje flash
        session()->flash('mensaje', 'Torta eliminada correctamente');

        // Redireccionar al listado de tortas
        return redirect()->route('dashboard.tortas');
    }*/


        //postres

    public function postres(){
        $postres = Postre::all();
        return view('components.layouts.auth.postres.postres-dashboard',[
            'postres' => $postres
        ]);
    }
    public function postresCrear(){
        $postres = Postre::all();
        $title = "Postres Sanfra";


        return view('components.layouts.auth.postres.crear',[
            'postres' => $postres,
            'title' => $title
        ]);
    }
    //Actualizar postre
    public function postresUpdate(Postre $postre){

        $title = $postre->nombre;
        $postre = Postre::findOrFail($postre->id);

        return view('components.layouts.auth.postres.update',[
        'title' => $title,
        'postre' => $postre
        ]);
    }

    //Borrar postre
    public function postresDestroy($id)
    {
        // Buscar el sabor por su ID
        $postre = Postre::findOrFail($id);
        if ($postre->imagen_url)
             { Storage::disk('public')->delete('postres/' . $postre->imagen_url);
         }
        // Eliminarlo
        $postre->delete();

        // Crear un mensaje flash
        session()->flash('mensaje', 'Postre eliminado correctamente');

        // Redireccionar al listado de postres
        return redirect()->route('dashboard.postres');
    }
}
