<script>
    $(document).ready(function(){
        $('#FECHAMUESTRA').datepicker({
            uiLibrary: 'bootstrap4',
            weekStartDay: 1,
            locale: 'es-es',
             modal: true, 
             header: true, 
             footer: true,
             format: 'dd-mm-yyyy'
    
        });

        $('#FECHACONTRAMUESTRA').datepicker({
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
    <H1 style="text-align:center"> <img src="https://media.licdn.com/dms/image/C560BAQErD20N0vWfcA/company-logo_400_400/0?e=1583971200&v=beta&t=bkfz_q_WT0YLfy3Z5m_Nj_YS_0oFVc5PwyMeoc4p2Ro" width="80px"  height="80PX" class="img-responsive" >EXAMEN ARSENICO </H1>
  

    <hr>
    
    
    <div class="container">
        <div class="row">
            <form action="/api/getExamenarsenico">
    
            <div class="col-12 row">
               
                <div class="form-group col-4">
                    <label for="">FECHA MUESTRA</label>
                    <input id="FECHAMUESTRA" name="FECHA_MUESTRA" width="276" />
                    
    
                 </div>  

    
    
                <div class="form-group col-4">
                    <label for="">UG/G</label>
                    <input type="text" name="as_UG_G"  class="form-control">
    
                </div>
    
    
                <div class="form-group col-4">
                    <label for="">ESTADO</label><br />
                  
                        <input type="radio" name="estado" value="Alterado" /> Alterado<br />
                        <input type="radio" name="estado" value="Normal" /> Normal<br />
    
                </div>     
                
                <div class="form-group col-4">
                    <label for="">FECHA CONTRAMUESTRA</label>
                    <input id="FECHACONTRAMUESTRA" name="FECHA_CONTRAMUESTRA" width="276" />
                    
    
                 </div>  

  
                
                
                <div class="form-group col-4">
                    <label for="">UG/G CONTRAMUESTRA</label>
                    <input type="text" name="as_UG_G_CONTRAMUESTRA" class="form-control">
    
                </div>            
                
                
                <div class="form-group col-4">
                    <label for="">ESTADO CONTRAMUESTRA</label> <br />
                            <input type="radio" name="as_estado1" value="Alterado" /> Alterado<br />
                            <input type="radio" name="as_estado1" value="Normal" /> Normal<br />
    
                </div>            
                
                                
            <input class="btn btn-primary" type="submit" value="enviar">
        </form>
        </div>
    </div>