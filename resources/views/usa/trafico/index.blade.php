<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Operaciones USA') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-8 lg:px-10">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 uppercase font-bold text-xl">
                    {{ __('Mis traficos') }}
                </div>

                <div class="p-6">
                    <a href="{{ route('trafico.create') }}">
                        <x-primary-button>
                            {{ __('Agregar trafico') }}
                        </x-primary-button>
                    </a>
                </div>

                <div class="p-6">
                    <table class="table table-striped uppercase w-full" id="traficos">
                        <thead>
                            <tr>
                                <th>Trafico</th>
                                <th>Entrada/Salida</th>
                                <th>Cliente</th>
                                <th>Proveedor</th>
                                <th>Status</th>
                                <th>Pedimento</th>
                                <th>Capturó</th>
                                <th>Modificó</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($traficos as $trafico)
                            <tr>
                                <td>{{$trafico->id}}</td>
                                <td>{{$trafico->fentrada}} - {{$trafico->fsalida}}</td>
                                <td>{{$trafico->cliente}}</td>
                                <td>{{$trafico->proveedor}}</td>
                                <td>{{$trafico->status}}</td>
                                <td>120</td>
                                <td>{{$trafico->usuario}}</td>
                                <td>{{$trafico->usuario}}</td>
                                <td>
                                    <div class="flex gap-2">
                                        <a href="{{route('trafico.edit',$trafico->id)}}">
                                            <button class="btn btn-warning"><i
                                                    class="bi bi-pencil-square"></i>Editar</button>
                                        </a>

                                        <a href="{{route('evTrafico.show',$trafico->id)}}">
                                            <button class="btn btn-warning"><i
                                                    class="bi bi-card-image"></i> Imagenes</button>
                                        </a>
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

<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (session('delete') == 'ok')
    <script>
        Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
        )
    </script>
@endif

<script>
    $('.delete').submit(function(event) {
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
    $('#traficos').DataTable();
</script>
