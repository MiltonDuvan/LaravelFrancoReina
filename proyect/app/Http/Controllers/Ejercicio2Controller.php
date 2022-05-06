<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Template\Template;

class Ejercicio2Controller extends Controller
{
public function Ejercicio2(){
    return view('Ejercicio2.Ejercicio2');
} 
public function resultadoEj2(Request $request){
   $numero1= $request->numero1;
   $numero2= $request->numero2;
   $numero3= $request->numero3;

   $respuesta= $numero1+$numero2;
   $respuesta2=$numero1+$numero3;

   if ($respuesta==$numero3 || $respuesta2==$numero3){
       $resultado ="Iguales";
   }else{
       $resultado="Desiguales";
   }
   return view('Ejercicio2.resultado_Ej2', compact('resultado'));
}
}//END
