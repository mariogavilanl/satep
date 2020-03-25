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

        $('#FECHAREEVALUACION').datepicker({
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
            <form action="/api/getExamenaf">
    
                                  
                        <div class="col">
                        <label for="">FECHA EVALUACION</label>
                                          
                        <input id="FECHAEVALUACION" name="FECHA_EVALUACION" width="276" />
                    </div>
        
                       
  
    
    
                    <div class="col">
                        <label for="">OPTOMETRIA</label>
                         <input type="text" name="OPTOMETRIA"  class="form-control">
    
                    </div>
    
    
                 <div class="col">
                    <label for="">EX NEUROLOGICO Y EQUILIBRIO</label>
                    <input type="text"  name="EX_NEU_EQUI"  class="form-control">
    
                </div>     
                
                
                <div class="col">
                    <label for="">CONCLUSION</label>
                    <input type="text" name="CONCLUSION" class="form-control">
    
                </div>            
                
                
                <div class="col">
                    <label for="">INDICACION MEDICA</label>
                    <input type="text" name="INDICACION_MEDICA" class="form-control">
    
                </div>            
                
                

                <div class="col">
                    <label for="">FECHA REEVALUACION MEDICA</label>
                    <input id="FECHAREEVALUACION" name="FECHA_REEVALUACION" width="276" />
                    
    
                 </div>  


 
                
                
                <div class="col">
                    <label for="">CONCLUSION_REEVALUACION</label>
                    <input type="text" name="CONCLUSION_REEVALUACION" class="form-control">
    
                </div>            
                
                
                <div class="col">
            <input class="btn btn-primary" type="submit" value="enviar">
        </div>  
        </form>
        </div>
    </div>