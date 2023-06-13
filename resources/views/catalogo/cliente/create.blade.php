<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="block p-6">
                    <form action="{{route('cliente.store')}}" method="POST" novalidate>
                        @csrf
                        <div class="flex gap-5">
                            <div class="md:w-2/6">
                                <x-input-label for="nombre" :value="__('Nombre')" />
                                <x-text-input id="nombre" class="block mt-1 w-full uppercase" type="text" name="nombre"
                                    :value="old('nombre')" required autofocus />
                                <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                            </div>

                            <div class="md:w-2/6">
                                <x-input-label for="direccion" :value="__('Dirección')" />
                                <x-text-input id="direccion" class="block mt-1 w-full uppercase" type="text"
                                    name="direccion" :value="old('direccion')" required autofocus />
                                <x-input-error :messages="$errors->get('direccion')" class="mt-2" />
                            </div>

                            <div class="md:w-1/6">
                                <x-input-label for="numi" :value="__('Numero Interior')" />
                                <x-text-input id="numi" class="block mt-1 w-full uppercase" type="number" name="numi"
                                    :value="old('numi')" required autofocus />
                                <x-input-error :messages="$errors->get('numi')" class="mt-2" />
                            </div>

                            <div class="md:w-1/6">
                                <x-input-label for="nume" :value="__('Numero Exterior')" />
                                <x-text-input id="nume" class="block mt-1 w-full uppercase" type="number" name="nume"
                                    :value="old('nume')" required autofocus />
                                <x-input-error :messages="$errors->get('nume')" class="mt-2" />
                            </div>

                        </div>

                        <div class="flex gap-5 mt-5">
                            <div class="md:w-1/6">
                                <x-input-label for="municipio" :value="__('Municipio')" />
                                <x-text-input id="municipio" class="block mt-1 w-full uppercase" type="text"
                                    name="municipio" :value="old('municipio')" required autofocus />
                                <x-input-error :messages="$errors->get('municipio')" class="mt-2" />
                            </div>

                            <div class="md:w-1/6">
                                <x-input-label for="estado" :value="__('Estado')" />
                                <x-text-input id="estado" class="block mt-1 w-full uppercase" type="text" name="estado"
                                    :value="old('estado')" required autofocus />
                                <x-input-error :messages="$errors->get('estado')" class="mt-2" />
                            </div>

                            <div class="md:w-2/6">
                                <x-input-label for="pais" :value="__('País')" />
                                <x-text-input id="pais" class="block mt-1 w-full uppercase" type="text" name="pais"
                                    :value="old('pais')" required autofocus />
                                <x-input-error :messages="$errors->get('pais')" class="mt-2" />
                            </div>

                            <div class="md:w-1/6">
                                <x-input-label for="telefono" :value="__('Telefono')" />
                                <x-text-input id="telefono" class="block mt-1 w-full uppercase" type="number"
                                    name="telefono" :value="old('telefono')" required autofocus />
                                <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
                            </div>

                            <div class="md:w-1/6">
                                <x-input-label for="cp" :value="__('Código Postal')" />
                                <x-text-input id="cp" class="block mt-1 w-full uppercase" type="number" name="cp"
                                    :value="old('cp')" required autofocus />
                                <x-input-error :messages="$errors->get('cp')" class="mt-2" />
                            </div>

                        </div>

                        <div class="flex gap-5 mt-5">
                            <div class="md:w-1/6">
                                <x-input-label for="rfc" :value="__('RFC')" />
                                <x-text-input id="rfc" class="block mt-1 w-full uppercase" type="text" name="rfc"
                                    :value="old('rfc')" required autofocus />
                                <x-input-error :messages="$errors->get('rfc')" class="mt-2" />
                            </div>

                            <div class="md:w-1/6">
                                <x-input-label for="curp" :value="__('CURP')" />
                                <x-text-input id="curp" class="block mt-1 w-full uppercase" type="text" name="curp"
                                    :value="old('curp')" required autofocus />
                                <x-input-error :messages="$errors->get('curp')" class="mt-2" />
                            </div>

                        </div>

                        <div class="flex justify-end">
                            <x-primary-button>
                                {{ __('agregar cliente') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>