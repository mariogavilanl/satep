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

<div class="container-fluid">
<form action="/api/getEncuestaResult" method="GET">

    <style type="text/css">
        .tg  {border-collapse:collapse;border-spacing:0;border-color:#aaa;}
        .tg td{font-family:Arial, sans-serif;font-size:14px;padding:9px 18px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#aaa;color:#333;background-color:#fff;}
        .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:9px 18px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#aaa;color:#fff;background-color:#f38630;}
        .tg .tg-yj5y{background-color:#efefef;border-color:inherit;text-align:center;vertical-align:top}
        .tg .tg-hkp2{font-weight:bold;background-color:#68cbd0;border-color:inherit;text-align:right;vertical-align:top}
        .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
        .tg .tg-w9in{background-color:#343434;text-align:left;vertical-align:top}
        .tg .tg-46xj{font-size:36px;font-family:"Arial Black", Gadget, sans-serif !important;;background-color:#343434;color:#34cdf9;text-align:center;vertical-align:top}
        .tg .tg-y698{background-color:#efefef;border-color:inherit;text-align:left;vertical-align:top}
        .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
        .tg .tg-fymr{font-weight:bold;border-color:inherit;text-align:left;vertical-align:top}
        .tg .tg-dvpl{border-color:inherit;text-align:right;vertical-align:top}
        </style>
        <table class="tg" align="center">
          <tr>
            <th class="tg-w9in" colspan="6"></th>
          </tr>
          <tr>
            <td class="tg-46xj" colspan="6"><H1 style="text-align:center"><img src="/img/logo-codelco.png" width="110px"  height="110PX" class="img-responsive"  ></a>  ENCUESTA ARSÉNICO </H1></td>
          </tr>
          <tr>
            <td class="tg-w9in"></td>
            <td class="tg-w9in"></td>
            <td class="tg-w9in"></td>
            <td class="tg-w9in"></td>
            <td class="tg-w9in"></td>
            <td class="tg-w9in"></td>
          </tr>
          <tr>
            <td class="tg-hkp2" colspan="6"><span style="color:rgb(0, 0, 0)">ANTECEDENTES MÓRBIDOS </span><img src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 576 512'%3e%3cpath fill='%23ffffff' d='M528 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-352 96c35.3 0 64 28.7 64 64s-28.7 64-64 64-64-28.7-64-64 28.7-64 64-64zm112 236.8c0 10.6-10 19.2-22.4 19.2H86.4C74 384 64 375.4 64 364.8v-19.2c0-31.8 30.1-57.6 67.2-57.6h5c12.3 5.1 25.7 8 39.8 8s27.6-2.9 39.8-8h5c37.1 0 67.2 25.8 67.2 57.6v19.2zM512 312c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-64c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-64c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16z'/%3e%3c/svg%3e" alt="Image" width="40" height="40"></td>
          </tr>
          <tr>
            <td class="tg-y698">Hipertensión Arterial</td>
            <td class="tg-0pky" colspan="5"> 
              <input type="radio" name="r_ha" value="si" /> Sí<br />
              <input type="radio" name="r_ha" value="no" /> No<br /></td>
          </tr>
          <tr>
            <td class="tg-y698">Diabetes Mellitus</td>
            <td class="tg-0pky" colspan="5"> 
                <input type="radio" name="r_dm" value="si" /> Sí<br />
                <input type="radio" name="r_dm" value="no" /> No<br /></td>
          </tr>
          <tr>
            <td class="tg-y698">Enfermedad Renal</td>
            <td class="tg-0pky" colspan="5"> 
                <input type="radio" name="r_er" value="si" /> Sí<br />
                <input type="radio" name="r_er" value="no" /> No<br /></td>
          </tr>
          <tr>
            <td class="tg-y698">Hipotirodismo</td>
            <td class="tg-0pky" colspan="5"> 
                <input type="radio" name="r_h" value="si" /> Sí<br />
                <input type="radio" name="r_h" value="no" /> No<br /></td>
          </tr>
          <tr>
            <td class="tg-hkp2" colspan="6">HISTORIAL LABORAL <img src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'%3e%3cpath fill='%23ffffff' d='M436 160c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h320c26.5 0 48-21.5 48-48v-48h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20zm-228-32c35.3 0 64 28.7 64 64s-28.7 64-64 64-64-28.7-64-64 28.7-64 64-64zm112 236.8c0 10.6-10 19.2-22.4 19.2H118.4C106 384 96 375.4 96 364.8v-19.2c0-31.8 30.1-57.6 67.2-57.6h5c12.3 5.1 25.7 8 39.8 8s27.6-2.9 39.8-8h5c37.1 0 67.2 25.8 67.2 57.6v19.2z'/%3e%3c/svg%3e" alt="Image" width="40" height="40"></td>
          </tr>
          <tr>
            <td class="tg-0pky">Ha tenido puestos de trabajos anteriores con exposición a ARSÉNICO</td>
            <td class="tg-0pky" colspan="5"> 
                <input type="radio" name="r_preg1_as" value="si" /> Sí<br />
                <input type="radio" name="r_preg1_as" value="no" /> No<br /></td>
          </tr>
          <tr>
            <td class="tg-fymr" colspan="6">En caso de haber respondido "SI", Completar el siguiente cuadro de exposición ocupacional:</td>
          </tr>
          <tr>
           
            <td class="tg-yj5y">Empresa</td>
            <td class="tg-yj5y">Puesto Trabajo</td>
            <td class="tg-y698">Org Administrador</td>
            <td class="tg-y698">Desde</td>
            <td class="tg-y698">Hasta</td>
            <td class="tg-y698">Medidas de control</td>
          </tr>
          <tr>
            <td class="tg-0pky"><input type="text" name="result_empresa" value=""  width="20px" size="80"/></td>
            <td class="tg-0pky"><input type="text" name="result_puestotrabajo" value="" width="20px"/> </td>
            <td class="tg-0pky"><input type="text" name="result_org" value=""  width="20px"/> </td>
            <td class="tg-0pky"><input id="FECHA1" name="fecha_ini1" width="100px"  width="20px"  /></td>
            <td class="tg-0pky"><input id="FECHA2" name="fecha_ini2" width="100px"  width="20px" /></td>
            <td class="tg-0pky"><input type="text" name="result_medidas" value=""  width="20px" /></td>
          </tr>
          <tr>
            <td class="tg-0pky"><input type="text" name="result_1" value=""  width="20px" size="80"/></td>
            <td class="tg-0pky"><input type="text" name="result_2" value="" width="20px"/> </td>
            <td class="tg-0pky"><input type="text" name="result_3" value=""  width="20px"/> </td>
            <td class="tg-0pky"><input id="FECHA3" name="fecha_ini3" width="100px"  width="20px"  /></td>
            <td class="tg-0pky"><input id="FECHA4" name="fecha_ini4" width="100px"  width="20px" /></td>
            <td class="tg-0pky"><input type="text" name="result_4" value=""  width="20px" /></td>
          </tr>
          <tr>
            <td class="tg-0pky"><input type="text" name="result_5" value=""  width="20px" size="80"/></td>
            <td class="tg-0pky"><input type="text" name="result_6" value="" width="20px"/> </td>
            <td class="tg-0pky"><input type="text" name="result_7" value=""  width="20px"/> </td>
            <td class="tg-0pky"><input id="FECHA5" name="fecha_ini5" width="100px"  width="20px"  /></td>
            <td class="tg-0pky"><input id="FECHA6" name="fecha_ini6" width="100px"  width="20px" /></td>
            <td class="tg-0pky"><input type="text" name="result_8" value=""  width="20px" /></td>
          </tr>
          <tr>
            <td class="tg-0pky"><input type="text" name="result_9" value=""  width="20px" size="80"/></td>
            <td class="tg-0pky"><input type="text" name="result_10" value="" width="20px"/> </td>
            <td class="tg-0pky"><input type="text" name="result_11" value=""  width="20px"/> </td>
            <td class="tg-0pky"><input id="FECHA7" name="fecha_ini7" width="100px"  width="20px"  /></td>
            <td class="tg-0pky"><input id="FECHA8" name="fecha_ini8" width="100px"  width="20px" /></td>
            <td class="tg-0pky"><input type="text" name="result_12" value=""  width="20px" /></td>
          </tr>
          <tr>
            <td class="tg-hkp2" colspan="6">EXPOSICION ACTUAL <img src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 384 512'%3e%3cpath fill='%23ffffff' d='M336 64h-80c0-35.3-28.7-64-64-64s-64 28.7-64 64H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM96 424c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm0-96c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm0-96c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm96-192c13.3 0 24 10.7 24 24s-10.7 24-24 24-24-10.7-24-24 10.7-24 24-24zm128 368c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-96c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-96c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16z'/%3e%3c/svg%3e" alt="Image" width="40" height="40"></td>
          </tr>
          <tr>
            <td class="tg-y698">Antiguedad en el puesto</td>
            <td class="tg-0pky">
              <input type="text" name="result_13" value="" width="20px" size="3px"/></td>
            <td class="tg-0pky">Años</td>
            <td class="tg-0pky">
              <input type="text" name="result_14" value="" width="20px" size="3"/></td>
            <td class="tg-0pky">Meses</td>
            <td class="tg-0pky"> 
                <select name="mes">
                  <option value="1">1 MES</option>
                  <option value="2">2 MESES</option>
                  <option value="3">3 MESES</option>
                  <option value="4">5 MESES</option>
                  <option value="5">6 MESES</option>
                  <option value="6">7 MESES</option>
                  <option value="7">8 MESES</option>
                  <option value="8">9 MESES</option>
                  <option value="9">10 MESES</option>
                  <option value="10">11 MESES</option>
                  <option value="11">12 MESES</option>
                </select></td>
            <td class="tg-0pky"></td>
          </tr>
          <tr>
            <td class="tg-y698">Medidas de Control<br></td>
            <td class="tg-0pky" colspan="5">
              <input type="checkbox" name="c_mc_ing" value="In" />Ingenieriles<br />
              <input type="checkbox" name="c_mc_adm" value="Ad" />Administrativas<br />
              <input type="checkbox" name="c_mc_epp" value="ep" />Elementos de proteccion personal<br /></td>
          </tr>
          <tr>
            <td class="tg-y698">¿Utilización elementos de protección personal?</td>
            <td class="tg-0pky" colspan="5">
              <input type="radio" name="r_preg2_proteccion" value="siempre" />Simpre<br />
              <input type="radio" name="r_preg2_proteccion" value="aveces" />A veces<br />
              <input type="radio" name="r_preg2_proteccion" value="nunca" /> Nunca<br /></td>
          </tr>
          <tr>
            <td class="tg-hkp2" colspan="6">FAVOR INDIQUE EL TIPO DE ELEMENTOS DE PROTECCIÓN QUE UTILIZA  <img src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'%3e%3cpath fill='%23ffffff' d='M480 288c0-80.25-49.28-148.92-119.19-177.62L320 192V80a16 16 0 0 0-16-16h-96a16 16 0 0 0-16 16v112l-40.81-81.62C81.28 139.08 32 207.75 32 288v64h448zm16 96H16a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h480a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16z'/%3e%3c/svg%3e" alt="Image" width="40" height="40"></td>
          </tr>
          <tr>
            <td class="tg-y698">EPP</td>
            <td class="tg-y698">TIPO</td>
            <td class="tg-y698">MARCA</td>
            <td class="tg-y698">MODELO</td>
            <td class="tg-y698" colspan="2">OBSERVACIONES</td>
          </tr>
          <tr>
            <td class="tg-y698">PROTECTOR RESPIRATORIO</td>
            <td class="tg-0pky">
              <input type="radio" name="r_preg3_medio" value="medio" />Medio Rostro<br />
              <input type="radio" name="r_preg3_medio" value="rostro" />Rostro<br />
              <input type="radio" name="r_preg3_medio" value="completo" /> Completo<br />
              <input type="radio" name="r_preg3_medio" value="aire" /> Aire Asistido<br /></td>
            <td class="tg-0pky">
              <input type="text" name="result_15" value="" width="20px"/></td>
            <td class="tg-0pky">
              <input type="text" name="result_16" value="" width="20px"/></td>
            <td class="tg-0pky" colspan="2">
              <input type="text17" name="result_17" value="" width="20px"/></td>
          </tr>
          <tr>
            <td class="tg-y698">BUZO PILOTO</td>
            <td class="tg-0pky"><input type="text" name="result_18" value="" width="20px"/></td>
            <td class="tg-0pky"><input type="text" name="result_19" value="" width="20px"/></td>
            <td class="tg-0pky"><input type="text" name="result_20" value="" width="20px"/></td>
            <td class="tg-0pky" colspan="2">
              <input type="text" name="result_21" value="" width="20px"/></td>
          </tr>
          <tr>
            <td class="tg-y698">ESCLAVINA</td>
            <td class="tg-0pky"><input type="text" name="result_22" value="" width="20px"/></td>
            <td class="tg-0pky"><input type="text" name="result_23" value="" width="20px"/></td>
            <td class="tg-0pky"><input type="text" name="result_24" value="" width="20px"/></td>
            <td class="tg-0pky" colspan="2">
              <input type="text" name="result_25" value="" width="20px"/></td>
          </tr>
          <tr>
            <td class="tg-y698">GUANTES</td>
            <td class="tg-0pky"><input type="text" name="result_26" value="" width="20px"/></td>
            <td class="tg-0pky"><input type="text" name="result_27" value="" width="20px"/></td>
            <td class="tg-0pky"><input type="text" name="result_28" value="" width="20px"/></td>
            <td class="tg-0pky" colspan="2">
              <input type="text" name="result_29" value="" width="20px"/></td>
          </tr>
          <tr>
            <td class="tg-y698">OTRO</td>
            <td class="tg-0pky"><input type="text" name="result_30" value="" width="20px"/></td>
            <td class="tg-0pky"><input type="text" name="result_31" value="" width="20px"/></td>
            <td class="tg-0pky"><input type="text" name="result_32" value="" width="20px"/></td>
            <td class="tg-0pky" colspan="2">
              <input type="text" name="result_33" value="" width="20px"/></td>
          </tr>
          <tr>
            <td class="tg-hkp2" colspan="6">PROTECCIÓN RESPIRATORIA  <img src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'%3e%3cpath fill='%23ffffff' d='M464 480H48c-26.51 0-48-21.49-48-48V80c0-26.51 21.49-48 48-48h416c26.51 0 48 21.49 48 48v352c0 26.51-21.49 48-48 48zM128 120c-22.091 0-40 17.909-40 40s17.909 40 40 40 40-17.909 40-40-17.909-40-40-40zm0 96c-22.091 0-40 17.909-40 40s17.909 40 40 40 40-17.909 40-40-17.909-40-40-40zm0 96c-22.091 0-40 17.909-40 40s17.909 40 40 40 40-17.909 40-40-17.909-40-40-40zm288-136v-32c0-6.627-5.373-12-12-12H204c-6.627 0-12 5.373-12 12v32c0 6.627 5.373 12 12 12h200c6.627 0 12-5.373 12-12zm0 96v-32c0-6.627-5.373-12-12-12H204c-6.627 0-12 5.373-12 12v32c0 6.627 5.373 12 12 12h200c6.627 0 12-5.373 12-12zm0 96v-32c0-6.627-5.373-12-12-12H204c-6.627 0-12 5.373-12 12v32c0 6.627 5.373 12 12 12h200c6.627 0 12-5.373 12-12z'/%3e%3c/svg%3e" alt="Image" width="40" height="40"></td>
          </tr>
          <tr>
            <td class="tg-0pky" colspan="3">Se realizó prueba de ajustes de respirador (Portacount)</td>
            <td class="tg-0pky">
                <input type="radio" name="r_respirador" value="si" /> Sí<br />
                <input type="radio" name="r_respirador" value="no" /> No<br /></td>
            <td class="tg-0pky">Fecha</td>
            <td class="tg-0pky"><input id="FECHA9" name="fecha_ini9" width="100px"  width="20px"  /></td>
          </tr>
          <tr>
            <td class="tg-0pky">Resultado Marca:</td>
            <td class="tg-0pky">
              <input type="text" name="t_resulMarca" value="" width="20px"/></td>
            <td class="tg-0pky">Talla indicada</td>
            <td class="tg-c1ow" colspan="0">
              <input type="radio" name="r_talla" value="s" />S 
              <input type="radio" name="r_talla" value="m" />M 
              <input type="radio" name="r_talla" value="l" />L
                
            </td>
          </tr>
          <tr>
            <td class="tg-0pky" colspan="3">¿Utiliza el protector indicado en resultado de prueba?</td>
            <td class="tg-0pky" colspan="3"></td>
          </tr>
          <tr>
            <td class="tg-hkp2" colspan="6">CAPACITACIÓN <img src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 512'%3e%3cpath fill='%23ffffff' d='M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4zm323-128.4l-27.8-28.1c-4.6-4.7-12.1-4.7-16.8-.1l-104.8 104-45.5-45.8c-4.6-4.7-12.1-4.7-16.8-.1l-28.1 27.9c-4.7 4.6-4.7 12.1-.1 16.8l81.7 82.3c4.6 4.7 12.1 4.7 16.8.1l141.3-140.2c4.6-4.7 4.7-12.2.1-16.8z'/%3e%3c/svg%3e" alt="Image" width="40" height="40"></td>
          </tr>
          <tr>
            <td class="tg-y698" colspan="6">¿Recibió capacitación específíca para el control de exposición a ARSÉNICO y Protección respiratoria?</td>
          </tr>
          <tr>
            <td class="tg-0pky">
                <input type="radio" name="r_capa" value="si" /> Sí<br />
                <input type="radio" name="r_capa" value="no" /> No<br /></td>
            <td class="tg-0pky">Fecha</td>
            <td class="tg-0pky"><input id="FECHA10" name="fecha_ini10" width="220px"  width="20px"  /></td>
            <td class="tg-0pky" colspan="2">Organismo Capacitador</td>
            <td class="tg-0pky"></td>
          </tr>
          <tr>
            <td class="tg-0pky">Existe evidencia de asistencia</td>
            <td class="tg-0pky"></td>
            <td class="tg-dvpl" colspan="3">Registro</td>
            <td class="tg-0pky"></td>
          </tr>
          <tr>
            <td class="tg-hkp2" colspan="6">ANTECEDENTES EXPOSICIÓN RECIENTE  <img src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'%3e%3cpath fill='%23ffffff' d='M464%2c128H272L208%2c64H48A48%2c48%2c0%2c0%2c0%2c0%2c112V400a48%2c48%2c0%2c0%2c0%2c48%2c48H464a48%2c48%2c0%2c0%2c0%2c48-48V176A48%2c48%2c0%2c0%2c0%2c464%2c128ZM359.5%2c296a16%2c16%2c0%2c0%2c1-16%2c16h-64v64a16%2c16%2c0%2c0%2c1-16%2c16h-16a16%2c16%2c0%2c0%2c1-16-16V312h-64a16%2c16%2c0%2c0%2c1-16-16V280a16%2c16%2c0%2c0%2c1%2c16-16h64V200a16%2c16%2c0%2c0%2c1%2c16-16h16a16%2c16%2c0%2c0%2c1%2c16%2c16v64h64a16%2c16%2c0%2c0%2c1%2c16%2c16Z'/%3e%3c/svg%3e" alt="Image" width="40" height="40"></td>
          </tr>
          <tr>
            <td class="tg-y698">Detalle las tareas realizadas en su ultimo Turno</td>
            <td class="tg-yj5y" colspan="3">Área</td>
            <td class="tg-y698" colspan="2">EPP Utilizados y/o comentarios</td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="3"></td>
            <td class="tg-0pky" colspan="2"></td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="3"></td>
            <td class="tg-0pky" colspan="2"></td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="3"></td>
            <td class="tg-0pky" colspan="2"></td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="3"></td>
            <td class="tg-0pky" colspan="2"></td>
          </tr>
          <tr>
            <td class="tg-hkp2" colspan="6">CONDUCTAS Y MEDIDAS HIGIÉNICAS <img src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 576 512'%3e%3cpath fill='%23ffffff' d='M519.442 288.651c-41.519 0-59.5 31.593-82.058 31.593C377.409 320.244 432 144 432 144s-196.288 80-196.288-3.297c0-35.827 36.288-46.25 36.288-85.985C272 19.216 243.885 0 210.539 0c-34.654 0-66.366 18.891-66.366 56.346 0 41.364 31.711 59.277 31.711 81.75C175.885 207.719 0 166.758 0 166.758v333.237s178.635 41.047 178.635-28.662c0-22.473-40-40.107-40-81.471 0-37.456 29.25-56.346 63.577-56.346 33.673 0 61.788 19.216 61.788 54.717 0 39.735-36.288 50.158-36.288 85.985 0 60.803 129.675 25.73 181.23 25.73 0 0-34.725-120.101 25.827-120.101 35.962 0 46.423 36.152 86.308 36.152C556.712 416 576 387.99 576 354.443c0-34.199-18.962-65.792-56.558-65.792z'/%3e%3c/svg%3e" alt="Image" width="40" height="40"></td>
          </tr>
          <tr>
            <td class="tg-yj5y">CONDUCTAS E INSTALACIONES</td>
            <td class="tg-yj5y">SELECCION</td>
            <td class="tg-yj5y" colspan="2">LUGAR</td>
            <td class="tg-yj5y" colspan="2">OBSERVACIONES</td>
          </tr>
          <tr>
            <td class="tg-y698">¿INGIERE ALIMENTOS EN TERRENO?</td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_34" value="" width="20px"/></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_35" value="" width="20px"/></td>
          </tr>
          <tr>
            <td class="tg-y698">¿TOMA LIQUIDOS PARA HIDRATARSE EN TERRNO?</td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_36" value="" width="20px"/></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_37" value="" width="20px"/></td>
          </tr>
          <tr>
            <td class="tg-y698">¿SE LAVA LAS MANOS Y CARA ANTES DE INGERIR ALIMENTOS O LIQUIDOS?</td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_38" value="" width="20px"/></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_39" value="" width="20px"/></td>
          </tr>
          <tr>
            <td class="tg-fymr" colspan="6">TABAQUISMO</td>
          </tr>
          <tr>
            <td class="tg-y698">¿FUMA EN TERRENO?</td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_40" value="" width="20px"/></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_41" value="" width="20px"/></td>
          </tr>
          <tr>
            <td class="tg-y698">¿BEBE CAFE?</td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_42" value="" width="20px"/></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_43" value="" width="20px"/></td>
          </tr>
          <tr>
            <td class="tg-y698">¿DISPONE DE SALA DE CAMBIO?</td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_44" value="" width="20px"/></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_45" value="" width="20px"/></td>
          </tr>
          <tr>
            <td class="tg-y698">¿SI LA RESPUESTA FUE SI, TIENE ÁREA LIMPIA Y SUCIA?</td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_46" value="" width="20px"/></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_47" value="" width="20px"/></td>
          </tr>
          <tr>
            <td class="tg-y698">¿CUENTA CON DOBLE DE CASILLERO?</td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_48" value="" width="20px"/></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_49" value="" width="20px"/></td>
          </tr>
          <tr>
            <td class="tg-y698">¿SI NO DISPONE DE CASA DE CAMBIO, DONDE SE CAMBIA?</td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_50" value="" width="20px"/></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_51" value="" width="20px"/></td>
          </tr>
          <tr>
            <td class="tg-y698">¿UBICACIÓN DE SU CASILLERO?</td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_52" value="" width="20px"/>/td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_53" value="" width="20px"/></td>
          </tr>
          <tr>
            <td class="tg-y698">¿DISPONE DE ROPA LIMPIA DE TRABAJO (TODOS LOS DIAS)?</td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_54" value="" width="20px"/></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_55" value="" width="20px"/></td>
          </tr>
          <tr>
            <td class="tg-y698">¿SE CAMBIA DE ROPA DE TRABAJO TODOS LOS DIAS?</td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_56" value="" width="20px"/></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_57" value="" width="20px"/></td>
          </tr>
          <tr>
            <td class="tg-y698">¿SE DUCHA TODOS LOS DIAS EN FAENA AL TERMINO JORNADA?</td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_58" value="" width="20px"/></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_59" value="" width="20px"/></td>
          </tr>
          <tr>
            <td class="tg-y698">¿POSTERIOR A LA DUCHA USA CREMAS DE CARA Y/O MANOS?</td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_60" value="" width="20px"/></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_61" value="" width="20px"/></td>
          </tr>
          <tr>
            <td class="tg-y698">¿ANTES DE IR ALMORZAR, SE CAMBIA DE ROPA?</td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_62" value="" width="20px"/></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_63" value="" width="20px"/></td>
          </tr>
          <tr>
            <td class="tg-y698">¿ANTES DE IR ALMORZAR, SE REALIZA ASEO DE MANOS Y CARA?</td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_64" value="" width="20px"/></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_65" value="" width="20px"/></td>
          </tr>
          <tr>
            <td class="tg-y698">¿SI SE ENCUENTRA MUY SUCIO, SE BAÑA?</td>
            <td class="tg-0pky">            <input type="text" name="result_66" value="" width="20px"/></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_67" value="" width="20px"/></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_68" value="" width="20px"/></td>
          </tr>
          <tr>
            <td class="tg-y698">¿SU PROTECTOR RESPIRATORIO, ES ASEADO DIARIAMENTE?</td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_69" value="" width="20px"/></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_70" value="" width="20px"/></td>
          </tr>
          <tr>
            <td class="tg-y698">¿DONDE ALMACENA SU PROTECTOR RESPIRATORIO DURANTE EL DESCANSO?</td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_71" value="" width="20px"/></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_72" value="" width="20px"/></td>
          </tr>
          <tr>
            <td class="tg-y698">¿DONDE ALMACENA SU PROTECTOR RESPIRATORIO DURANTE LA COLACIÓN?</td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_73" value="" width="20px"/></td>
            <td class="tg-0pky" colspan="2"><input type="text" name="result_74" value="" width="20px"/></td>
          </tr>
          <tr>
            <td class="tg-hkp2" colspan="6">CONCLUSIÓN <img src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'%3e%3cpath fill='%23ffffff' d='M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z'/%3e%3c/svg%3e" alt="Image" width="40" height="40"></td>
          </tr>
          <tr>
            <td class="tg-0pky" colspan="6"><input type="text" name="result_75" value="" size="200" x /></td>
          </tr>
        </table>
            <hr>



            <input type="submit" class="btn btn-success" value="Enviar encuesta">
</form>
</div>



</div>
@endsection