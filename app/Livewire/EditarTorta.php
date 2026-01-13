<?php

namespace App\Livewire;

use App\Models\Torta;
use Livewire\Component;

class EditarTorta extends Component
{
    public $id;
    public $nombre;
    public $categoria;

    protected $rules = [
        'nombre' => 'required|string|max:255',
        'categoria' => 'required|string|max:255',
    ];

    public function mount(Torta $torta)
    {
        $this->id = $torta->id;
        $this->nombre = $torta->nombre;
        $this->categoria = $torta->categoria;
    }

    public function EditarTorta()
    {
        $this->validate();

        $torta = Torta::findOrFail($this->id);
        $torta->update([
            'nombre' => $this->nombre,
            'categoria' => $this->categoria,
        ]);

        session()->flash('mensaje', 'Torta editada correctamente');
        return redirect()->route('dashboard.tortas');
    }

    public function render()
    {
        return view('livewire.editar-torta');
    }
}
