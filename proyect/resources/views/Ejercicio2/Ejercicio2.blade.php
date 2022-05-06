@extends('Template.Template')
@section('plantillaweb')
    
<h2 class="nav justify-content-center">Ordenar 3 numeros</h2>
<form class="nav justify-content-center" action="{{route('resultado_Ej2')}}" method="post">
   
 <!--es un metodo de autenticacion token-->
    {{csrf_field()}}
    <div>
    <label>Digite el numero 1 </label>
    <input type="number" name="numero1">
    
    <label>Digite el numero 2 </label>
    <input type="number" name="numero2">

    <label>Digite el numero 3</label>
    <input type="number" name="numero3">

    <input class="btn btn-success" type="submit" name="" value="Presionar">
</div>
  
 @endsection

</form>

