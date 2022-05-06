@extends('Template.Template')
@section('plantillaweb')
    
<h2 class="nav justify-content-center">Notas de un estudiante</h2>
<form class="nav justify-content-center" action="{{route('resultado_Ej6')}}" method="post">
   
 <!--es un metodo de autenticacion token-->
    {{csrf_field()}}
    <div>
    <label>Nombres y Apellidos </label>
    <input type="text" name="nombre">
    
    <label>Digite el numero 1 </label>
    <input type="number" name="numero1">

    <label>Digite el numero 2</label>
    <input type="number" name="numero2">

    <input class="btn btn-success" type="submit" name="" value="Presionar">
</div>
  
 @endsection

</form>
