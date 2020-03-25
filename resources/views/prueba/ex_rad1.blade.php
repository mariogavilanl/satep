<script>
    $(document).ready(function(){
        $('#FECHAEVALUACION').datepicker({
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
    <div class="container">
        <div class="row">
            <form action="/api/getExamenrad1">
    
            <div class="col-12 row">
                <div class="form-group col-2">
                    <label for="">FECHA EVALUACION</label>
                    <input id="FECHAEVALUACION" name="FECHA_EVALUACION" width="276" />
    
                </div>
    
          
               
                
                <div class="form-group col-2">
                    <label for="">RESULTADO HEMOGRAMA</label>
                    <input type="text" name="RESULTADO_HEMOGRAMA" class="form-control">
    
                </div>            
                
                
                <div class="form-group col-2">
                    <label for="">ESPIROMETRIA</label>
                    <input type="text" name="ESPIROMETRIA" class="form-control">
    
                </div>            
                
                
                <div class="form-group col-2">
                    <label for="">TEST VISUAL</label>
                    <input type="text" name="TEST_VISUAL" class="form-control">
    
                </div>            
                <div class="form-group col-2">
                    <label for="">PRUEBAS HEPATICAS</label>
                    <input type="text" name="PRUEBAS_HEPATICAS" class="form-control">
    
                </div>  
                <div class="form-group col-2">
                    <label for="">PRUEBAS TOROIDEAS</label>
                    <input type="text" name="PRUEBAS_TIROIDEAS" class="form-control">
    
                </div>   
                <div class="form-group col-2">
                    <label for="">CONCLUSION</label>
                    <input type="text" name="CONCLUSION" class="form-control">
    
                </div> 
                <div class="form-group col-2">
                    <label for="">OBSERVACION</label>
                    <input type="text" name="OBSERVACION" class="form-control">
    
                </div>         
                
             
                
            <input class="btn btn-primary" type="submit" value="enviar">
        </form>
        </div>
    </div>