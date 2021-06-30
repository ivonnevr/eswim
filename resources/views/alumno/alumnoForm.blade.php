@extends('layouts.basico')
@section('contenido')
    <h1>Formulario de alumnos</h1>

    <p>
        <a href="{{ route('alumno.index') }}">Listado de alumnos</a>
    </p>

    @if(isset($alumno))
        <form action="{{ route('alumno.update', $alumno) }}" method="POST">
            @method('PATCH')
    @else
        <form action="{{ route('alumno.store') }}" method="POST">
    @endif

        @csrf
        <label for="nombre">Nombre(s):</label>
        <input type="text" name="nombre" value="{{ $alumno->nombre ?? '' }}">
        <br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" value="{{ $alumno->apellidos ?? '' }}">
        <br>

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" value="{{ $alumno->direccion ?? '' }}">
        <br>

        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" value="{{ $alumno->telefono ?? '' }}">
        <br>

        <label for="fechanac">Fecha de nacimiento:</label>
        <input type="date" name="fechanac" value="{{ $alumno->fechanac ?? '' }}">
        <br>

        <label for="inscripcion">Fecha de inscripción:</label>
        <input type="date" name="inscripcion" value="{{ $alumno->inscripcion ?? '' }}">
        <br>

        <input type="submit" value="Guardar">

    </form>

@endsection