<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;


Route::prefix('project')->group(function(){
    
    //Get all projects  
    Route::get('/',[ProjectController::class, 'getAllProjects']);
    
    Route::get('/cards',[ProjectController::class, 'getAllProjectsCards']);

    Route::get('/get-by-nome/{name}',[ProjectController::class, 'getProjectByNameLikeToCard']);


});


?>