<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Heladeria;
use Livewire\WithFileUploads;

class EditarHeladeria extends Component
{

    use WithFileUploads;

    public $heladeria_id;
    public $Nombre;
    public $Telefono;
    public $Horarios;
    public $Direccion;
    public $Delivery;
    public $Foto;
    public $Foto_nueva;

    protected $rules = [
        'Nombre' => 'required|string|max:255',
        'Telefono' => 'required|string|max:20',
        'Horarios' => 'required|string|max:255',
        'Direccion' => 'required|string|max:255',
        'Delivery' => 'required|boolean',
        'Foto_nueva' => 'required|image',
    ];

    public function mount(Heladeria $heladeria){

        $this->heladeria_id = $heladeria->id;
        $this->Nombre = $heladeria->Nombre;
        $this->Telefono = $heladeria->Telefono;
        $this->Horarios = $heladeria->Horarios;
        $this->Direccion = $heladeria->Direccion;
        $this->Delivery = $heladeria->Delivery;
        $this->Foto = $heladeria->Foto;
    }


    public function render()
    {

       // $heladeria = Heladeria::findOrFail(1);

        return view('livewire.editar-heladeria',[
            //'heladeria' => $heladeria
        ]);
    }

    //Funcion para editar
    public function EditarHeladeria(){
        $this->validate();

        //almacenar imagen
        $Foto_nueva = $this->Foto_nueva->store('heladerias', 'public');
        $datos['Foto_nueva'] = str_replace('heladerias/', '' , $Foto_nueva );

        //Actualizar heladeria
        Heladeria::where('id', $this->heladeria_id)->update([
            'Nombre' => $this->Nombre,
            'Telefono' => $this->Telefono,
            'Horarios' => $this->Horarios,
            'Direccion' => $this->Direccion,
            'Delivery' => $this->Delivery,
            'Foto' => $datos['Foto_nueva'],
        ]);
        //crear un mensaje
        session()->flash('mensaje', 'Heladeria actualizada correctamente');
        //redireccionar
        return redirect()->route('dashboard.heladerias');
    }

}
