<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Proveedore;
class ProveedorComponent extends Component
{
    use WithPagination;
    public $view = 'createProveedor';
    public $proveedor_id, $nombre, $direccion, $telefono, $email;
    public function render()
    {
        return view('livewire.proveedor-component',[
            'proveedores' => Proveedore::orderBy('id','desc')->paginate(10),
        ]);
    }

    public function store()
    {
        $this->validate(['nombre'=> 'required', 'direccion' => 'required','telefono' => 'required','email' => 'required']);

        $proveedor = Proveedore::create([
            'nombre' => $this->nombre,
            'direccion' => $this->direccion,
            'telefono' => $this->telefono,
            'email' => $this->email,
        ]);
        
        $this->edit($proveedor->id);
        
        //$this->title = '';
        //$this->body = '';
    }

    public function edit($id)
    {
        $proveedor = Proveedore::find($id);

        $this->proveedor_id = $proveedor->id;
        $this->nombre = $proveedor->nombre;
        $this->direccion = $proveedor->direccion;
        $this->telefono = $proveedor->telefono;
        $this->email = $proveedor->email;

        $this->view = 'editProveedor';
    }

    public function update()
    {
        $this->validate(['nombre'=> 'required', 'direccion' => 'required','telefono' => 'required','email' => 'required']);

        $proveedor = Proveedore::find($this->proveedor_id);

        $proveedor->update([
            'nombre'     => $this->nombre,
            'direccion'  => $this->direccion,
            'telefono'  => $this->telefono,
            'email'  => $this->email,
        ]);

        $this->default();
    }

    public function destroyProveedor($id)
    {
        Proveedore::destroy($id);
    }

    public function default()
    {
        $this->nombre    = '';
        $this->direccion = '';
        $this->telefono  = '';
        $this->email  = '';
        $this->view = 'createProveedor';

    }

}
