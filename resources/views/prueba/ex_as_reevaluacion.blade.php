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
            <h5><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="35" height="35"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none" stroke="none"></path><g id="original-icon" fill="#cccccc" stroke="none" opacity="0" visibility="hidden"><path d="M20.64,13.76c-5.68406,0 -10.32,4.63594 -10.32,10.32v13.76c0,5.68406 4.63594,10.32 10.32,10.32h30.96v-27.52h27.52v27.52h72.24c5.68406,0 10.32,-4.63594 10.32,-10.32v-13.76c0,-5.68406 -4.63594,-10.32 -10.32,-10.32zM21.07,55.04l13.33,100.19c0.22844,1.70656 1.72,3.01 3.44,3.01h96.32c1.72,0 3.21156,-1.30344 3.44,-3.01l13.33,-100.19h-71.81v20.64h34.4c3.78938,0 6.88,3.09063 6.88,6.88v34.4c0,3.78938 -3.09062,6.88 -6.88,6.88h-55.04c-3.78937,0 -6.88,-3.09062 -6.88,-6.88v-61.92zM65.36,89.44v6.88h41.28v-6.88zM65.36,103.2v6.88h41.28v-6.88z"></path></g><g id="subtracted-icon" fill="#cccccc" stroke="none"><path d="M151.36,13.76c5.68406,0 10.32,4.63594 10.32,10.32v13.76c0,5.68406 -4.63594,10.32 -10.32,10.32h-72.24v-27.52h-27.52v27.52h-30.96c-5.68406,0 -10.32,-4.63594 -10.32,-10.32v-13.76c0,-5.68406 4.63594,-10.32 10.32,-10.32zM51.6,55.04v61.92c0,3.78938 3.09063,6.88 6.88,6.88l40.21214,0c-1.53539,4.30864 -2.37214,8.94135 -2.37214,13.76c0,7.50502 2.02979,14.55897 5.56751,20.64h-64.04751c-1.72,0 -3.21156,-1.30344 -3.44,-3.01l-13.33,-100.19zM120.4,82.56c0,-3.78937 -3.09062,-6.88 -6.88,-6.88h-34.4v-20.64h71.81l-5.58968,42.01278c-2.50893,-0.48092 -5.09664,-0.73278 -7.74032,-0.73278c-6.12889,0 -11.95696,1.35366 -17.2,3.77677zM106.64,89.44v6.88h-41.28v-6.88zM106.64,103.2v6.88h-41.28v-6.88z"></path></g><g stroke="none"><g id="Layer_9" fill="#ea2222"><path d="M137.6,103.2c-18.92,0 -34.4,15.48 -34.4,34.4c0,18.92 15.48,34.4 34.4,34.4c18.92,0 34.4,-15.48 34.4,-34.4c0,-18.92 -15.48,-34.4 -34.4,-34.4zM152.048,147.232c1.376,1.376 1.376,3.44 0,4.816c-0.688,0.688 -1.72,1.032 -2.408,1.032c-0.688,0 -1.72,-0.344 -2.408,-1.032l-9.632,-9.632l-9.632,9.632c-0.688,0.688 -1.72,1.032 -2.408,1.032c-0.688,0 -1.72,-0.344 -2.408,-1.032c-1.376,-1.376 -1.376,-3.44 0,-4.816l9.632,-9.632l-9.632,-9.632c-1.376,-1.376 -1.376,-3.44 0,-4.816c1.376,-1.376 3.44,-1.376 4.816,0l9.632,9.632l9.632,-9.632c1.376,-1.376 3.44,-1.376 4.816,0c1.376,1.376 1.376,3.44 0,4.816l-9.632,9.632z"></path></g><g fill="#000000" opacity="0"><g id="IOS" font-family="-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, &quot;Segoe UI&quot;, &quot;Fira Sans&quot;, Roboto, Oxygen, Ubuntu, &quot;Droid Sans&quot;, Arial, sans-serif" font-weight="400" font-size="16" text-anchor="start" visibility="hidden"></g><g id="IOS_copy"><path d="M137.6,96.32c-22.704,0 -41.28,18.576 -41.28,41.28c0,22.704 18.576,41.28 41.28,41.28c22.704,0 41.28,-18.576 41.28,-41.28c0,-22.704 -18.576,-41.28 -41.28,-41.28z"></path></g></g></g><path d="M103.2,172v-68.8h68.8v68.8z" id="overlay-drag" fill="#ff0000" stroke="none" opacity="0"></path></g></svg><img src="https://img.icons8.com/color/35/000000/urine-collection.png"/> CONTRAMUESTRA </h5>   
            <table class="table table-primary" style="font-size: 0.7rem;">
                <thead>
                    <tr>
                        <TH><img src="https://img.icons8.com/ios/25/000000/lab-items.png"/> FECHA LABORATORIO CONTRAMUESTRA</TH>
                        <TH><img src="https://img.icons8.com/ios-filled/25/000000/lab-items.png"/> FECHA CONTRAMUESTRA </TH> 
                        <TH><img src="https://img.icons8.com/windows/25/000000/report-card.png"/> UG/G CONTRAMUESTRA</TH>              
                        <TH><img src="https://img.icons8.com/windows/25/000000/test-partial-passed.png"/> ESTADO CONTRAMUESTRA</TH>    
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

