@extends('layouts.app')

@section('content')


<script>

    

$(document).ready(function(){
  
    $.ajax({

        url : "/medico-getData",
        type : "GET",
        success : function(r){
           
            $.each(r, function(k,v){
                if (v.realizadoEncuenta == null && v.carga.informadopaciente == 0) {
                    $("#getData").append(
                        "<tr>"+
                            "<td>"+v.paciente.primerNombre+" "+v.paciente.primerApellido+"</td>"+
                            "<td>"+v.agente.nombreAgente+"</td>"+
                            "<td></td>"+
                            "<td></td>"+
                            "<td> <a href='/medico/resultados?idExamen="+v.carga.id+"&idRealExaman="+v.id+"'> <button class= 'btn btn-primary'> Revisión </button> </a></td>"+
                        "</tr>");
                }
            });
        }
    });

});
   



</script>

<table id="tabla_medico" class="table">
    <thead>
        
        <th>
            paciente  
        </th>
        <th>
            Agente
        </th>

        
        <th>
            
        </th>  
        <th>
            
        </th>  
        
        <th>
            Revision
        </th>    
    </thead>

    <tbody id="getData">
       
    </tbody>
</table>



@endsection