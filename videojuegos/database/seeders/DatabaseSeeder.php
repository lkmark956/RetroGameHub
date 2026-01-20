<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alumno;
use App\Models\Materia;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alumno1 = Alumno::create(['nombre' => 'Juan Pérez','email' => 'juan@mail.com','fecha_nacimiento' => '2005-05-10']);
        $alumno2 = Alumno::create(['nombre' => 'María García','email' => 'maria@mail.com','fecha_nacimiento' => '2006-08-22']);

        $materia1 = Materia::create(['nombre_materia' => 'Matemáticas', 'descripcion' => 'Estudio de números y operaciones']);
        $materia2 = Materia::create(['nombre_materia' => 'Lengua', 'descripcion' => 'Estudio del idioma y literatura']);
        $materia3 = Materia::create(['nombre_materia' => 'Historia', 'descripcion' => 'Estudio de eventos pasados']);

        // Relacionar alumnos con materias
        $alumno1->materias()->attach([$materia1->id, $materia2->id]);
        $alumno2->materias()->attach([$materia2->id, $materia3->id]);
    }
}
