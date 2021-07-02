@extends('layouts.bootstrap')
@section('contenido')
    <h1 class="h3 mb-2 text-gray-800">Detalle del alumno</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre(s)</th>
                            <th>Apellidos</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th>Fecha de nacimiento</th>
                            <th>Fecha de inscripción</th>
                            <th>Editar</th>
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
                            <td>
                                <div align="center">
                                    <a href="{{ route('alumno.edit', $alumno) }}" class="btn btn-warning btn-circle btn-sm">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <table>
        <tr>
            <td>
                <a href="{{ route('alumno.index') }}" class="btn btn-secondary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Volver al listado</span>
                </a>
            </td>
            <td>
                <form action="{{ route('alumno.destroy', $alumno) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                        </span>
                        <span class="text">Eliminar alumno</span>
                    </a>
                </form>
            </td>
        </tr>
    </table>
@endsection