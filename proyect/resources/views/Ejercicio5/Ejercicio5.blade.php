@extends('Template.Template')
@section('plantillaweb')
    
<h2 class="nav justify-content-center">Area y Volumen de un Cilindro</h2>
<form class="nav justify-content-center" action="{{route('resultado_Ej5')}}" method="post">
   
 <!--es un metodo de autenticacion token-->
    {{csrf_field()}}
    <div>
    <label>Digite el radio del cilindro </label>
    <input type="number" name="numero1" step="0.1" >
    
    <label>Digite la altura del cilindro</label>
    <input type="number" name="numero2" step="0.1" >

    <input class="btn btn-success" type="submit" name="" value="Presionar">
</div>
  
 @endsection

</form>