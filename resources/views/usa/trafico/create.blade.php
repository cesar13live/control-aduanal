<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Operaciones USA') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 flex gap-5">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-3/4">
                <div class="block m-6">
            
                    <form action="{{route('trafico.store')}}" method="POST" novalidate>
                        @csrf
                    <div class="flex gap-5">
                        <div class="md:w-1/4">
                            <x-text-input 
                            id="imagen" 
                            class="mt-1 w-full uppercase hidden" 
                            type="text"
                            name="imagen"/>

                            <x-text-input id="usuario" class="mt-1 w-full uppercase hidden" type="text"
                            name="usuario" value="{{auth()->user()->name}}"/>
                            <x-input-label for="operacion" :value="__('Seleccione un tipo de operación')" />
                            <select name="operacion" id="operacion"
                                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                                <option value="">Selecciona una opcion</option>
                                <option value="1">USA-MEXICO</option>
                                <option value="2">MEXICO-USA</option>
                                <option value="3">OTRO</option>
                            </select>
                            <x-input-error :messages="$errors->get('operacion')" class="mt-2" />
                        </div>

                        <div class="md:w-1/4">
                            <x-input-label for="linea" :value="__('Escoger una linea de transporte')" />
                            <select autofocus
                                class="border-gray-300 w-full h-10 select focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                id="linea" name="linea">
                                <option value="">Escoge una linea</option>
                                @foreach ($transportistas as $linea)
                                    <option value="{{ $linea->id }}">{{ $linea->nombre }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('linea')" class="mt-2" />
                        </div>

                        <div class="md:w-1/4">
                            <x-input-label for="fentrada" :value="__('Fecha de entrada')" />
                            <x-text-input id="fentrada" class="block mt-1 w-full uppercase" type="date"
                                name="fentrada" :value="old('fentrada')" required />
                            <x-input-error :messages="$errors->get('fentrada')" class="mt-2" />
                        </div>

                        <div class="md:w-1/4">
                            <x-input-label for="fsalida" :value="__('Fecha de salida')" />
                            <x-text-input id="fsalida" class="block mt-1 w-full uppercase" type="date"
                                name="fsalida" :value="old('fsalida')" required autofocus />
                            <x-input-error :messages="$errors->get('fsalida')" class="mt-2" />
                        </div>

                    </div>

                    <div class="flex gap-5 mt-5">
                        <div class="md:w-1/4">
                            <x-input-label for="guia" :value="__('Numero de Guía')" />
                            <x-text-input id="guia" class="block mt-1 w-full uppercase" type="text"
                                name="guia" :value="old('guia')" required autofocus />
                            <x-input-error :messages="$errors->get('guia')" class="mt-2" />
                        </div>

                        <div class="md:w-1/4">
                            <x-input-label for="cliente" :value="__('Escoger un cliente')" />
                            <select autofocus
                                class="border-gray-300 w-full h-10 select focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                id="cliente" name="cliente">
                                <option value="">Escoge un cliente</option>
                                @foreach ($clientes as $cliente)
                                    <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('cliente')" class="mt-2" />
                        </div>

                        <div class="md:w-1/4">
                            <x-input-label for="proveedor" :value="__('Escoger un proveedor')" />
                            <select autofocus
                                class="border-gray-300 w-full h-10 select focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                id="proveedor" name="proveedor">
                                <option value="">Escoge un proveedor</option>
                                @foreach ($proveedores as $proveedor)
                                    <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('proveedor')" class="mt-2" />
                        </div>

                        <div class="md:w-1/4">
                            <x-input-label for="almacen" :value="__('Escoger almacén')" />
                            <select name="almacen" id="almacen"
                                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                                <option value="">Selecciona una opción</option>
                                <option value="1">CENTRAL 57 I</option>
                                <option value="2">CENTRAL 57 II</option>
                                <option value="3">LAREDO</option>
                                <option value="4">PATIO TRANSPORTISTA</option>
                            </select>
                            <x-input-error :messages="$errors->get('almacen')" class="mt-2" />
                        </div>
                    </div>

                    <div class="flex gap-5 mt-5">

                        <div class="md:w-1/2">
                            <x-input-label for="ubicacion" :value="__('Ubicación')" />
                            <x-text-input type="text" name="ubicacion" id="ubicacion" class="w-full" />
                            <x-input-error :messages="$errors->get('ubicacion')" class="mt-2" class="block mt-1 w-full uppercase" />
                        </div>

                        <div class="md:w-1/2">

                            <x-input-label class="text-xl" :value="__('Prioridad:')" />
                            <div class="md:w-1/4 flex gap-5">
                                <x-text-input id="urgente" class="block mt-1 w-5 h-5 uppercase" type="checkbox"
                                    name="ckOpciones[]" value="urgente" />
                                <x-input-label for="urgente" :value="__('Urgente')" />
                                <x-input-error :messages="$errors->get('urgente')" class="mt-2" />
                            </div>

                            <div class="md:w-1/4 flex gap-5">
                                <x-text-input id="trafico" class="block mt-1 w-5 h-5 uppercase" type="checkbox"
                                    name="ckOpciones[]" value="trafico" />
                                <x-input-label for="trafico" :value="__('Tráfico')" />
                                <x-input-error :messages="$errors->get('trafico')" class="mt-2" />
                            </div>

                            <div class="md:w-1/4 flex gap-5">
                                <x-text-input id="virtual" class="block mt-1 w-5 h-5 uppercase" type="checkbox"
                                    name="ckOpciones[]" value="virtual" />
                                <x-input-label for="virtual" :value="__('Virtual')" />
                                <x-input-error :messages="$errors->get('virtual')" class="mt-2" />
                            </div>
                        </div>

                        <div class="md:w-1/2">
                            
                            <x-input-label class="text-xl" :value="__('Descripción:')" />
                            <div class="md:w-1/4 flex gap-5">
                                <x-text-input id="peligroso" class="block mt-1 w-5 h-5 uppercase" type="checkbox"
                                    name="ckOpciones2[]" value="peligroso" />
                                <x-input-label for="peligroso" :value="__('Material Peligroso')" />
                                <x-input-error :messages="$errors->get('peligroso')" class="mt-2" />
                            </div>

                            <div class="md:w-1/4 flex gap-5">
                                <x-text-input id="dimensiones" class="block mt-1 w-5 h-5 uppercase" type="checkbox"
                                    name="ckOpciones2[]" value="dimensiones" />
                                <x-input-label for="dimensiones" :value="__('Exceso de dimensiones')" />
                                <x-input-error :messages="$errors->get('dimensiones')" class="mt-2" />
                            </div>

                            <div class="md:w-1/4 flex gap-5">
                                <x-text-input id="tarimas" class="block mt-1 w-5 h-5 uppercase" type="checkbox"
                                    name="ckOpciones2[]" value="tarimas" />
                                <x-input-label for="tarimas" :value="__('Con Tarimas')" />
                                <x-input-error :messages="$errors->get('tarimas')" class="mt-2" />
                            </div>
                        </div>



                    </div>

                    <div class="flex gap-5 mt-5">
                        <div class="md:w-1/4">
                            <x-input-label for="pesolb" :value="__('Peso en Libras')" />
                            <x-text-input type="text" name="pesolb" id="pesolb" class="w-full" />
                            <x-input-error :messages="$errors->get('pesolb')" class="mt-2" class="block mt-1 w-full uppercase" />
                        </div>

                        <div class="md:w-1/4">
                            <x-input-label for="pesokg" :value="__('Peso en Kilogramos')" />
                            <x-text-input type="text" name="pesokg" id="pesokg" class="w-full" />
                            <x-input-error :messages="$errors->get('pesokg')" class="mt-2" class="block mt-1 w-full uppercase" />
                        </div>

                        <div class="md:w-1/4">
                            <x-input-label for="flete" :value="__('Flete')" />
                            <select name="flete" id="flete"
                                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                                <option value="">Selecciona una opcion</option>
                                <option value="1">PPD</option>
                                <option value="2">COL</option>
                                <option value="3">COD</option>
                            </select>
                            <x-input-error :messages="$errors->get('flete')" class="mt-2" />
                        </div>

                        <div class="md:w-1/4">
                            <x-input-label for="valor" :value="__('Valor')" />
                            <x-text-input id="valor" class="money block mt-1 w-full uppercase" type="number"
                                name="valor" :value="old('valor')" required autofocus />
                            <x-input-error :messages="$errors->get('valor')" class="mt-2" />
                        </div>
                    </div>

                    <div class="flex gap-5 mt-5 mb-5">
                        <div class="md:w-1/3">
                            <x-input-label for="transporte" :value="__('Transporte')" />
                            <select name="transporte" id="transporte"
                                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                                <option value="">Selecciona una opcion</option>
                                <option value="1">Maritimo</option>
                                <option value="2">Ferroviario de doble Estiba</option>
                                <option value="3">Carretero-Ferroviario</option>
                                <option value="4">Aereo</option>
                                <option value="5">Postal</option>
                                <option value="6">Ferroviario</option>
                                <option value="7">Carretero</option>
                                <option value="8">Tuberia</option>
                            </select>
                            <x-input-error :messages="$errors->get('transporte')" class="mt-2" />
                        </div>

                        <div class="md:w-1/3">
                            <x-input-label for="descripcion" :value="__('Descripción de la mercancia')" />
                            <textarea class="border-gray-300 w-full focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                name="descripcion" id="descripcion">{{ old('descripcion') }}</textarea>
                            <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
                        </div>

                        <div class="md:w-1/3">
                            <x-input-label for="comentarios" :value="__('Comentarios')" />
                            <textarea class="border-gray-300 w-full focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                name="comentarios" id="comentarios">{{ old('comentarios') }}</textarea>
                            <x-input-error :messages="$errors->get('comentarios')" class="mt-2" />
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <x-primary-button>
                            {{ __('Crear trafico') }}
                        </x-primary-button>
                    </div>
                </div>
            </form>
            </div>


            <div class="md:w-1/4">
                <form action="{{ route('imagenesTrafico.store') }}" method="POST"
                    class="dropzone border-2 w-full rounded flex-col justify-center items-center border-dashed h-96"
                    id="dropzone" name="dropzone">
                    @csrf
                </form>

                <x-primary-button>
                    {{ __('agregar factura') }}
                </x-primary-button>

                <x-primary-button data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button">
                    {{ __('agregar bulto') }}
                </x-primary-button>
            </div>

        </div>


        <div id="popup-modal" tabindex="-1"
            class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
            <div class="relative w-full h-full max-w-md md:h-auto">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button"
                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                        data-modal-hide="popup-modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-6 text-center">
                        <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to
                            delete this product?</h3>
                        <button data-modal-hide="popup-modal" type="button"
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                            Yes, I'm sure
                        </button>
                        <button data-modal-hide="popup-modal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                            cancel</button>
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

    });
</script>
