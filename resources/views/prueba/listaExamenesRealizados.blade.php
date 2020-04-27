@extends('layouts.app')

@section('content')

<script>


function verResultado(id){

window.location.href = "/medico/ver-resultado-examen?id="+id;

}

</script>

<div class="card">
<h4>Lista de Examenes realizados, {{ $usuario->name }}</h4>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Paciente</th>
            <th>Agente</th>
            <th>Hora</th>
        </tr>
    </thead>

    <body>
        @foreach ($realizados as $item)
        <tr onclick="verResultado({{$item->idExamen}})" style="cursor: pointer" >
        <td>{{$item->primerNombre}}  {{$item->segundoNombre}} {{$item->primerApellido}} {{$item->segundoApellido}}</td>
            <td> {{$item->glosaAgente}} </td>
            <td> {{$item->fechaExamen}} </td>
        </tr>
        @endforeach    
    </body>
</table>


    

@endsection

