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
    <div class="container" style="height: 63.8vh ;">
        <div class="row" >
            <div class="col">
                <h4>Buscar</h4>
            </div>
            <div class="col">
                {{Form::open(['route'=>'uusers','method' => 'GET'])}}
                    {{Form::text('nombres',null,['class'=>'form-control','placeholder'=>'Nombres'])}}
            </div>
            <div class="col">
                    {{Form::text('apellidos',null,['class'=>'form-control','placeholder'=>'Apellidos'])}}
            </div>
            <div class="col">
                    {{Form::text('numeroid',null,['class'=>'form-control','placeholder'=>'Identificación'])}}
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

        <div class="col">
            <table class="table table-hover ">
            <thead>
                        <th>N°</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Identificación</th>
                    </thead>
                <tbody>
                    @foreach($uusers as $user)
                    <tr>
                    <td>{{ $user->id}}</td>
                    <td>{{ $user->nombres}}</td>
                    <td>{{ $user->apellidos}}</td>
                    <td>{{ $user->numeroid}}</td>
                    <td><button>Eliminar</button></td>
                    <td><button>Info</button></td>

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