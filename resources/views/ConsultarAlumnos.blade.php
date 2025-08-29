@extends('master')

@section('titulo')
<h1>Consultar Alumnos</h1>
@stop

@section('contenido')
<a href="{{ url('/registrarAlumno')  }}" class="btn btn-primary btn-success">Registrar Alumno</a>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Numero de Control</th>
                <th>Fecha de nacimiento</th>
                <th>Sexo</th>
                <th>Especialidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->id }}</td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->numero_control }}</td>
                    <td>{{ $alumno->fecha_nacimiento }}</td>
                    <td>{{ $alumno->sexo }}</td>
                    <td>{{ $alumno->especialidad }}</td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm">Editar</a>
                        <a href="" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>

@stop