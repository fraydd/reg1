@extends('layouts.app')

@section('content')


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home</title>
  </head>

  <body>
      <div class="d-flex justify-content-center">

          <img src="images/armenia.jpg" alt="aaa" width="800" height="300">
      </div>
    
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-striped table-light mt-5">
                    <thead>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Identificación</th>
                    </thead>
                    <tbody>
                        @foreach($usuar as $usu)
                            <tr>
                                <td>{{$usu->id}}</td>
                                <td>{{$usu->nombre}}</td>
                                <td>{{$usu->apellido}}</td>
                                <td>{{$usu->numeroid}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $usuar->links() !!}
            </div>
        </div>
        </div>
    </body>
</html>
@endsection
