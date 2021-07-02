@extends('layouts.bootstrap')
@section('contenido')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Modalidades</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Días</th>
                            <th>Turno</th>
                            <th>Horario</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($modalidades as $modalidad)
                            <tr>
                                <td>{{ $modalidad->id }}</td>
                                <td>{{ $modalidad->dias }}</td>
                                <td>{{ $modalidad->turno }}</td>
                                <td>{{ $modalidad->horario }}</td>
                                <td>${{ $modalidad->precio }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection