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
                    <form action="{{route('proveedor.update')}}" method="POST" novalidate>
                        @method('PUT')
                        @csrf

                        <x-text-input type="text" :value="$proveedor->id" hidden id="id" name="id"/>
                        <div class="flex gap-5">
                            <div class="md:w-2/6">
                                <x-input-label for="nombre" :value="__('Nombre')" />
                                <x-text-input id="nombre" class="block mt-1 w-full uppercase" type="text" name="nombre"
                                    :value="$proveedor->nombre" required autofocus />
                                <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                            </div>

                            <div class="md:w-2/6">
                                <x-input-label for="direccion" :value="__('Dirección')" />
                                <x-text-input id="direccion" class="block mt-1 w-full uppercase" type="text"
                                    name="direccion" :value="$proveedor->direccion" required autofocus />
                                <x-input-error :messages="$errors->get('direccion')" class="mt-2" />
                            </div>

                            <div class="md:w-1/6">
                                <x-input-label for="numi" :value="__('Numero Interior')" />
                                <x-text-input id="numi" class="block mt-1 w-full uppercase" type="number" name="numi"
                                    :value="$proveedor->numi" required autofocus />
                                <x-input-error :messages="$errors->get('numi')" class="mt-2" />
                            </div>

                            <div class="md:w-1/6">
                                <x-input-label for="nume" :value="__('Numero Exterior')" />
                                <x-text-input id="nume" class="block mt-1 w-full uppercase" type="number" name="nume"
                                    :value="$proveedor->nume" required autofocus />
                                <x-input-error :messages="$errors->get('nume')" class="mt-2" />
                            </div>

                        </div>

                        <div class="flex gap-5 mt-5">
                            <div class="md:w-1/6">
                                <x-input-label for="municipio" :value="__('Municipio')" />
                                <x-text-input id="municipio" class="block mt-1 w-full uppercase" type="text" name="municipio"
                                    :value="$proveedor->municipio" required autofocus />
                                <x-input-error :messages="$errors->get('municipio')" class="mt-2" />
                            </div>

                            <div class="md:w-1/6">
                                <x-input-label for="estado" :value="__('Estado')" />
                                <x-text-input id="estado" class="block mt-1 w-full uppercase" type="text" name="estado"
                                    :value="$proveedor->estado" required autofocus />
                                <x-input-error :messages="$errors->get('estado')" class="mt-2" />
                            </div>

                            <div class="md:w-1/6">
                                <x-input-label for="pais" :value="__('País')" />
                                <x-text-input id="pais" class="block mt-1 w-full uppercase" type="text" name="pais"
                                    :value="$proveedor->pais" required autofocus />
                                <x-input-error :messages="$errors->get('pais')" class="mt-2" />
                            </div>

                            <div class="md:w-1/6">
                                <x-input-label for="cp" :value="__('Código Postal')" />
                                <x-text-input id="cp" class="block mt-1 w-full uppercase" type="number" name="cp"
                                    :value="$proveedor->cp" required autofocus />
                                <x-input-error :messages="$errors->get('cp')" class="mt-2" />
                            </div>

                            <div class="md:w-1/6">
                                <x-input-label for="telefono" :value="__('Teléfono')" />
                                <x-text-input id="telefono" class="block mt-1 w-full uppercase" type="number" name="telefono"
                                    :value="$proveedor->telefono" required autofocus />
                                <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
                            </div>

                            <div class="md:w-1/6">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full uppercase" type="email" name="email"
                                    :value="$proveedor->email" required autofocus />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            
                        </div>

                        <div class="flex justify-end mt-5">
                            <x-primary-button>
                                {{ __('actualizar proveedor') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>