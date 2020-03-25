<script>
    $(document).ready(function(){
        $('#FECHAFLUJO1').datepicker({
            uiLibrary: 'bootstrap4',
            weekStartDay: 1,
            locale: 'es-es',
             modal: true, 
             header: true, 
             footer: true,
             format: 'dd-mm-yyyy'
    
        });
        $('#FECHAFLUJO2').datepicker({
                uiLibrary: 'bootstrap4',
                weekStartDay: 1,
                locale: 'es-es',
                 modal: true, 
                 header: true, 
                 footer: true,
                 format: 'dd-mm-yyyy'
        
            });
            
              $('#FECHAENCUESTA').datepicker({
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
            <form action="/api/getExamenso2">
    
            <div class="col-12 row">
                <div class="form-group col-2">
                    <label for="">FECHA FLUJOMETRIA 1</label>
                    <input id="FECHAFLUJO1" name="FECHA_FLUJO1" width="276" />
    
                </div>
    
    
    
                <div class="form-group col-2">
                    <label for="">PEF OBSERVADO 1</label>
                    <input type="text" name="PEF_OBS1"  class="form-control">
    
                </div>
    
    
                <div class="form-group col-2">
                    <label for="">PEF TEORICO 1</label>
                    <input type="text"  name="PEF_TEORICO1"  class="form-control">
    
                </div>     
                
                
                <div class="form-group col-2">
                    <label for="">RESULTADO % FLUJOMETRIA 1</label>
                    <input type="text" name="PORCETAJE_FLUJO1" class="form-control">
    
                </div>            
                
                
                <div class="form-group col-2">
                    <label for="">ESTADO</label>
                    <input type="text" name="ESTADO" class="form-control">
    
                </div>            
                
                
                <div class="form-group col-2">
                    <label for="">FECHA_FLUJOMETRIA2 </label>
                    <input id="FECHAFLUJO2" name="FECHA_FLUJO2" width="276" />
    
                </div>            
                
                
                <div class="form-group col-2">
                    <label for="">PEF OBSERVADO 2</label>
                    <input type="text" name="PEF_OBS2" class="form-control">
    
                </div>            
                
                <div class="form-group col-2">
                    <label for="">PEF TEORICO 2</label>
                    <input type="text" name="PEF_TEORICO2" class="form-control">
    
                </div>              
                
                <div class="form-group col-2">
                    <label for="">RESULTADO % FLOJOMETRIA 2</label>
                    <input type="text" name="PORCENTAJE_FLUJO2" class="form-control">
    
                </div>   
                
                <div class="form-group col-2">
                    <label for="">ESTADO 2</label>
                    <input type="text" name="ESTADO_2" class="form-control">
    
                </div>
    
    
                <div class="form-group col-2">
                    <label for="">VARIABILIDAD</label>
                    <input type="text"  name="VARIABILIDAD" class="form-control">
    
                </div>     
                
                
                <div class="form-group col-2">
                    <label for="">CONCLUSION FLUJOMETRIA</label>
                    <input type="text" name="CONCLUSION_FLUJO" class="form-control">
    
                </div>            
                
                
                <div class="form-group col-2">
                    <label for="">FECHA ENCUESTA SISTOMAS RESPIRATORIAS</label>
                    <input id="FECHAENCUESTA" name="FECHA_ENCUESTA" width="276" />
    
                </div>            
                
                
                <div class="form-group col-2">
                    <label for="">CONCLUSION ENCUESTA</label>
                    <input type="text" name="CONCLUSION_ENCUESTA" class="form-control">
    
                </div>            
                
                
                <div class="form-group col-2">
                    <label for="">CONCLUSION FINAL</label>
                    <input type="text" name="CONCLUSION_FINAL" class="form-control">
    
                </div>      
                
                
            <input class="btn btn-primary" type="submit" value="enviar">
        </form>
        </div>
    </div>
    
    