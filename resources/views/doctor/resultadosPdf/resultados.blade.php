<style>
    .resumen td {

        padding-left: 10px;
        padding-right: 10px;

    }

    .resumen {

    width: 100%;
    border-style: solid;
    border-width: 2px;

    }

    .resumen * {

    border-style: solid;
    border-width: 2px;

    }


    footer {
                position: fixed; 
                bottom: 0cm; 
                left: 0cm; 
                right: 0cm;
                height: 2cm;

                /** Extra personal styles **/
                background-color: #009aac;
                color: white;
                text-align: center;
                line-height: 1.5cm;
            }
</style>


<style type="text/css">
    .tg  {border:none;border-collapse:collapse;border-spacing:0;}
    .tg td{border-style:solid;border-width:0px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;
      padding:10px 5px;word-break:normal;}
    .tg th{border-style:solid;border-width:0px;font-family:Arial, sans-serif;font-size:14px;font-weight:normal;
      overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg .tg-nrw1{font-size:10px;text-align:center;vertical-align:top}
    .tg .tg-0lax{text-align:left;vertical-align:top}
    .tg .tg-rg0h{font-size:12px;text-align:center;vertical-align:top}
    </style>
    <table class="tg" style="undefined;table-layout: fixed; width: 763px">
    <colgroup>
    <col style="width: 157px">
    <col style="width: 436px">
    <col style="width: 170px">
    </colgroup>
      <tr>
        <th class="tg-0lax"><img src="https://d1hbpr09pwz0sk.cloudfront.net/logo_url/codelco-ed1ca9ae"  alt=""  width="80px"  height="80PX"></th>
        <th class="tg-nrw1"><span style="font-weight:bold">SATEP DIVISIÓN CHUQUICAMATA</span><br><span style="font-weight:bold">NOTIFICACIÓN DE RESULTADO DE EXÁMENES</span><br><span style="font-weight:bold">LEY 16.744</span><br><span style="font-weight:bold">ART 72 LETRA A D.S 101</span><br><span style="font-weight:bold">F-2 SATEP</span><br></th>
        <th class="tg-rg0h"><br><span style="font-weight:bold">DSATEP</span><br><span style="font-weight:bold">/N° 100</span>2/1<span style="font-weight:bold">9</span><br><br></th>
      </tr>
    </table>

<table class="resumen">


        <tr>
            <td> Nombre : {{$examen->primerNombre }} {{$examen->segundoNombre }} {{$examen->primerApellido }} {{$examen->segundoApellido }} </td>
            <td> SAP: {{$examen->nroSap }} </td>  
            <td> Rut: {{$examen->rut }}</td>
        </tr>
  
        <tr>
            <td>Gerencia:  {{$examen->gerencia }}</td>  
            <td>Cargo:  {{$examen->cargo }}</td>  
            <td>Fecha:  {{ Carbon\Carbon::parse($examen->created_at)->format('d/m/Y') }}</td>
        </tr>

</table>

@switch($examen->agentes_id)

    @case(18)
        @include('doctor.resultadosPdf.agentes.18')
        @break

    @case(2)
        
        @break
    @default
        
@endswitch

<footer>
    Conchetumare &copy; <?php echo date("Y");?> 
</footer>