<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio4Controller extends Controller
{
    public function numeros(){
       return view('Ejercicio4.Ejercicio4');
    }

    public function numerosEnteros(REQUEST $request){

        $numero1=$request->numero1;
        $resultado=0;

        if($numero1<=100){
            for($i=0;$i<=$numero1;$i++){
                $resultado=$resultado+$i;
            }
        }else{
            $resultado="Numero no valido";
        }
       return view('Ejercicio4.resultado_Ej4',compact('resultado'));
    }
    
}
