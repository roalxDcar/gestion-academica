<?php

use Illuminate\Database\Seeder;
use App\Grant;

class GrantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Grant::create([
            'name'          => 'Navegar usuarios',
            'description'   => 'Lista y navega todos los usuarios del sistema',
        ]);

        Grant::create([
            'name'          => 'Ver detalle de usuario',
            'description'   => 'Ve en detalle cada usuario del sistema',
        ]);

        Grant::create([
            'name'          => 'Creación de Usuarios',
            'description'   => 'Podría crear nuevos usuarios en el sistema',
        ]);

        Grant::create([
            'name'          => 'Edición de usuarios',
            'description'   => 'Podría editar cualquier dato de un usuario del sistema',
        ]);

        Grant::create([
            'name'          => 'Eliminar usuario',
            'description'   => 'Podría eliminar cualquier usuario del sistema',
        ]);

        Grant::create([
            'name'          => 'Generar PDF de Usuarios',
            'description'   => 'Podría Generar PDF de usuarios del sistema',
        ]);

        //Roles
        Grant::create([
            'name'          => 'Navegar roles',
            'description'   => 'Lista y navega todos los roles del sistema',
        ]);

        Grant::create([
            'name'          => 'Ver detalle de un rol',
            'description'   => 'Ve en detalle cada rol del sistema',
        ]);

        Grant::create([
            'name'          => 'Creación de roles',
            'description'   => 'Podría crear nuevos roles en el sistema',
        ]);

        Grant::create([
            'name'          => 'Edición de roles',
            'description'   => 'Podría editar cualquier dato de un rol del sistema',
        ]);

        Grant::create([
            'name'          => 'Eliminar roles',
            'description'   => 'Podría eliminar cualquier rol del sistema',
        ]);

        //Managers
        Grant::create([
            'name'          => 'Navegar Direccion',
            'description'   => 'Lista y navega todos los directores del sistema',
        ]);

        Grant::create([
            'name'          => 'Ver detalle de un Director',
            'description'   => 'Ve en detalle cada Director del sistema',
        ]);

        Grant::create([
            'name'          => 'Creación de Director',
            'description'   => 'Podría crear nuevo Director en el sistema',
        ]);

        Grant::create([
            'name'          => 'Edición de Director',
            'description'   => 'Podría editar cualquier dato de un director del sistema',
        ]);

        Grant::create([
            'name'          => 'Eliminar Director',
            'description'   => 'Podría eliminar cualquier director del sistema',
        ]);

        //teachers
        Grant::create([
            'name'          => 'Navegar docentes',
            'description'   => 'Lista y navega todos los docentes del sistema',
        ]);

        Grant::create([
            'name'          => 'Ver detalle de un docente',
            'description'   => 'Ve en detalle cada docente del sistema',
        ]);

        Grant::create([
            'name'          => 'Creación de docentes',
            'description'   => 'Podría crear nuevos docentes en el sistema',
        ]);

        Grant::create([
            'name'          => 'Edición de docentes',
            'description'   => 'Podría editar cualquier dato de un docente del sistema',
        ]);

        Grant::create([
            'name'          => 'Eliminar docentes',
            'description'   => 'Podría eliminar cualquier docente del sistema',
        ]);

        //Students
        Grant::create([
            'name'          => 'Navegar estudiantes',
            'description'   => 'Lista y navega todos los estudiantes del sistema',
        ]);

        Grant::create([
            'name'          => 'Ver detalle de un estudiante',
            'description'   => 'Ve en detalle cada estudiante del sistema',
        ]);

        Grant::create([
            'name'          => 'Creación de estudiantes',
            'description'   => 'Podría crear nuevos estudiantes en el sistema',
        ]);

        Grant::create([
            'name'          => 'Edición de estudiantes',
            'description'   => 'Podría editar cualquier dato de un estudiante del sistema',
        ]);

        Grant::create([
            'name'          => 'Eliminar estudiantes',
            'description'   => 'Podría eliminar cualquier estudiante del sistema',
        ]);

        //Pensum
        Grant::create([
            'name'          => 'Navegar Pensums',
            'description'   => 'Lista y navega todos los pensums del sistema',
        ]);

        Grant::create([
            'name'          => 'Ver detalle de un pensum',
            'description'   => 'Ve en detalle cada pensum del sistema',
        ]);

        Grant::create([
            'name'          => 'Creación de pensums',
            'description'   => 'Podría crear nuevos pensum en el sistema',
        ]);

        Grant::create([
            'name'          => 'Edición de pensums',
            'description'   => 'Podría editar cualquier dato de un pensum del sistema',
        ]);

        Grant::create([
            'name'          => 'Eliminar pensums',
            'description'   => 'Podría eliminar cualquier pensum del sistema',
        ]);


        //Courses
        Grant::create([
            'name'          => 'Navegar paralelos',
            'description'   => 'Lista y navega todos los paralelos del sistema',
        ]);

        Grant::create([
            'name'          => 'Ver detalle de un paralelo',
            'description'   => 'Ve en detalle cada paralelo del sistema',
        ]);

        Grant::create([
            'name'          => 'Creación de paralelos',
            'description'   => 'Podría crear nuevos paralelos en el sistema',
        ]);

        Grant::create([
            'name'          => 'Edición de paralelos',
            'description'   => 'Podría editar cualquier dato de un paralelo del sistema',
        ]);

        Grant::create([
            'name'          => 'Eliminar paralelos',
            'description'   => 'Podría eliminar cualquier paralelo del sistema',
        ]);

        //Classrooms
        Grant::create([
            'name'          => 'Navegar Materias',
            'description'   => 'Lista y navega todos los Materias del sistema',
        ]);

        Grant::create([
            'name'          => 'Ver detalle de un Materia',
            'description'   => 'Ve en detalle cada Materia del sistema',
        ]);

        Grant::create([
            'name'          => 'Creación de Materias',
            'description'   => 'Podría crear nuevos Materias en el sistema',
        ]);

        Grant::create([
            'name'          => 'Edición de Materias',
            'description'   => 'Podría editar cualquier dato de una Materia del sistema',
        ]);

        Grant::create([
            'name'          => 'Eliminar Materias',
            'description'   => 'Podría eliminar cualquier Materia del sistema',
        ]);

        //Qualifications
        Grant::create([
            'name'          => 'Navegar calficaciones',
            'description'   => 'Lista y navega todos los calficaciones del sistema',
        ]);

        Grant::create([
            'name'          => 'Ver detalle de una calficacion',
            'description'   => 'Ve en detalle cada calficacion del sistema',
        ]);

        Grant::create([
            'name'          => 'Creación de calficaciones',
            'description'   => 'Podría crear nuevos calficaciones en el sistema',
        ]);

        Grant::create([
            'name'          => 'Edición de calficaciones',
            'description'   => 'Podría editar cualquier dato de una calficacion del sistema',
        ]);

        Grant::create([
            'name'          => 'Eliminar calficaciones',
            'description'   => 'Podría eliminar cualquier calficacion del sistema',
        ]);

        //Permisos del BLog
        //Tags
        Grant::create([
            'name'          => 'Navegar Etiquetas',
            'description'   => 'Lista y navega todos las Etiquetas del sistema',
        ]);

        Grant::create([
            'name'          => 'Ver detalle de una Etiqueta',
            'description'   => 'Ve en detalle cada Etiqueta del sistema',
        ]);

        Grant::create([
            'name'          => 'Creación de Etiquetas',
            'description'   => 'Podría crear nuevas Etiquetas en el sistema',
        ]);

        Grant::create([
            'name'          => 'Edición de Etiquetas',
            'description'   => 'Podría editar cualquier dato de una Etiqueta del sistema',
        ]);

        Grant::create([
            'name'          => 'Eliminar Etiquetas',
            'description'   => 'Podría eliminar cualquier Etiqueta del sistema',
        ]);

        //Categories
        Grant::create([
            'name'          => 'Navegar Categorias',
            'description'   => 'Lista y navega todos los Categorias del sistema',
        ]);

        Grant::create([
            'name'          => 'Ver detalle de una Categoria',
            'description'   => 'Ve en detalle cada Categoria del sistema',
        ]);

        Grant::create([
            'name'          => 'Creación de Categorias',
            'description'   => 'Podría crear nuevos Categorias en el sistema',
        ]);

        Grant::create([
            'name'          => 'Edición de Categorias',
            'description'   => 'Podría editar cualquier dato de una Categoria del sistema',
        ]);

        Grant::create([
            'name'          => 'Eliminar Categorias',
            'description'   => 'Podría eliminar cualquier Categoria del sistema',
        ]);

        //Post
        Grant::create([
            'name'          => 'Navegar Entradas',
            'description'   => 'Lista y navega todos los Entradas del sistema',
        ]);

        Grant::create([
            'name'          => 'Ver detalle de una Entrada',
            'description'   => 'Ve en detalle cada Entrada del sistema',
        ]);

        Grant::create([
            'name'          => 'Creación de Entradas',
            'description'   => 'Podría crear nuevos Entradas en el sistema',
        ]);

        Grant::create([
            'name'          => 'Edición de Entradas',
            'description'   => 'Podría editar cualquier dato de una Entrada del sistema',
        ]);

        Grant::create([
            'name'          => 'Eliminar Entradas',
            'description'   => 'Podría eliminar cualquier Entrada del sistema',
        ]);
    }
}
