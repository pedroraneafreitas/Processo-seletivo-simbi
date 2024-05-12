<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProjectService;

class ProjectController extends Controller
/**

 * @OA\Info(
 *     title="Swagger Simbi",
 *     version="q.0",
 *     description="Swagger usado para documentar os endPoints do projeto de processo seletivo da simbiose.",
 * )
 */
{
   /**
*  @OA\GET(
*      path="/test",
*      summary="Get all Projects",
*      description="Get all Projects",
*      tags={"Project"},
*      
*      @OA\Response(
*          response=200,
*          description="OK",
*          @OA\MediaType(
*              mediaType="application/json",
*          )
*      ),
*
*  )
*/
public function getAllProjects(){
    $serviceProject = new ProjectService();
    $retorno = $serviceProject->getAllProjects(); 
    
    return response()->json($retorno);
 }

   /**
*  @OA\GET(
*      path="/cards",
*      summary="Get all Projects to the cards in the frontEnd ",
*      description="Get all Projects",
*      tags={"Project"},
*      
*      @OA\Response(
*          response=200,
*          description="OK",
*          @OA\MediaType(
*              mediaType="application/json",
*          )
*      ),
*
*  )
*/
 public function getAllProjectsCards(){
   $serviceProject = new ProjectService();
   $retorno = $serviceProject->getAllProjectsCards(); 
   
   return response()->json($retorno);
}


   /**
*  @OA\GET(
*      path="/get-by-nome/{name}",
*      summary="Get all Projects to the cards in the frontEnd by the name ",
*      description="Get all Projects by name",
*      tags={"Project"},
*      
*      @OA\Response(
*          response=200,
*          description="OK",
*          @OA\MediaType(
*              mediaType="application/json",
*          )
*      ),
*
*  )
*/
public function getProjectByNameLikeToCard($parametro){
   $serviceProject = new ProjectService();
   $retorno = $serviceProject->getProjectByNameLike($parametro); 
   
   return response()->json($retorno);
}



}
