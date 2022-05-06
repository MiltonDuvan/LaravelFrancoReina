<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Template\Template;

class Ejercicio1Controller extends Controller
{
public function Ejercicio1(){
    return view('Ejercicio1.Ejercicio1');
} 
public function resultadoEj1(Request $request){
   $numero1= $request->numero1;
   $numero2= $request->numero2;
   $respuesta= $numero1+$numero2;
   return view('Ejercicio1.resultado_Ej1', compact('respuesta'));
}
}//END
