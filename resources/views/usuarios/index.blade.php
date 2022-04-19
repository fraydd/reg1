@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container"style="border: 1px solid #000; background: #fff">
        <div class="row" style="border: 1px solid #000; background: #fff">
            <div class="col">
                <h4>Buscar</h4>
            </div>
            <div class="col">
                <br>   
            </div>
            <div class="col">
                <br>   
            </div>
            <div class="col">
                {{Form::open(['route'=>'uusers','method' => 'GET'])}}
                    {{Form::text('Nombre1',null,['class'=>'form-control','placeholder'=>'Nombre'])}}
            </div>
            <div class="col">
                    {{Form::text('Apellido1',null,['class'=>'form-control','placeholder'=>'Apellido'])}}
            </div>
            <div class="col">
                    {{Form::text('edad',null,['class'=>'form-control','placeholder'=>'edad'])}}
            </div>      
            <div class="col">
                <button type="submit" class="btn btn-outline-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
            </div>             

                {{Form::close()}}
        </div>
        <div>
            <hr>
        </div>
        <div class="col-md-8">
            <table class="table table-hover ">
            <thead>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Edad</th>
                    </thead>
                <tbody>
                    @foreach($uusers as $user)
                    <tr>
                    <td>{{ $user->id}}</td>
                    <td>{{ $user->Nombre1}}</td>
                    <td>{{ $user->Apellido1}}</td>
                    <td>{{ $user->edad}}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $uusers->render()}}
        </div>
    </div>
</body>
</html>
@endsection