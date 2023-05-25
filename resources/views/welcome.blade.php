<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container">

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Azienda</th>
                <th scope="col">Stazione di partenza</th>
                <th scope="col">Stazione di arrivo</th>
                <th scope="col">orario di partenza</th>
                <th scope="col">orario di arrivo</th>
                <th scope="col">codice treno</th>
                <th scope="col">numero carrozze</th>
                <th scope="col">in orario</th>
                <th scope="col">cancellato</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                    <th scope="row">{{$train->id}}</th>
                    <td>{{$train->azienda}}</td>
                    <td>{{$train->stazione_di_partenza}}</td>
                    <td>{{$train->stazione_di_arrivo}}</td>
                    <td>{{$train->orario_di_partenza}}</td>
                    <td>{{$train->orario_di_arrivo}}</td>
                    <td>{{$train->codice_treno}}</td>
                    <td>{{$train->numero_carrozze}}</td>
                    <td>@if ($train->in_orario === 1)
                            @php
                                $train->in_orario = 'true'
                            @endphp
                        @else
                            @php
                                $train->in_orario ='false' 
                             @endphp          
                        @endif{{$train->in_orario}}
                    </td>
    
                    <td>@if ($train->cancellato === 1)
                            @php
                                $train->cancellato = 'true'
                            @endphp
                        @else
                            @php
                                $train->cancellato ='false' 
                             @endphp          
                        @endif{{$train->cancellato}}
                    </td>
                    </tr>   
                @endforeach
        
            </tbody>
          </table>
    </div>
</body>

</html>