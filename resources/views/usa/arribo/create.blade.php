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
                    <form action="{{route('arribo.store')}}" method="POST" novalidate>
                        @csrf
                        <x-text-input id="imagen" 
                                      class="block mt-1 w-full uppercase" 
                                      type="hidden"
                                      name="imagen"/>

                        <div class="flex gap-5">
                            <div class="md:w-1/2">
                                <x-input-label for="cliente" :value="__('Escoger Cliente')" />
                                <select autofocus
                                    class="border-gray-300 w-full h-10 select focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                    id="cliente" name="cliente">
                                    <option value="">Escoge un cliente</option>
                                    @foreach ($clientes as $cliente)
                                    <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
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
                                    @foreach ($proveedores as $proveedor)
                                    <option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('proveedor')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex gap-5 mt-2">
                            <div class="md:w-1/2">
                                <x-input-label for="fentrada" :value="__('Fecha de entrada')" />
                                <x-text-input id="fentrada" class="block mt-1 w-full uppercase" type="date"
                                    name="fentrada" :value="old('fentrada')" required autofocus />
                                <x-input-error :messages="$errors->get('fentrada')" class="mt-2" />
                            </div>


                            <div class="md:w-1/2">
                                <x-input-label for="fsalida" :value="__('Fecha de salida')" />
                                <x-text-input id="fsalida" class="block mt-1 w-full uppercase" type="date"
                                    name="fsalida" :value="old('fsalida')" required autofocus />
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
                                    @foreach ($transportistas as $tps)
                                    <option value="{{$tps->id}}">{{$tps->nombre}}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('linea')" class="mt-2" />
                            </div>

                            <div class="md:w-1/4">
                                <x-input-label for="flete" :value="__('Flete')" />
                                <select name="flete" id="flete" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                    <option value="">Selecciona una opcion</option>
                                    <option value="1">PPD</option>
                                    <option value="2">COL</option>
                                    <option value="3">COD</option>
                                </select>
                                <x-input-error :messages="$errors->get('flete')" class="mt-2" />
                            </div>
                            <div class="md:w-1/4">
                                <x-input-label for="valor" :value="__('Valor')" />
                                <x-text-input id="valor" class="money block mt-1 w-full uppercase" type="number" name="valor"
                                    :value="old('valor')" required autofocus />
                                <x-input-error :messages="$errors->get('valor')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex gap-5 mt-2">
                            <div class="md:w-2/4">
                                <x-input-label for="guia" :value="__('Número de guía')" />
                                <x-text-input id="guia" class="block mt-1 w-full uppercase" type="text" name="guia"
                                    :value="old('guia')" required autofocus />
                                <x-input-error :messages="$errors->get('guia')" class="mt-2" />
                            </div>

                            <div class="md:w-1/4">
                                <x-input-label for="almacen" :value="__('Escoger almacén')" />
                                <select name="almacen" id="almacen" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                    <option value="">Selecciona una opción</option>
                                    <option value="1">CENTRAL 57 I</option>
                                    <option value="2">CENTRAL 57 II</option>
                                    <option value="3">LAREDO</option>
                                    <option value="4">PATIO TRANSPORTISTA</option>
                                </select>
                                <x-input-error :messages="$errors->get('almacen')" class="mt-2" />
                            </div>

                            <div class="md:w-1/4">
                                <x-input-label for="ubicacion" :value="__('Ubicación')" />
                                <x-text-input id="ubicacion" class="block mt-1 w-full uppercase" type="text"
                                    name="ubicacion" :value="old('ubicacion')" required autofocus />
                                <x-input-error :messages="$errors->get('ubicacion')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex gap-5 mt-2">
                            <div class="md:w-1/4">
                                <x-input-label for="pesolb" :value="__('Peso en Lb')" />
                                <x-text-input id="pesolb" class="block mt-1 w-full uppercase" type="text" name="pesolb"
                                    :value="old('pesolb')" required autofocus />
                                <x-input-error :messages="$errors->get('pesolb')" class="mt-2" />
                            </div>
                            <div class="md:w-1/4">
                                <x-input-label for="pesokg" :value="__('Peso en Kg')" />
                                <x-text-input id="pesokg" class="block mt-1 w-full uppercase" type="text" name="pesokg"
                                    :value="old('pesokg')" required autofocus />
                                <x-input-error :messages="$errors->get('pesokg')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex gap-5 mt-2">
                            <div class="md:w-1/3 flex gap-5">
                                <x-text-input id="material" 
                                              class="block mt-1 w-5 h-5 uppercase" 
                                              type="checkbox"
                                              name="ckOpciones[]" 
                                              value="material"/>
                                <x-input-label for="material" :value="__('Material Peligroso')" />
                                <x-input-error :messages="$errors->get('material')" class="mt-2" />
                            </div>

                            <div class="md:w-1/3 flex gap-5">
                                <x-text-input id="dimensiones" 
                                              value="dimensiones" 
                                              class="block mt-1 w-5 h-5 uppercase" 
                                              type="checkbox"
                                              name="ckOpciones[]"/>
                                <x-input-label for="dimensiones" :value="__('Exceso de dimensiones')"/>
                                <x-input-error :messages="$errors->get('dimensiones')" class="mt-2" />
                            </div>

                            <div class="md:w-1/3 flex gap-5">
                                <x-text-input value="3" 
                                              id="tarimas" 
                                              value="tarimas" 
                                              class="block mt-1 w-5 h-5 uppercase" 
                                              type="checkbox"
                                              name="ckOpciones[]"/>
                                <x-input-label for="tarimas" :value="__('Con Tarimas')" />
                                <x-input-error :messages="$errors->get('tarimas')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex gap-5 mt-2">
                            <div class="md:w-1/2">
                                <x-input-label for="descripcion" :value="__('Descripción de la mercancia')" />
                                <textarea
                                    class="border-gray-300 w-1/2 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                    name="descripcion" id="descripcion">{{old('descripcion')}}</textarea>
                                <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
                            </div>

                            <div class="md:w-1/2">
                                <x-input-label for="comentarios" :value="__('Comentarios')" />
                                <textarea
                                    class="border-gray-300 w-1/2 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                    name="comentarios" id="comentarios">{{old('comentarios')}}</textarea>
                                <x-input-error :messages="$errors->get('comentarios')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <x-primary-button>
                                {{ __('Crear arribo') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="flex w-1/3">
                <form action="{{route('imagenes.store')}}" class="dropzone border-2 w-full rounded flex-col justify-center items-center border-dashed h-96" id="dropzone">
                    @csrf
                </form>
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