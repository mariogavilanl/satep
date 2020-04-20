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
                        <thead>
                            <TH>DESDE</TH>
                            <TH>HASTA</TH>
                            <TH>AGENTE</TH>
                            <TH>NOMBRE TRABAJADOR</TH>
                            <TH>GERENCIA</TH>
                            <TH>CARGO</TH>
                            <TH>SEXO</TH>
                            <TH>EDAD</TH>
                            
  

                        </thead>

                            <tr>  
                                <td><input id="DESDE" name="fechaInicio" width="200px"  width="80px"  /></td>
                                <td><input id="HASTA" name="fechaFin" width="200px"  width="80px" /></td>
                            </tr>
                            
                        
                        

                
         
            
            </table>

            <button type="submit" class="btn btn-primary" >buscar</button>

</form>
@endsection
