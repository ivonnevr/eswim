@extends('layouts.bootstrap')
@section('contenido')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Profesores</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th>Fecha de nacimiento</th>
                            <th>Fecha de contratación</th>
                            <th>Modalidad impartida</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($profesores as $profesor)
                            <tr>
                                <td>{{ $profesor->id }}</td>
                                <td>{{ $profesor->nombre }}</td>
                                <td>{{ $profesor->direccion }}</td>
                                <td>{{ $profesor->telefono }}</td>
                                <td>{{ $profesor->fechanac }}</td>
                                <td>{{ $profesor->inicio }}</td>
                                <td>{{ $profesor->modalidad_id }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection