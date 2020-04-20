<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script> 
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"  ></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"  ></script>

    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script src="https://unpkg.com/gijgo@1.9.13/js/messages/messages.es-es.js" type="text/javascript"></script>
    
    {{-- chartsjs --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" > 
            
            <div class="container-fluid">
                
                <a class="navbar-brand" href="{{ url('/') }}">
                    
                   <img src="https://d1hbpr09pwz0sk.cloudfront.net/logo_url/codelco-ed1ca9ae" width="30" height="30" alt=""> {{ config('app.name','Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    @auth
                        @if (Auth::user()->roles_id == 1)
                        {{-- menu roles_id --}}
                            <ul class="navbar-nav mr-auto">
      
                                <li> 
                                    <a class="nav-link" href="{{ route('prueba') }}">Carga Lista <span class="sr-only">(current)</span></a>
                                </li>
                                
                                <li>
                                    <a class="nav-link" href="{{ route('prueba') }}">Realizado el día de Hoy <span class="sr-only">(current)</span></a>
                                </li>

                                <li>
                                    <a class="nav-link" href="{{ route('reevaluaciones') }}">Reevaluaciones <span class="sr-only">(current)</span></a>
                                </li>                                

                                
                            </ul>                        
                        @endif

                        @if (Auth::user()->roles_id == 4)
                        {{-- menu roles_id --}}
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <li><a class="nav-link" href="{{ route('drlista') }}">Lista Exámenes <span class="sr-only">(current)</span></a></li>
                                    <li><a class="nav-link" href="{{ route('buscarResultados') }}">Visualizar Resultados<span class="sr-only">(current)</span></a></li>
                                </li>
                            </ul>                        
                        @endif     

                        @if (Auth::user()->roles_id == 5)
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('dashboard') }}">Panel de indicadores <span class="sr-only">(current)</span></a>
                                </li>
                            </ul>
                        @endif
                    @endauth
                   
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">    
    

</body>
</html>
