<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Operaciones USA') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 flex gap-5">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-2/3">
                <div class="block p-6">
                    <form action="{{ route('arribo.update') }}" method="POST" novalidate>
                        @method('PUT')
                        @csrf
                        <input type="text" id="id" name="id" value="{{ $arribo->id }}" hidden>
                        <x-text-input id="imagen" class="block mt-1 w-full uppercase" name="imagen"
                            value="{{ $arribo->imagen }}" hidden />

                        <div class="flex gap-5">
                            <div class="md:w-1/2">
                                <x-input-label for="cliente" :value="__('Escoger Cliente')" />
                                <select name="cliente"
                                    class="select border-gray-300 w-full h-10 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                    id="cliente">
                                    <option value="">Escoge un cliente</option>
                                    @foreach ($clientes as $itemCliente)
                                        <option value="{{ $itemCliente->id }}"
                                            {{ $itemCliente->id == $arribo->cliente ? 'selected' : '' }}>
                                            {{ $itemCliente->nombre }}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('cliente')" class="mt-2" />
                            </div>

                            <div class="md:w-1/2">
                                <x-input-label for="proveedor" :value="__('Escoger Proveedor')" />
                                <select name="proveedor"
                                    class="select border-gray-300 w-full h-10 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                    id="proveedor">
                                    <option value="">Escoge un proveedor</option>
                                    @foreach ($proveedores as $itemProveedor)
                                        <option value="{{ $itemProveedor->id }}"
                                            {{ $itemProveedor->id == $arribo->proveedor ? 'selected' : '' }}>
                                            {{ $itemProveedor->nombre }}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('proveedor')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex gap-5 mt-2">
                            <div class="md:w-1/2">
                                <x-input-label for="fentrada" :value="__('Fecha de entrada')" />
                                <x-text-input id="fentrada" class="block mt-1 w-full uppercase" type="date"
                                    name="fentrada" :value="$arribo->fentrada" required />
                                <x-input-error :messages="$errors->get('fentrada')" class="mt-2" />
                            </div>


                            <div class="md:w-1/2">
                                <x-input-label for="fsalida" :value="__('Fecha de salida')" />
                                <x-text-input id="fsalida" class="block mt-1 w-full uppercase" type="date"
                                    name="fsalida" :value="$arribo->fsalida" required />
                                <x-input-error :messages="$errors->get('fsalida')" class="mt-2" />
                            </div>

                        </div>

                        <div class="flex gap-5 mt-2">

                            <div class="md:w-2/4">
                                <x-input-label for="linea" :value="__('Escoger línea de transporte')" />
                                <select name="linea"
                                    class="select border-gray-300 w-full h-10 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                    id="linea">
                                    <option value="">Escoge un transportista</option>
                                    @foreach ($transportistas as $itemTps)
                                        <option value="{{ $itemTps->id }}"
                                            {{ $itemTps->id == $arribo->linea ? 'selected' : '' }}>
                                            {{ $itemTps->nombre }}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('linea')" class="mt-2" />
                            </div>

                            <div class="md:w-1/4">
                                <x-input-label for="flete" :value="__('Flete')" />
                                <select name="flete" id="flete"
                                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                    <option value="">Selecciona una opcion</option>
                                    <option value="1" {{ $arribo->flete == 1 ? 'selected' : '' }}>PPD</option>
                                    <option value="2" {{ $arribo->flete == 2 ? 'selected' : '' }}>COL</option>
                                    <option value="3" {{ $arribo->flete == 3 ? 'selected' : '' }}>COD</option>
                                </select>
                                <x-input-error :messages="$errors->get('flete')" class="mt-2" />
                            </div>
                            <div class="md:w-1/4">
                                <x-input-label for="valor" :value="__('Valor')" />
                                <x-text-input id="valor" class="block mt-1 w-full uppercase" type="number"
                                    name="valor" :value="$arribo->valor" required />
                                <x-input-error :messages="$errors->get('valor')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex gap-5 mt-2">
                            <div class="md:w-2/4">
                                <x-input-label for="guia" :value="__('Número de guía')" />
                                <x-text-input id="guia" class="block mt-1 w-full uppercase" type="text"
                                    name="guia" value="{{ $arribo->guia }}" required />
                                <x-input-error :messages="$errors->get('guia')" class="mt-2" />
                            </div>

                            <div class="md:w-1/4">
                                <x-input-label for="almacen" :value="__('Escoger almacén')" />
                                <select name="almacen" id="almacen"
                                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                    <option value="">Selecciona una opción</option>
                                    <option {{ $arribo->almacen == 1 ? 'selected' : '' }} value="1">CENTRAL 57 I
                                    </option>
                                    <option {{ $arribo->almacen == 2 ? 'selected' : '' }} value="2">CENTRAL 57 II
                                    </option>
                                    <option {{ $arribo->almacen == 3 ? 'selected' : '' }} value="3">LAREDO
                                    </option>
                                    <option {{ $arribo->almacen == 4 ? 'selected' : '' }} value="4">PATIO
                                        TRANSPORTISTA</option>
                                </select>
                                <x-input-error :messages="$errors->get('almacen')" class="mt-2" />
                            </div>

                            <div class="md:w-1/4">
                                <x-input-label for="ubicacion" :value="__('Ubicación')" />
                                <x-text-input id="ubicacion" class="block mt-1 w-full uppercase" type="text"
                                    name="ubicacion" :value="$arribo->ubicacion" required />
                                <x-input-error :messages="$errors->get('ubicacion')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex gap-5 mt-2">
                            <div class="md:w-1/4">
                                <x-input-label for="pesolb" :value="__('Peso en Lb')" />
                                <x-text-input id="pesolb" class="block mt-1 w-full uppercase" type="text"
                                    name="pesolb" :value="$arribo->pesolb" required />
                                <x-input-error :messages="$errors->get('pesolb')" class="mt-2" />
                            </div>
                            <div class="md:w-1/4">
                                <x-input-label for="pesokg" :value="__('Peso en Kg')" />
                                <x-text-input id="pesokg" class="block mt-1 w-full uppercase" type="text"
                                    name="pesokg" :value="$arribo->pesokg" required />
                                <x-input-error :messages="$errors->get('pesokg')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex gap-5 mt-2">
                            <div class="md:w-1/3 flex gap-5">
                                <input
                                    @foreach ($opciones as $item)
                                            @if (in_array('material', $opciones))
                                                {{ 'checked' }}
                                            @endif @endforeach
                                    id="material" type="checkbox" name="ckOpciones[]"
                                    class="border-gray-300 focus:border-indigo-500 
                                    focus:ring-indigo-500 rounded-md shadow-sm"
                                    required value="material" />

                                <x-input-label for="material" :value="__('Material Peligroso')" />
                                <x-input-error :messages="$errors->get('material')" class="mt-2" />
                            </div>

                            <div class="md:w-1/3 flex gap-5">
                                <input
                                    @foreach ($opciones as $item)
                                            @if (in_array('dimensiones', $opciones))
                                                {{ 'checked' }}
                                            @endif @endforeach
                                    id="dimensiones" type="checkbox" name="ckOpciones[]"
                                    class="border-gray-300 focus:border-indigo-500 
                                    focus:ring-indigo-500 rounded-md shadow-sm"
                                    required value="dimensiones" />

                                <x-input-label for="dimensiones" :value="__('Exceso de dimensiones')" />
                                <x-input-error :messages="$errors->get('dimensiones')" class="mt-2" />
                            </div>

                            <div class="md:w-1/3 flex gap-5">
                                <input value="tarimas" id="tarimas"
                                    class="border-gray-300 focus:border-indigo-500 
                                                focus:ring-indigo-500 rounded-md shadow-sm"
                                    type="checkbox" name="ckOpciones[]" required
                                    @foreach ($opciones as $item)
                                              @if (in_array('tarimas', $opciones))
                                                  {{ 'checked' }}
                                              @endif @endforeach />
                                <x-input-label for="tarimas" :value="__('Con Tarimas')" />
                                <x-input-error :messages="$errors->get('tarimas')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex gap-5 mt-2">
                            <div class="md:w-1/2">
                                <x-input-label for="descripcion" :value="__('Descripción de la mercancia')" />
                                <textarea class="border-gray-300 w-1/2 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                    name="descripcion" id="descripcion">{{ $arribo->descripcion }}</textarea>
                                <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
                            </div>

                            <div class="md:w-1/2">
                                <x-input-label for="comentarios" :value="__('Comentarios')" />
                                <textarea class="border-gray-300 w-1/2 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                    name="comentarios" id="comentarios">{{ $arribo->comentarios }}</textarea>
                                <x-input-error :messages="$errors->get('comentarios')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <x-primary-button>
                                {{ __('actualizar arribo') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="block w-1/3">
                <form action="{{ route('imagenes.store') }}"
                    class="dropzone border-2 w-full rounded flex-col justify-center items-center border-dashed h-56"
                    id="dropzone">
                    @csrf
                </form>

                <div>
                    <table class="table table-striped uppercase" id="bultos">
                        <tr>
                            <th>ID</th>
                            <th>Marca</th>
                            <th>Numero</th>
                            <th>Cantidad</th>
                            <th>Clase</th>
                            <th>Acciones</th>
                        </tr>

                        @foreach ($getBulto as $bulto)
                            <tr>
                                <td>{{ $bulto->id }}</td>
                                <td>{{ $bulto->marca }}</td>
                                <td>{{ $bulto->numero }}</td>
                                <td>{{ $bulto->cantidad }}</td>
                                <td>{{ $bulto->clase }}</td>
                                <td>
                                    <div class="flex gap-2">
                                        <button class="btn btn-warning edit" data-modal-target="authentication-modal"
                                            data-modal-toggle="authentication-modal"><i
                                                class="bi bi-pencil-square"></i></button>
                                        {{-- <button class="btn btn-danger"><i class="bi bi-trash3"></i></button> --}}
                                    </div>
                                </td>

                            </tr>
                        @endforeach


                    </table>
                </div>

                <x-primary-button data-modal-target="create" data-modal-toggle="create">
                    agregar bulto
                </x-primary-button>

                

  <div id="create" tabindex="-1" aria-hidden="true"
  class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
  <div class="relative w-full h-full max-w-md md:h-auto">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          <button type="button"
              class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
              data-modal-hide="authentication-modal">
              <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
              </svg>
              <span class="sr-only">Cerrar</span>
          </button>
          <div class="px-6 py-6 lg:px-8">
              <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Crear bulto</h3>
              <form class="space-y-6" action="{{route('bultoArribo.store')}}" method="POST">
                  @csrf

                  <div class="block justify-between">
                    <x-text-input class="uppercase w-full hidden" name="idarribo"
                              id="idarribo" :value="$arribo->id"/>
                      <div>
                          <x-input-label for="marca" :value="__('Marca')" />
                          <x-text-input class="uppercase w-full" name="marca"
                              id="marca" />
                          <x-input-error :messages="$errors->get('marca')" class="mt-2" />
                      </div>

                      <div class="mt-5">
                          <x-input-label for="clase" :value="__('Clase')" />
                          <x-text-input class="uppercase w-full" name="clase"
                              id="clase" />
                          <x-input-error :messages="$errors->get('modelo')" class="mt-2" />
                      </div>

                      <div class="mt-5">
                          <x-input-label for="cantidad" :value="__('Cantidad')" />
                          <x-text-input class="uppercase w-full" name="cantidad"
                              id="cantidad" />
                          <x-input-error :messages="$errors->get('cantidad')" class="mt-2" />
                      </div>
                      <div class="mt-5">
                          <x-input-label for="numero" :value="__('Numero')" />
                          <x-text-input class="uppercase w-full" name="numero"
                              id="numero" />
                          <x-input-error :messages="$errors->get('numero')" class="mt-2" />
                      </div>
                  </div>

                  <x-primary-button>
                     {{ __('agregar')}}
                  </x-primary-button>
              </form>
          </div>
      </div>
  </div>
</div>





                <!-- Main modal -->
                <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                    <div class="relative w-full h-full max-w-md md:h-auto">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button"
                                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                data-modal-hide="authentication-modal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Cerrar</span>
                            </button>
                            <div class="px-6 py-6 lg:px-8">
                                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Editar bulto</h3>
                                <form class="space-y-6" action="{{route('bultoArribo.update')}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="block justify-between">
                                        <x-text-input class="mi-input hidden" name="id"
                                        id="id" />
                                        <div>
                                            <x-input-label for="marca" :value="__('Marca')" />
                                            <x-text-input class="mi-input uppercase w-full" name="marca"
                                                id="marca" />
                                            <x-input-error :messages="$errors->get('marca')" class="mt-2" />
                                        </div>

                                        <div class="mt-5">
                                            <x-input-label for="clase" :value="__('Clase')" />
                                            <x-text-input class="mi-input uppercase w-full" name="clase"
                                                id="clase" />
                                            <x-input-error :messages="$errors->get('modelo')" class="mt-2" />
                                        </div>

                                        <div class="mt-5">
                                            <x-input-label for="cantidad" :value="__('Cantidad')" />
                                            <x-text-input class="mi-input uppercase w-full" name="cantidad"
                                                id="cantidad" />
                                            <x-input-error :messages="$errors->get('cantidad')" class="mt-2" />
                                        </div>
                                        <div class="mt-5">
                                            <x-input-label for="numero" :value="__('Numero')" />
                                            <x-text-input class="mi-input uppercase w-full" name="numero"
                                                id="numero" />
                                            <x-input-error :messages="$errors->get('numero')" class="mt-2" />
                                        </div>
                                    </div>

                                    <x-primary-button>
                                       {{ __('Actualizar')}}
                                    </x-primary-button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
</x-app-layout>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select').select2();

        let data = [];
        $('#bultos tr').each(function() {
            let row = [];
            $('td', this).each(function() {
                row.push($(this).text());
            });
            data.push(row);
        });

        $('.edit').on('click', function() {
            // Get the parent row element of the clicked button
            let row = $(this).closest('tr');

            // Get the data of the cells in that row
            let id = row.find('td:eq(0)').text();
            let marca = row.find('td:eq(1)').text();
            let numero = row.find('td:eq(2)').text();
            let cantidad = row.find('td:eq(3)').text();
            let modelo = row.find('td:eq(4)').text();

            let array = [id,marca, modelo, cantidad, numero];

            const inputs = document.querySelectorAll('.mi-input');


            for (let i = 0; i < inputs.length; i++) {
                inputs[i].value = array[i];
            }

        });

    });
</script>
