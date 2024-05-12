<?php 

namespace App\Services;
use App\Models\Project;

class ProjectService
{

    public function getAllProjects(){
            
        return Project::get();
    }
    
    public function getAllProjectsCards(){
            
        return Project::select('id_projeto', 'nome', 'municipio', 'uf', 'valor_captado', 'valor_aprovado' , 'resumo')->get();
    }

    public function getProjectByNameLikeToCard($parametro){
            
        return Project::select('id_projeto', 'nome', 'municipio', 'uf', 'valor_captado', 'valor_aprovado' , 'resumo')
                        ->whereRaw('LOWER(`nome`) LIKE ? ',[trim(strtolower($parametro)).'%'])->get();
    }



    
}

?>