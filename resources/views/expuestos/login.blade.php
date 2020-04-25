@extends('layouts.app')


@section('content')

<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-12">


                <div class="card">
                    <div class="card-header">Acceso ver resultados exámen</div>
    
                    <div class="card-body">
                        <form method="GET" action="/expuestos/ver-resultados-examen-expuestos">
                            <input type="hidden" name="_token" value="fWUvBifQupzUHsnX0ZQ7go4o6uLgtDMgEF7sONPc">
                            <div class="form-group row">
                                <label for="nroSap" class="col-md-4 col-form-label text-md-right">RUT</label>
    
                                <div class="col-md-6">
                                    <input  type="nroSap" class="form-control " name="rut" value="" required="" >
    
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">SAP</label>
    
                                <div class="col-md-6">
                                    <input  type="password" class="form-control " name="nroSap" required="">
    
                                </div>
                            </div>
    
 
    
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">

                                    <button type="submit" class="btn btn-primary">
                                       Acceder
                                    </button>
    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
