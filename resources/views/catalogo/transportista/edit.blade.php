<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transportistas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="block p-6">
                    <form action="{{route('tps.store')}}" method="POST" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="flex gap-5">
                            <div class="md:w-2/6">
                                <x-text-input id="id" class="block mt-1 w-full uppercase" type="text" name="id"
                                    :value="$transportista->id" required/>
                                <x-input-label for="nombre" :value="__('Nombre')" />
                                <x-text-input id="nombre" class="block mt-1 w-full uppercase" type="text" name="nombre"
                                    :value="$transportista->nombre" required autofocus />
                                <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                            </div>

                            <div class="md:w-2/6">
                                <x-input-label for="direccion" :value="__('Dirección')" />
                                <x-text-input id="direccion" class="block mt-1 w-full uppercase" type="text"
                                    name="direccion" :value="$transportista->direccion" required/>
                                <x-input-error :messages="$errors->get('direccion')" class="mt-2" />
                            </div>

                            <div class="md:w-1/6">
                                <x-input-label for="numi" :value="__('Numero Interior')" />
                                <x-text-input id="numi" class="block mt-1 w-full uppercase" type="number" name="numi"
                                    :value="$transportista->numi" required/>
                                <x-input-error :messages="$errors->get('numi')" class="mt-2" />
                            </div>

                            <div class="md:w-1/6">
                                <x-input-label for="nume" :value="__('Numero Exterior')" />
                                <x-text-input id="nume" class="block mt-1 w-full uppercase" type="number" name="nume"
                                    :value="$transportista->nume" required/>
                                <x-input-error :messages="$errors->get('nume')" class="mt-2" />
                            </div>

                        </div>

                        <div class="flex gap-5 mt-5">
                            <div class="md:w-1/6">
                                <x-input-label for="ciudad" :value="__('Ciudad')" />
                                <x-text-input id="ciudad" class="block mt-1 w-full uppercase" type="text" name="ciudad"
                                    :value="$transportista->ciudad" required  />
                                <x-input-error :messages="$errors->get('ciudad')" class="mt-2" />
                            </div>

                            <div class="md:w-1/6">
                                <x-input-label for="estado" :value="__('Estado')" />
                                <x-text-input id="estado" class="block mt-1 w-full uppercase" type="text" name="estado"
                                    :value="$transportista->estado" required />
                                <x-input-error :messages="$errors->get('estado')" class="mt-2" />
                            </div>

                            <div class="md:w-1/6">
                                <x-input-label for="pais" :value="__('País')" />
                                <x-text-input id="pais" class="block mt-1 w-full uppercase" type="text" name="pais"
                                    :value="$transportista->pais" required/>
                                <x-input-error :messages="$errors->get('pais')" class="mt-2" />
                            </div>

                            <div class="md:w-1/6">
                                <x-input-label for="cp" :value="__('Código Postal')" />
                                <x-text-input id="cp" class="block mt-1 w-full uppercase" type="number" name="cp"
                                    :value="$transportista->cp" required/>
                                <x-input-error :messages="$errors->get('cp')" class="mt-2" />
                            </div>

                            <div class="md:w-1/6">
                                <x-input-label for="telefono" :value="__('Teléfono')" />
                                <x-text-input id="telefono" class="block mt-1 w-full uppercase" type="number" name="telefono"
                                    :value="$transportista->telefono" required/>
                                <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
                            </div>

                            <div class="md:w-1/6">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full uppercase" type="email" name="email"
                                    :value="$transportista->email" required/>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            
                        </div>

                        <div class="flex justify-end mt-5">
                            <x-primary-button>
                                {{ __('agregar transportista') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>