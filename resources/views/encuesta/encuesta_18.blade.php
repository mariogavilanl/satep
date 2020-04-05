@extends('layouts.app')

@section('content')


<script>
    $(document).ready(function(){
        $('#FECHA1').datepicker({
            uiLibrary: 'bootstrap4',
            weekStartDay: 1,
            locale: 'es-es',
             modal: true, 
             header: true, 
             footer: true,
             format: 'dd-mm-yyyy'
    
        });
    });
    $(document).ready(function(){
        $('#FECHA2').datepicker({
            uiLibrary: 'bootstrap4',
            weekStartDay: 1,
            locale: 'es-es',
             modal: true, 
             header: true, 
             footer: true,
             format: 'dd-mm-yyyy'
    
        });
    });
    $(document).ready(function(){
        $('#FECHA3').datepicker({
            uiLibrary: 'bootstrap4',
            weekStartDay: 1,
            locale: 'es-es',
             modal: true, 
             header: true, 
             footer: true,
             format: 'dd-mm-yyyy'
    
        });
    });


    $(document).ready(function(){
        $('#FECHA4').datepicker({
            uiLibrary: 'bootstrap4',
            weekStartDay: 1,
            locale: 'es-es',
             modal: true, 
             header: true, 
             footer: true,
             format: 'dd-mm-yyyy'
    
        });
    });
    $(document).ready(function(){
        $('#FECHA5').datepicker({
            uiLibrary: 'bootstrap4',
            weekStartDay: 1,
            locale: 'es-es',
             modal: true, 
             header: true, 
             footer: true,
             format: 'dd-mm-yyyy'
    
        });
    });

    $(document).ready(function(){
        $('#FECHA6').datepicker({
            uiLibrary: 'bootstrap4',
            weekStartDay: 1,
            locale: 'es-es',
             modal: true, 
             header: true, 
             footer: true,
             format: 'dd-mm-yyyy'
    
        });
    });
     
    $(document).ready(function(){
        $('#FECHA7').datepicker({
            uiLibrary: 'bootstrap4',
            weekStartDay: 1,
            locale: 'es-es',
             modal: true, 
             header: true, 
             footer: true,
             format: 'dd-mm-yyyy'
    
        });
    });

    $(document).ready(function(){
        $('#FECHA8').datepicker({
            uiLibrary: 'bootstrap4',
            weekStartDay: 1,
            locale: 'es-es',
             modal: true, 
             header: true, 
             footer: true,
             format: 'dd-mm-yyyy'
    
        });
    });


    $(document).ready(function(){
        $('#FECHA9').datepicker({
            uiLibrary: 'bootstrap4',
            weekStartDay: 1,
            locale: 'es-es',
             modal: true, 
             header: true, 
             footer: true,
             format: 'dd-mm-yyyy'
    
        });
    });

    $(document).ready(function(){
        $('#FECHA10').datepicker({
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
<form action="/api/getEncuestaResult" method="GET">
 
           <div class="col-12">
      
            <H1 style="text-align:center"> <img src="\img\logo-codelco.png" width="80px"  height="80PX" class="img-responsive" >Encuesta Arsenico </H1>
    
  
                    <hr>
  
 
 
 
           <div id="accordion">
           <div class="card">
          
   
            <div class="card-header" id="headingOne">
      
                 <svg class="bi bi-folder-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                 <path fill-rule="evenodd" d="M9.828 3h3.982a2 2 0 011.992 2.181l-.637 7A2 2 0 0113.174 14H2.826a2 2 0 01-1.991-1.819l-.637-7a1.99 1.99 0 01.342-1.31L.5 3a2 2 0 012-2h3.672a2 2 0 011.414.586l.828.828A2 2 0 009.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 006.172 2H2.5a1 1 0 00-1 .981l.006.139z" clip-rule="evenodd"/>
                  </svg>
                  
                <input type="button" class="btn btn-link-badge badge-light" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" value="ANTECEDENTES MORBIDOS">
            
             </div>
             

             

         <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      
          <table class="table table-primary" style="font-size: 0.7rem;">
          <thead>
            <br>
            <tr>
            
            <td>HIPERTENSIÓN ARTERIAL</td>
            <td>DIABETES MELLITUS</td>
            <td>ENFERMEDAD RENAL</td>
            <td>HIPOTIROIDISMO</td>

          </tr>
        </div>
          <tr>
          <td><input class="form-radio-input" name="r_ha" type="radio" id="inlineCheckbox1" value="SI">
              <label class="form-check-label">SI</label>
              <input class="form-radio-input" name="r_ha" type="radio" id="inlineCheckbox1" value="NO">
              <label class="form-check-label">NO</label></td>

              <td><input class="form-radio-input" name="r_dm" type="radio" id="inlineCheckbox1" value="SI">
              <label class="form-check-label">SI</label>
              <input class="form-radio-input" name="r_dm" type="radio" id="inlineCheckbox1" value="NO">
              <label class="form-check-label">NO</label></td>

              <td><input class="form-radio-input" name="r_er" type="radio" id="inlineCheckbox1" value="SI">
              <label class="form-check-label">SI</label>
              <input class="form-radio-input" name="r_er" type="radio" id="inlineCheckbox1" value="NO">
              <label class="form-check-label">NO</label></td>

              <td><input class="form-radio-input" name="r_h" type="radio" id="inlineCheckbox1" value="SI">
              <label class="form-check-label">SI</label>
              <input class="form-radio-input" name="r_h" type="radio" id="inlineCheckbox1" value="NO">
              <label class="form-check-label">NO</label></td>
          
          </tr>


          </tbody>
          </table>   
        </div>
          
          <div class="card">
          <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
          <svg class="bi bi-person-lines-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 100-6 3 3 0 000 6zm7 1.5a.5.5 0 01.5-.5h2a.5.5 0 010 1h-2a.5.5 0 01-.5-.5zm-2-3a.5.5 0 01.5-.5h4a.5.5 0 010 1h-4a.5.5 0 01-.5-.5zm0-3a.5.5 0 01.5-.5h4a.5.5 0 010 1h-4a.5.5 0 01-.5-.5zm2 9a.5.5 0 01.5-.5h2a.5.5 0 010 1h-2a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
          </svg>

          <input type="button" class="btn btn-link-badge badge-light" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" value="HISTORIAL LABORAL">
                     
          
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="card-body">
        <table class="table table-primary" style="font-size: 0.7rem;">
         <thead>
        <h5>HA TENIDO PUESTOS DE TRABAJOS ANTERIORES CON EXPOSICIÓN A ARSÉNICO</h5>
                    
              
                
                 
                   <TH><input  type="radio" name="r_preg1_as" id="inlineRadio1" value="SI">
                   SI
                                
                    <input  type="radio" name="r_preg1_as" id="inlineRadio2" value="NO">
                     NO </th>
                 
                
                  
                </form>
              </tbody>
            </table>
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

                  
                  
                  <tr>
                  {{-- <td>$encuesta->ENC_AS_R_HA}}</td>--}}
                    <td><input class="form-control" type="text" name="result_empresa"  placeholder="Ejemplo Codelco"></td>
                    <td><input class="form-control" type="text" name="result_puestotrabajo"  placeholder="Ejemplo Ing Gestión"></td>
                    <td><input class="form-control" type="text" name="result_org"  placeholder="Ejemplo Codelco DCH"></td>            
                    
                    <td><input id="FECHA1" name="fecha_ini1" width="100px"  width="40px"  /></td>
                    <td><input id="FECHA2" name="fecha_ini2" width="100px"  width="40px" /></td>
                    <td><input class="form-control" type="text" name="result_medida"  placeholder="Ejemplo Controles Diarios"></td>
                  
                  
                  </tr>

                  <tr>
                    {{-- <td>$encuesta->ENC_AS_R_HA}}</td>--}}
                    <td><input class="form-control" type="text" name="result_1"  placeholder="Ejemplo Codelco"></td>
                    <td><input class="form-control" type="text" name="result_2"  placeholder="Ejemplo Ing Gestión"></td>
                    <td><input class="form-control" type="text" name="result_3"  placeholder="Ejemplo Codelco DCH"></td>            
                    
                    <td><input id="FECHA3" name="fecha_ini3" width="100px"  width="40px"  /></td>
                    <td><input id="FECHA4" name="fecha_ini4" width="100px"  width="40px" /></td>
                    <td><input class="form-control" type="text" name="result_4"  placeholder="Ejemplo Controles Diarios"></td>
                    
                    
                    </tr>

                    <tr>
                      {{-- <td>$encuesta->ENC_AS_R_HA}}</td>--}}
                      <td><input class="form-control" type="text" name="result_5"  placeholder="Ejemplo Codelco"></td>
                      <td><input class="form-control" type="text" name="result_6"  placeholder="Ejemplo Ing Gestión"></td>
                      <td><input class="form-control" type="text" name="result_7"  placeholder="Ejemplo Codelco DCH"></td>            
                      
                      <td><input id="FECHA5" name="fecha_ini5" width="100px"  width="40px"  /></td>
                      <td><input id="FECHA6" name="fecha_ini6" width="100px"  width="40px" /></td>
                      <td><input class="form-control" type="text" name="result_8"  placeholder="Ejemplo Controles Diarios"></td>
                      
                      
                      </tr>

                      <tr>
                        {{-- <td>$encuesta->ENC_AS_R_HA}}</td>--}}
                        <td><input class="form-control" type="text" name="result_9"  placeholder="Ejemplo Codelco"></td>
                        <td><input class="form-control" type="text" name="result_10"  placeholder="Ejemplo Ing Gestión"></td>
                        <td><input class="form-control" type="text" name="result_11"  placeholder="Ejemplo Codelco DCH"></td>            
                        
                        <td><input id="FECHA7" name="fecha_ini7" width="100px"  width="40px"  /></td>
                        <td><input id="FECHA8" name="fecha_ini8" width="100px"  width="40px" /></td>
                        <td><input class="form-control" type="text" name="result_12"  placeholder="Ejemplo Controles Diarios"></td>
                        
                        
                        </tr>

                        
                        
                            
                  
                 
                  </tbody>
                </table>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <svg class="bi bi-people-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z"/>
  <path fill-rule="evenodd" d="M8 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z" clip-rule="evenodd"/>
