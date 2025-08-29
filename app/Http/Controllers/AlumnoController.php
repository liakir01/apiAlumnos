<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    
public function consulta(){}
   
    public function calcular(){}  
    
    public function getAlumnos(){
        $alumnos=Alumno::orderBy('id','desc')->get();  
    
    return view("ConsultarAlumnos", compact('alumnos'));
    }

    public function registrarAlumno(){       
    return view("RegistrarAlumno");
    }
    //
}
