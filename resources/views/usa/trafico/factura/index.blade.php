<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Operaciones USA (Facturar)') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 flex gap-5">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-full">
                <div class="block m-6">

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#factura" type="button" role="tab" aria-controls="home"
                                aria-selected="true">Facturas</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bultos"
                                type="button" role="tab" aria-controls="profile"
                                aria-selected="false">Bultos</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#ferro"
                                type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Ferrocarril</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#patio"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">FF CC
                                Patio</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#comentarios"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">
                                Comentarios</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#datos"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">
                                Datos de Salida</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="factura" role="tabpanel"aria-labelledby="home-tab">
                            <div class="text-center pt-5">
                                <h2>Facturaciones</h2>

                            </div>
                            <div class="flex p-6">
                                <div class="md:w-full px-12">

                                    <a href="{{route('factura.new',$trafico->id)}}">
                                        <x-primary-button class="m-5">
                                            {{ __('Agregar factura') }}
                                        </x-primary-button>
                                    </a>
                                    
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>FACTURA</th>
                                                <th>PROVEEDOR</th>
                                                <th>COVE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1234</td>
                                                <td>EJEMPLO</td>
                                                <td>CLICK</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>


                            </div>
                        </div>


                        <div class="tab-pane fade" id="bultos" role="tabpanel" aria-labelledby="profile-tab">
                            bultos
                        </div>
                        <div class="tab-pane fade" id="ferro" role="tabpanel" aria-labelledby="contact-tab">
                            ferro
                        </div>
                        <div class="tab-pane fade" id="patio" role="tabpanel" aria-labelledby="contact-tab">
                            Patio
                        </div>
                        <div class="tab-pane fade" id="comentarios" role="tabpanel" aria-labelledby="contact-tab">
                            Comentarios
                        </div>
                        <div class="tab-pane fade" id="datos" role="tabpanel" aria-labelledby="contact-tab">
                            Datos de Salida
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</x-app-layout>
