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

            <table class="table table-primary" style="font-size: 0.7rem;">
                        <thead>
                            <TH>DESDE</TH>
                            <TH>HASTA</TH>
                        </thead>

                            <tr>  
                                <td><input id="DESDE" name="DESDE" width="100px"  width="80px"  /></td>
                                <td><input id="HASTA" name="HASTA" width="100px"  width="80px" /></td>
                            </tr>
            </table>

@endsection