</svg>

        <input type="button" class="btn btn-link-badge badge-light" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" value="EXPOSICIÓN ACTUAL">
                  
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        <table class="table table-primary" style="font-size: 0.7rem;">
          <thead>

                
          
              <TH>CARGO QUE DESEMPEÑA</TH>
              <TH>ANTIGUEDAD EN EL PUESTO (AÑOS)</TH>
              <TH>MES</TH>
              <TH>MEDIDAS DE CONTROL</TH>
              <TH>UTILIZACION ELEMENTOS DE PROTECCION PERSONAL</TH>
          <P></P>
          <P></P>  

          <tr>
            {{-- <td>$encuesta->ENC_AS_R_HA}}</td>--}}
            <td><input class="form-control" type="text" name="result_13"  placeholder="Operador"></td>
            <td><input class="form-control" type="text" name="result_14"  placeholder="Ejemplo: 1 Año"></td>
            <td><select class="custom-select" name="mes" multiple>
              <option value="1">Uno</option>
              <option value="2">Dos</option>
              <option value="3">Tres</option>
              <option value="4">Cuatro</option>
              <option value="5">Cinco</option>
              <option value="6">Seis</option>
              <option value="7">Siete</option>
              <option value="8">Ocho</option>
              <option value="9">Nueve</option>
              <option value="10">Diez</option>
              <option value="11">Once</option>
              <option value="12">Doce</option>
            </select></td>            
            <td>
            <input class="form-check-input" type="checkbox" name="c_mc_ing">Ingenieros
            <br>
            <input class="form-check-input" type="checkbox" name="c_mc_adm">Administrativas
            <br>
            <input class="form-check-input" type="checkbox" name="c_mc_epp">Elementos de protección personal </td>
            
           
            <td><input class="form-check-input" type="radio" name="r_preg2_proteccion" value="Siempre"  >Siempre
            <br><input class="form-check-input" type="radio" name="r_preg2_proteccion" value="A veces" >A veces
            <br><input class="form-check-input" type="radio" name="r_preg2_proteccion" value="Nunca"  >Nunca</td>
              
            
         

            </tr>   

            <h5>TIPO DE PROTECCIÓN QUE UTILIZA </h5>
       <table class="table table-primary" style="font-size: 0.7rem;">
        <thead>

         <TH>EPP</TH>
         <th>TIPO</th>
         <TH>MARCA</TH>
         <TH>MODELO</TH>
         <TH>OBSERVACIONES</TH>
         <tr>
          {{-- <td>$encuesta->ENC_AS_R_HA}}</td>--}}
          <td>Protector Respiratorio</td>
            <td><input class="form-check-input" type="radio" name="r_preg3_medio" value="Medio Rostro"  >Medio Rostro
            <br><input class="form-check-input" type="radio" name="r_preg3_medio" value="Rostro Completo" >Rostro Completo
            <br><input class="form-check-input" type="radio" name="r_preg3_medio" value="Aire Asistido"  >Aire Asistido</td>
              
            <td><input class="form-control" type="text" name="result_15"  placeholder="3M"></td>
            <td><input class="form-control" type="text" name="result_16"  placeholder="large 6900"></td>
            <td><input class="form-control" type="text" name="result_17"  placeholder="Pieza facial es suave e hipoalergénico"></td>     
         

            <tr>   
              <td>Buzo Piloto</td>
              <td><input class="form-control" type="text" name="result_18"  placeholder="Overol Poplin Buzo Piloto"></td>
              <td><input class="form-control" type="text" name="result_19"  placeholder="MI6700"></td>            
              <td><input class="form-control" type="text" name="result_20"  placeholder="Modelo piloto"></td>
              <td><input class="form-control" type="text" name="result_21"  placeholder="azul"></td>
      
            </tr>

          <tr>
            <td>Esclavina</td>
            <td><input class="form-control" type="text" name="result_22"  placeholder="Polainas para Soldar"></td>
            <td><input class="form-control" type="text" name="result_23"  placeholder="Redline"></td>            
            <td><input class="form-control" type="text" name="result_24"  placeholder="Fixser"></td>
            <td><input class="form-control" type="text" name="result_25"  placeholder="Cuero descarne"></td>
  

          </tr>

          <tr>
            <td>Guantes</td>
            <td><input class="form-control" type="text" name="result_26"  placeholder="Guante respirable fácil de lavar"></td>
            <td><input class="form-control" type="text" name="result_27"  placeholder="Guantes cold extreme 9 negro"></td>            
            <td><input class="form-control" type="text" name="result_28"  placeholder="Steelpro"></td>
            <td><input class="form-control" type="text" name="result_29"  placeholder="Nylon"></td>
          </tr>
          
          <tr>
            <td>Otro</td>
            <td><input class="form-control" type="text" name="result_30"></td>
            <td><input class="form-control" type="text" name="result_31"></td>            
            <td><input class="form-control" type="text" name="result_32"></td>
            <td><input class="form-control" type="text" name="result_33"></td>
          

          
          
          
          
          </tr>

         
        </thead>

        <tbody>
          </thead>
        </tbody>
      </table>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingfour">
      <h5 class="mb-0">
        <svg class="bi bi-shield-shaded" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M5.443 1.991a60.17 60.17 0 00-2.725.802.454.454 0 00-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 008 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 002.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 00-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 012.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 01-2.418 2.3 6.942 6.942 0 01-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 01-1.007-.586 11.192 11.192 0 01-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 012.415 1.84a61.11 61.11 0 012.772-.815z" clip-rule="evenodd"/>
  <path d="M8 2.25c.909 0 3.188.685 4.254 1.022a.94.94 0 01.656.773c.814 6.424-4.13 9.452-4.91 9.452V2.25z"/>
