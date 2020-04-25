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

    <table class="table table-primary" style="font-size: 0.9rem;">
        <thead>
          <th>
            <img src="https://d1hbpr09pwz0sk.cloudfront.net/logo_url/codelco-ed1ca9ae" width="80px"  height="80PX" class="img-responsive" >
        </th> 
        <th>
            <td><strong><h6 style="text-align:center" >SATEP DIVISIÓN CHUQUICAMATA </strong><p>

                <p><small><strong> 
                NOTIFICACIÓN DE RESULTADO DE EXÁMENES
                LEY 16.744
                </strong></small></p>
            
                <p><small><strong> 
                ART 72 LETRA A D.S 101
                F-2 SATEP
            </strong></small></p>
            
            </h6></td>

     
        <th>
           <H6><p><p><strong>
         
                   
            DSATEP/N° 1002/19 </strong> </p></p>
            </H6>

        </th>

    </thead>
</table>
            



        <th><h5 style="text-align:center">{{ $paciente->primerNombre }} {{ $paciente->segundoNombre }} {{ $paciente->primerApellido }} {{ $paciente->segundoApellido }}</h5></th>
        <table class="table table-primary" style="font-size: 0.9rem;">
            <thead>
        <td>
            <strong> RUT </strong>: {{ $paciente->rut }}
            </td>
            <td>
                <strong>  SAP  </strong>: {{ $paciente->nroSap }}

            </td>
            <td>
                <strong> GERENCIA </strong>: {{ $paciente->gerencia }}

            </td>
            <td>
                <strong>  CARGO </strong> : {{ $paciente->cargo }}
 
             </td>
             <td>
                <strong>  SEXO </strong>:  {{ ($paciente->sexo == "F" ? "FEMENINO" : "MASCULINO") }} 
 
             </td>
            </thead>
            </table>


  

</table>

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
     <h1> No se encontraron registros  <span class="fa fa-spin fa-times-circle" ></span></h1>
@endif


@endsection
