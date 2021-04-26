<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// controlador para enlazar vistas

class Paginas_controller extends Controller
{
    public function index(){
      return view('welcome');
    }
    public function quienesSomos(){
      return view('quienesSomos');
    }
    public function dondeEstamos(){
      return view('dondeEstamos');
    }
    public function foro(){
      return view('foro');
    }
}
