<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio5Controller extends Controller
{
    public function area(){
        return view('Ejercicio5.Ejercicio5');
    }
    public function areaCilindro(Request $request){
        $numero1=$request->numero1;
        $numero2=$request->numero2;
        
        $area=2*3.14*$numero1 *$numero2 + (3.14*3.14)*($numero1*$numero1);
        $volumen=3.14*($numero1*$numero1)*$numero2;
        $resultado="El resultado es, Area: $area "."Su volumen es, Volumen: $volumen";
        
        return view('Ejercicio5.resultado_Ej5',compact('resultado'));
    }
}
