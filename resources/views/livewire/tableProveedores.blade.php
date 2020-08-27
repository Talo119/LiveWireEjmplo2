<h5 class="text-primary">
    <i class="fas fa-table fa-fw"></i>
    Listado de Proveedores       
</h5>

<div class="table-responsive">
    <table class="table table-sm"> 
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Email</th>
                <th colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proveedores as $proveedor)
            <tr>
                <td>{{ $proveedor->id}}</td>
                <td>{{ $proveedor->nombre}}</td>
                <td>{{ $proveedor->direccion}}</td>
                <td>{{ $proveedor->telefono}}</td>
                <td>{{ $proveedor->email}}</td>
                <td>
                    <a href="#" class="text-primary" wire:click="edit({{ $proveedor->id }})">
                    <i class="fas fa-edit fa-fw"></i>
                    </a>                
                </td>
                <td>
                    <a href="#" class="text-danger" wire:click="destroyProveedor({{ $proveedor->id }})">
                    <i class="fas fa-trash fa-fw"></i>
                    </a>            
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
{{ $proveedores->links()}}