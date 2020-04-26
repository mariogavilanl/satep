
<style>

.resultados {

    width: 100%;
    
}

.resultados tr {
    border-style: solid;
    border-width: 2px;
    
    border-bottom: 1px;
    border-bottom-style: solid;
    border-bottom-width: 2px;
}


</style>

<br>
<br>
<hr>
<table>
    <tr>
        <td>
            <p style="text-decoration: underline" >ARSENICO</p> 
        </td>
    </tr>
</table>

<table class="resultados">


    <tr>
        <td>Fecha Laboratorio </td>
        <td>{{ Carbon\Carbon::parse($examen->as_FECHALAB1)->format('d/m/Y') }}</td>

    </tr>
    <tr>
        <td>Fecha Muestra </td>
        <td>{{ Carbon\Carbon::parse($examen->as_FECHAMUESTRA)->format('d/m/Y') }}</td>

    </tr>
    <tr>
        <td>UG/G </td>
        <td>{{ $examen->as_UG_G }}</td>

    </tr>

    <tr>
        <td>Estado</td>
        <td>{{ $examen->as_estado }}</td>
    </tr>
</table>