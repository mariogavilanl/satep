{{-- soy genial--}}
<div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            Resultado  Encuesta
        </button>
      </h2>
    </div>

    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
       <table class="table table-primary" style="font-size: 0.7rem;">
           <tr>

            <td class="tdBold">HIPERTENSIÓN ARTERIAL</td>
            <td>{{ $encuesta->ENC_AS_R_HA }}</td>

            <td class="tdBold">DIABETES MELLITUS </td>
            <td>{{ $encuesta->ENC_AS_R_DM }}</td>

            <td class="tdBold">ENFERMEDAD RENAL</td>
            <td>{{ $encuesta->ENC_AS_R_ER }}</td>

            <td class="tdBold">HIPOTIRODISMO</td>
            <td>{{ $encuesta->ENC_AS_H }}</td>   

           </tr>

          
       <h5>HISTORIAL LABORAL</h5>

       <table class="table table-primary" style="font-size: 0.7rem;">
           <thead>
            <th>HA TENIDO PUESTOS DE TRABAJOS ANTERIORES CON EXPOSICIÓN A ARSÉNICO</th>
            <TH>EN CASO DE HABER RESPONDIDO "SI", COMPLETAR EL SIGUIENTE CUADRO DE EXPOSICIÓN OCUPACIONAL:</TH>
            <TH>EMPRESA</TH>
            <TH>PUESTO TRABAJO</TH>
            <TH>ORG ADMINISTRADOR</TH>
            <TH>DESDE</TH>
            <TH>HASTA</TH>
            <TH>MEDIDAS DE CONTROL</TH>
           </thead>

           <tbody> 
               
               <tr>
                   <td>1</td>
                <td>{{$encuesta->ENC_AS_R_HA}}</td>
                <td>{{$encuesta->ENC_AS_RESULT_EMPRESA}}</td>
                <td>{{$encuesta->ENC_AS_RESULT_PUESTOTRABAJO}}</td>
                <td>{{$encuesta->ENC_AS_RESULT_ORG}}</td>
                <td>{{$encuesta->ENC_AS_FECHA_INI1}}</td>
                <td>{{$encuesta->ENC_AS_FECHA_INI2}}</td>
                <td>{{$encuesta->ENC_AS_RESULT_MEDIDA}}</td>
               </tr>
               
               <tr>
                <td>2</td>
                <td>{{$encuesta->ENC_FO_PREG11}}</td>
                <td>{{$encuesta->ENC_FO_PREG12}}</td>
                <td>{{$encuesta->ENC_FO_PREG13}}</td>
                <td>{{$encuesta->ENC_FO_PREG14}}</td>
                <td>{{$encuesta->ENC_FO_PREG15}}</td>
               </tr>    
               
               <tr>
                <td>3</td>
                <td>{{$encuesta->ENC_FO_PREG16}}</td>
                <td>{{$encuesta->ENC_FO_PREG17}}</td>
                <td>{{$encuesta->ENC_FO_PREG18}}</td>
                <td>{{$encuesta->ENC_FO_PREG19}}</td>
                <td>{{$encuesta->ENC_FO_PREG20}}</td>
               </tr>    

              <tr>
                <td>4</td>
                <td>{{$encuesta->ENC_FO_PREG21}}</td>
                <td>{{$encuesta->ENC_FO_PREG22}}</td>
                <td>{{$encuesta->ENC_FO_PREG23}}</td>
                <td>{{$encuesta->ENC_FO_PREG24}}</td>
                <td>{{$encuesta->ENC_FO_PREG25}}</td>
               </tr>  
               
               <tr>
                <td>5</td>
                <td>{{$encuesta->ENC_FO_PREG26}}</td>
                <td>{{$encuesta->ENC_FO_PREG27}}</td>
                <td>{{$encuesta->ENC_FO_PREG28}}</td>
                <td>{{$encuesta->ENC_FO_PREG29}}</td>
                <td>{{$encuesta->ENC_FO_PREG30}}</td>
               </tr>                 
           </tbody>
       </table>

       {{-- <h5>Seccion </h5> --}}
       <table class="table table-primary" style="font-size: 0.7rem;">
        <thead>

         <TH>ITEM</TH>
         <th>DESPUESTA</th>
         <TH>¿CUANDO?</TH>
         <TH>OBSERVACION</TH>
         
        </thead>

        <tbody>
            <tr>
               
                <td>DENTAL</td>
                <td>{{$encuesta->ENC_FO_R_D}}</td>
                <td>{{$encuesta->ENC_FO_PREG31}}</td>
                <td>{{$encuesta->ENC_FO_PREG32}}</td>
                
                
            </tr>

            <tr>
              
                <td>CUBRECABELLO</td>
                <td>{{$encuesta->ENC_FO_R_C}}</td>
                <td>{{$encuesta->ENC_FO_PREG33}}</td>
                <td>{{$encuesta->ENC_FO_PREG34}}</td>            
            
            </tr>

            <tr>
              
                <td>MASCARILLA DESECHABLE</td>
                <td>{{$encuesta->ENC_FO_R_MD}}</td>
                <td>{{$encuesta->ENC_FO_PREG35}}</td>
                <td>{{($encuesta->ENC_FO_PREG36 == null ? 'N/A' : $encuesta->ENC_FO_PREG36)}}</td>            
            
            </tr>       

            <tr>
              
                <td>GUANTES DE LÁTEX</td>
                <td>{{$encuesta->ENC_FO_R_GL}}</td>
                <td>{{$encuesta->ENC_FO_PREG37}}</td>
                <td>{{($encuesta->ENC_FO_C_CP == null ? "" : $encuesta->ENC_FO_C_CP ." y")}} {{$encuesta->ENC_FO_C_SP}}</td>
                
            </tr>     

            <tr>
              
                <td>GUANTES DE NITRILO</td>
                <td>{{$encuesta->ENC_FO_R_GN}}</td>
                <td>{{$encuesta->ENC_FO_PREG38}}</td>
                <td>{{$encuesta->ENC_FO_PREG39}}</td>
                
            </tr>       
            
            <tr>
              
                <td>GUANTES DE NEOPRENO</td>
                <td>{{$encuesta->ENC_FO_R_GNE}}</td>
                <td>{{$encuesta->ENC_FO_PREG40}}</td>
                <td>{{$encuesta->ENC_FO_PREG41}}</td>
                
            </tr>      
            
            
            <tr>
              
                <td>GUANTES MULTIUSO</td>
                <td>{{$encuesta->ENC_FO_R_GMU}}</td>
                <td>{{$encuesta->ENC_FO_PREG42}}</td>
                <td>{{$encuesta->ENC_FO_PREG43}}</td>
                
            </tr>                
            
         
            
            
        </tbody>

       </table>

      </div>
    </div>
  </div>
