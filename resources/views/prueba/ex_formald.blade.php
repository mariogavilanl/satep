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
    
    <div class="col-12">
        <H1 style="text-align:center"> <img src="https://media.licdn.com/dms/image/C560BAQErD20N0vWfcA/company-logo_400_400/0?e=1583971200&v=beta&t=bkfz_q_WT0YLfy3Z5m_Nj_YS_0oFVc5PwyMeoc4p2Ro" width="80px"  height="80PX" class="img-responsive" >EXAMEN FORMALDEIDO </H1>
      
    
        <hr>
    
    <div class="container">
        <div class="row">
            <form action="/api/getExamenformald">
    
            <div class="col-12 row">
                   
                <hr>
    
                <div class="form-group col-4">
                    <label for="">RESULTADO HEMOGRAMA</label>
                    <input type="text" name="RESULTADO_HEMOGRAMA"  class="form-control">
    
                </div>

             
    
    
                <div class="form-group col-4">
                    <label for="">OBSERVACION HEMOGRAMA</label>
                    <input type="text"  name="OBSERVACION_HEMOGRAMA"  class="form-control">
    
                </div>  
                
                <div class="form-group col-4">
                    <label for="">FECHA EVALUACION HEMOGRAMA</label>
                    <input id="FECHAEVALUACION" name="FECHA_EVALUACION_HEMOGRAMA" width="276" />
    
                </div>
                
                <hr>
                           
                
                
                <div class="form-group col-4">
                    <label for="">RESULTADO BIOQUIMICO</label>
                    <input type="text" name="RESULTADO_BIOQUIMICO" class="form-control">
    
                </div>            
                
                <hr>
                <div class="form-group col-4">
                    <label for="">OBSERVACION BIOQUIMICO</label>
                    <input type="text" name="OBSERVACION_TORAX" class="form-control">
    
                </div> 

                <div class="form-group col-4">
                    <label for="">FECHA EVALUACION BIOQUIMICO</label>
                    <input id="FECHAEVALUACIONBIOQUIMICO" name="FECHA_EVALUACION_BIOQUIMICO" width="276" />
    
                </div> 
                          
                
                
                <div class="form-group col-4">
                    <label for="">RESULTADO TORAX AP-LAT</label>
                    <input type="text" name="RESULTADO_TORAX" class="form-control">
    
                </div>  
                
                <div class="form-group col-4">
                    <label for="">OBSERVACION TORAX</label>
                    <input type="text" name="OBSERVACION_TORAX" class="form-control">
    
                </div> 
                <div class="form-group col-4">
                    <label for="">FECHA EVALUACION TORAX AP-LAT </label>
                    <input id="FECHAEVALUACIONTORAX" name="FECHA_EVALUACION_TORAX" width="276" />
    
                </div>         
                <hr>
                          
                
                
                <div class="form-group col-4">
                    <label for="">RESULTADO EVALUACION CLINICA</label>
                    <input type="text" name="RESULTADO_EVALUACION_CLINICA" class="form-control">
    
                </div>  
                
                <div class="form-group col-4">
                    <label for="">OBSERVACION EVALUACION CLINICA</label>
                    <input type="text" name="OBSERVACION_EVALUACION_CLINICA" class="form-control">
    
                </div>    
                <div class="form-group col-4">
                    <label for="">FECHA EVALUACION CLINICA</label>
                    <input id="FECHAEVALUACIONCLINICA" name="FECHA_EVALUACION_CLINICA" width="276" />
    
                </div>  
               
                          
                <hr>
                
                <div class="form-group col-4">
                    <label for="">RESULTADO ORINA</label>
                    <input type="text" name="RESULTADO_ORINA" class="form-control">
    
                </div>  
                
                <div class="form-group col-4">
                    <label for="">OBSERVACION ORINA</label>
                    <input type="text" name="OBSERVACION_ORINA" class="form-control">
    
                </div>   
                <div class="form-group col-4">
                    <label for="">FECHA EVALUACION ORINA</label>
                    <input id="FECHAEVALUACIONORINA" name="FECHA_EVALUACION_ORINA" width="276" />
    
                </div> 
                       
                
            
        <input class="btn btn-primary" type="submit" value="enviar">
        </form>
        <P>

        </P>
        
        </div>
    </div>