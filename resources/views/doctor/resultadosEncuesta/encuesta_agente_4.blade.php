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

            <td class="tdBold">PREPARACIÓN DE CITOSTÁTICOS</td>
            <td>{{ $encuesta->ENC_FO_R_PC }}</td>

            <td class="tdBold">LIMPIEZA ÁREA DE PREPARACIÓN</td>
            <td>{{ $encuesta->ENC_FO_R_LP }}</td>

            <td class="tdBold">TRANSPORTE INTERNO EN EL SERVICIO</td>
            <td>{{ $encuesta->ENC_FO_R_TS }}</td>

            <td class="tdBold">ADMINISTRACIÓN</td>
            <td>{{ $encuesta->ENC_FO_R_ADM }}</td>   

           </tr>

           <tr>

            <td class="tdBold">LIMPIEZA ÁREA CLINICA</td>
            <td>{{ $encuesta->ENC_FO_R_LC }}</td>

            <td class="tdBold">DISPOSICIÓN DE RESIDUOS</td>
            <td>{{ $encuesta->ENC_FO_R_LP }}</td>

            <td class="tdBold">TRANSPORTE INTERNO EN EL SERVICIO</td>
            <td>{{ $encuesta->ENC_FO_R_DR }}</td>

            <td class="tdBold">CONTACTOS Y/O ATENCIÓN CLÍNICA DE PACIENTES</td>
            <td>{{ $encuesta->ENC_FO_R_CP }}</td>   

           </tr>      
           
           <tr>

            <td class="tdBold">CICLOFOSFAMIDA</td>
            <td>{{ $encuesta->ENC_FO_R_LC }}</td>

            <td class="tdBold">DISPOSICIÓN DE RESIDUOS</td>
            <td>{{ $encuesta->ENC_FO_PREG1 }}</td>

            <td class="tdBold">FLURORACILO</td>
            <td>{{ $encuesta->ENC_FO_PREG2 }}</td>

            <td class="tdBold">METOTREXATO</td>
            <td>{{ $encuesta->ENC_FO_PREG3 }}</td>   

           </tr>    


           <tr>

                <td class="tdBold">MITOXANTRONA</td>
                <td>{{ $encuesta->ENC_FO_PREG4 }}</td>

                <td class="tdBold">OTROS</td>
                <td>{{ $encuesta->ENC_FO_PREG5 }}</td>

                <td class="tdBold"></td>
                <td></td>          
                
                <td class="tdBold"></td>
                <td></td>                                

                {{-- <td class="tdBold">LUGAR/ES DONDE TRABAJÓ</td>
                <td>{{ $encuesta->ENC_FO_PREG6 }}</td>

                <td class="tdBold">AÑOS</td>
                <td>{{ $encuesta->ENC_FO_PREG7 }}</td>  --}}
            
           </tr>
       </table>

       <h5>DESCRIPCIÓN DE ACTIVIDADES PRINCIPALES</h5>

       <table class="table table-primary" style="font-size: 0.7rem;">
           <thead>
            <th>N°</th>
            <TH>LUGAR/ES DONDE TRABAJÓ</TH>
            <TH>AÑOS</TH>
            <TH>DESDE</TH>
            <TH>HASTA</TH>
            <TH>DESCRIPCIÓN DE ACTIVIDADES PRINCIPALES</TH>
           </thead>

           <tbody> 
               
               <tr>
                   <td>1</td>
                <td>{{$encuesta->ENC_FO_PREG6}}</td>
                <td>{{$encuesta->ENC_FO_PREG7}}</td>
                <td>{{$encuesta->ENC_FO_PREG8}}</td>
                <td>{{$encuesta->ENC_FO_PREG9}}</td>
                <td>{{$encuesta->ENC_FO_PREG10}}</td>
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