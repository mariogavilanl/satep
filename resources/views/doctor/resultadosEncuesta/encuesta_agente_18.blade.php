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
     
        <!-- 
            @ if ($encuesta->ENC_AS_PREG ) 
                   <h5>HISTORIAL LABORAL</h5>

                @ elseif ()

                segunda parte de as

                @ endif -->
        <h5>HISTORIAL LABORAL</h5>
       <h6>HA TENIDO PUESTOS DE TRABAJOS ANTERIORES CON EXPOSICIÓN A ARSÉNICO</h5>
      
       <table class="table table-primary" style="font-size: 0.7rem;">
           <thead>
            
            
            <TH>EMPRESA</TH>
            <TH>PUESTO TRABAJO</TH>
            <TH>ORG ADMINISTRADOR</TH>
            <TH>DESDE</TH>
            <TH>HASTA</TH>
            <TH>MEDIDAS DE CONTROL</TH>
           </thead>

           <tbody> 
               
               <tr>
                  
              {{-- <td>$encuesta->ENC_AS_R_HA}}</td>--}}
                <td>{{$encuesta->ENC_AS_RESULT_EMPRESA}}</td>
                <td>{{$encuesta->ENC_AS_RESULT_PUESTOTRABAJO}}</td>
                <td>{{$encuesta->ENC_AS_RESULT_ORG}}</td>
                <td>{{$encuesta->ENC_AS_FECHA_INI1}}</td>
                <td>{{$encuesta->ENC_AS_FECHA_INI2}}</td>
                <td>{{$encuesta->ENC_AS_RESULT_MEDIDA}}</td>
               </tr>
               
               <tr>
                
                <td>{{$encuesta->ENC_AS_RESULT_1}}</td>
                <td>{{$encuesta->ENC_AS_RESULT_2}}</td>
                <td>{{$encuesta->ENC_AS_RESULT_3}}</td>
                <td>{{$encuesta->ENC_AS_FECHA_INI3}}</td>
                <td>{{$encuesta->ENC_AS_FECHA_INI4}}</td>
                <td>{{$encuesta->ENC_AS_RESULT_4}}</td>
               </tr>    
               
               <tr>
                
                <td>{{$encuesta->ENC_AS_RESULT_5}}</td>
                <td>{{$encuesta->ENC_AS_RESULT_6}}</td>
                <td>{{$encuesta->ENC_AS_RESULT_7}}</td>
                <td>{{$encuesta->ENC_AS_FECHA_INI5}}</td>
                <td>{{$encuesta->ENC_AS_FECHA_INI6}}</td>
                <td>{{$encuesta->ENC_AS_RESULT_8}}</td>
               </tr>    

              <tr>
                <td>{{$encuesta->ENC_AS_RESULT_9}}</td>
                <td>{{$encuesta->ENC_AS_RESULT_10}}</td>
                <td>{{$encuesta->ENC_AS_RESULT_11}}</td>
                <td>{{$encuesta->ENC_AS_FECHA_INI7}}</td>
                <td>{{$encuesta->ENC_AS_FECHA_INI8}}</td>
                <td>{{$encuesta->ENC_AS_RESULT_12}}</td>
               </tr> 
               
            </tbody>
        </table>
        <table class="table table-primary" style="font-size: 0.7rem;">
            <thead>

            <h5>EXPOSICION ACTUAL</h5>

            <thead>
            
            
                <TH>CARGO QUE DESEMPEÑA</TH>
                <TH>ANTIGUEDAD EN EL PUESTO años</TH>
                <TH>MES</TH>
                <TH>MEDIDAS DE CONTROL</TH>
                <TH>UTILIZACION ELEMENTOS DE PROTECCION PERSONAL</TH>
            <P></P>
            <P></P>  
            </thead>
               
               <tr>
                <td>{{$encuesta->ENC_AS_RESULT_13}}</td>
                <td>{{$encuesta->ENC_AS_RESULT_14}}</td>
                <td>{{$encuesta->ENC_AS_MES}}</td>
                <td>{{$encuesta->ENC_AS_C_MC_ING}} {{$encuesta->ENC_AS_C_MC_ADM}} <br> {{$encuesta->ENC_AS_C_MC_EPP}}</td>
                <td>{{$encuesta->ENC_AS_R_PREG2_PROTECCION}}</td>
               </tr>                 
           </tbody>
       </table>

       <h5>TIPO DE PROTECCIÓN QUE UTILIZA </h5>
       <table class="table table-primary" style="font-size: 0.7rem;">
        <thead>

         <TH>EPP</TH>
         <th>TIPO</th>
         <TH>MARCA</TH>
         <TH>MODELO</TH>
         <TH>OBSERVACIONES</TH>
         
        </thead>

        <tbody>
            <tr>
               
                <td>PROTECTOR RESPIRATORIO</td>
                <td>{{$encuesta->ENC_AS_R_PREG3_MEDIO}}</td>
                <td>{{$encuesta->ENC_AS_RESULT_15}}</td>
                <td>{{$encuesta->ENC_AS_RESULT_16}}</td>
                <td>{{$encuesta->ENC_AS_RESULT_17}}</td>
                
                
            </tr>

            
            <tr>
              
                <td>BUZO PILOTO</td>
                <td>{{$encuesta->ENC_AS_RESULT_18}}</td>
                <td>{{$encuesta->ENC_AS_RESULT_19}}</td>
                <td>{{$encuesta->ENC_AS_RESULT_20}} </td>
                <td>{{$encuesta->ENC_AS_RESULT_21}} </td>            
            
            </tr>       

            <tr>
              
                <td>ESCLAVINA</td>
                <td>{{$encuesta->ENC_AS_RESULT_22}}</td>
                <td>{{$encuesta->ENC_AS_RESULT_23}}</td>
                <td>{{$encuesta->ENC_AS_RESULT_24}} </td>
                <td>{{$encuesta->ENC_AS_RESULT_25}} </td> 
                
            </tr>     

            <tr>
              
                <td>GUANTES</td>
                <td>{{$encuesta->ENC_AS_RESULT_26}}</td>
                <td>{{$encuesta->ENC_AS_RESULT_27}}</td>
                <td>{{$encuesta->ENC_AS_RESULT_28}} </td>
                <td>{{$encuesta->ENC_AS_RESULT_29}} </td> 
                
            </tr>       
            
            <tr>
              
                <td>OTRO</td>
                <td>{{$encuesta->ENC_AS_RESULT_30}}</td>
                <td>{{$encuesta->ENC_AS_RESULT_31}}</td>
                <td>{{$encuesta->ENC_AS_RESULT_32}} </td>
                <td>{{$encuesta->ENC_AS_RESULT_33}} </td> 
                
            </tr>      
            
            <table class="table table-primary" style="font-size: 0.7rem;">
                <thead>
    
                <h5>PROTECCIÓN RESPIRATORIA</h5>
    
                <thead>
                
                
                    <TH>SE REALIZO PRUEBA DE AJUSTE DE RESPIRADOR</TH>
                    <TH>FECHA</TH>
                    <TH>RESULTADO MARCA</TH>
                    <TH>TALLA</TH>
                    <TH>UTILIZA EL PROTECTOR INDICADO EN RESULTADO DE PRUEBA</TH>
                
                    <tr>
              
                        <td>{{$encuesta->ENC_AS_RESULT_R_RESPIRADOR}}</td>
                        <td>{{$encuesta->ENC_AS_FECHA_INI9}}</td>
                        <td>{{$encuesta->ENC_AS_T_RESULTMARCA}} </td>
                        <td>{{$encuesta->ENC_AS_R_TALLA}} </td> 
                        <td>{{$encuesta->ENC_AS_R_PI}} </td> 
                    </tr>     




                </thead>
                   
                <table class="table table-primary" style="font-size: 0.7rem;">
                    <thead>
        
                    <h5>CAPACITACIÓN</h5>
        
                    <thead>
                    
                    
                        <TH>RECIBIO CAPACITACIÓN ESPECIFÍCA PARA EL CONTROL DE EXPOSICIÓN A ARSENICO Y PROTECCIÓN</TH>
                        <TH>FECHA</TH>
                        <TH>ORGANISMO CAPACITADOR</TH>
                        <TH>EXISTE EVIDENCIA DE ASISTENCIA</TH>
                        <TH>REGISTRO</TH>
                        
                        
                    
                        <tr>
                  
                            <td>{{$encuesta->ENC_AS_RESULT_R_CAPA}}</td>
                            <td>{{$encuesta->ENC_AS_RESULT_FECHA10}}</td>
                            <td>{{$encuesta->ENC_AS_RESULT_ORG}} </td>
                            <td>{{$encuesta->ENC_AS_R_ASIS}} </td> 
                            <td>{{$encuesta->as_preg_extra4}} </td> 
                        </tr>     
    
                        <table class="table table-primary" style="font-size: 0.7rem;">
                            <thead>
                
                            <h5>ANTECEDENTES EXPOSICIÓN RECIENTES</h5>
                
                            <thead>
                            
                            
                                <TH>DETALLE LAS TAREAS REALIZADAS EN SU ÚLTIMO TURNO</TH>
                                <TH>ÁREA</TH>
                                <TH>EPP UTILIZADO Y/O COMENTARIOS</TH>
                                                   
                                                            
                                <tr>
                          
                                    <td>{{$encuesta->as_preg_extra1}}</td>
                                    <td>{{$encuesta->as_preg_extra2}}</td>
                                    <td>{{$encuesta->as_preg_extra3}} </td>
                                    
                                </tr>     

                                <table class="table table-primary" style="font-size: 0.7rem;">
                                    <thead>
                        
                                    <h5>CONDUCTAS Y MEDIDAS HIGIÉNICAS</h5>
                        
                                    <thead>
                                    
                                    
                                        <TH>CONDUCTA E INSTALACIONES</TH>
                                        <TH>SELECCIÓN</TH>
                                        <TH>LUGAR</TH>
                                        <TH>OBSERVACION</TH>
                                                           
                                                                    
                                        <tr>
                                            <td>INGIERE ALIMENTOS EN TERRENO</td>
                                            <td>{{$encuesta->ENC_AS_R_1}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_34}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_35}} </td>
                                            
                                        </tr> 
                                        <tr>
                                            <td>TOMA LIQUIDOS PARA HIDRATARSE EN TERRENO</td>
                                            <td>{{$encuesta->ENC_AS_R_1}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_34}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_35}} </td>
                                            
                                        </tr>   
                                        <tr>
                                            <td>SE LAVA LAS MANOS Y CARAS DE INGERIR ALIMENTOS O LIQUIDOS</td>
                                            <td>{{$encuesta->ENC_AS_R_1}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_34}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_35}} </td>
                                            
                                        </tr>   
                                        <tr>
                                            <td>FUMA EN TERRENO</td>
                                            <td>{{$encuesta->ENC_AS_R_1}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_34}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_35}} </td>
                                            
                                        </tr>   
                                        <tr>
                                            <td>BEBE CAFE</td>
                                            <td>{{$encuesta->ENC_AS_R_1}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_34}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_35}} </td>
                                            
                                        </tr>   
                                        <tr>
                                            <td>DISPONE DE SALA DE CAMBIOS</td>
                                            <td>{{$encuesta->ENC_AS_R_1}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_34}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_35}} </td>
                                            
                                        </tr>   
                                        <tr>
                                            <td>SI DISPONE, TIENE AREA LIMPIA Y SUCIA</td>
                                            <td>{{$encuesta->ENC_AS_R_1}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_34}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_35}} </td>
                                            
                                        </tr>   
                                        <tr>
                                            <td>CUENTA CON DOBLE CASILLERO</td>
                                            <td>{{$encuesta->ENC_AS_R_1}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_34}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_35}} </td>
                                            
                                        </tr>   
                                        <tr>
                                            <td>SI NO DISPONE DE CASA DE CAMBIO, DONDE SE CAMBIA</td>
                                            <td>{{$encuesta->ENC_AS_R_1}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_34}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_35}} </td>
                                            
                                        </tr>   
                                        <tr>
                                            <td>UBICACIÓN DE SU CASILLERO</td>
                                            <td>{{$encuesta->ENC_AS_R_1}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_34}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_35}} </td>
                                            
                                        </tr>   
                                        <tr>
                                            <td>DISPONE DE ROPA LIMPIA DE TRABAJO (TODOS LOS DIAS)</td>
                                            <td>{{$encuesta->ENC_AS_R_1}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_34}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_35}} </td>
                                            
                                        </tr>   
                                        <tr>
                                            <td>SE CAMBIA DE ROPA DE TRABAJO TODOS LOS DIAS</td>
                                            <td>{{$encuesta->ENC_AS_R_1}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_34}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_35}} </td>
                                            
                                        </tr>   
                                        <tr>
                                            <td>SE DUCHA TODOS LOS DIAS EN FAENA AL TERMINO JORNADA</td>
                                            <td>{{$encuesta->ENC_AS_R_1}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_34}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_35}} </td>
                                            
                                        </tr>   
                                        <tr>
                                            <td>POSTERIOR A LA DUCHA USA CREMAS DE CARA Y/O MANOS</td>
                                            <td>{{$encuesta->ENC_AS_R_1}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_34}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_35}} </td>
                                            
                                        </tr>   
                                        <tr>
                                            <td>INGIERE ALIMENTOS EN TERRENO</td>
                                            <td>{{$encuesta->ENC_AS_R_1}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_34}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_35}} </td>
                                            
                                        </tr>   
                                        <tr>
                                            <td>INGIERE ALIMENTOS EN TERRENO</td>
                                            <td>{{$encuesta->ENC_AS_R_1}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_34}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_35}} </td>
                                            
                                        </tr>   
                                        <tr>
                                            <td>INGIERE ALIMENTOS EN TERRENO</td>
                                            <td>{{$encuesta->ENC_AS_R_1}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_34}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_35}} </td>
                                            
                                        </tr>   
                                        <tr>
                                            <td>INGIERE ALIMENTOS EN TERRENO</td>
                                            <td>{{$encuesta->ENC_AS_R_1}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_34}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_35}} </td>
                                            
                                        </tr>   
                                        <tr>
                                            <td>INGIERE ALIMENTOS EN TERRENO</td>
                                            <td>{{$encuesta->ENC_AS_R_1}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_34}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_35}} </td>
                                            
                                        </tr>   
                                        <tr>
                                            <td>INGIERE ALIMENTOS EN TERRENO</td>
                                            <td>{{$encuesta->ENC_AS_R_1}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_34}}</td>
                                            <td>{{$encuesta->ENC_AS_RESULT_35}} </td>
                                            
                                        </tr>       
    
    
                    </thead>
         
            
            
        </tbody>

       </table>

      </div>
    </div>
  </div>
