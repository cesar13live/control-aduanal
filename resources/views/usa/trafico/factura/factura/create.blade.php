<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Operaciones USA (Facturar)') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 flex">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-full">
                <div class="flex m-6 gap-x-6">
                    <div class="md:w-1/4">
                        <x-input-label for="factura" :value="__('Factura')" />
                        <x-text-input id="factura" class="block mt-1 w-full uppercase" type="text" name="factura"
                            :value="old('factura')" required autofocus />
                        <x-input-error :messages="$errors->get('factura')" class="mt-2" />
                    </div>

                    <div class="md:w-1/4">
                        <x-input-label for="pedido" :value="__('Pedido')" />
                        <x-text-input id="pedido" class="block mt-1 w-full uppercase" type="text" name="pedido"
                            :value="old('pedido')" required autofocus />
                        <x-input-error :messages="$errors->get('pedido')" class="mt-2" />
                    </div>

                    <div class="md:w-1/4">
                        <x-input-label for="fecha" :value="__('Fecha')" />
                        <x-text-input id="fecha" class="block mt-1 w-full uppercase" type="date" name="fecha"
                            :value="old('fecha')" required autofocus />
                        <x-input-error :messages="$errors->get('fecha')" class="mt-2" />
                    </div>

                    <div class="md:w-1/4">
                        <x-input-label for="valor" :value="__('Valor')" />
                        <x-text-input id="valor" class="block mt-1 w-full uppercase" type="number" name="valor"
                            :value="old('valor')" required autofocus />
                        <x-input-error :messages="$errors->get('valor')" class="mt-2" />
                    </div>
                </div>

                <div class="flex m-6 gap-x-6">
                    <div class="md:w-1/4">
                        <x-input-label for="moneda" :value="__('Moneda')" />
                        <x-text-input id="moneda" class="block mt-1 w-full uppercase" type="text" name="moneda"
                            :value="old('moneda')" required />
                        <x-input-error :messages="$errors->get('factura')" class="mt-2" />
                    </div>

                    <div class="md:w-1/4">
                        <x-input-label for="tcambio" :value="__('Tipo de cambio')" />
                        <x-text-input id="tcambio" class="block mt-1 w-full uppercase" type="text" name="tcambio"
                            :value="old('tcambio')" required />
                        <x-input-error :messages="$errors->get('tcambio')" class="mt-2" />
                    </div>



                    <div class="md:w-1/4 my-4">
                        <x-primary-button>
                            {{ __('Agregar Factura') }}
                        </x-primary-button>
                    </div>
                </div>

                <hr class="mx-3">

                <div class="flex m-6 gap-x-6">
                    <div class="md:w-1/5">
                        <x-input-label for="partida" :value="__('Partida')" />
                        <x-text-input id="partida" class="block mt-1 w-full uppercase" type="text" name="partida"
                            :value="old('partida')" required />
                        <x-input-error :messages="$errors->get('partida')" class="mt-2" />
                    </div>

                    <div class="md:w-1/5">
                        <x-input-label for="noparte" :value="__('No. Parte')" />
                        <x-text-input id="noparte" class="block mt-1 w-full uppercase" type="text" name="noparte"
                            :value="old('noparte')" required />
                        <x-input-error :messages="$errors->get('noparte')" class="mt-2" />
                    </div>

                    <div class="md:w-1/5">
                        <x-input-label for="fabricante" :value="__('Fabricante')" />
                        <x-text-input id="fabricante" class="block mt-1 w-full uppercase" type="text"
                            name="fabricante" :value="old('fabricante')" required />
                        <x-input-error :messages="$errors->get('fabricante')" class="mt-2" />
                    </div>

                    <div class="md:w-1/5">
                        <x-input-label for="cantidad" :value="__('Cantidad')" />
                        <x-text-input id="cantidad" class="block mt-1 w-full uppercase" type="text" name="cantidad"
                            :value="old('cantidad')" required />
                        <x-input-error :messages="$errors->get('cantidad')" class="mt-2" />
                    </div>

                    <div class="md:w-1/5">
                        <x-input-label for="umt" :value="__('UMT')" />
                        <x-text-input id="umt" class="block mt-1 w-full uppercase" type="text" name="umt"
                            :value="old('umt')" required />
                        <x-input-error :messages="$errors->get('umt')" class="mt-2" />
                    </div>

                </div>

                <div class="flex m-6 gap-x-6">


                    <div class="md:w-1/4">
                        <x-input-label for="marca" :value="__('Marca')" />
                        <x-text-input id="marca" class="block mt-1 w-full uppercase" type="text" name="marca"
                            :value="old('marca')" required />
                        <x-input-error :messages="$errors->get('marca')" class="mt-2" />
                    </div>

                    <div class="md:w-1/4">
                        <x-input-label for="modelo" :value="__('Modelo')" />
                        <x-text-input id="modelo" class="block mt-1 w-full uppercase" type="text"
                            name="modelo" :value="old('modelo')" required />
                        <x-input-error :messages="$errors->get('modelo')" class="mt-2" />
                    </div>

                    <div class="md:w-1/4">
                        <x-input-label for="descripcion" :value="__('Descripción')" />
                        <x-text-input id="descripcion" class="block mt-1 w-full uppercase" type="text"
                            name="descripcion" :value="old('descripcion')" required />
                        <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
                    </div>

                    <div class="md:w-1/4">
                        <x-input-label for="series" :value="__('Series')" />
                        <x-text-input id="series" class="block mt-1 w-full uppercase" type="text"
                            name="series" :value="old('series')" required />
                        <x-input-error :messages="$errors->get('series')" class="mt-2" />
                    </div>
                </div>

                <div class="flex gap-x-6 m-6">

                    <div class="md:w-2/6">
                        <x-input-label for="pais" :value="__('País')" />
                        <x-text-input id="pais" class="block mt-1 w-full uppercase" type="text"
                            name="pais" :value="old('pais')" required />
                        <x-input-error :messages="$errors->get('pais')" class="mt-2" />
                    </div>

                    <div class="md:w-1/6">
                        <x-input-label for="precio" :value="__('Precio')" />
                        <x-text-input id="precio" class="block mt-1 w-full uppercase" type="text"
                            name="precio" :value="old('precio')" required />
                        <x-input-error :messages="$errors->get('precio')" class="mt-2" />
                    </div>

                    <div class="md:w-1/6">
                        <x-input-label for="pesolb" :value="__('Peso en Libras')" />
                        <x-text-input id="pesolb" class="block mt-1 w-full uppercase" type="text"
                            name="pesolb" :value="old('pesolb')" required />
                        <x-input-error :messages="$errors->get('pesolb')" class="mt-2" />
                    </div>

                    <div class="md:w-1/6">
                        <x-input-label for="pesokg" :value="__('Peso en Kilos')" />
                        <x-text-input id="pesokg" class="block mt-1 w-full uppercase" type="text"
                            name="pesokg" :value="old('pesokg')" required />
                        <x-input-error :messages="$errors->get('pesokg')" class="mt-2" />
                    </div>

                    <div class="md:w-1/6">
                        <x-input-label for="fraccion" :value="__('Fracción')" />
                        <x-text-input id="fraccion" class="block mt-1 w-full uppercase" type="text"
                            name="fraccion" :value="old('fraccion')" required />
                        <x-input-error :messages="$errors->get('fraccion')" class="mt-2" />
                    </div>
                </div>

                <div class="flex gap-x-6 m-6">

                    <x-primary-button>
                        {{ __('Agregar partida') }}
                    </x-primary-button>

                </div>

            </div>
        </div>
    </div>

</x-app-layout>
