<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function getAllProjects() {

        //* chunk trae los registros por secciones */
        // Project::chunk(200, function ($projects) {
        //     foreach ($projects as $project) {
        //         //Aquí escribimos lo que haremos con los datos (operar, modificar, etc)
        //     }
        // });

        $projects = Project::active()->get();
        return $projects;
    }

    public function insertProject(){
        Project::create([
            "city_id" => 1,
            "company_id" => 1,
            "user_id" => 1,
            "name" => 'Nombre del proyecto',
            "execution_date" => '2020-04-30',
            "is_active" => 1
        ]);
        return 'Proyecto guardado';
    }

    public function updateInactiveProject(){
        Project::where("is_active","=", 0)
                ->update(["name"=>"proyecto inactivo"]);
                return "Proyectos inactivos actualizados";
    }

}
