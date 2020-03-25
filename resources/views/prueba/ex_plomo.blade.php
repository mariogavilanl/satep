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
    });
    </script>    
    <div class="container">
        <div class="row">
            <form action="/api/getExamenplomo">
    
            <div class="col-12 row">
                <div class="form-group col-2">
                    <label for="">FECHA MUESTRA</label>
                    <input id="FECHAMUESTRA" name="FECHA_MUESTRA" width="276" />
    
                </div>
    
          
               
                
                <div class="form-group col-2">
                    <label for="">CODIGO INFORME</label>
                    <input type="text" name="COD_INFORME" class="form-control">
    
                </div>            
                
                
                <div class="form-group col-2">
                    <label for="">UG/100ML</label>
                    <input type="text" name="UG_100ML" class="form-control">
    
                </div>            
                
                
                <div class="form-group col-2">
                    <label for="">RESULTADO</label>
                    <input type="text" name="RESULTADO" class="form-control">
    
                </div>            
                
                
             
                
            <input class="btn btn-primary" type="submit" value="enviar">
        </form>
        </div>
    </div>