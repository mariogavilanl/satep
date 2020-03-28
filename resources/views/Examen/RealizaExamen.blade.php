@extends('layouts.app')

@section('content')


@switch(($examens->agentes_id == null ? 17 : $examens->agentes_id ))
        @case(1)
           
            @include('prueba.ex_vigilante_privado', ['title' => ''])
            @break

        @case(2)

            @include('prueba.ex_ruido', ['title' => ''])
            @break
        @case(6)

            @include('prueba.ex_aa', ['title' => ''])
            @break

        @case(9)

            @include('prueba.ex_af', ['title' => ''])
            @break

        @case(12)

            @include('prueba.ex_ag', ['title' => ''])
            @break 
            
        @case(18)

            @include('prueba.ex_arsenico', ['title' => ''])
            @break 

        @case(5)

            @include('prueba.ex_citoestaticos', ['title' => ''])
            @break 

        @case(4)

            @include('prueba.ex_formald', ['title' => ''])
            @break 

        @case(18)

            @include('prueba.ex_oe', ['title' => ''])
            @break 

        @case(16)

            @include('prueba.ex_oel', ['title' => ''])
            @break 
            
        @case(15)

            @include('prueba.ex_oep', ['title' => ''])
            @break 

        @case(14)

            @include('prueba.ex_osc', ['title' => ''])
            @break 

        @case(8)

            @include('prueba.ex_plomo', ['title' => ''])
            @break 

        @case(10)

            @include('prueba.ex_rad1', ['title' => ''])
            @break 
        @case(11)

            @include('prueba.ex_rad2y3', ['title' => ''])
            @break 

        @case(7)

            @include('prueba.ex_so2', ['title' => ''])
            @break
            
        @case(3)

            @include('prueba.ex_silice', ['title' => ''])
            @break 

            @case(13)

            @include('prueba.ex_ec', ['title' => ''])
            @break 

            
        @default

            @include('prueba.ex_co', ['title' => ''])
        @break
            
    @endswitch

@endsection