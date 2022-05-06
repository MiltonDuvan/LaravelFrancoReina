@extends('Template.Template')
@section('plantillaweb')
    
<h2 class="nav justify-content-center">Pago de un trabajador segun las horas trabajadas</h2>
<form class="nav justify-content-center" action="{{route('resultado_Ej3')}}" method="post">
   
 <!--es un metodo de autenticacion token-->
    {{csrf_field()}}
    <div>
    <label>Digite las horas trabajadas </label>
    <input type="number" name="numero1">

    <input class="btn btn-success" type="submit" name="" value="Presionar">
</div>
  
 @endsection

</form>