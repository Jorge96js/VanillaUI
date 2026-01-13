<?php

namespace App\Livewire;

use App\Models\Postre;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class EditarPostre extends Component
{
    use WithFileUploads;

    public $postre_id;
    public $nombre;
    public $categoria;
    public $precio;
    public $descripcion;
    public $imagen_url;   // Este guarda el nombre del archivo en la BD
    public $imagen_nueva; // Este guarda el archivo temporal al subirlo

    public function mount(Postre $postre)
    {
        $this->postre_id = $postre->id;
        $this->nombre = $postre->nombre;
        $this->categoria = $postre->categoria;
        $this->precio = $postre->precio;
        $this->descripcion = $postre->descripcion;
        $this->imagen_url = $postre->imagen_url; // Campo de tu BD
    }

    protected $rules = [
        'nombre' => 'required|max:255',
        'categoria' => 'required|max:255',
        'descripcion' => 'nullable|max:255',
        'imagen_nueva' => 'nullable|image',
        'precio' => 'nullable|numeric'

    ];

    public function EditarPostre()
    {
        $this->validate();

        $postre = Postre::find($this->postre_id);
        $nombreImagen = $postre->imagen_url;

        if ($this->imagen_nueva) {
            // Eliminar imagen anterior si existe
            if ($postre->imagen_url) {
                Storage::disk('public')->delete('postres/' . $postre->imagen_url);
            }

            // Guardar la nueva imagen
            $ruta = $this->imagen_nueva->store('postres', 'public');
            $nombreImagen = str_replace('postres/', '', $ruta);
        }

        $postre->update([
            'nombre' => $this->nombre,
            'categoria' => $this->categoria,
            'descripcion' => $this->descripcion,
            'imagen_url' => $nombreImagen,
            'precio' => $this->precio,
        ]);

        session()->flash('mensaje', 'Postre actualizado correctamente');
        return redirect()->route('dashboard.postres');
    }

    public function render()
    {
        return view('livewire.editar-postre');
    }
}
