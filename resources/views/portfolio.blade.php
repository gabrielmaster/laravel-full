@extends('layout')

@section('title','Portfolio')

@section('content')

<h1>Portfolio</h1>

<ul>

    @forelse($portfolio as $item)
<li>{{ $item['title'] }} <small>{{ $loop->first ? "El primero" :''}}</small></li>
    @empty
        <li>No hay Proyectos para mostrar</li>
    @endforelse

</ul>

@endsection
