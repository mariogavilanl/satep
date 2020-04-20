@extends('layouts.app')

@section('content')

<script>
    function reevaluar(id){

        window.location.href = "/reevaluar?id="+id;
    }
</script>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        
                        <th>Paciente</th>
                        <th>Agente</th>

                    </tr>
                </thead>

                <tbody>
                    
                    @foreach ($data as $item)
                        <tr onclick="reevaluar({{$item->id}})" style="cursor : pointer">
                            <td> {{$item->paciente->primerNombre}} {{$item->paciente->segundoNombre}} {{$item->paciente->primerApellido}} {{$item->paciente->segundoApellido}} </td>
                            <td> {{$item->agente->glosaAgente}} </td>
                        </tr>    
                    @endforeach
                    

                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection



