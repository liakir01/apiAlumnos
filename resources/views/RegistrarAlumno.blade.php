@extends('master')
@section('titulo') <h1>Registar Alumnos</h1> @stop

@section('contenido')
    <form action="{{ url('/guardarAlumno')  }}" method="POST">
        @csrf
        <div class="form-grup mb-4">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="nombre" required>
        </div>
        <div class="form-grup">
            <label for="">Numero de control</label>
            <input type="text" class="form-control" name="numero_control" required>
        </div>
        <div class="form-grup">
            <label for="">Fecha de Nacimiento</label>
            <input type="date" class="form-control" name="fecha_nacimiento" required>
        </div>
        <br>
        <div class="form-grup mb-4">
            <label form="">Sexo:</label>
            <select name="sexo">
                <option value="" selected>Seleccione una opción</option>
                <option value="0">Femenino</option>
                <option value="1">Masculino</option>
                <option value="2">Otro</option>
            </select>
        </div>

        <div class="form-grup mb-4">
            <label form="">Especialidad:</label>
            <select name="especialidad">
                <option value="" selected>Seleccione una opción</option>
                <option value="PROGRAMACIÓN">Programación</option>
                <option value="MECATRONICA">Mecatronica</option>
                <option value="CONTABILIDAD">Contabilidad</option>
            </select>
        </div>

        <div>
            <input type="submit" class="btn btn-primary" value="Registrar">
            <a href="{{ url('/alumnos')  }}" class="btn btn-danger">Regresar</a>
        </div>
    </form>
@stop