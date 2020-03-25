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
    <H1 style="text-align:center"> <img src="https://media.licdn.com/dms/image/C560BAQErD20N0vWfcA/company-logo_400_400/0?e=1583971200&v=beta&t=bkfz_q_WT0YLfy3Z5m_Nj_YS_0oFVc5PwyMeoc4p2Ro" width="80px"  height="80PX" class="img-responsive" >Encuesta FORMALDEIDO </H1>
  

    <hr>

<form action="/api/getEncuestaResult" method="GET">

    <div class="pregresp">
        <div class="pregunta">DESCRIPCIPÓN DE ACTIVIDADES<br />
       <hr>
        </div>

        <div class="pregunta">PREPARACIÓN DE CITOSTÁTICOS<br />
        <div class="respuestas">
          <input type="radio" name="r_pc" value="si" /> Sí<br />
          <input type="radio" name="r_pc" value="no" /> No<br />
   
        </div>
      </div>

      <div class="pregunta">LIMPIEZA ÁREA DE PREPARACIÓN<br />
        <div class="respuestas">
          <input type="radio" name="r_lp" value="si" /> Sí<br />
          <input type="radio" name="r_lp" value="no" /> No<br />
   
        </div>
      </div>

      <div class="pregunta">TRANSPORTE INTERNO EN EL SERVICIO <br />
        <div class="respuestas">
          <input type="radio" name="r_ts" value="si" /> Sí<br />
          <input type="radio" name="r_ts" value="no" /> No<br />
   
        </div>
      </div>


      <div class="pregunta">ADMINISTRACIÓN<br />
        <div class="respuestas">
          <input type="radio" name="r_adm" value="si" /> Sí<br />
          <input type="radio" name="r_adm" value="no" /> No<br />
   
        </div>
      </div>

      <div class="pregunta">LIMPIEZA ÁREA CLINICA<br />
        <div class="respuestas">
          <input type="radio" name="r_lc" value="si" /> Sí<br />
          <input type="radio" name="r_lc" value="no" /> No<br />
   
        </div>
      </div>

      <div class="pregunta">DISPOSICIÓN DE RESIDUOS<br />
        <div class="respuestas">
          <input type="radio" name="r_dr" value="si" /> Sí<br />
          <input type="radio" name="r_dr" value="no" /> No<br />
   
        </div>
      </div>

      <div class="pregunta">CONTACTOS Y/O ATENCIÓN CLÍNICA DE PACIENTES<br />
        <div class="respuestas">
          <input type="radio" name="r_cp" value="si" /> Sí<br />
          <input type="radio" name="r_cp" value="no" /> No<br />
   
        </div>
      </div>

    <hr>

    <div class="pregresp">
        <div class="pregunta">INDICAR EL NOMBRE DE CITOTÓXICOS MAS UTILIZADOS<br />
       <hr>
        </div>

        <div class="pregunta">CICLOFOSFAMIDA<br />
        <div class="respuestas">
          <input type="text" name="preg1" value="" /> <br />
         <p>

         </p>
   <div class="pregunta">FLURORACILO<br />
        <div class="respuestas">
          <input type="text" name="preg2" value="" /> <br />
         <p>
             
         </p>
        </div>
      </div>

      <div class="pregunta">METOTREXATO<br />
        <div class="respuestas">
          <input type="text" name="preg3" value="" /> <br />
         <p>
             
         </p>

         <div class="pregunta">MITOXANTRONA<br />
            <div class="respuestas">
              <input type="text" name="preg4" value="" /> <br />
             <p>
                 
             </p>

             <div class="pregunta">OTROS<br />
                <div class="respuestas">
                  <input type="text" name="preg5" value="" /> <br />
                 <p>
                     
                 </p>

   
        </div>
      </div>

      <hr>
      <style type="text/css">
        .tg  {border-collapse:collapse;border-spacing:0;}
        .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
        .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
        .tg .tg-j060{background-color:#002b36;color:#ffffff;border-color:inherit;text-align:left;vertical-align:top}
        .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
        </style>
        <table class="tg">
          <tr>
            <th class="tg-j060">Lugar/es donde trabajó</th>
            <th class="tg-j060">años</th>
            <th class="tg-j060">Desde</th>
            <th class="tg-j060">Hasta</th>
            <th class="tg-j060">Descripción de actividades principales</th>
          </tr>
          <tr>
            <td class="tg-0pky"><input type="text" name="preg6" value="" /> </td>
            <td class="tg-0pky"><input type="text" name="preg7" value="" /> </td>
            <td class="tg-0pky"><input type="text" name="preg8" value="" /> </td>
            <td class="tg-0pky"><input type="text" name="preg9" value="" /> </td>
            <td class="tg-0pky"><input type="text" name="preg10" value="" /> </td>
          </tr>
          <tr>
            <td class="tg-0pky"><input type="text" name="preg11" value="" /> </td>
            <td class="tg-0pky"><input type="text" name="preg12" value="" /> </td>
            <td class="tg-0pky"><input type="text" name="preg13" value="" /> </td>
            <td class="tg-0pky"><input type="text" name="preg14" value="" /> </td>
            <td class="tg-0pky"><input type="text" name="preg15" value="" /> </td>
          </tr>
          <tr>
            <td class="tg-0pky"><input type="text" name="preg16" value="" /> </td>
            <td class="tg-0pky"><input type="text" name="preg17" value="" /> </td>
            <td class="tg-0pky"><input type="text" name="preg18" value="" /> </td>
            <td class="tg-0pky"><input type="text" name="preg19" value="" /> </td>
            <td class="tg-0pky"><input type="text" name="preg20" value="" /> </td>
          </tr>
          <tr>
            <td class="tg-0pky"><input type="text" name="preg21" value="" /> </td>
            <td class="tg-0pky"><input type="text" name="preg22" value="" /> </td>
            <td class="tg-0pky"><input type="text" name="preg23" value="" /> </td>
            <td class="tg-0pky"><input type="text" name="preg24" value="" /> </td>
            <td class="tg-0pky"><input type="text" name="preg25" value="" /> </td>
          </tr>
          <tr>
            <td class="tg-0pky"><input type="text" name="preg26" value="" /> </td>
            <td class="tg-0pky"><input type="text" name="preg27" value="" /> </td>
            <td class="tg-0pky"><input type="text" name="preg28" value="" /> </td>
            <td class="tg-0pky"><input type="text" name="preg29" value="" /> </td>
            <td class="tg-0pky"><input type="text" name="preg30" value="" /> </td>
          </tr>
        </table>

        <hr>
      <p>


      </p>
        <style type="text/css">
            .tg  {border-collapse:collapse;border-spacing:0;}
            .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
            .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
            .tg .tg-hdk6{background-color:#657b83;color:#ffffff;border-color:inherit;text-align:left;vertical-align:top}
            .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
            .tg .tg-0lax{text-align:left;vertical-align:top}
            </style>
            <table class="tg">
              <tr>
                <th class="tg-hdk6" colspan="2">Elementos de protección personal que utiliza</th>
                <th class="tg-hdk6">cuando?</th>
                <th class="tg-hdk6">Observación</th>
              </tr>
              <tr>
                <td class="tg-0pky">Delantal</td>
                <td class="tg-0pky"> <div class="respuestas">
                    <input type="radio" name="r_d" value="si" /> Sí<br />
                    <input type="radio" name="r_d" value="no" /> No<br />
             
                  </div></td>
               
                <td class="tg-0pky"><input type="text" name="preg31" value="" /></td>
                <td class="tg-0pky"><input type="text" name="preg32" value="" /></td>
              </tr>
              <tr>
                <td class="tg-0pky">Cubrecabello</td>
                <td class="tg-0pky"> <div class="respuestas">
                    <input type="radio" name="r_c" value="si" /> Sí<br />
                    <input type="radio" name="r_c" value="no" /> No<br />
             
                  </div></td>
                
                <td class="tg-0pky"><input type="text" name="preg33" value="" /></td>
                <td class="tg-0pky"><input type="text" name="preg34" value="" /></td>
              </tr>
              <tr>
                <td class="tg-0pky">Mascarilla desechable</td>
                <td class="tg-0pky"> <div class="respuestas">
                    <input type="radio" name="r_md" value="si" /> Sí<br />
                    <input type="radio" name="r_md" value="no" /> No<br />
             
                  </div></td>
                
                  
                 


                <td class="tg-0pky"><input type="text" name="preg35" value="" /></td>
                <td class="tg-0pky"><input type="checkbox" name="preg36" value="Con válvula de exhalación" />¿CON VÁLVULA DE EXHALACIÓN?<br /></td>
              </tr>
              <tr>
                <td class="tg-0pky">Guantes de látex</td>
                <td class="tg-0pky"> <div class="respuestas">
                    <input type="radio" name="r_gl" value="si" /> Sí<br />
                    <input type="radio" name="r_gl" value="no" /> No<br />
             
                  </div></td>
               
                <td class="tg-0pky"><input type="text" name="preg37" value="" /></td>
                <td class="tg-0pky"> <input type="checkbox" name="c_cp" value="Con polvo" />¿CON POLVO?<br />
                                     <input type="checkbox" name="c_sp" value="Sin polvo" />¿SIN POLVO?<br />
                
                </td>
              </tr>
              <tr>
                <td class="tg-0pky">Guantes de nitrilo</td>
                <td class="tg-0pky"> <div class="respuestas">
                    <input type="radio" name="r_gn" value="si" /> Sí<br />
                    <input type="radio" name="r_gn" value="no" /> No<br />
             
                  </div></td>
               
                <td class="tg-0pky"><input type="text" name="preg38" value="" /></td>
                <td class="tg-0pky"><input type="text" name="preg39" value="" /></td>
              </tr>
              <tr>
                <td class="tg-0lax">Guantes de Neopreno</td>
                <td class="tg-0lax"> <div class="respuestas">
                    <input type="radio" name="r_gne" value="si" /> Sí<br />
                    <input type="radio" name="r_gne" value="no" /> No<br />
             
                  </div></td>
                
                <td class="tg-0lax"><input type="text" name="preg40" value="" /></td>
                <td class="tg-0lax"><input type="text" name="preg41" value="" /></td>
              </tr>
              <tr>
                <td class="tg-0lax">Guantes multiuso</td>
                <td class="tg-0lax"> <div class="respuestas">
                    <input type="radio" name="r_gmu" value="si" /> Sí<br />
                    <input type="radio" name="r_gmu" value="no" /> No<br />
             
                  </div></td>
                
                <td class="tg-0lax"><input type="text" name="preg42" value="" /></td>
                <td class="tg-0lax"><input type="text" name="preg43" value="" /></td>
              </tr>
              <tr>
                <td class="tg-0lax">Guantes de PVC</td>
                <td class="tg-0lax"> <div class="respuestas">
                    <input type="radio" name="r_gpvc" value="si" /> Sí<br />
                    <input type="radio" name="r_gpvc" value="no" /> No<br />
             
                  </div></td>
                
                <td class="tg-0lax"><input type="text" name="preg44" value="" /></td>
                <td class="tg-0lax"><input type="text" name="preg45" value="" /></td>
              </tr>
              <tr>
                <td class="tg-0lax">Gafas protectoras</td>
                <td class="tg-0lax"> <div class="respuestas">
                    <input type="radio" name="r_gp" value="si" /> Sí<br />
                    <input type="radio" name="r_gp" value="no" /> No<br />
             
                  </div></td>
                
                <td class="tg-0lax"><input type="text" name="preg46" value="" /></td>
                <td class="tg-0lax"><input type="text" name="preg47" value="" /></td>
              </tr>
              <tr>
                <td class="tg-0lax">Pachera Plásticas</td>
                <td class="tg-0lax"> <div class="respuestas">
                    <input type="radio" name="r_pp" value="si" /> Sí<br />
                    <input type="radio" name="r_pp" value="no" /> No<br />
             
                  </div></td>
                
                <td class="tg-0lax"><input type="text" name="preg48" value="" /></td>
                <td class="tg-0lax"><input type="text" name="preg49" value="" /></td>
              </tr>
              <tr>
                <td class="tg-0lax">Cubrecalzado desechable</td>
                <td class="tg-0lax"> <div class="respuestas">
                    <input type="radio" name="r_cd" value="si" /> Sí<br />
                    <input type="radio" name="r_cd" value="no" /> No<br />
             
                  </div></td>
               
                <td class="tg-0lax"><input type="text" name="preg50" value="" /></td>
                <td class="tg-0lax"><input type="text" name="preg51" value="" /></td>
              </tr>
              <tr>
                <td class="tg-0lax">Botas de gomas</td>
                <td class="tg-0lax"> <div class="respuestas">
                    <input type="radio" name="r_bg" value="si" /> Sí<br />
                    <input type="radio" name="r_bg" value="no" /> No<br />
             
                  </div></td>
                
                <td class="tg-0lax"><input type="text" name="preg52" value="" /></td>
                <td class="tg-0lax"><input type="text" name="preg53" value="" /></td>
              </tr>
              <tr>
                <td class="tg-0lax">Otros</td>
                <td class="tg-0lax"> <div class="respuestas">
                    <input type="radio" name="r_otros" value="si" /> Sí<br />
                    <input type="radio" name="r_otros" value="no" /> No<br />
             
                  </div></td>
                
                <td class="tg-0lax"><input type="text" name="preg54" value="" /></td>
                <td class="tg-0lax"><input type="text" name="preg55" value="" /></td>
              
              </tr>
            </table>   

</div>
<p>

</p>

<input type="submit" class="btn btn-success" value="Enviar encuesta">
</form>
@endsection