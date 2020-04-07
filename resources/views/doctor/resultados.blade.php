@extends('layouts.app')

@section('content')

<style>
    .tdBold{
        font-weight: 700;
    }
</style>

<script>
    function aprobarExamen(){
        
        $.ajax(
        {
            url : "/medico/apruebaExamen?comentario="+$("#doctorObservacion").val(),
            dataType: 'json',           
            type : "get",
            success : function(r){
                console.log("--"+r);
               if (r == "ok") {
                   alert("se ha aprobado el examen");
                   //window.location.replace("/medico");
               }
            },
            complete : function(){
                alert("se ha aprobado el examen");
                //window.location.replace("/medico");
            } 
        });
    }



    function rechazarExamen(){
        
        $.ajax(
        {
            url : "/medico/rechazaExamen?comentario="+$("#doctorObservacion").val(),
            dataType: 'json',           
            type : "get",
            success : function(r){
                console.log("--"+r);
               if (r == "ok") {
                   alert("se ha rechazado el examen");
                   //window.location.replace("/medico");
               }
            },
            complete : function(){
                alert("se ha rechazado el examen");
                //window.location.replace("/medico");
            } 
        });
    }    

</script>


<table class="table table-active">
<tr>
{{-- test --}}
    <td class="tdBold"> 
        Nombre
    </td>
    <td>
     
        {{ $data->paciente->primerNombre }} {{ $data->paciente->segundoNombre }} {{ $data->paciente->primerApellido }} {{ $data->paciente->segundoApellido }}
    </td>
    <td class="tdBold"> 
        Fecha de Nacimiento
    </td>
    <td>
        {{ $data->paciente->fechaNacimiento }} 
    </td>

    <td class="tdBold"> 
        Edad
    </td>
    <td>
        {{Carbon\Carbon::parse($data->paciente->fechaNacimiento)->age}}
    </td>
    <td class="tdBold"> 
        Sexo
    </td>
    <td>
        {{ ($data->paciente->sexo == "F" ? "Femenino" : "Mascúlino") }} 
    </td>


</tr>

<tr>
    <td class="tdBold"> 
        Rut
    </td>
    <td>
        {{ $data->paciente->rut }} 
    </td>
    <td class="tdBold"> 
        Gerencia
    </td>
    <td>
        {{ $data->paciente->gerencia }} 
    </td>

    <td class="tdBold"> 
        Cargo
    </td>
    <td>
        {{ $data->paciente->cargo }}
    </td>
    <td class="tdBold"> 
        {{-- Nada Aun --}}
    </td>
    <td>
        {{-- Nada Aun --}}
    </td>      
    
</tr>


</table>


<div class="accordion" id="accordionExample">
   
@include('doctor.resultadosAgentes.agente_'.$data->agente->id)
@include('doctor.resultadosEncuesta.encuesta_agente_'.$data->agente->id)
   
</div> 

<div class="container">
    
<div class="row">

    <h5>Observacion Médico</h5>
    <div class="col-12">

    <textarea class="form-control" id="doctorObservacion"></textarea>
    <button class="btn btn-primary" onclick="aprobarExamen()">Guardar</button>
    <button class="btn btn-danger"  onclick="rechazarExamen()">Rechazar</button>


    </div>
</div>
</div>
@endsection
