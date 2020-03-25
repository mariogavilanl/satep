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
        $('#FECHAEVALUACIONBIOQUIMICO').datepicker({
                uiLibrary: 'bootstrap4',
                weekStartDay: 1,
                locale: 'es-es',
                 modal: true, 
                 header: true, 
                 footer: true,
                 format: 'dd-mm-yyyy'
        
            });
            $('#FECHAEVALUACIONTORAX').datepicker({
            uiLibrary: 'bootstrap4',
            weekStartDay: 1,
            locale: 'es-es',
             modal: true, 
             header: true, 
             footer: true,
             format: 'dd-mm-yyyy'
    
        });
        $('#FECHAEVALUACIONCLINICA').datepicker({
                uiLibrary: 'bootstrap4',
                weekStartDay: 1,
                locale: 'es-es',
                 modal: true, 
                 header: true, 
                 footer: true,
                 format: 'dd-mm-yyyy'
        
            });
            $('#FECHAEVALUACIONORINA').datepicker({
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
            <form action="/api/getExamencitoestaticos">
    
            <div class="col-12 row">
             
                <div class="form-group col-2">
                    <label for="">FECHA EVALUACION HEMOGRAMA</label>
                    <input id="FECHAEVALUACION" name="FECHA_EVALUACION_HEMOGRAMA" width="276" />
                    
    
                 </div>  


    
    
    
                <div class="form-group col-2">
                    <label for="">RESULTADO HEMOGRAMA</label>
                    <input type="text" name="RESULTADO_HEMOGRAMA"  class="form-control">
    
                </div>
    
    
                <div class="form-group col-2">
                    <label for="">OBSERVACION HEMOGRAMA</label>
                    <input type="text"  name="OBSERVACION_HEMOGRAMA"  class="form-control">
    
                </div>     
                
                
                <div class="form-group col-2">
                    <label for="">FECHA EVALUACION BIOQUIMICO</label>
                    <input id="FECHAEVALUACIONBIOQUIMICO" name="FECHA_EVALUACION_BIOQUIMICO" width="276" />
    
                </div>            
                                        
                
                <div class="form-group col-2">
                    <label for="">RESULTADO BIOQUIMICO</label>
                    <input type="text" name="RESULTADO_BIOQUIMICO" class="form-control">
    
                </div>    
                
                <div class="form-group col-2">
                    <label for="">OBSERVACION BIOQUIMICO</label>
                    <input type="text" name="OBSERVACION_BIOQUIMICO" class="form-control">
    
                </div>  



                
                
                <div class="form-group col-2">
                    <label for="">FECHA EVALUACION TORAX AP-LAT </label>
                    <input id="FECHAEVALUACIONTORAX" name="FECHA_EVALUACION_TORAX" width="276" />
    
                </div>            
                
                
                <div class="form-group col-2">
                    <label for="">RESULTADO TORAX AP-LAT</label>
                    <input type="text" name="RESULTADO_TORAX" class="form-control">
    
                </div>  
                
                <div class="form-group col-2">
                    <label for="">OBSERVACION TORAX</label>
                    <input type="text" name="OBSERVACION_TORAX" class="form-control">
    
                </div>         
                
                <div class="form-group col-2">
                    <label for="">FECHA EVALUACION CLINICA</label>
                    <input id="FECHAEVALUACIONCLINICA" name="FECHA_EVALUACION_CLINICA" width="276" />
    
                </div>            
                
                
                <div class="form-group col-2">
                    <label for="">RESULTADO EVALUACION CLINICA</label>
                    <input type="text" name="RESULTADO_EVALUACION_CLINICA" class="form-control">
    
                </div>  
                
                <div class="form-group col-2">
                    <label for="">OBSERVACION EVALUACION CLINICA</label>
                    <input type="text" name="OBSERVACION_EVALUACION_CLINICA" class="form-control">
    
                </div>    
                
                    
                <div class="form-group col-2">
                    <label for="">FECHA EVALUACION ORINA</label>
                    <input id="FECHAEVALUACIONORINA" name="FECHA_EVALUACION_ORINA" width="276" />
    
                </div>            
                
                
                <div class="form-group col-2">
                    <label for="">RESULTADO ORINA</label>
                    <input type="text" name="RESULTADO_ORINA" class="form-control">
    
                </div>  
                
                <div class="form-group col-2">
                    <label for="">OBSERVACION ORINA</label>
                    <input type="text" name="OBSERVACION_ORINA" class="form-control">
    
                </div>    
                <div class="form-group col-2">
                    <label for="">CONCLUSION</label>
                    <input type="text" name="CONCLUSION" class="form-control">
    
                </div>    
                
            <input class="btn btn-primary" type="submit" value="enviar">
        </form>
        </div>
    </div>