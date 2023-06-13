<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Partes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <form action="{{route('parte.store')}}" method="post" novalidate>
                @csrf
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="block p-6">
                    <div class="flex">

                            <div class="w-2/3">
                                <div class="flex gap-5">
                                    <div class="md:w-1/2">
                                        <x-input-label for="numparte" :value="__('Numero de Parte')" />
                                        <x-text-input id="numparte" class="block mt-1 w-full uppercase" type="text"
                                            name="numparte" :value="old('numparte')" required autofocus />
                                        <x-input-error :messages="$errors->get('numparte')" class="mt-2" />
                                    </div>

                                    <div class="md:w-1/2">
                                        <x-input-label for="proveedor" :value="__('Escoger Proveedor')" />
                                        <select name="proveedor"
                                            class="select border-gray-300 w-full h-10 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                            id="proveedor">
                                            <option value="">Escoge un proveedor</option>
                                            @foreach ($proveedores as $proveedor)
                                                <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                                            @endforeach
                                        </select>
                                        <x-input-error :messages="$errors->get('proveedor')" class="mt-2" />
                                    </div>



                                </div>

                                <div class="flex gap-5 mt-5">
                                    <div class="md:w-1/2">
                                        <x-input-label for="fabricante" :value="__('Fabricante')" />
                                        <x-text-input id="fabricante" class="block mt-1 w-full uppercase" type="text"
                                            name="fabricante" :value="old('fabricante')" required autofocus />
                                        <x-input-error :messages="$errors->get('fabricante')" class="mt-2" />
                                    </div>

                                    <div class="md:w-1/2">
                                        <x-input-label for="fraccion" :value="__('Fracción de la parte')" />
                                        <x-text-input id="fraccion" class="block mt-1 w-full uppercase" type="text"
                                            name="fraccion" :value="old('fraccion')" required autofocus />
                                        <x-input-error :messages="$errors->get('fraccion')" class="mt-2" />
                                    </div>

                                </div>

                                <div class="flex gap-5 mt-5">
                                    <div class="md:w-1/2">
                                        <x-input-label for="fecha" :value="__('Fecha')" />
                                        <x-text-input id="fecha" class="block mt-1 w-full uppercase" type="date"
                                            name="fecha" :value="old('fecha')" required autofocus />
                                        <x-input-error :messages="$errors->get('fecha')" class="mt-2" />
                                    </div>

                                    <div class="md:w-1/2">
                                        <x-input-label for="descripcion" :value="__('Descripcion')" />
                                        <x-text-input id="descripcion" class="block mt-1 w-full uppercase"
                                            type="text" name="descripcion" :value="old('descripcion')" required autofocus />
                                        <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
                                    </div>
                                </div>

                                <div class="gap-5 mt-5 flex justify-between">
                                    <div class="block md:w-1/2">
                                        <x-input-label for="observacion" :value="__('Observación')" />
                                        <textarea name="observacion" id="observacion"
                                            class="w-1/2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
                                        <x-input-error :messages="$errors->get('observacion')" class="mt-2" />
                                    </div>
                                    <div class="md:w-1/2">
                                        <x-primary-button>
                                            {{ __('Crear parte') }}
                                        </x-primary-button>
                                    </div>
                                </div>
                            </div>
                        </form>
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

    });
</script>
