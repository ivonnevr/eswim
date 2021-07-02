<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;


class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::get();
        return view('alumno/alumnoIndex', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumno/alumnoForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'min:3', 'max:255'],
            'apellidos' => ['required', 'string', 'min:5', 'max:255'],
            'direccion' => 'required|string|min:5|max:255',
            'telefono' => 'required|string|min:8|max:30',
            'fechanac' => 'required',
            'inscripcion' => 'required',
        ]);
        Alumno::create($request->all());
        return redirect()->route('alumno.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        return view('alumno/alumnoShow', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        return view('alumno/alumnoForm', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'min:3', 'max:255'],
            'apellidos' => ['required', 'string', 'min:5', 'max:255'],
            'direccion' => 'required|string|min:5|max:255',
            'telefono' => 'required|string|min:8|max:30',
            'fechanac' => 'required',
            'inscripcion' => 'required',
        ]);
        Alumno::where('id', $alumno->id)->update($request->except('_token', '_method'));
        return redirect()->route('alumno.show', $alumno);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumno.index');
    }
}
