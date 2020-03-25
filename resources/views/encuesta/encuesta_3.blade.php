@extends('layouts.app')

@section('content')


<script>
    $(document).ready(function(){
        $('#FECHACESE').datepicker({
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
        $('#FECHACESE1').datepicker({
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
        $('#FECHACESE2').datepicker({
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
        $('#FECHAINI').datepicker({
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
        $('#FECHAINI1').datepicker({
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
        $('#FECHAINI2').datepicker({
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



<div class="col-12">
    <H1 > <img src="https://media.licdn.com/dms/image/C560BAQErD20N0vWfcA/company-logo_400_400/0?e=1583971200&v=beta&t=bkfz_q_WT0YLfy3Z5m_Nj_YS_0oFVc5PwyMeoc4p2Ro" width="80px"  height="80PX" class="img-responsive" >Encuesta SILICE </H1>
  

    <hr>

<form action="">

    <div class="pregresp">
        <div class="pregunta">1. ¿Trabaja con chorro de arena?<br />
        </div>
        <div class="respuestas">
          <input type="radio" name="preg1" value="1" /> Sí<br />
          <input type="radio" name="preg1" value="2" /> No<br />
   
        </div>
      </div>


      <form action="">

        <div class="pregresp">
            <div class="pregunta">2. ¿Usa de equipo de protección individual?<br />
            </div>
            <div class="respuestas">
              <input type="radio" name="preg1" value="1" /> Sí<br />
              <input type="radio" name="preg1" value="2" /> No<br />
       
            </div>
          </div>



          <form action="">

            <div class="pregresp">
                <div class="pregunta">2.1 ¿El tipo de respirador que utiliza es con filtro para ?<br />
                </div>
                <div class="respuestas">
                  <input type="checkbox" name="preg1" value="1" />GASEP<br />
                  <input type="checkbox" name="preg1" value="2" />POLVO<br />
                  <input type="checkbox" name="preg1" value="3" />MIXTO<br />
                  <input type="checkbox" name="preg1" value="4" />MIXTO<br />
           
                </div>
              </div>
              <div class="pregresp">
                <div class="pregunta">3. ¿Existe programa  de mantención para los filtros?<br />
                </div>
                <div class="respuestas">
                  <input type="radio" name="preg1" value="1" /> Sí<br />
                  <input type="radio" name="preg1" value="2" /> No<br />
           
                </div>
              </div>


              <div class="pregresp">
                <div class="pregunta">3.1. ¿Frecuencia de uso?<br />
                </div>
                <div class="respuestas">
                  <input type="radio" name="preg1" value="1" />Nunca<br />
                  <input type="radio" name="preg1" value="2" />Aveces<br />
                  <input type="radio" name="preg1" value="3" />Siempre<br />
           
                </div>
              </div>
           
              <div class="pregresp">
                <div class="pregunta">4. ¿Hubo algun cambio desde el inicio del trabajo actual en cuanto a: ?<br />
                </div>

                <div class="pregunta">4.1 Sistema de trabajo<br />
                </div>
                <div class="respuestas">
                  <input type="radio" name="preg1" value="1" />Si<input type="text" name="preg1" value=" " /> Año<input type="text" name="preg1"  /> Describir los cambios <br />
                  <input type="radio" name="preg1" value="2" />No<br />
                  
                  <div class="pregunta">4.2 Maquinarias o Herramientas<br />
                  </div>
                  <input type="radio" name="preg1" value="1" />Si<input type="text" name="preg1" value=" " /> Año<input type="text" name="preg1"  /> Describir los cambios <br />
                <input type="radio" name="preg1" value="2" />No<br />
                
               
         
              </div>
            </div>
            <div class="pregunta">4.3 Medidas de protección<br />
            </div>
            <div class="respuestas">
              <input type="radio" name="preg1" value="1" />Si<input type="text" name="preg1" value=" " /> Año<input type="text" name="preg1"  /> Describir los cambios <br />
              <input type="radio" name="preg1" value="2" />No<br />
              
              
       
            </div>
          </div>
          <div class="pregunta">5 Actividades extralaborales que puedan tener relación con enfermedades del aparato respiratorio<br />
          </div>
          <div class="respuestas">
           
            <input type="text" name="preg1"   class="col-6">

            <table class="egt">
<p>

</p>
<hr>
<div class="pregunta">6 Historia laboral sobre trabajos anteriores con riesgos de NEUMOCONIOSIS (SILICOSIS, ASBESTOSIS)<br />
</div>
                <tr>
              
                    <th>ITEM</th>
                  <th>1° Empresa</th>
              
                  <th>2° Empresa</th>
              
                  <th>3° Empresa</th>
 

              
                </tr>
              
                <tr>
              
                  <td>1.Nombre</td>
                  <td> <input type="text" name="preg1"   class="col-6"></td>
                  <td> <input type="text" name="preg1"   class="col-6"></td>
                  <td> <input type="text" name="preg1"   class="col-6"></td>
             
                 
                                
                  
                </tr>
              
                <tr>
              
                    <td>2.Actividad</td>

                    <td> <input type="text" name="preg1"   class="col-6"></td>
                    <td> <input type="text" name="preg1"   class="col-6"></td>
                    <td> <input type="text" name="preg1"   class="col-6"></td>
              
                  
              
                </tr>
              
                <tr>
              
                    <td>3.Rut</td>

                    <td> <input type="text" name="preg1"   class="col-6"></td>
                    <td> <input type="text" name="preg1"   class="col-6"></td>
                    <td> <input type="text" name="preg1"   class="col-6"></td>
              
                
              
                </tr>
                <tr>
              
                    <td>4.Fecha de inicio</td>
                    <td>  <input id="FECHAINI" name="FECHA_INI" width="100px" class="col-12"  /></td>
                    <td>  <input id="FECHAINI1" name="FECHA_INI1" width="100px" class="col-12"  /></td>
                    <td>  <input id="FECHAINI2" name="FECHA_INI2" width="100px" class="col-12"  /></td>
                
                   
                  </tr>


                  <tr>
              
                    <td>5.Fecha de Cese</td>
                    <td>  <input id="FECHACESE" name="FECHA_CESE" width="100px" class="col-12"  /></td>
                    <td>  <input id="FECHACESE1" name="FECHA_CESE1" width="100px" class="col-12"  /></td>
                    <td>  <input id="FECHACESE2" name="FECHA_CESE2" width="100px" class="col-12"  /></td>
                
                  </tr>

                  <tr>
              
                    <td>6.Primera Ocupacion</td>
              
                    <td> <input type="text" name="preg1"   class="col-6"></td>
                  <td> <input type="text" name="preg1"   class="col-6"></td>
                  <td> <input type="text" name="preg1"   class="col-6"></td>
              
                </tr>
                <tr>
              
                    <td>7.Duración</td>
                
                    <td> <input type="text" name="preg1"   class="col-6"></td>
                    <td> <input type="text" name="preg1"   class="col-6"></td>
                    <td> <input type="text" name="preg1"   class="col-6"></td>
                
                  </tr>


                  <tr>
              
                    <td>8.Segunda Ocupacion</td>
                
                    <td> <input type="text" name="preg1"   class="col-6"></td>
                    <td> <input type="text" name="preg1"   class="col-6"></td>
                    <td> <input type="text" name="preg1"   class="col-6"></td>
                
                  </tr>

                  <tr>
              
                    <td>9.Duración</td>
                
                    <td> <input type="text" name="preg1"   class="col-6"></td>
                    <td> <input type="text" name="preg1"   class="col-6"></td>
                    <td> <input type="text" name="preg1"   class="col-6"></td>
                
                  </tr>
                  <tr>

                  <td>10.Tercera Ocupacion</td>
                  <td> <input type="text" name="preg1"   class="col-6"></td>
                  <td> <input type="text" name="preg1"   class="col-6"></td>
                  <td> <input type="text" name="preg1"   class="col-6"></td>
                </tr>
                  
           
                </div>
              </div>

              <div class="pregunta">4.2 Herramientas o Maquinarias<br />
              </div>
              <div class="respuestas">

                  <td>11.Duración</td>
                  <td> <input type="text" name="preg1"   class="col-6"></td>
                  <td> <input type="text" name="preg1"   class="col-6"></td>
                  <td> <input type="text" name="preg1"   class="col-6"></td>
                </tr>




              
              </table>


     
          </div>
        </div>



        <div class="pregunta">7. ¿Cuantos años de exposicion de SILICE? <br />
            <td> <input type="text" name="preg1"   class="col-6"></td>
        </div>

        <div class="pregunta">EXAMENES DE SALUD ESPECIFICOS PREVIOS <br />
            
            <div class="pregunta">Causa de evaluación médica con RX TX <br />
            <td> <input type="text" name="preg1"   class="col-4"></td>
            <td> <input type="text" name="preg1"   class="col-2"> Año (Último realizado)</td>
        </div>
        <div class="pregunta">Evaluación médico legal <br />
            <td> <input type="text" name="preg1"   class="col-4"></td>
            <td> <input type="text" name="preg1"   class="col-2"> Año (Último realizado)</td>
        </div>
        <div class="pregunta">Patología respiratoria <br />
            <td> <input type="text" name="preg1"   class="col-4"></td>
            <td> <input type="text" name="preg1"   class="col-2"> Año (Último realizado)</td>
        </div>
        <div class="pregunta">Diagnóstico <br />
            <td> <input type="text" name="preg1"   class="col-4"></td>
            <td> <input type="text" name="preg1"   class="col-2"> Año (Último realizado)</td>
        </div>
        <div class="pregunta">Causa de evaluación médica con RX TX <br />
            <td> <input type="text" name="preg1"   class="col-4"></td>
            <td> <input type="text" name="preg1"   class="col-2"> Año (Último realizado)</td>
        </div>
    </div>
    <div class="pregunta">Resolución de evaluación medico legal por SILICOSIS u otras NEUMOCONIOSIS<br />
    </div>
    <div class="respuestas">

        <input type="radio" name="preg1" value="2" />No<br />
      <input type="radio" name="preg1" value="1" />Si<br />
     
      <input type="text" name="preg1" class="col-2" /> Año<br />
      <input type="text" name="preg1" class="col-2" />% PCG <br />

    </div>
  </div>
  <hr>
  <div class="pregunta">HABITOS DEL TRABAJADOR<br />
    
</div>
<div class="pregunta">¿Usted Fuma?<br />
    
</div>
<input type="radio" name="preg1" value="2" />No<br />
      <input type="radio" name="preg1" value="1" />Si<br />
      <div class="pregunta">Si su repsuesta fue "SI" contestar las siguientes preguntas<br />
    
      </div>
      <div class="pregunta">Fumador PIPAS, PUROS<br />
        <input type="radio" name="preg1" value="2" />No Aplica<br />
        <input type="radio" name="preg1" value="2" />EX FUMADOR<br />
        <input type="text" name="preg1" class="col-2" /> Cantidad PIPAS/DIA<br />
        <input type="text" name="preg1" class="col-2" /> Cantidad PUROS/DIA<br />
     
          
      </div>
      </div>


    </div>
    <div class="pregunta">Fumador CIGARROSS<br />
      <input type="radio" name="preg1" value="2" />No Aplica<br />
      <input type="radio" name="preg1" value="2" />EX FUMADOR<br />
      <input type="text" name="preg1" class="col-2" /> Cantidad CIGARROS/DIA<br />
      
   
        
    </div>
    </div>
    <hr>
    <div class="pregunta">¿Consume drogas?<br />
    
    </div>
    <input type="radio" name="preg1" value="2" />No<br />
          <input type="radio" name="preg1" value="1" />Si<br />
          <div class="pregunta">Si su repsuesta fue "SI" contestar las siguientes preguntas<br />
        
          </div>

          <div class="respuestas">
            <input type="checkbox" name="preg1" value="1" />MARIHUANA<br />
            <input type="checkbox" name="preg1" value="2" />COCAINA<br />
            <input type="checkbox" name="preg1" value="3" />PASTA BASE<br />
            <input type="checkbox" name="preg1" value="4" />OTRA   <input type="text" name="preg1" value="" /><br />
     
          </div>
          <hr>

          <div class="pregunta">ANTECEDENTES PERSONALES<br />
            <div class="pregunta">SEÑALAR SI TIENE ANTECEDENTES DE PATOLOGIAS DIAGNOSTICADA POR UN MEDICO TALES COMO:<br />
                <P>

                </P>
                <div class="pregunta">TUBERCULOSIS:<br />
                    <div class="respuestas">
                      <input type="radio" name="preg1" value="1" /> Sí  <input type="text" name="preg1" value=" " /> año<br />
                      <input type="radio" name="preg1" value="2" /> No<br />
                     
               
                    </div>
                  </div>
                  <div class="pregunta">PLEURITIS:<br />
                    <div class="respuestas">
                      <input type="radio" name="preg1" value="1" /> Sí  <input type="text" name="preg1" value=" " /> año<br />
                      <input type="radio" name="preg1" value="2" /> No<br />
                     
               
                    </div>
                  </div>
                  <div class="pregunta">BRONQUITIS CRONICA:<br />
                    <div class="respuestas">
                      <input type="radio" name="preg1" value="1" /> Sí  <input type="text" name="preg1" value=" " /> año<br />
                      <input type="radio" name="preg1" value="2" /> No<br />
                     
               
                    </div>
                  </div>
                  <div class="pregunta">EPOC:<br />
                    <div class="respuestas">
                      <input type="radio" name="preg1" value="1" /> Sí  <input type="text" name="preg1" value=" " /> año<br />
                      <input type="radio" name="preg1" value="2" /> No<br />
                     
               
                    </div>
                  </div>
                  <div class="pregunta">ASMA BRONQUIAL:<br />
                    <div class="respuestas">
                      <input type="radio" name="preg1" value="1" /> Sí  <input type="text" name="preg1" value=" " /> año<br />
                      <input type="radio" name="preg1" value="2" /> No<br />
                     
               
                    </div>
                  </div>
                  <div class="pregunta">HIPERTENSION ARTERIAL:<br />
                    <div class="respuestas">
                      <input type="radio" name="preg1" value="1" /> Sí  <input type="text" name="preg1" value=" " /> año<br />
                      <input type="radio" name="preg1" value="2" /> No<br />
                     
               
                    </div>
                  </div>

                  <div class="pregunta">OTRAS ENFERMEDADES<br />
                    <input type="text" name="preg1" value="" width="auto" class="col-6"/><br />
                  
   
</div>
<p>

</p>

<input type="submit" class="btn btn-success" value="Enviar encuesta">
</form>
@endsection