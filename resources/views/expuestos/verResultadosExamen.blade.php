@extends('layouts.app')


@section('content')
<script>

function back(){

window.history.back();

}

    $(document).ready(function(){
      
           
               
         
        
        $("#tabla").DataTable({
          "pageLength": 100

       
        });
        
    });

    

    function verResultado(id){

        window.location.href = "/medico/ver-resultado-examen?id="+id;

    }
</script>




@if ($hayExamen)
<div class="card">
Paciente : {{ $paciente->primerNombre }} {{ $paciente->segundoNombre }} {{ $paciente->primerApellido }} {{ $paciente->segundoApellido }}


<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
             
                <thead>
                    <tr>
                        <th>Fecha Examen</th>
                        <th>Agente</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($examen as $item)
                    <tr  onclick="verResultado({{$item->id}})" style="cursor:pointer" >
                        <td>{{$item->fechaExamen}}</td>
                        <td>{{$item->glosaAgente}}</td>
                        
                      
                    </tr> 
                    @endforeach
                    
                </tbody>
            </table>

           </div>

            <div class="col-sm-12">
            <button class="btn btn-primary" onclick="back()" > <span class="fa fa-arrow-left" ></span>  volver  </button>
        </div>
    </div>
</div>
</div>
@else
     <h1>No se encontraron registros  <span class="fa fa-spin fa-times-circle" ></span></h1>
@endif


@endsection
