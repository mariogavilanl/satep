@extends('layouts.app')

    @section('content')

    <script>

        $(document).ready(function(){
            $('#DESDE').datepicker({
                uiLibrary: 'bootstrap4',
                weekStartDay: 1,
                locale: 'es-es',
                modal: true, 
                header: true, 
                footer: true,
                format: 'dd-mm-yyyy'
        
            });
        });

        $(document).ready(function(){
            $('#HASTA').datepicker({
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

<form action="/medico/ver-resultados-fecha" method="get" >
            <table class="table table-primary" style="font-size: 0.7rem;">
               
                <h5> <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="64" height="64"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M131.6875,93.16667v0l-13.4375,2.75917l-13.4375,-2.75917c0,0 -29.5625,5.47175 -29.5625,35.83333h86c0,-30.24692 -29.5625,-35.83333 -29.5625,-35.83333" fill="#1abc9c"></path><path d="M118.25,111.08333l-14.33333,-17.91667v-14.33333h28.66667v14.33333z" fill="#cccccc"></path><path d="M143.33333,53.75c0,-21.06642 -50.16667,-13.717 -50.16667,0v11.00083c0,13.70267 11.22658,24.8325 25.08333,24.8325c13.85317,0 25.08333,-11.12625 25.08333,-24.8325z" fill="#f1c40f"></path><path d="M100.33333,94.37067c-2.537,0.77042 -7.53933,3.16408 -10.75,5.64733v25.39867h10.75zM146.91667,100.061c-4.19967,-3.0315 -8.20942,-4.83033 -10.75,-5.60075v30.95642h10.75z" fill="#f1c40f"></path><path d="M89.58333,118.25h57.33333v10.75h-57.33333z" fill="#f1c40f"></path><path d="M143.319,53.75c0.00358,-0.07883 0.01433,-0.15408 0.01433,-0.2365v-3.34683c0,-13.85675 -11.23017,-25.08333 -25.08333,-25.08333c-13.85317,0 -25.08333,11.22658 -25.08333,25.08333v3.34683c0,0.08242 0.01075,0.15767 0.01075,0.2365zM86,53.75h64.5v7.16667h-64.5z" fill="#666666"></path><path d="M111.08333,21.5h14.33333v32.25h-14.33333z" fill="#cccccc"></path><path d="M67.1875,114.66667v0l-13.4375,2.75917l-13.4375,-2.75917c0,0 -29.5625,5.47175 -29.5625,35.83333h86c0,-30.24692 -29.5625,-35.83333 -29.5625,-35.83333" fill="#1abc9c"></path><path d="M53.75,132.58333l-14.33333,-17.91667v-14.33333h28.66667v14.33333z" fill="#cccccc"></path><path d="M78.83333,75.25c0,-21.06642 -50.16667,-13.717 -50.16667,0v11.00083c0,13.70625 11.22658,24.8325 25.08333,24.8325c13.85317,0 25.08333,-11.12625 25.08333,-24.8325z" fill="#f1c40f"></path><path d="M35.83333,115.87067c-2.537,0.77042 -7.53933,3.16408 -10.75,5.64733v25.39867h10.75zM82.41667,121.561c-4.19967,-3.0315 -8.20942,-4.83033 -10.75,-5.60075v30.95642h10.75z" fill="#f1c40f"></path><path d="M25.08333,139.75h57.33333v10.75h-57.33333z" fill="#f1c40f"></path><path d="M100.33333,118.25v0h-10.75v0v-7.16667v0h10.75v0zM146.91667,118.25v0h-10.75v0v-7.16667v0h10.75v0zM35.83333,139.75v0h-10.75v0v-7.16667v0h10.75v0zM82.41667,139.75v0h-10.75v0v-7.16667v0h10.75v0z" fill="#666666"></path><path d="M78.819,75.25c0.00358,-0.08242 0.01433,-0.15408 0.01433,-0.2365v-3.34683c0,-13.85675 -11.23017,-25.08333 -25.08333,-25.08333c-13.85317,0 -25.08333,11.22658 -25.08333,25.08333v3.34683c0,0.08242 0.01075,0.15408 0.01075,0.2365z" fill="#666666"></path><path d="M46.58333,43h14.33333v32.25h-14.33333z" fill="#cccccc"></path><path d="M21.5,75.25h64.5v7.16667h-64.5z" fill="#666666"></path><g fill="#784719"><path d="M60.91667,86c0,1.97442 1.60533,3.58333 3.58333,3.58333c1.978,0 3.58333,-1.60892 3.58333,-3.58333c0,-1.97442 -1.60533,-3.58333 -3.58333,-3.58333c-1.978,0 -3.58333,1.60892 -3.58333,3.58333M39.41667,86c0,1.97442 1.60533,3.58333 3.58333,3.58333c1.978,0 3.58333,-1.60892 3.58333,-3.58333c0,-1.97442 -1.60533,-3.58333 -3.58333,-3.58333c-1.978,0 -3.58333,1.60892 -3.58333,3.58333"></path></g><g fill="#784719"><path d="M125.41667,64.5c0,1.97442 1.60533,3.58333 3.58333,3.58333c1.978,0 3.58333,-1.60892 3.58333,-3.58333c0,-1.97442 -1.60533,-3.58333 -3.58333,-3.58333c-1.978,0 -3.58333,1.60892 -3.58333,3.58333M103.91667,64.5c0,1.97442 1.60533,3.58333 3.58333,3.58333c1.978,0 3.58333,-1.60892 3.58333,-3.58333c0,-1.97442 -1.60533,-3.58333 -3.58333,-3.58333c-1.978,0 -3.58333,1.60892 -3.58333,3.58333"></path></g></g></g></svg> Visualización de Trabajadores </h5>        
                <thead>


                            <TH><img src="https://img.icons8.com/material-rounded/24/000000/find-user-male.png"/>BUSCAR EXPUESTO POR FECHA (DESDE)</TH>
                           
                            <TH><img src="https://img.icons8.com/material-rounded/24/000000/find-user-male.png"/>BUSCAR EXPUESTO POR FECHA (HASTA)</TH>
                                                        
  

                        </thead>

                            <tr>  
                                <td><input id="DESDE" name="fechaInicio" width="200px"  width="80px"  /></td>
                                
                                <td><input id="HASTA" name="fechaFin" width="200px"  width="80px" /></td>
                            </tr>
                            
                        
                        

                
         
            
            </table>

            <button type="submit" class="btn btn-primary" >buscar</button>

</form>
@endsection
