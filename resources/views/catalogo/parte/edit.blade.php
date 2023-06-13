<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Partes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('parte.update') }}" method="post" novalidate>
                @method('PUT')
                @csrf
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="block p-6">
                        <div class="flex">

                            <div class="w-2/3">
                                <div class="flex gap-5">
                                    <div class="md:w-1/2">
                                        <input type="text" value="{{ $parte->id }}" hidden name="id">
                                        <x-input-label for="numparte" :value="__('Numero de Parte')" />
                                        <x-text-input id="numparte" class="block mt-1 w-full uppercase" type="text"
                                            name="numparte" :value="$parte->numparte" required autofocus />
                                        <x-input-error :messages="$errors->get('numparte')" class="mt-2" />
                                    </div>

                                    <div class="md:w-1/2">
                                        <x-input-label for="proveedor" :value="__('Escoger Proveedor')" />
                                        <select name="proveedor"
                                            class="select border-gray-300 w-full h-10 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                            id="proveedor"
                                            style="width:75%"
                                            >
                                            <option value="">Escoge un proveedor</option>
                                            @foreach ($proveedores as $itemProveedor)
                                                <option value="{{ $itemProveedor->id }}"
                                                    {{ $itemProveedor->id == $parte->proveedor ? 'selected' : '' }}>
                                                    {{ $itemProveedor->nombre }}</option>
                                            @endforeach
                                        </select>
                                        <x-input-error :messages="$errors->get('proveedor')" class="mt-2" />
                                    </div>



                                </div>

                                <div class="flex gap-5 mt-5">
                                    <div class="md:w-1/2">
                                        <x-input-label for="fabricante" :value="__('Fabricante')" />
                                        <x-text-input id="fabricante" class="block mt-1 w-full uppercase" type="text"
                                            name="fabricante" :value="$parte->fabricante, old('fabricante')" required autofocus />
                                        <x-input-error :messages="$errors->get('fabricante')" class="mt-2" />
                                    </div>

                                    <div class="md:w-1/2">
                                        <x-input-label for="fraccion" :value="__('Fracción de la parte')" />
                                        <x-text-input id="fraccion" class="block mt-1 w-full uppercase" type="text"
                                            name="fraccion" :value="$parte->fraccion, old('fraccion')" required autofocus />
                                        <x-input-error :messages="$errors->get('fraccion')" class="mt-2" />
                                    </div>

                                </div>

                                <div class="flex gap-5 mt-5">
                                    <div class="md:w-1/2">
                                        <x-input-label for="fecha" :value="__('Fecha')" />
                                        <x-text-input id="fecha" class="block mt-1 w-full uppercase" type="date"
                                            name="fecha" :value="$parte->fecha, old('fecha')" required autofocus />
                                        <x-input-error :messages="$errors->get('fecha')" class="mt-2" />
                                    </div>

                                    <div class="md:w-1/2">
                                        <x-input-label for="descripcion" :value="__('Descripcion')" />
                                        <x-text-input id="descripcion" class="block mt-1 w-full uppercase"
                                            type="text" name="descripcion" :value="$parte->descripcion, old('descripcion')" required autofocus />
                                        <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
                                    </div>
                                </div>

                                <div class="gap-5 mt-5">
                                    <div class="md:w-1/2">
                                        <x-input-label for="observacion" :value="__('Observación')" />
                                        <x-text-input 
                                                        type="text"
                                                        id="observacion" 
                                                        name="observacion" 
                                                        :value="$parte->observacion, old('observacion')"
                                                        class="block mt-1 w-full uppercase" />
                                        <x-input-error :messages="$errors->get('observacion')" class="mt-2" />
                                    </div>
                                    
                                </div>

                                <div class="md:w-1/2 mt-5">
                                    <x-primary-button>
                                        {{ __('Crear parte') }}
                                    </x-primary-button>
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
