@extends('layouts.app')

@section('content')

<script>
    function verResultado(id){

        window.location.href = "/medico/ver-resultado-examen?id="+id;

    }
</script>

<table class="table table table-striped" style="cursor:pointer"> 

    <thead>
      <tr>
        <th>nombre paciente</th>
        <th>agente</th>
        <th>fecha realización</th>
      </tr>
        
    </thead>
<tbody>
    
    @foreach ($lista as $item)
        <tr onclick="verResultado({{$item->id}})">
            <td>
                {{$item->paciente->primerNombre}} {{$item->paciente->primerApellido}} {{$item->paciente->segundoApellido }}
            </td>

            <td>
                {{$item->agente->glosaAgente}}
            </td>

            <td>
                {{$item->created_at}}
            </td>
        </tr>
    @endforeach
       

</tbody>

</table>




@endsection


