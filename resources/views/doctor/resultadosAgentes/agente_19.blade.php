{{-- soy genial--}}
<div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Resultado {{ ucwords(strtolower($data->agente->glosaAgente)) }}
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
       <table class="table table-primary" style="font-size: 0.7rem;">
           <tr>
              <td class="tdBold">RESULTADO HEMOGRAMA</td>
              <td>{{ $data->fo_RESULTADO_HEMOGRAMA }}</td>

              <td class="tdBold">OBSERVACION HEMOGRAMA</td>
              <td>{{ $data->fo_OBSERVACION_HEMOGRAMA }}</td>

              <td class="tdBold">FECHA EVALUACION HEMOGRAMA</td>
              <td>{{ 
              Carbon\Carbon::parse($data->fo_FECHA_EVALUACION_HEMOGRAMA)->day . "/".
              Carbon\Carbon::parse($data->fo_FECHA_EVALUACION_HEMOGRAMA)->month . "/".
              Carbon\Carbon::parse($data->fo_FECHA_EVALUACION_HEMOGRAMA)->year
               }}</td>

              <td class="tdBold">RESULTADO BIOQUIMICO</td>
              <td>{{ $data->fo_RESULTADO_BIOQUIMICO}}</td>             

           </tr>

           <tr>
                <td class="tdBold">
                    FECHA EVALUACION BIOQUIMICO
                </td>
                <td>
                    {{ $data->fo_FECHA_EVALUACION_BIOQUIMICO }}
                </td>

                <td class="tdBold">
                    RESULTADO TORAX AP-LAT
                </td>
                <td>
                    {{ $data->fo_RESULTADO_TORAX }}                    
                </td>
                
                <td class="tdBold">
                    OBSERVACION TORAX
                </td>
                <td>
                    {{ $data->fo_OBSERVACION_TORAX }}                    
                </td>    
                
                <td class="tdBold">
                    FECHA EVALUACION TORAX AP-LAT
                </td>
                <td>
                    {{ $data->fo_FECHA_EVALUACION_TORAX }}
                </td>
           </tr>

           <tr>            

                <td class="tdBold">
                    RESULTADO EVALUACION CLINICA
                </td>
                <td>
                    {{ $data->fo_RESULTADO_EVALUACION_CLINICA }}                    
                </td>
                
                <td class="tdBold">
                    OBSERVACION EVALUACION CLINICA
                </td>
                <td>
                    {{ $data->fo_OBSERVACION_EVALUACION_CLINICA }}                    
                </td>  
                
                <td class="tdBold">
                    FECHA EVALUACION CLINICA
                </td>
                <td>
                    {{ $data->fo_FECHA_EVALUACION_CLINICA }}                    
                </td>      
                
                <td class="tdBold">
                    RESULTADO ORINA
                </td>
                <td>
                    {{ $data->fo_RESULTADO_ORINA }}                    
                </td>                 
       </tr>  
       
       
       <tr>
        <td class="tdBold">
            OBSERVACION ORINA
        </td>
        <td>
            {{ $data->fo_OBSERVACION_ORINA }}                    
        </td> 
        
        <td class="tdBold">
            FECHA EVALUACION ORINA
        </td>
        <td>
            {{ $data->fo_FECHA_EVALUACION_ORINA }}                    
        </td>  
        

       </tr>
       </table>
      </div>
    </div>
  </div>