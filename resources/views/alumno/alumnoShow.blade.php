@extends('layouts.basico')
@section('contenido')
    <h1>Detalle del alumno</h1>

    <p>
        <a href="{{ route('alumno.index') }}">Listado de alumnos</a>
    </p>

    <table border='1'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre(s)</th>
                <th>Apellidos</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Fecha de nacimiento</th>
                <th>Fecha de inscripción</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $alumno->id }}</td>
                <td>{{ $alumno->nombre }}</td>
                <td>{{ $alumno->apellidos }}</td>
                <td>{{ $alumno->direccion }}</td>
                <td>{{ $alumno->telefono }}</td>
                <td>{{ $alumno->fechanac }}</td>
                <td>{{ $alumno->inscripcion }}</td>
            </tr>
        </tbody>
    </table>

    <br>
    <a href="{{ route('alumno.edit', $alumno) }}">Modificar</a>

    <form action="{{ route('alumno.destroy', $alumno) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar alumno">
    </form>

@endsection