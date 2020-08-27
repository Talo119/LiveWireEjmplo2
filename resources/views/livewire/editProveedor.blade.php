<h5 class="text-primary"><i class="fas fa-pencil-alt fa-fw"></i> Editar Proveedor</h5>
@include('livewire.formProveedor')
<button wire:click="update" class="btn btn-success mb-4">
    Actualizar
</button>

<button wire:click="default" class="btn btn-link text-danger mb-4">
    Cancelar
</button>