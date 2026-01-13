<?php
namespace App\Livewire;

use App\Models\Postre;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;

class AgregarPostre extends Component
{
    use WithFileUploads;

    public $nombre;
    public $categoria;
    public $descripcion;
    public $imagen_url;
    public $precio;

    protected $rules = [
        'nombre' => 'required|string|max:255',
        'categoria' => 'required|string|max:255',
        'descripcion' => 'nullable|string|max:255',
        'imagen_url' => 'required|image',
        'precio' => 'nullable|numeric'
    ];

    public function AgregarPostre()
    {
        $this->validate();

        // 1. Generar un nombre único con extensión .jpg
        $nombreArchivo = Str::uuid() . '.jpg';

        // 2. Procesar la imagen subida y convertirla a JPG con calidad 80
        $imagenProcesada = Image::read($this->imagen_url->getRealPath())
            ->toJpeg(80);

        // 3. Guardar en la carpeta 'postres' del disco 'public'
        Storage::disk('public')->put('postres/' . $nombreArchivo, (string) $imagenProcesada);

        // 4. Guardar solo el nombre en la BD
        Postre::create([
            'nombre' => $this->nombre,
            'categoria' => $this->categoria,
            'descripcion' => $this->descripcion,
            'precio' => $this->precio,
            'imagen_url' => $nombreArchivo,
        ]);

        // 5. Mensaje de éxito
        session()->flash('mensaje', 'Postre agregado correctamente');

        // 6. Redireccionar
        return redirect()->route('dashboard.postres');
    }

    public function render()
    {
        return view('livewire.agregar-postre');
    }
}
