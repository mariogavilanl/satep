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
            <form action="/api/getExamenoep">
    
            <div class="col-12 row">
                <div class="form-group col-2">
                    <label for="">FECHA EVALUACION</label>
                    <input id="FECHAEVALUACION" name="FECHA_EVALUACION" width="276" />
    
                </div>
    
    
    
                <div class="form-group col-2">
                    <label for="">ESCALA EPWORTH</label>
                    <input type="text" name="ESCALA_EPWORTH"  class="form-control">
    
                </div>
    
    
                <div class="form-group col-2">
                    <label for="">CREATININA</label>
                    <input type="text"  name="CREATININA"  class="form-control">
    
                </div>     
                
                
                <div class="form-group col-2">
                    <label for="">OPTOMETRIA</label>
                    <input type="text" name="OPTOMETRIA" class="form-control">
    
                </div>            
                
                
                <div class="form-group col-2">
                    <label for="">PSICOSENSOTECNICO</label>
                    <input type="text" name="PSICOSENSOTECNICO" class="form-control">
    
                </div>            
                
                
                <div class="form-group col-2">
                    <label for="">CONCLUSION</label>
                    <input type="text" name="CONCLUSION" class="form-control">
    
                </div>            
                
                
                <div class="form-group col-2">
                    <label for="">OBSERVACION</label>
                    <input type="text" name="OBSERVACION" class="form-control">
    
                </div>  
                
                <div class="form-group col-2">
                    <label for="">FECHA REEVALUACION</label>
                    <input id="FECHAREVALUACION" name="FECHA_REVALUACION" width="276" />
    
                </div>         
                
                <div class="form-group col-2">
                    <label for="">CONCLUSION2</label>
                    <input type="text" name="CONCLUSION_2" class="form-control">
    
                </div>            
                
                
                <div class="form-group col-2">
                    <label for="">OBSERVACION REVALUACION</label>
                    <input type="text" name="OBSERVACION_REEVALUACION" class="form-control">
    
                </div>  
                
             
                
            <input class="btn btn-primary" type="submit" value="enviar">
        </form>
        </div>
    </div>