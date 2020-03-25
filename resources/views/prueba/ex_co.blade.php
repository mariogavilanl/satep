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


  
    $("#talla, #peso").on({
        'change' : function(){
            if ($("#talla").val() != "" && $("#peso").val() != "") {
                var imc = ($("#peso").val() / (Math.pow($("#talla").val(),2))).toFixed(2);
                $("#imc").val(imc);  
            }
        },
        'keydown' : function(){
            if ($("#talla").val() != "" && $("#peso").val() != "") {
                var imc = ($("#peso").val() / (Math.pow($("#talla").val(),2))).toFixed(2);
                $("#imc").val(imc);  
            }
        },
        'keyup' : function(){
            if ($("#talla").val() != "" && $("#peso").val() != "") {
                var imc = ($("#peso").val() / (Math.pow($("#talla").val(),2))).toFixed(2);
                $("#imc").val(imc);  
            }
        }
    })
});

function calculoImc(){

}
    </script>

<div class="container">
    <div class="row">
        <div class="col-12">
            <H1 style="text-align:center" >  <img src="https://media.licdn.com/dms/image/C560BAQErD20N0vWfcA/company-logo_400_400/0?e=1583971200&v=beta&t=bkfz_q_WT0YLfy3Z5m_Nj_YS_0oFVc5PwyMeoc4p2Ro" width="80px" height="80PX"  class="img-responsive" >  EXAMEN BASE </H1>
          

            <hr>
        <form action="/api/setExamenCO">        
        <div class="col-12 row">

              
            
            <div class="form-group col-4">
                <label for="">Presión Arterial</label>
                <input type="text" name="co_presion_arterial"  class="form-control">

            </div>     
            
            <div class="form-group col-4">
                <label for="">Pulso</label>
                <input type="number" step="1" name="co_pulso" value="{{ old('co_pulso') }}"  class="form-control">
                @error('co_pulso')
                <span class="text-danger" role="alert">
                    <strong>Obligatorio</strong>
                </span>
                @enderror

            </div>   
            
            <div class="form-group col-4">
                <label for="">Peso</label>

                <input type="number" step="0.1" name="co_peso" id="peso" value="{{ old('co_peso') }}"  class="form-control">
                @error('co_peso')
                <span class="text-danger" role="alert">
                    <strong>Obligatorio</strong>
                </span>
                @enderror
            </div>    
            
            <div class="form-group col-4">
                <label for="">Talla</label>
                <input type="number" step="0.1" name="co_talla" id="talla" value="{{ old('co_talla') }}"  class="form-control">
                @error('co_talla')
                <span class="text-danger" role="alert">
                    <strong>Obligatorio</strong>
                </span>
                @enderror

            </div>   
            
            <div class="form-group col-4">
                <label for="">IMC</label>
                <input type="text" name="co_imc" id="imc"  class="form-control">

            </div>    
            
               
            
            <div class="form-group col-4">
                <label for="">Frecuencia Respiratoria</label>
                <input type="number" step="0.1" name="co_ecg_reposo_mayor_40"  class="form-control">

            </div>   
            
               
             
                        
   
        </div>

        <div class="form-group col-3">
            <label for="">Fecha Examen</label>
            <input id="fecha_examen" name="fechaExamen" value="{{ old('fechaExamen') }}" width="AUTO" />
            @error('fechaExamen')
            <span class="text-danger" role="alert">
                <strong>Seleccionar fecha</strong>
            </span>
            @enderror

        </div>  

        <input type="submit" class="btn btn-success" value="enviar">
        </form>
    </div>
</div>
