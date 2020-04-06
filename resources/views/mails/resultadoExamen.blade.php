<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>resultado examen</title>
</head>
<body>
    
    
    
    <table> 
        <tr>
            <td>Doctor</td>
            <td> {{ Auth::user()->name }}</td>
           
        </tr>

        <tr>
            <td>
                Observacion
            </td>
            <td>
                {{$observacion}}
            </td>
        </tr>

    </table>

    <table>

        @foreach ($resultados as $item)
            <tr> 
            <td>{{ (key($item)) }}</td>
            <td>{{ $item[(key($item))] }}</td>    
            </tr>
        @endforeach


    </table>

</body>
</html>