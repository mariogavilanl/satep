<script>
    $(document).ready(function(){
        $('#fecha_examen').datepicker({
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
            <form action="/api/getExamenruido">
                <div class="form-group col-2">
                    <label for="">fecha examen</label>
                    <input id="fecha_examen" name="fechaExamen" width="276" />
                    
    
                </div>  
            <div class="col-12 row">
                 
    
    
                <div class="form-group col-2">
                    <label for="">oido derecho frec 1</label>
                    <input type="text" name="oido_derecho_1"  class="form-control">
    
                </div>
    
    
                <div class="form-group col-2">
                    <label for="">oido derecho frec 2</label>
                    <input type="text"  name="oido_derecho_2"  class="form-control">
    
                </div>     
                
                
                <div class="form-group col-2">
                    <label for="">oido derecho frec 3</label>
                    <input type="text" name="oido_derecho_3" class="form-control">
    
                </div>            
                
                
                <div class="form-group col-2">
                    <label for="">oido derecho frec 4</label>
                    <input type="text" name="oido_derecho_4" class="form-control">
    
                </div>            
                
                
                <div class="form-group col-2">
                    <label for="">oido derecho frec 6</label>
                    <input type="text" name="oido_derecho_6" class="form-control">
    
                </div>            
                
                
                <div class="form-group col-2">
                    <label for="">oido derecho frec 8</label>
                    <input type="text" name="oido_derecho_8" class="form-control">
    
                </div>            
                
                <div class="form-group col-2">
                    <label for="">oido_derecho_dano_aud</label>
                    <input type="text" name="oido_derecho_dano_aud" class="form-control">
    
                </div>              
                
                <div class="form-group col-2">
                    <label for="">Prom 1-6</label>
                    <input type="text" name="oido_derecho_prom_1_6" class="form-control">
    
                </div>   
                
                <div class="form-group col-2">
                    <label for="">oido izquierdo frec 1</label>
                    <input type="text" name="oido_izquierdo_1" class="form-control">
    
                </div>
    
    
                <div class="form-group col-2">
                    <label for="">oido izquierdo frec 2</label>
                    <input type="text"  name="oido_izquierdo_2" class="form-control">
    
                </div>     
                
                
                <div class="form-group col-2">
                    <label for="">oido izquierdo frec 3</label>
                    <input type="text" name="oido_izquierdo_3" class="form-control">
    
                </div>            
                
                
                <div class="form-group col-2">
                    <label for="">oido izquierdo frec 4</label>
                    <input type="text" name="oido_izquierdo_4" class="form-control">
    
                </div>            
                
                
                <div class="form-group col-2">
                    <label for="">oido izquierdo frec 6</label>
                    <input type="text" name="oido_izquierdo_6" class="form-control">
    
                </div>            
                
                
                <div class="form-group col-2">
                    <label for="">oido izquierdo frec 8</label>
                    <input type="text" name="oido_izquierdo_8" class="form-control">
    
                </div>      
                
                <div class="form-group col-2">
                    <label for="">oido_izquierdo_prom-1-6</label>
                    <input type="text" name="oido_izquierdo_prom_1_6" class="form-control">
    
                </div>                 
                
                                 
                
                <div class="form-group col-2">
                    <label for="">oido_izquierdo_dano_aud</label>
                    <input type="text" name="oido_izquierdo_dano_aud" class="form-control">
    
                </div>            
                
                
                <div class="form-group col-2">
                    <label for="">% INCAPACIDAD</label>
                    <input type="text" name="PORCENTAJE_INCAPACIDAD" class="form-control">
    
                </div>            
                
                
                 
                
    
                <div class="form-group col-2">
                    <label for="">AUDIO CONFIRMACION</label>
                    <input type="text" name="AUDIO_CONFIRMACION" class="form-control">
    
                </div> 
    
                
                <div class="form-group col-2">
                    <label for="">OBSERVACIONES MEDICAS RELEVANTES EN RELACION AL RIESGO DEL RUIDO</label>
                    <input type="text" name="OBSERVACION_MEDICA_RIESGO" class="form-control">
    
                </div> 
                
                <div class="form-group col-2">
                    <label for="">OBSERVACION</label>
                    <input type="text" name="OBSERVACION_MEDICA" class="form-control">
    
                </div>     
                
                
    
    
                
            </div>
            <input class="btn btn-primary" type="submit" value="enviar">
        </form>
        </div>
    </div>
    
    