<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\http\requests\validadorFormLibros;
use RealRashid\SweetAlert\Facades\Alert;

class controlador extends Controller
{
        
        public function metodoInicio(){
            $now = now();
            return view ('welcome', ['now' => $now]);
            
    
        }
    
        public function metodoRelibro(){
            $now = now();
            return view ('Relibro', ['now' => $now]);
    
        }
    
        public function metodoGuardar(validadorFormLibros $req){

            return redirect('/Relibro')->with('confirmacion', 'Publicado correctamente por: '.$req->input('txtTitulo'));
    
        } 
}
