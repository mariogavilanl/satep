@extends('layouts.app')


@section('content')
<?php ob_start(); ?>
<script>
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
                            <td>{{$examen->as_FECHALAB1}}</td>
                            <td>{{$examen->as_FECHAMUESTRA}}</td>
                            <td>{{$examen->as_UG_G}}</td>
                            <td>{{$examen->as_estado}}</td>
                          
                        </tr>
                    </tr>
                </tbody>
            </table>
            <br>
            <a class="btn btn-primary-rigth" href="pdf.php"><i class="fa fa-download"></i> Descargar archivo PDF</a>
            
           
            <p>

            </p>
           </div>

           
            <button class="btn btn-primary" onclick="back()" > <span class="fa fa-arrow-left" ></span>  volver  </button>
           
            
       
        </div>
    </div>
</div>


@endsection