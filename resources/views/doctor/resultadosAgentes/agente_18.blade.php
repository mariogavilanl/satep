{{-- soy genial--}}
<div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Resultado {{ ucwords(strtolower($data->agente->glosaAgente)) }}
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
       <table class="table table-primary" style="font-size: 0.7rem;">
           <tr>
            <td class="tdBold">FECHA ENVIO LABORATORIO</td>
            <td>{{ 
            Carbon\Carbon::parse($data->as_FECHALAB1)->day . "/".
            Carbon\Carbon::parse($data->as_FECHALAB1)->month . "/".
            Carbon\Carbon::parse($data->as_FECHALAB1)->year
             }}</td>
            <td class="tdBold">FECHA MUESTRA</td>
            <td>{{ 
            Carbon\Carbon::parse($data->as_FECHAMUESTRA)->day . "/".
            Carbon\Carbon::parse($data->as_FECHAMUESTRA)->month . "/".
            Carbon\Carbon::parse($data->as_FECHAMUESTRA)->year
             }}</td>
            
              <td class="tdBold">ESTADO</td>
              <td>{{ $data->as_estado }}</td>

              <td class="tdBold">UG/G</td>
              <td>{{ $data->as_UG_G }}</td>

              <td class="tdBold">FECHA ENVIO CONTRA MUESTRA LABORATORIO</td>
              <td>{{ 
              Carbon\Carbon::parse($data->as_FECHALAB2)->day . "/".
              Carbon\Carbon::parse($data->as_FECHALAB2)->month . "/".
              Carbon\Carbon::parse($data->as_FECHALAB2)->year
               }}</td>
              <td class="tdBold">FECHA CONTRA MUESTRA</td>
              <td>{{ 
              Carbon\Carbon::parse($data->as_FECHA_CONTRAMUESTRA)->day . "/".
              Carbon\Carbon::parse($data->as_FECHA_CONTRAMUESTRA)->month . "/".
              Carbon\Carbon::parse($data->as_FECHA_CONTRAMUESTRA)->year
               }}</td>
              
                <td class="tdBold">ESTADO CONTRAMUESTRA</td>
                <td>{{ $data->as_estado1 }}</td>
  
                <td class="tdBold">UG/G CONTRAMUESTRA</td>
                <td>{{ $data->as_UG_G_CONTRAMUESTRA }}</td>

       </tr>
       </table>
      </div>
    </div>
  </div>