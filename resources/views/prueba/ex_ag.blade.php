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
            <form action="/api/getExamenag">
    
            <div class="col-12 row">
                 
                <div class="form-group col-2">
                    <label for="">FECHA EVALUACION</label>
                    <input id="FECHAEVALUACION" name="FECHA_EVALUACION" width="276" />
                    
    
                 </div>  


   
                <div class="form-group col-2">
                    <label for="">RX TORAX PA</label>
                    <input type="text" name="RX_TORAX_PA"  class="form-control">
    
                </div>
    
    
                <div class="form-group col-2">
                    <label for="">CREATINEMIA</label>
                    <input type="text"  name="CREATINEMIA"  class="form-control">
    
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