</svg>
        
        <input type="button" class="btn btn-link-badge badge-light" data-toggle="collapse" data-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour" value="PROTECCIÓN RESPIRATORIA">
                 
      </h5>
    </div>
    <div id="collapsefour" class="collapse" aria-labelledby="headingTfour" data-parent="#accordion">
      <div class="card-body">
        <table class="table table-primary" style="font-size: 0.7rem;">
          <thead>
         
          <TR>
              <TH>SE REALIZO PRUEBA DE AJUSTE DE RESPIRADOR (PORTACOUNT)</TH>
              <TH>FECHA</TH>
              <TH>RESULTADO MARCA</TH>
              <TH>TALLA</TH>
              <TH>UTILIZA EL PROTECTOR INDICADO EN RESULTADO DE PRUEBA</TH>
          
          </tr>

          <tr>
            <td>
              <input type="RADIO" name="r_respirador" value="SI">SI
              <input type="RADIO" name="r_respirador" value="NO">NO</td>
              <td><input id="FECHA9" name="fecha_ini9" width="100px"  width="40px"  /></td>
              <td><input class="form-control" type="text" name="t_resulMarca"></td>
              
              <td><select class="custom-select" name="r_talla" multiple>
              <option value="1">S</option>
              <option value="2">M</option>
              <option value="3">L</option>
              
            </select></td>         
            
            <td>
              <input type="RADIO" name="r_pi" value="SI">SI
              <input type="RADIO" name="r_pi" value="NO">NO</td>
  
            
            
            
            
            </tr>






              </thead>
            </TABle>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFIVE">
      <h5 class="mb-0">
        <svg class="bi bi-people-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 100-6 3 3 0 000 6zm-5.784 6A2.238 2.238 0 015 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 005 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 100-5 2.5 2.5 0 000 5z" clip-rule="evenodd"/>
