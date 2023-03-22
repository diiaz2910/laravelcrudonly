@extends('layouts.plantilla')

@section('title', 'Create')

@section('content')
<h1>En esta pagina podras crear un curso </h1>
<a href="{{ route('cursos.index') }}">Regresar a la pagina principal</a>

        <form action="{{route('cursos.store')}}" method="POST">

            @csrf

            <label>
                Nombre:
                <br>
                <input type="text" name="name" value="{{ old('name') }}">
            </label>

            @error('name')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror

            <br>
            <label>
                Descripcion:
                <br>
                <textarea name="descripcion" rows="5">{{ old('descripcion') }}</textarea>
            </label>

            @error('descripcion')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror

            <br>
            <label>
                categoria:
                <br>
                <input type="text" name="categoria" value="{{ old('categoria') }}">
            </label>

            @error('categoria')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror

            <br><br>
            <button type="submit">Enviar</button>
        </form>
    
    

@endsection

