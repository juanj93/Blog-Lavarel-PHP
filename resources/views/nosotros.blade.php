@extends('plantilla')

@section('seccion')

<h1>Este es el equipo de trabajo</h1>

@foreach($equipo as $item)

<a href="{{ route('nosotros',$item)}}" class="h4 text-danger">{{$item}}</a><br>

@endforeach

<br>
<br>

@if(!empty($nombre))

    @switch($nombre)

        @case($nombre=='Ignacio')
        <h2>El nomnre es {{ $nombre }}</h2>
        <p>
        {{$nombre}} es un miembro!!!1
        
        </p>
        @break

        @case($nombre=='Juan')
        <h2>El nomnre es {{ $nombre }}</h2>
        <p>
        {{$nombre}} es un miembro!!!1
        
        </p>
        @break

        @case($nombre=='EsteMen')
        <h2>El nomnre es {{ $nombre }}</h2>
        <p>
        {{$nombre}} es un miembro!!!1
        
        </p>
        @break
    @endswitch

@endif

@endsection