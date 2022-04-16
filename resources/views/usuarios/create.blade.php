@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
</head>
<body>
    <h1>este es el create</h1>
    <form action="{{ url('/usuario' )}}" method="post"enctype='multipart/form-data'>
        @csrf
        <label for="Nombre">Primer nombre</label>
        <br>
            <input type="string" name="Nombre1" id="Nombre1" placeholder="nombre">
        <br>

        <label for="Nombre">Segundo nombre</label>
        <br>
            <input type="string" name="Nombre2" id="Nombre2">
        <br>

        <label for="Nombre">Primer apellido</label>
        <br>
            <input type="string" name="Apellido1" id="Apellido1">
        <br>

        <label for="Nombre">Segundo apellido</label>
        <br>
            <input type="string" name="Apellido2" id="Apellido2">
        <br>

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

        <label for="Nombre">Fotografia</label>
        <br>
        <input type="file" name="foto" id="foto">
        <br>

        <input type="submit" value="Registrar">


    </form>
</body>
</html>
@endsection