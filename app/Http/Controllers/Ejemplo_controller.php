<?php

// controlador para gestionar las rutas

namespace App\Http\Controllers;

// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Foundation\Validation\ValidatesRequests;
// use Illuminate\Routing\Controller as BaseController;

class Ejemplo_controller extends Controller{
    public function home(){
      return "Estás en el inicio del sitio";
    }
}
