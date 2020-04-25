@extends('layouts.app')

@section('content')
{{--  <script>
$(document).ready(function() {
    $('#tabla').dataTable( {
        "language": {
          "search": "Buscar:"
        }
      } );
       
} );

</script>  --}}

<script>
    $(document).ready(function(){
      
           
               
         
        
        $("#tabla").DataTable({
          "pageLength": 100

       
        });
        
    });

    

    function cargaExamen(id, nombre, apellido){
      window.location.href = 'realiza-examen?idCarga='+id;
    }
    function cargaCO(id, nombre, apellido){
      window.location.href = 'realiza-examen-co?idCarga='+id;
    }


</script>


  
<script>
    function verResultado(id){

        window.location.href = "/medico/ver-resultado-examen?id="+id;

    }
</script>




<div id="modal-pico" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">titulo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p> <span id="nombre" > </span> </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  
  <table id="tabla" class="table table-hover" style="cursor:pointer">

 

<h5 style="text-align:center" ><img src="https://img.icons8.com/color/35/000000/view-file.png"/> Visualización de Resultados</h5>



   
      
     
    <thead>
      <tr>
        <th>Agente</th>
        <th>SAP</th>
        <th>RUT</th>
        <th>Nombre Expuesto</th>
        
        <th>Gerencia</th>
        <th>Cargo</th>
        <th>Edad</th>
        <th>Sexo</th>
        <th>Fecha Realización</th>
      </tr>
        
    </thead>
<tbody>
    
    @foreach ($lista as $item)
        <tr onclick="verResultado({{$item->id}})">
            <td>
                {{$item->agente->glosaAgente}}
            </td>
            <td>
                {{$item->paciente->nroSap}}
            </td>
            <td>
                {{$item->paciente->rut}}
            </td>
           
            <td>
                {{$item->paciente->primerNombre}} {{$item->paciente->primerApellido}} {{$item->paciente->segundoApellido }}
            </td>

            
            <td>
                {{$item->paciente->gerencia}}
            </td>
            <td>
                {{$item->paciente->cargo}}
            </td>
            <td>
                {{Carbon\Carbon::parse($item->paciente->fechaNacimiento)->age}}
            </td>
            <td>
                {{$item->paciente->sexo}}
            </td>
            

            <td>
                {{$item->created_at}}
            </td>
        </tr>
    @endforeach
       

</tbody>

</table>

  





@endsection


