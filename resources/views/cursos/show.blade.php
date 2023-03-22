@extends('layouts/plantilla')

@section('title', 'Bienvenido al curso de ' . $curso->name) 
{{-- Se puede concatenar variables --}}

@section('content')

<h1>Bienvenido al curso {{ $curso->name }}</h1>
<a href="{{ route('cursos.index') }}">Volver a cursos</a>
<a href="{{ route('cursos.edit', $curso) }}">|| Editar Curso</a>
<p><strong>Categoria: </strong>{{ $curso->categoria }}</p>
    <p><span><i>Descripcion:</i> </span>{{ $curso->descripcion }}</p>

<form action="{{ route('cursos.destroy', $curso )}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>
</form>
@endsection

