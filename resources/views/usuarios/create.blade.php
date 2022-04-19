@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<body>

<div class="container" style="height: 400px; border: 1px solid #000; background: #fff"> 
    <form action="{{ url('/usuario' )}}" method="post"enctype='multipart/form-data'>
        @csrf
        <div class="row" > 


            <div class="col">
                <label for="Nombre">Nombres</label>
                <br>
                    <input type="string" name="Nombre1" id="Nombre1" placeholder="Primer nombre">
                <br>
                <br>
                    <input type="string" name="Nombre2" id="Nombre2" placeholder="Segundo nombre">
                <br>
                <label for="Nombre">Apellidos</label>
                <br>
                    <input type="string" name="Apellido1" id="Apellido1" placeholder="Primer Apellido">
                <br>
                <br>
                    <input type="string" name="Apellido2" id="Apellido2" placeholder="Segundo Apellido">
                <br>
            </div>


            <div class="col" >
                <label for="Nombre">Telefono</label>
                <br>
                    <input type="string" name="Tel" id="Tel">
                <br>
                <label for="Nombre">Dirección</label>
                <br>
                    <input type="string" name="Direccion" id="Direccion">
                <br>
                <label for="Nombre">Edad</label>
                <br>
                    <input type="int" name="Edad" id="Edad">
                <br>
            </div>
                
            
            <div class="col" >
                <div class="container" style="height: 200px;border: 1px solid #000 ;">

                <label for="Nombre">Fotografia</label>
                <br>
                <input type="file" name="foto" id="foto">
                <br>

                
                </div>
                <div class="container" style="border: 1px solid #000 ;">
                    <input type="submit" value="Registrar" class="btn btn-outline-dark">
                    </div>
            </div>


        </div>
    </form>  
</div>
@endsection