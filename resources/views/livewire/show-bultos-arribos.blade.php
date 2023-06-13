<div>
    <table class="table table-striped uppercase">
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Numero</th>
            <th>Cantidad</th>
            <th>Modelo</th>
            <th>Acciones</th>
        </tr>
      
        @foreach ($getBulto as $bulto)
        <tr>
            <td>{{$bulto->id}}</td>
            <td>{{$bulto->marca}}</td>
            <td>{{$bulto->numero}}</td>
            <td>{{$bulto->cantidad}}</td>
            <td>{{$bulto->clase}}</td>
            <td>
                <div class="flex gap-2">
        
                      <livewire:bulto-arribo :bulto="$bulto->id"/>
                    <button class="btn btn-danger"><i class="bi bi-trash3"></i></button>
                </div>
            </td>
    
        </tr>
        @endforeach

        
    </table>
</div>
