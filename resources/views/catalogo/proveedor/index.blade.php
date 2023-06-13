<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Proveedores') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-xl uppercase font-bold">
                    <h2>mis proveedores</h2>
                </div>

                <div class="p-6">
                    <a href="{{route('proveedor.create')}}">
                        <x-primary-button>
                            {{ __('Agregar proveedor') }}
                        </x-primary-button>
                    </a>
                </div>

                <div class="p-6">
                    <table class="table table-striped uppercase" id="clientes">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>RFC</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($proveedores as $proveedor)
                            <tr>
                                <td>{{$proveedor->id}}</td>
                                <td>{{$proveedor->nombre}}</td>
                                <td>{{$proveedor->direccion}}</td>
                                <td>{{$proveedor->email}}</td>
                                <td>
                                    <div class="flex gap-2">
                                        <a href="{{route('proveedor.edit',$proveedor->id)}}">
                                            <button class="btn btn-warning"><i
                                                    class="bi bi-pencil-square"></i>Editar</button>
                                        </a>

                                        <form action="{{route('proveedor.destroy',$proveedor->id)}}" class="delete"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger"><i class="bi bi-trash3"></i>Eliminar</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

    @if(session('delete') =='ok' )
        <script>
            Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
        </script>
    @endif

<script>
    $('.delete').submit(function (event){
        event.preventDefault();

        Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                this.submit();
            }
            })

    })
                
</script>
<script>
    $('#proveedores').DataTable();
</script>