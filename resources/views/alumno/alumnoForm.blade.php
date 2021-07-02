@extends('layouts.bootstrap')
@section('contenido')
<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
    rel="stylesheet"
/>
<link rel="stylesheet" href="{{ asset('css/tailwind.output.css') }}" />
<script
    src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
    defer
></script>
<script src="{{ asset('js/init-alpine.js') }}"></script>


    <h1 class="h3 mb-2 text-gray-800">Inscribir alumno</h1>
        
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

        @if(isset($alumno))
            <form action="{{ route('alumno.update', $alumno) }}" method="POST">
                @method('PATCH')
        @else
            <form action="{{ route('alumno.store') }}" method="POST">
        @endif

        @csrf
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Nombre(s):</span>
            <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                type="text" name="nombre" value="{{ $alumno->nombre ?? '' }}"
            />
        </label>

        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Apellidos:</span>
            <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                type="text" name="apellidos" value="{{ $alumno->apellidos ?? '' }}"
            />
        </label>

        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Dirección:</span>
            <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                type="text" name="direccion" value="{{ $alumno->direccion ?? '' }}"
            />
        </label>

        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Teléfono:</span>
            <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                type="text" name="telefono" value="{{ $alumno->telefono ?? '' }}"
            />
        </label>

        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Fecha de nacimiento:</span>
            <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                type="date" name="fechanac" value="{{ $alumno->fechanac ?? '' }}"
            />
        </label>

        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Fecha de inscripción:</span>
            <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                type="date" name="inscripcion" value="{{ $alumno->inscripcion ?? '' }}"
            />
        </label>

        <button type="submit" class="btn btn-success btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-check"></i>
            </span>
            <span class="text">Guardar alumno</span>
        </button>

        </form>
    </div>
@endsection