</svg>

        <input type="button" class="btn btn-link-badge badge-light" data-toggle="collapse" data-target="#collapseFIVE" aria-expanded="true" aria-controls="collapseFIVE" value="CAPACITACIÓN">
                
      </h5>
    </div>
    <div id="collapseFIVE" class="collapse" aria-labelledby="headingFIVE" data-parent="#accordion">
      <div class="card-body">
        <table class="table table-primary" style="font-size: 0.7rem;">
          <thead>

                
          <TR>
              <TH>RECIBIÓ CAPACITACIÓN ESPECIFÍCA PARA EL CONTROL DE EXPOSICIÓN A ARSENICO Y PROTECCIÓN</TH>
              <TH>FECHA</TH>
              <TH>ORGANISMO CAPACITADOR</TH>
              <TH>EXISTE EVIDENCIA DE ASISTENCIA</TH>
              <TH>REGISTRO</TH>
            </tr>
              <td>
                <input type="RADIO" name="r_capa" value="SI">SI
                <input type="RADIO" name="r_capa" value="NO">NO</td>
          
              
               <td><input id="FECHA10" name="fecha_ini10" width="100px"  width="40px"  /></td>
              
               <td><input class="form-control" type="text" name="result_org1"></td>

               <td>
                <input type="RADIO" name="r_asis" value="SI">SI
                <input type="RADIO" name="r_asis" value="NO">NO</td>
                <td><input class="form-control" type="text" name="as_preg_extra4"></td>
              
              
              </tr>
        </thead>
      </TABle>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingSIX">
      <h5 class="mb-0">
        <svg class="bi bi-file-text" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M4 1h8a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2zm0 1a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V3a1 1 0 00-1-1H4z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M4.5 10.5A.5.5 0 015 10h3a.5.5 0 010 1H5a.5.5 0 01-.5-.5zm0-2A.5.5 0 015 8h6a.5.5 0 010 1H5a.5.5 0 01-.5-.5zm0-2A.5.5 0 015 6h6a.5.5 0 010 1H5a.5.5 0 01-.5-.5zm0-2A.5.5 0 015 4h6a.5.5 0 010 1H5a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
</svg>


        <input type="button" class="btn btn-link-badge badge-light" data-toggle="collapse" data-target="#collapseSIX" aria-expanded="true" aria-controls="collapseSIX" value="ANTECEDENTES DE EXPOSICIÓN RECIENTE">
      </h5>
    </div>
    <div id="collapseSIX" class="collapse" aria-labelledby="headingSIX" data-parent="#accordion">
      <div class="card-body">
        <table class="table table-primary" style="font-size: 0.7rem;">
          <thead>
   





              <TH>DETALLE LAS TAREAS REALIZADAS EN SU ÚLTIMO TURNO</TH>
              <TH>ÁREA</TH>
              <TH>EPP UTILIZADO Y/O COMENTARIOS</TH>



              <tr>
                {{-- <td>$encuesta->ENC_AS_R_HA}}</td>--}}
                  <td><input class="form-control" type="text" name="as_preg_extra1"></td>
                  <td><input class="form-control" type="text" name="as_preg_extra2"></td>            
                  <td><input class="form-control" type="text" name="as_preg_extra3"></td>
                       
                </tr>

               

            </thead>
         
            
            
          </tbody>
  
         </table>
      </div>
    </div>
  </div>

  
  <div class="card">
    <div class="card-header" id="headingSEVEN">
      <h5 class="mb-0">
        <svg class="bi bi-list-check" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M5 11.5a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9a.5.5 0 01-.5-.5zm0-4a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9a.5.5 0 01-.5-.5zm0-4a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9a.5.5 0 01-.5-.5zM3.854 2.146a.5.5 0 010 .708l-1.5 1.5a.5.5 0 01-.708 0l-.5-.5a.5.5 0 11.708-.708L2 3.293l1.146-1.147a.5.5 0 01.708 0zm0 4a.5.5 0 010 .708l-1.5 1.5a.5.5 0 01-.708 0l-.5-.5a.5.5 0 11.708-.708L2 7.293l1.146-1.147a.5.5 0 01.708 0zm0 4a.5.5 0 010 .708l-1.5 1.5a.5.5 0 01-.708 0l-.5-.5a.5.5 0 01.708-.708l.146.147 1.146-1.147a.5.5 0 01.708 0z" clip-rule="evenodd"/>
