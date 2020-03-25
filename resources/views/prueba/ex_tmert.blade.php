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
    
            <div class="col-12 row">
                <div class="form-group col-2">
                    <label for="">1.Ha tenido molestia en? </label>
                    <input id="FECHAENCUESTA" name="FECHA_ENCUESTA" width="276" />
    
                </div>
    
          
               
                
                <div class="form-group col-2">
                    <label for="">2. Desde hace cuanto tiempo? </label>
                    <input type="text" name="RESULTADO_RX" class="form-control">
    
                </div>            
                
                
                <div class="form-group col-2">
                    <label for="">3. Ha necesitado cambiar de puesto de trabajo?</label>
                    <input type="text" name="OBSERVACIONES" class="form-control">
    
                </div>            
                
                
                <div class="form-group col-2">
                    <label for="">4. ha tenido molestias en los ultimos 12 meses </label>
                    <input type="text" name="ANTECEDENTES_PATOLOGIAS" class="form-control">
    
                </div>            
                <div class="form-group col-2">
                    <label for="">5. Cuanto tiempo ha tenido molestias en los ultimos 12 meses?</label>
                    <input type="text" name="SINTOMAS_RESPIRATORIAS" class="form-control">
    
                </div>  
                <div class="form-group col-2">
                    <label for="">6. Cuanto dura cada episodio?</label>
                    <input type="text" name="OBSERVACIONES_2" class="form-control">
    
                </div>   
                <div class="form-group col-2">
                    <label for="">7. Cuanto tiempo estas molestias le han impedido hacer su trabajo en los ultimos 12 meses? </label>
                    <input type="text" name="DECLARACION_SALUD" class="form-control">
    
                </div>
                
            </div>   
            <div class="form-group col-2">
                <label for="">8. Ha recibido tratamiento por estas molestias en los ultimos 12 meses? </label>
                <input type="text" name="DECLARACION_SALUD" class="form-control">

            </div>  
        </div>   
        <div class="form-group col-2">
            <label for="">9. Ha tenido molestias en los ultimos 7 dias? </label>
            <input type="text" name="DECLARACION_SALUD" class="form-control">

        </div>    
    </div>   
    <div class="form-group col-2">
        <label for="">10. Pongale nota a sus molestias entre 0 (sin molestias) y 5 (molestias muy fuertes) </label>
        <input type="text" name="DECLARACION_SALUD" class="form-control">

    </div>  
</div>   
<div class="form-group col-2">
    <label for="">11. A que atribulle estas molestias? </label>
    <input type="text" name="DECLARACION_SALUD" class="form-control">

</div>    


                
            <input class="btn btn-primary" type="submit" value="enviar">
        </form>
        </div>
    </div>