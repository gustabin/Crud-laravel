@extends('plantilla')

@section('seccion')
<h1>Editar nota {{ $nota->id }}</h1>

@if (session('mensaje'))
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
@endif

<form action="{{ route('notas.update', $nota->id) }}" method="POST">
    @method('PUT')
    @csrf

    @error('nombre')
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        El nombre es requerido
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @enderror

    @error('descripcion')
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        La descripción es requerida         
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @enderror

    <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{ $nota->nombre }}">
    <input type="text" name="descripcion" placeholder="Descripción" class="form-control mb-2" value="{{ $nota->descripcion }}">
    <button class="btn btn-warning btn-block" type="submit">Editar</button>
</form>

@endsection