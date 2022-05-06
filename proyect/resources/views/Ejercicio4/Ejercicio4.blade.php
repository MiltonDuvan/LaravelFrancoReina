@extends('Template.Template')
@section('plantillaweb')
    
<h2 class="nav justify-content-center">Digite un numero entero para su suma</h2>
<form class="nav justify-content-center" action="{{route('resultado_Ej4')}}" method="post">
   
 <!--es un metodo de autenticacion token-->
    {{csrf_field()}}
    <div>
    <label>El numero ingresado no puede ser mayor a 100</label>
    <input type="number" name="numero1">

    <input class="btn btn-success" type="submit" name="" value="Presionar">
</div>
  
 @endsection

</form>