</svg>

        <input type="button" class="btn btn-link-badge badge-light" data-toggle="collapse" data-target="#collapseSEVEN" aria-expanded="true" aria-controls="collapseSEVEN" value="CONDUCTAS Y MEDIDAS HIGIÉNICAS">        
      </h5>
    </div>
    <div id="collapseSEVEN" class="collapse" aria-labelledby="headingSEVEN" data-parent="#accordion">
      <div class="card-body">
        <table class="table table-primary" style="font-size: 0.7rem;">
          <thead>

              
          
              <TH>CONDUCTA E INSTALACIONES</TH>
              <TH>SELECCIÓN</TH>
              <TH>LUGAR</TH>
              <TH>OBSERVACION</TH>
                                 
                                          
              <tr>
                  <td>INGIERE ALIMENTOS EN TERRENO</td>
                  
                    {{-- <td>$encuesta->ENC_AS_R_HA}}</td>--}}
                    <td >
                      <label class="radio-inline"><input type="radio" name="r_1" checked>SI </label>
                      <label class="radio-inline"><input type="radio" name="r_1">NO </label>
                 
                        </td>
                      <td><input class="form-control" type="text" name="result_34"></td>            
                      <td><input class="form-control" type="text" name="result_35"></td>
                           
                    </tr>
              
              <tr>
                  <td>TOMA LIQUIDOS PARA HIDRATARSE EN TERRENO</td>
                  <td >
                    <label class="radio-inline"><input type="radio" name="r_2" checked>SI </label>
                    <label class="radio-inline"><input type="radio" name="r_2">NO </label>
               
                      </td>
                    <td><input class="form-control" type="text" name="result_36"></td>            
                    <td><input class="form-control" type="text" name="result_37"></td>
                         
                  </tr>
              <tr>
                  <td>SE LAVA LAS MANOS Y CARAS DE INGERIR ALIMENTOS O LIQUIDOS</td>
                  <td >
                    <label class="radio-inline"><input type="radio" name="r_3" checked>SI </label>
                    <label class="radio-inline"><input type="radio" name="r_3">NO </label>
               
                      </td>
                    <td><input class="form-control" type="text" name="result_38"></td>            
                    <td><input class="form-control" type="text" name="result_39"></td>
                         
                  </tr>
              <tr>
                  <td>FUMA EN TERRENO</td>
                  <td >
                    <label class="radio-inline"><input type="radio" name="r_4" checked>SI </label>
                    <label class="radio-inline"><input type="radio" name="r_4">NO </label>
               
                      </td>
                    <td><input class="form-control" type="text" name="result_40"></td>            
                    <td><input class="form-control" type="text" name="result_41"></td>
                         
                  </tr> 
              <tr>
                  <td>BEBE CAFE</td>
                  <td >
                    <label class="radio-inline"><input type="radio" name="r_5" checked>SI </label>
                    <label class="radio-inline"><input type="radio" name="r_5">NO </label>
               
                      </td>
                    <td><input class="form-control" type="text" name="result_42"></td>            
                    <td><input class="form-control" type="text" name="result_43"></td>
                         
                  </tr>
              <tr>
                  <td>DISPONE DE SALA DE CAMBIOS</td>
                  <td >
                    <label class="radio-inline"><input type="radio" name="r_6" checked>SI </label>
                    <label class="radio-inline"><input type="radio" name="r_6">NO </label>
               
                      </td>
                    <td><input class="form-control" type="text" name="result_44"></td>            
                    <td><input class="form-control" type="text" name="result_45"></td>
                         
                  </tr>   
              <tr>
                  <td>SI DISPONE, TIENE AREA LIMPIA Y SUCIA</td>
                  <td >
                    <label class="radio-inline"><input type="radio" name="r_7" checked>SI </label>
                    <label class="radio-inline"><input type="radio" name="r_7">NO </label>
               
                      </td>
                    <td><input class="form-control" type="text" name="result_46"></td>            
                    <td><input class="form-control" type="text" name="result_47"></td>
                         
                  </tr>  
              <tr>
                  <td>CUENTA CON DOBLE CASILLERO</td>
                  <td >
                    <label class="radio-inline"><input type="radio" name="r_8" checked>SI </label>
                    <label class="radio-inline"><input type="radio" name="r_8">NO </label>
               
                      </td>
                    <td><input class="form-control" type="text" name="result_48"></td>            
                    <td><input class="form-control" type="text" name="result_49"></td>
                         
                  </tr>   
              <tr>
                  <td>SI NO DISPONE DE CASA DE CAMBIO, DONDE SE CAMBIA</td>
                  <td >
                    <label class="radio-inline"><input type="radio" name="r_9" checked>SI </label>
                    <label class="radio-inline"><input type="radio" name="r_9">NO </label>
               
                      </td>
                    <td><input class="form-control" type="text" name="result_50"></td>            
                    <td><input class="form-control" type="text" name="result_51"></td>
                         
                  </tr> 
              <tr>
                  <td>UBICACIÓN DE SU CASILLERO</td>
                  <td >
                    <label class="radio-inline"><input type="radio" name="r_10" checked>SI </label>
                    <label class="radio-inline"><input type="radio" name="r_10">NO </label>
               
                      </td>
                    <td><input class="form-control" type="text" name="result_52"></td>            
                    <td><input class="form-control" type="text" name="result_53"></td>
                         
                  </tr>
              <tr>
                  <td>DISPONE DE ROPA LIMPIA DE TRABAJO (TODOS LOS DIAS)</td>
                  <td >
                    <label class="radio-inline"><input type="radio" name="r_11" checked>SI </label>
                    <label class="radio-inline"><input type="radio" name="r_11">NO </label>
               
                      </td>
                    <td><input class="form-control" type="text" name="result_54"></td>            
                    <td><input class="form-control" type="text" name="result_55"></td>
                         
                  </tr>
              <tr>
                  <td>SE CAMBIA DE ROPA DE TRABAJO TODOS LOS DIAS</td>
                  <td >
                    <label class="radio-inline"><input type="radio" name="r_12" checked>SI </label>
                    <label class="radio-inline"><input type="radio" name="r_12">NO </label>
               
                      </td>
                    <td><input class="form-control" type="text" name="result_56"></td>            
                    <td><input class="form-control" type="text" name="result_57"></td>
                         
                  </tr>
              <tr>
                  <td>SE DUCHA TODOS LOS DIAS EN FAENA AL TERMINO JORNADA</td>
                  <td >
                    <label class="radio-inline"><input type="radio" name="r_13" checked>SI </label>
                    <label class="radio-inline"><input type="radio" name="r_13">NO </label>
               
                      </td>
                    <td><input class="form-control" type="text" name="result_58"></td>            
                    <td><input class="form-control" type="text" name="result_59"></td>
                         
                  </tr>
              <tr>
                  <td>POSTERIOR A LA DUCHA USA CREMAS DE CARA Y/O MANOS</td>
                  <td >
                    <label class="radio-inline"><input type="radio" name="r_14" checked>SI </label>
                    <label class="radio-inline"><input type="radio" name="r_14">NO </label>
               
                      </td>
                    <td><input class="form-control" type="text" name="result_60"></td>            
                    <td><input class="form-control" type="text" name="result_61"></td>
                         
                  </tr>  
              <tr>
                  <td>ANTES DE IR ALMORZAR, SE CAMBIA DE ROPA</td>
                  <td >
                    <label class="radio-inline"><input type="radio" name="r_15" checked>SI </label>
                    <label class="radio-inline"><input type="radio" name="r_15">NO </label>
               
                      </td>
                    <td><input class="form-control" type="text" name="result_62"></td>            
                    <td><input class="form-control" type="text" name="result_63"></td>
                         
                  </tr>  
              <tr>
                  <td>ANTES DE IR ALMORZAR, SE REALIZA ASEO DE MANOS Y CARA</td>
                  <td >
                    <label class="radio-inline"><input type="radio" name="r_16" checked>SI </label>
                    <label class="radio-inline"><input type="radio" name="r_16">NO </label>
               
                      </td>
                    <td><input class="form-control" type="text" name="result_64"></td>            
                    <td><input class="form-control" type="text" name="result_65"></td>
                         
                  </tr>
              <tr>
                  <td>SI SE ENCUENTRA MUY SUCIO, SE BAÑA</td>
                  <td >
                    <label class="radio-inline"><input type="radio" name="r_17" checked>SI </label>
                    <label class="radio-inline"><input type="radio" name="r_17">NO </label>
               
                      </td>
                    <td><input class="form-control" type="text" name="result_67"></td>            
                    <td><input class="form-control" type="text" name="result_68"></td>
                         
                  </tr>
              <tr>
                  <td>SU PROTECTOR RESPIRATORIO, ES ASEADO DIARIAMENTE</td>
                  <td >
                    <label class="radio-inline"><input type="radio" name="r_18" checked>SI </label>
                    <label class="radio-inline"><input type="radio" name="r_18">NO </label>
               
                      </td>
                    <td><input class="form-control" type="text" name="result_69"></td>            
                    <td><input class="form-control" type="text" name="result_70"></td>
                         
                  </tr>       
              <tr>
                  <td>DONDE ALMACENA SU PROTECTOR RESPIRATORIO DURANTE EL DESCANSO</td>
                  <td >
                    <label class="radio-inline"><input type="radio" name="r_19" checked>SI </label>
                    <label class="radio-inline"><input type="radio" name="r_19">NO </label>
               
                      </td>
                    <td><input class="form-control" type="text" name="result_71"></td>            
                    <td><input class="form-control" type="text" name="result_72"></td>
                         
                  </tr> 
              <tr>
                  <td>DONDE ALMACENA SU PROTECTOR RESPIRATORIO DURANTE LA COLACIÓN</td>
                  <td >
                    <label class="radio-inline"><input type="radio" name="r_20" checked>SI </label>
                    <label class="radio-inline"><input type="radio" name="r_20">NO </label>
               
                      </td>
                    <td><input class="form-control" type="text" name="result_73"></td>            
                    <td><input class="form-control" type="text" name="result_74"></td>
                         
                  </tr>
            </thead>



          </tbody>
          
          </table>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingOCHO">
      <h5 class="mb-0">
        <svg class="bi bi-list-ul" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M5 11.5a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9a.5.5 0 01-.5-.5zm0-4a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9a.5.5 0 01-.5-.5zm0-4a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9a.5.5 0 01-.5-.5zm-3 1a1 1 0 100-2 1 1 0 000 2zm0 4a1 1 0 100-2 1 1 0 000 2zm0 4a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
</svg>

        <input type="button" class="btn btn-link-badge badge-light" data-toggle="collapse" data-target="#collapseOCHO" aria-expanded="true" aria-controls="collapseOCHO" value="CONCLUSIÓN DE LA INVESTIGACIÓN">                
      </h5>
    </div>
    <div id="collapseOCHO" class="collapse" aria-labelledby="headingOCHO" data-parent="#accordion">
      <div class="card-body">
        <table class="table table-primary" style="font-size: 0.7rem;">
          <thead>

        
      <tr>
       
        <td>  <td><input class="form-control" type="text" name="result_75"></td></td>
          
          
      </tr>       


</thead>
</tbody>

</table>






</div>





</div>
</div>
</div>
<input type="submit" class="btn btn-primary pull-right" value="Enviar encuesta">
</form>
@endsection
      
 
