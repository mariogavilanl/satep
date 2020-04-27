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
.tg .tg-qc0u{background-color:#efefef;border-color:inherit;font-size:10px;text-align:center;vertical-align:top}
.tg .tg-y698{background-color:#efefef;border-color:inherit;text-align:left;vertical-align:top}
.tg .tg-8btw{background-color:#efefef;border-color:inherit;font-size:12px;text-align:center;vertical-align:top}
</style>
<table class="tg" style="undefined;table-layout: fixed; width: 700px">
<colgroup>
<col style="width: 101px">
<col style="width: 408px">
<col style="width: 170px">
</colgroup>
  <tr>
    <th class="tg-y698"><img src="https://d1hbpr09pwz0sk.cloudfront.net/logo_url/codelco-ed1ca9ae" alt="Image" width="80px" height="80px"></th>
    <th class="tg-qc0u"><span style="font-weight:bold">SATEP DIVISIÓN CHUQUICAMATA</span><br><span style="font-weight:bold">NOTIFICACIÓN DE RESULTADO DE EXÁMENES</span><br><span style="font-weight:bold">LEY 16.744</span><br><span style="font-weight:bold">ART 72 LETRA A D.S 101</span><br><span style="font-weight:bold">F-2 SATEP</span><br></th>
    <th class="tg-8btw"><br><span style="font-weight:bold">SATEP DCH</span><br><span style="font-weight:bold"></span><span style="font-weight:bold"></span><br><br></th>
  </tr>
</table>
<p>

</p>

<style>
table {
  width:100%;
}
table, th, td {
  border: 0px solid ;
  border-collapse: collapse;
}
th, td {
  padding: 13px;
  text-align: left;
}
table#t01 tr:nth-child(even) {
  background-color: #fff;
}
table#t01 tr:nth-child(odd) {
 background-color: #eee;
}
table#t01 th {
  background-color: #e6f2ff;
  color: black;
}
</style>
</head>
<body>

<table id="t01">

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
<div align="right"> <img src="https://lh3.googleusercontent.com/jiM5v1UoRDtwT_vKgkCqlirExH0-AcEBi2RLg6GJ2UzwrVYtgiOKKHMyvWVlYU_dM2h92GE=s87" alt="Image" width="140px" height="140px" > </div>
<footer>



    <table>
           <thead>
           <body>
               
      
         
            
        <!-- <p text-align="center">text-align="center">Dirección:Villa turi Casa 67 </p> 
            
        <p text-align="center">text-align="center">Rut:61.707.000-K</p> 
            
        <p text-align="center">text-align="center">Telefono:552-329736</p>  -->
      
            </body>
            </thead>
            </table>

            <p text-align="center">Administración Delegada Codelco División Chuquicamata &copy; <?php echo date("Y");?> </p> 
            
</footer>