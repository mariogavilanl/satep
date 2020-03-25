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
            

              
    
            <form action="/api/getExamensilice">
    
                <div class="col-12">
                    <H1 >  <img src="https://media.licdn.com/dms/image/C560BAQErD20N0vWfcA/company-logo_400_400/0?e=1583971200&v=beta&t=bkfz_q_WT0YLfy3Z5m_Nj_YS_0oFVc5PwyMeoc4p2Ro" width="80px" height="80PX"  class="img-responsive" >  EXAMEN SILICE </H1>
                  

                    <hr>
                    <label for="">FECHA REALIZACION RX TX</label>
                    <input id="FECHAEVALUACION" name="FECHA_EVALUACION" width="auto" class="col-12"  />
    
<p>

</p>

                </div> 
           
             
                <div class="container">

                    <div class="row">
                        <div class="col-lg-6" >
                    <label for=""> VALOR DE RX TX OIT</label> 
                    <select name="moto1">
                        <option value="1">0/-</option>
                        <option value="2">0/1</option>
                        <option value="3">1/0</option>
                        <option value="4">1/1</option>
                        <option value="5">1/2</option>
                        <option value="1">2/1</option>
                        <option value="2">2/2</option>
                        <option value="3">2/3</option>
                        <option value="4">3/2</option>
                        <option value="5">3/3</option>
                        <option value="5">3/+</option>
                      </select>
                    </div>
                

             
                    <div class="col-lg-6" >
                 
                        <label>TIPO</label>
                      <select name="moto">
                        <option value="1">P/P</option>
                        <option value="2">Q/Q</option>
                        <option value="3">R/R</option>
                        <option value="1">P/S</option>
                        <option value="2">Q/L</option>
                        <option value="3">R/U</option>
                        
                      </select>
                    </div>
              
                </div>

            </div>


            
            




        
               
                
                        
                   
                <div class="container">

                    <div class="row">
                        <div class="col-lg-6" >
            
                    <input type="radio">
                  Normal
                  
                </div>
              
                <div class="col-lg-6">
            
                    <input type="radio">
                 Alterado
                  
                </div>
              
            </div>

        </div>
        
             
            
                <div class="col">
                    <label for="">OBSERVACIONES</label>
                    <input type="text" name="OBSERVACIONES" class="col">
    
                </div>            
                    
           
    
          
                <div class="col">
                    <label for="">ANTECEDENTES DE PATOLOGIAS</label>
                    <input type="text" name="ANTECEDENTES_PATOLOGIAS" class="col">
                </div>            
                     
           
       
                          
                <div class="col">
                    <label for="">SINTOMAS RESPIRATORIAS</label>
                    <input type="text" name="SINTOMAS_RESPIRATORIAS" class="col">
                </div>            
                     
           
     
                 
                <div class="col">
                    <label for="">OBSERVACIONES 2</label>
                    <input type="text" name="OBSERVACIONES_2" class="col">
                </div>            
                      
           
      
               
    </div>  
<p>

</p>
     
    <input class="btn btn-primary" type="submit" value="enviar">
    </div>           
   
   
    
         
        </form>
    
        </div>
    </div>