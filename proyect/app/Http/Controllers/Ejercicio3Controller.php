<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio3Controller extends Controller
{
    public function pagoTrabajador (){
        return view('Ejercicio3.Ejercicio3');
    }

    public function pagoResultado(Request $request){
        $numero1= $request->numero1;
        $h=4167;

        if ($numero1>50){
            $resp=$numero1*$h;
            $respuesta=$resp*0.003;

        }else{
            $respuesta=$numero1*$h;
        }
        return view('Ejercicio3.resultado_Ej3',compact('respuesta'));
    }
}
