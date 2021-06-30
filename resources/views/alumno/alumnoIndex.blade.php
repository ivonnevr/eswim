@extends('layouts.basico')
@section('contenido')
    <h1>Listado de alumnos</h1>

    <p>
        <a href="{{ route('alumno.create') }}">Agregar alumno</a>
    </p>

    <table border='1'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre(s)</th>
                <th>Apellidos</th>
                <th>Más información</th>
                <!--
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Fecha de nacimiento</th>
                    <th>Fecha de inscripción</th>
                -->
            </tr>
        </thead>
        <tbody>
            
            @foreach ($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->id }}</td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->apellidos }}</td>
                    <td>
                        <a href="{{ route('alumno.show', $alumno->id) }}">Detalles</a>
                    </td>
                    <!--
                        <td>{{ $alumno->direccion }}</td>
                        <td>{{ $alumno->telefono }}</td>
                        <td>{{ $alumno->fechanac }}</td>
                        <td>{{ $alumno->inscripcion }}</td>
                    -->
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection