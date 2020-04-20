@extends('layouts.app')

@section('content')

<table> 

    <thead>
      <tr>
        <th>nombre paciente</th>
        <th>agente</th>
        <th>fecha realización</th>
      </tr>
        
    </thead>
<tbody>
    

        @foreach ($lista as $asd)
        <tr>
            <td>
                {{$asd->primerNombre $asd->primerApellido $asd->segundoApellido }}
            </td>

            <td>
                {{$asd->glosaAgente}}
            </td>

            <td>
                {{$asd->created_at}}
            </td>
        </tr>
            @endforeach

</tbody>

</table>




@endsection


