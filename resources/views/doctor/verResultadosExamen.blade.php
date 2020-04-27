@extends('layouts.app')


@section('content')
<?php ob_start(); ?>
<script>
    function generarPdf(idExamen){

        //conchetumare
        
        //generar-pdf-resultado-examen
        window.location.href = "generar-pdf-resultado-examen?idExamen="+idExamen;

    }

    function back(){

        window.history.back();

    }
</script>
           
            <table class="table table-hover">
             
                <thead>
                    <tr>
                        <th>Fecha Laboratorio</th>
                        <th>Fecha Muestra</th>
                
                        <th>UG/G</th>
                        <th>Estado</th>
                
                       
                    </tr>
                    

                </thead>
                
                <tbody>
                    
                    <tr>
                        <tr>
                            <td>{{ Carbon\Carbon::parse($examen->as_FECHALAB1)->format('d/m/Y') }}</td>
                            <td>{{ Carbon\Carbon::parse($examen->as_FECHAMUESTRA)->format('d/m/Y') }}</td>
                            <td>{{$examen->as_UG_G}}</td>
                            <td>{{$examen->as_estado}}</td>
                          
                        </tr>
                    </tr>
                </tbody>
            </table>
            <br>
            
      
            <button type="" class="btn btn-success" onclick="generarPdf({{$examen->idExamen}})" > <span class="fa fa-download" > </span>Descargar archivo PDF </button>
            
            <p>

            </p>
           </div>

           
            <button class="btn btn-primary" onclick="back()" > <span class="fa fa-arrow-left" ></span>  volver  </button>
           
            
       
        </div>
    </div>
</div>


@endsection