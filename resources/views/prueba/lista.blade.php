@extends('layouts.app')

@section('content')

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


<style>
  .button {
    
    font-size: 0.7rem;
  }
</style>

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


  <table id="tabla" class="dataTable display no-footer table-hover table-striped" style="font-size: 0.76rem">
    <thead>
        <tr>
            <th>id carga</th>
            <th>Numero Sap</th>
            <th>Nombre</th>
            <th>Apellido</th>           
            <th>Cargo</th>
            <th>Gerencia</th>   
            {{-- <th>idAgente</th>   --}}
            <th>Nombre Agente</th>  
            <th>Acciones</th>          
        </tr>
    </thead>
    <tbody>

    @foreach ($pico as $d)
    @if ($d->realizado == 0 ||  $d->realizadoco == 0)
    <tr class="">
        <td> {{ $d->id }}</td>
        <td> {{ $d->nroSap }}</td>
        <td> {{ $d->primerNombre }} {{ $d->segundoNombre }}</td>
        <td> {{ $d->primerApellido }}</td>
        <td> {{ $d->cargo }}</td>
        <td> {{ $d->gerencia}}</td>
         {{-- <td> {{ $d->agentes_id}}</td> --}}
        <td> {{ $d->glosaAgente}}</td>       
        <td>

          
          @if ($d->semestre == 1 && Carbon\Carbon::parse($d->fechaCarga)->year == $fechaactual->year && Carbon\Carbon::parse($d->fechaCarga)->month <= 7 )
                       
                        @if ($d->realizado == 0)
                          <button class="btn btn-primary"  onclick="cargaExamen({{ $d->id }}, '{{ $d->primerNombre }}','{{ $d->primerApellido }}'  )">Examen</button>                    
                        @endif

                        @if ($d->realizadoco == 0)
                          <button class="btn btn-dark" onclick="cargaCO({{ $d->id }})">Examen Base</button>                    
                        @endif

                        @if ($d->agentes_id == 2 || $d->agentes_id == 3 || $d->agentes_id == 6 || $d->agentes_id == 7 || $d->agentes_id == 5 || $d->agentes_id == 4 || $d->agentes_id == 18 )
                          
                        @if ($d->encuesta == 0)
                          <a href="/encuesta/?idencuesta={{$d->agentes_id}}&idcarga={{$d->id}}&idsap={{$d->nroSap}}">
                            <button class="btn btn-success">Encuesta</button>
                          </a>
                        @endif
                         
                                            
                      @endif

          @endif

          @if ($d->semestre == 2 && Carbon\Carbon::parse($d->fechaCarga)->year == $fechaactual->year && $fechaactual->month > 7)
              @if ($d->realizado == 0)
              <button class="btn btn-primary"  onclick="cargaExamen({{ $d->id }}, '{{ $d->primerNombre }}','{{ $d->primerApellido }}'  )">Examen</button>                    
            @endif
            @if ($d->realizadoco == 0)
              <button class="btn btn-dark" onclick="cargaCO({{ $d->id }})">Examen Base</button>                    
            @endif
            @if ($d->agentes_id == 2 || $d->agentes_id == 3 || $d->agentes_id == 6 || $d->agentes_id == 7 || $d->agentes_id == 5 || $d->agentes_id == 4 || $d->agentes_id == 18 )
             

                          
              @if ($d->encuesta == 0)
              <a href="/encuesta/?idencuesta={{$d->agentes_id}}&idcarga={{$d->id}}&idsap={{$d->nroSap}}">
                <button class="btn btn-success">Encuesta</button>
              </a>
            @endif            
                
          @endif
          @endif

          @if ($d->semestre == 3 && Carbon\Carbon::parse($d->fechaCarga)->year == $fechaactual->year && $fechaactual->month <= 4)
              @if ($d->realizado == 0)
              <button class="btn btn-primary"  onclick="cargaExamen({{ $d->id }}, '{{ $d->primerNombre }}','{{ $d->primerApellido }}'  )">Examen</button>                    
            @endif
            @if ($d->realizadoco == 0)
              <button class="btn btn-dark" onclick="cargaCO({{ $d->id }})">Examen Base</button>                    
            @endif
            
            @if ($d->agentes_id == 2 || $d->agentes_id == 3 || $d->agentes_id == 6 || $d->agentes_id == 7 || $d->agentes_id == 5 || $d->agentes_id == 4 || $d->agentes_id == 18 )
             
            <a href="/encuesta/?idencuesta={{$d->agentes_id}}&idcarga={{$d->id}}&idsap={{$d->nroSap}}">
              <button class="btn btn-success">Encuesta</button>
            </a>
                                 
          @endif
          @endif

          @if ($d->semestre == 4 && Carbon\Carbon::parse($d->fechaCarga)->year == $fechaactual->year && $fechaactual->month > 4 && $fechaactual->month <= 8)
              @if ($d->realizado == 0)
              <button class="btn btn-primary"  onclick="cargaExamen({{ $d->id }}, '{{ $d->primerNombre }}','{{ $d->primerApellido }}'  )">Exam</button>                    
            @endif
            @if ($d->realizadoco == 0)
              <button class="btn btn-dark" onclick="cargaCO({{ $d->id }})">Examen Base</button>                    
            @endif

            @if ($d->agentes_id == 2 || $d->agentes_id == 3 || $d->agentes_id == 6 || $d->agentes_id == 7 || $d->agentes_id == 5 || $d->agentes_id == 4 || $d->agentes_id == 18 )
             
            <a href="/encuesta/?idencuesta={{$d->agentes_id}}&idcarga={{$d->id}}&idsap={{$d->nroSap}}">
              <button class="btn btn-success">Encuesta</button>
            </a>
                                 
          @endif
          @endif

          @if ($d->semestre == 5 && Carbon\Carbon::parse($d->fechaCarga)->year == $fechaactual->year && Carbon\Carbon::parse($d->fechaCarga)->month > 8 && $fechaactual->month <= 12)
            @if ($d->realizado == 0)
              <button class="btn btn-primary"  onclick="cargaExamen({{ $d->id }}, '{{ $d->primerNombre }}','{{ $d->primerApellido }}'  )">Exam</button>                    
            @endif
            @if ($d->realizadoco == 0)
              <button class="btn btn-dark" onclick="cargaCO({{ $d->id }})">Examen Base</button>                    
            @endif
            @if ($d->agentes_id == 2 || $d->agentes_id == 3 || $d->agentes_id == 6 || $d->agentes_id == 7 || $d->agentes_id == 5 || $d->agentes_id == 4 || $d->agentes_id == 18 )
             
            <a href="/encuesta/?idencuesta={{$d->agentes_id}}&idcarga={{$d->id}}&idsap={{$d->nroSap}}">
              <button class="btn btn-success">Encuesta</button>
            </a>
                                 
          @endif
          @endif          

          @if ($d->semestre == 6)
              @if ($d->realizado == 0)
              <button class="btn btn-primary"  onclick="cargaExamen({{ $d->id }}, '{{ $d->primerNombre }}','{{ $d->primerApellido }}'  )">Exam</button>                    
            @endif
            @if ($d->realizadoco == 0)
              <button class="btn btn-dark" onclick="cargaCO({{ $d->id }})">Examen Base</button>                    
            @endif
            @if ($d->agentes_id == 2 || $d->agentes_id == 3 || $d->agentes_id == 6 || $d->agentes_id == 7 || $d->agentes_id == 5 || $d->agentes_id == 4 || $d->agentes_id == 18 )
             
            <a href="/encuesta/?idencuesta={{$d->agentes_id}}&idcarga={{$d->id}}&idsap={{$d->nroSap}}">
              <button class="btn btn-success">Encuesta</button>
            </a>
                                 
          @endif
          @endif

          @if ($d->semestre == 6)
              @if ($d->realizado == 0)
              <button class="bbtn btn-primary"  onclick="cargaExamen({{ $d->id }}, '{{ $d->primerNombre }}','{{ $d->primerApellido }}'  )">Exam</button>                    
            @endif
            @if ($d->realizadoco == 0)
              <button class="btn btn-dark" onclick="cargaCO({{ $d->id }})">Examen Base</button>                    
            @endif
            @if ($d->agentes_id == 2 || $d->agentes_id == 3 || $d->agentes_id == 6 || $d->agentes_id == 7 || $d->agentes_id == 5 || $d->agentes_id == 4 || $d->agentes_id == 18 )
             
            <a href="/encuesta/?idencuesta={{$d->agentes_id}}&idcarga={{$d->id}}&idsap={{$d->nroSap}}">
              <button class="btn btn-success">Encuesta</button>
            </a>
                                 
          @endif
          
          
                               
        @endif

          
      
          
       </td>
        
     </tr>
     @endif
    @endforeach

      

    </tbody>
</table>






@endsection