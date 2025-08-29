@extends('master')
@section('titulo') <h1>Editar Alumnos</h1> @stop

@section('contenido')
    <form action="{{ url('/actualizarAlumno')  }}/{{ $alumno->id }}"  method="POST">
        @csrf
        <div class="form-grup mb-4">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="nombre" required value="{{ $alumno->nombre }}">
        </div>
        <div class="form-grup">
            <label for="">Numero de control</label>
            <input type="text" class="form-control" name="numero_control" required value="{{ $alumno->numero_control }}">
        </div>
        <div class="form-grup">
            <label for="">Fecha de Nacimiento</label>
            <input type="date" class="form-control" name="fecha_nacimiento" required value="{{ $alumno->fecha_nacimiento }}">
        </div>
        <br>
        <div class="form-grup mb-4">
            <label form="">Sexo:</label>
            <select name="sexo" required>
                <option value="" selected>Seleccione una opción</option>
                    @if($alumno->sexo == 0)
                        <option value="0">Femenino</option>
                        <option value="1">Masculino</option>
                        <option value="2">Otro</option>
                    @elseif($alumno->sexo == 1)
                        <option value="0">Femenino</option>
                        <option value="1">Masculino</option>
                        <option value="2">Otro</option>
                    @elseif($alumno->sexo == 2)
                        <option value="0">Femenino</option>
                        <option value="1">Masculino</option>
                        <option value="2">Otro</option>
                    @endif
            </select>
        </div>

        <div class="form-grup mb-4">
            <label form="">Especialidad:</label>
            <select name="especialidad" required>
                <option value="" selected>Seleccione una opción</option>
                <option value="{{ $alumno->especialidad }}" selected>"{{ $alumno->especialidad }}"</option>
                <option value="PROGRAMACIÓN">Programación</option>
                <option value="MECATRONICA">Mecatronica</option>
                <option value="CONTABILIDAD">Contabilidad</option>
            </select>
        </div>

        <div>
            <input type="submit" class="btn btn-primary" value="Guardar">
            <a href="{{ url('/alumnos')  }}" class="btn btn-danger">Regresar</a>
        </div>
    </form>
@stop