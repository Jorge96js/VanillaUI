<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Heladeria;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage; // Importación correcta
use Intervention\Image\Laravel\Facades\Image; // Importación correcta para v3

class AgregarHeladeria extends Component
{
    use WithFileUploads;

    public $Nombre;
    public $Telefono;
    public $Horarios;
    public $Direccion;
    public $Delivery = '';
    public $Foto;

    protected $rules = [
        'Nombre' => 'required|string|max:255',
        'Telefono' => 'required|string|max:20',
        'Horarios' => 'required|string|max:255',
        'Direccion' => 'required|string|max:255',
        'Delivery' => 'required|boolean',
        'Foto' => 'required|image|max:2048', // Límite de 2MB
    ];

    public function AgregarHeladeria()
    {
        $this->validate();

        // 1. Generar un nombre único con extensión .jpg
        $nombreArchivo = hexdec(uniqid()) . '.jpg';

        // 2. Leer la foto temporal y convertirla a JPG
        $img = Image::read($this->Foto->getRealPath());
        $encoded = $img->toJpeg(80); // Conversión a JPG con calidad 80%

        // 3. Guardar en la carpeta 'heladerias' dentro del disco public
        Storage::disk('public')->put('heladerias/' . $nombreArchivo, $encoded);

        // 4. Almacenar registro en la Base de Datos
        Heladeria::create([
            'Nombre' => $this->Nombre,
            'Telefono' => $this->Telefono,
            'Horarios' => $this->Horarios,
            'Direccion' => $this->Direccion,
            'Delivery' => $this->Delivery,
            'Foto' => $nombreArchivo, // Guardamos solo el nombre del archivo
        ]);

        // Crear un mensaje de éxito
        session()->flash('mensaje', 'Heladería agregada correctamente');

        // Redireccionar
        return redirect()->route('dashboard.heladerias');
    }

    public function render()
    {
        return view('livewire.agregar-heladeria');
    }
}
