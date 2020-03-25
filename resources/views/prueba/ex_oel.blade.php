<script>
    $(document).ready(function(){
        $('#FECHAEXAMEN').datepicker({
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
            <form action="/api/getExamenoel">
    
                <div class="col-12 row">
           
                  
                    <div class="form-group col-2">
                        <label for="">FECHA EXAMEN</label>
                        <input id="FECHAEXAMEN" name="FECHA_EXAMEN" width="276" />
                        
        
                     </div>  
              
                     <div class="form-group col-2">
                        <label for="">EVALUACIONES SEGÚN AGENTE O CONDICIÓN DE EXPOSICIÓN</label>
                         <input type="text" name="EVALUACION"  class="form-control">
    
                    </div>
    
    
                    <div class="form-group col-2">
                        <label for="">OPTOMETRIA</label>
                         <input type="text" name="OPTOMETRIA"  class="form-control">
    
                    </div>
    
    
                 <div class="form-group col-2">
                    <label for="">ESCALA EPWORTH </label>
                    <input type="text"  name="ESCALA_EPWORTH"  class="form-control">
    
                </div>     
                
                
                <div class="form-group col-2">
                    <label for="">FARMACOS</label>
                    <input type="text" name="FARMACOS" class="form-control">
    
                </div>            
                
                
                <div class="form-group col-2">
                    <label for="">ALCOHOL</label>
                    <input type="text" name="ALCOHOL" class="form-control">
    
                </div>            
                
                

                <div class="form-group col-2">
                    <label for="">DROGAS(MARIHUANA BENZODIACEPINAS OPIACEOS BARBITURICOS ANFETAMINAS) </label>
                    <input type="text" name="DROGAS" class="form-control">
                    
    
                 </div>  


 
                
                
                <div class="form-group col-2">
                    <label for="">PSICOSENSOTECNICO RIGUROSO</label>
                    <input type="text" name="PSICOSENSOTECNICO_RIGUROSO" class="form-control">
    
                </div>            
                
                
                
            <input class="btn btn-primary" type="submit" value="enviar">
        </form>
        </div>
    </div>