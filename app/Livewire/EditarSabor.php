<?php

namespace App\Livewire;

use App\Models\Sabores;
use Livewire\Component;

class EditarSabor extends Component
{
    public $id;
    public $nombre;
    public $categoria;

    protected $rules = [
        'nombre' => 'required',
        'categoria' => 'required',
    ];

    public function mount(Sabores $sabor)
    {
        $this->id = $sabor->id;
        $this->nombre = $sabor->nombre;
        $this->categoria = $sabor->categoria;
    }

    public function EditarSabor()
    {
        $this->validate();

        $sabor = Sabores::findOrFail($this->id);
        $sabor->update([
            'nombre' => $this->nombre,
            'categoria' => $this->categoria,
        ]);

        session()->flash('mensaje', 'Sabor editado correctamente');
        return redirect()->route('dashboard.sabores');
    }

    public function render()
    {
        return view('livewire.editar-sabor');
    }
}
