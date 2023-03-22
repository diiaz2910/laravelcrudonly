@extends('layouts/plantilla')

@section('title', 'Inicio')

@section('content')

    <h1>Bienvenido a la principal de cursos</h1>

    <a href="{{ route('cursos.create') }}">Crear Cursos</a>

    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{ route('cursos.show', $curso) }}">{{ $curso->name }}</a>
            </li>
        @endforeach
    </ul>

    {{ $cursos->links() }}
    
@endsection