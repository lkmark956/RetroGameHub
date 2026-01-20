<?php

namespace App\Http\Controllers;

use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function mostrarMaterias()
    {
        $alumno = Alumno::find(1);

        if (!$alumno) {
            return 'Alumno no encontrado';
        }

        foreach ($alumno->materias as $materia) {
            echo "El alumno cursa: " . $materia->nombre_materia . "<br>";
        }
    }
}
