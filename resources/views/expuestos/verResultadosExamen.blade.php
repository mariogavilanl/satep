@extends('layouts.app')


@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
           
            <table class="table">
             
                <thead>
                    <tr>
                        <th>Fecha Laboratorio</th>
                        <th>Fecha Muestra</th>
                
                        <th>UG/G</th>
                        <th>Estado</th>
                
                       
                    </tr>
                    

                </thead>
                
                <tbody>
                    
                    {{--  <tr>
                        <td>{{$examen->as_FECHALAB1}}</td>
                        <td>{{$examen->as_FECHAMUESTRA}}</td>
                        <td>{{$examen->as_UG_G}}</td>
                        <td>{{$examen->as_estado}}</td>
                      
                    </tr>  --}}
                </tbody>
            </table>

           </div>

            <div class="col-sm-12">
            <button class="btn btn-primary" onclick="back()" > <span class="fa fa-arrow-left" ></span>  volver  </button>
        </div>
    </div>
</div>


@endsection
