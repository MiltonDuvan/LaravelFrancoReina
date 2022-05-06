<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio6Controller extends Controller
{
    public function form(){
        return view('Ejercicio6.Ejercicio6');
    }
    public function formulario(Request $request){
        $nombre=$request->nombre;
        $numero1=$request->numero1;
        $numero2=$request->numero2;

        $nota1=$numero1*0.4;       ;
        $nota2=$numero2*0.6;
        $definitiva=$nota1+$nota2;
        if($definitiva<2){
            $respuesta="Malo";
        }else if($definitiva>2 && $definitiva<3){
            $respuesta="Insuficiente";
        }else if ($definitiva>=3 && $definitiva<4){
            $respuesta="Aceptable";
        }else if($definitiva>=4 && $definitiva<4.5){
            $respuesta="Bueno";
        }else if ($definitiva>=4.5){
            $respuesta="Excelente";
        }
        return view('Ejercicio6.resultado_Ej6',compact('nombre','respuesta'));

    }


}