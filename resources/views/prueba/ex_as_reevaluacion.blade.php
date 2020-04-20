@extends('layouts.app')

@section('content')
<script>
    $(document).ready(function(){
        $('#FECHAMUESTRA').datepicker({
            uiLibrary: 'bootstrap4',
            weekStartDay: 1,
            locale: 'es-es',
            modal: true, 
            header: true, 
            footer: true,
            format: 'dd-mm-yyyy'
    
        });

      
    $('#FECHALAB1').datepicker({
        uiLibrary: 'bootstrap4',
        weekStartDay: 1,
        locale: 'es-es',
        modal: true, 
        header: true, 
        footer: true,
        format: 'dd-mm-yyyy'

    });

});
    </script> 
<div class="container-fluid">

    <form action="api/reevaluacion-examen" method="get">

    <div class="row">
        <div class="col-sm-12">
            <table class="table table-primary" style="font-size: 0.7rem;">
                <thead>
                    <tr>
                        <TH><img src="https://img.icons8.com/ios/25/000000/lab-items.png"/> FECHA LABORATORIO </TH>
                        <TH><img src="https://img.icons8.com/ios-filled/25/000000/lab-items.png"/> FECHA MUESTRA </TH> 
                        <TH><img src="https://img.icons8.com/windows/25/000000/report-card.png"/> UG/G </TH>              
                        <TH><img src="https://img.icons8.com/windows/25/000000/test-partial-passed.png"/> ESTADO </TH>    
                    </tr>
              
            </thead>
                <tr>
                      <td ><input id="FECHALAB1" name="FECHALAB1" width="200px"/></td>
                      <td><input id="FECHAMUESTRA" name="FECHAMUESTRA" width="200px"   /></td>        
                      <td><input class="form-control" type="text" name="as_UG_G"  ></td>                  
                      <td><input class="form-check-input" type="radio" name="as_estado" value="Alterado"  >Alterado <br>
                      <input class="form-check-input" type="radio" name="as_estado" value="Normal"  >Normal</td>
              
                    </tr>
                    </table>
              

            
        </div>

        <div class="col-sm-12">
            <button type="submit" class="btn btn-primary">
                Guardar
            </button>
        </div>
    </div>
    
</form>
</div>

@endsection

