<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>


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
                                    
                                    <livewire:show-facturas>

                                    <x-primary-button>
                                        {{ __('facturar') }}
                                    </x-primary-button>
                                </div>


                            </div>
                        </div>


                        <div class="tab-pane fade" id="bultos" role="tabpanel" aria-labelledby="profile-tab">bultos
                        </div>
                        <div class="tab-pane fade" id="ferro" role="tabpanel" aria-labelledby="contact-tab">ferro
                        </div>
                        <div class="tab-pane fade" id="patio" role="tabpanel" aria-labelledby="contact-tab">Patio
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
</x-app-layout>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
