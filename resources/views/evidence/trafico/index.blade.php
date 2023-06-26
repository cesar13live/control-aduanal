<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-PASTE-TU-INTEGRITY-HERE" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Evidencia Trafico') }}
        </h2>

        <div class="py-12">
            <section class="gallery min-vh-100">
                <div class="container-lg">
                   <div class="row gap-y-4 row-cols-1 row-cols-sm-2 row-cols-md-3">

                     @foreach ( $array as $item )
         
                      <div class="col">
                         <img src="{{ asset('uploads/traficos/' . $item) }}" class="gallery-item" alt="gallery">
                      </div>
                      @endforeach 
                   </div>
                </div>
             </section>
        </div>
    </x-slot>
</x-app-layout>
