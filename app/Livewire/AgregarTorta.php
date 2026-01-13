<?php

namespace App\Livewire;

use App\Models\Torta;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage; // Importación correcta
use Intervention\Image\Laravel\Facades\Image; // Importación para v3

class AgregarTorta extends Component
{
    use WithFileUploads;

    public $nombre;
    public $categoria;
    public $imagen;

    protected $rules = [
        'nombre' => 'required',
        'categoria' => 'required',
        'imagen' => 'required' // Máximo 2MB recomendado
    ];

    public function AgregarTorta()
    {
        $this->validate();

        // 1. Generar un nombre único con extensión .jpg
        $nombreArchivo = hexdec(uniqid()) . '.jpg';

        // 2. Leer la imagen y convertirla a JPG usando Intervention Image
        $img = Image::read($this->imagen->getRealPath());
        $encoded = $img->toJpeg(80); // Convertir a JPG con 80% de calidad

        // 3. Guardar el archivo procesado en la carpeta 'tortas' del disco public
        Storage::disk('public')->put('tortas/' . $nombreArchivo, $encoded);

        // 4. Guardar en la base de datos
        Torta::create([
            'nombre' => $this->nombre,
            'categoria' => $this->categoria,
            'imagen' => $nombreArchivo,
        ]);

        // Crear un mensaje de éxito
        session()->flash('mensaje', 'Torta agregada correctamente');

        // Redireccionar
        return redirect()->route('dashboard.tortas');
    }

    public function render()
    {
        return view('livewire.agregar-torta');
    }
}
