@extends('layout')

@section('title','Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4 text-primary">Desarrollo web</h1>
            <p class="lead text-secondary">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptatum nemo ad quam odio doloremque aspernatur illum, sequi doloribus! Quis tempore illo saepe necessitatibus nesciunt accusamus rem soluta dolore earum.
            </p>
        <a class="btn btn-lg btn-block btn-primary"
        href="{{ route('contact')}}">Contáctame</a>
        <a class="btn btn-lg btn-block btn-outline-primary"
        href="{{ route('projects.index')}}">Portafolio</a>
        </div>
    </div>
</div>
@endsection
