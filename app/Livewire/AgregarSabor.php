<?php

namespace App\Livewire;

use App\Models\Sabores;
use Livewire\Component;

class AgregarSabor extends Component
{
    public $nombre;
    public $categoria;

    protected $rules = [
        'nombre' => 'required',
        'categoria' => 'required',
    ];

    public function AgregarSabor(){
        $this->validate();

        Sabores::create([
            'nombre' => $this->nombre,
            'categoria' => $this->categoria,
        ]);
        //crear un mensaje
        session()->flash('mensaje', 'Sabor agregado correctamente');
        //redireccionar
        return redirect()->route('dashboard.sabores');
    }

    public function render()
    {

        return view('livewire.agregar-sabor');
    }
}
