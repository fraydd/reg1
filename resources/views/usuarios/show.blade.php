@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Show</title>
  </head>
<body>
    <div class="container" style="height: 100hv ;" >
    
            
        <div class="card-header">

            <div class=" d-flex justify-content-center">
                <img class="d-flex justify-content-center " src="{{ asset('images/'.$usuario->foto) }}" alt="{{$usuario->nombres}}"  height="150">
            </div>
            <h1 class="d-flex justify-content-center " style="font-family: 'Montserrat', sans-serif;">{{$usuario->nombres}} {{$usuario->apellidos}}</h1>
             <p class="d-flex justify-content-center ">{{$identificaciones->tipo}}: {{$usuario->numeroid}}</p>
        </div>


        <div class="card-body">

            <hr>
            <p class="d-flex justify-content-left ">Sexo: {{$sexo->tipo}}</p>
            <p class="d-flex justify-content-left ">Género: {{$genero->tipo}}</p>
            <p class="d-flex justify-content-left ">Fecha de nacimiento: {{$usuario->fechan }}.  <label id="edad"> </label></p> 
            <p class="d-flex justify-content-left ">Nacidonalidad:  {{$pais->nombre}}, {{$estado->nombre}} </p>
            <p class="d-flex justify-content-left ">Estado civil: {{$civil->tipo}} </p>
            <p class="d-flex justify-content-left ">Ciudad: {{$usuario->ciudad}} </p>
            <p class="d-flex justify-content-left ">Comuna: {{$usuario->Direccion}} </p>
            <p class="d-flex justify-content-left ">Teléfono: {{$usuario->telefono}} </p>
            <p class="d-flex justify-content-left ">Ocupación: {{$ocupacion->nombre}} </p>
        </div>
            
        
    </div>
</body>
</html>
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function(){
            const fechan =  @json($usuario->fechan);
            const actual= new Date()
            const anoactual=parseInt(actual.getFullYear())
            const mesactual=parseInt(actual.getMonth())+1
            const diaactual=parseInt(actual.getDate())

                 y=parseInt(String(fechan).substring(0,4))
                 m=parseInt(String(fechan).substring(5,7))
                 d=parseInt(String(fechan).substring(8,10))
                 
                 edad=anoactual-y
                 if(mesactual< m){
                     edad--
                 } else if(mesactual==m){
                     if(diaactual< d){
                         edad--
                     }
                 }
                 document.getElementById('edad').innerHTML = ' ( '+ edad +' Años )';

    })
</script>
@endsection