@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <!--   <div class="container" style="height: 100vh ;">
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
        </div> -->
<div class="container" style="min-height: 100vh;">
        <div class="col">
            <table id="users" class="table table-hover shadow-lg table-bordered">
            <thead>
                        <th>N°</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Identificación</th>
                        <th>&nbsp;</th>
                    </thead>

            </table>
            
        </div>
    </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#users').DataTable({
            "serverSide": true,
            "ajax": "{{ url('api/usuarios')}}",
            "columns": [
                {data: 'id'},
                {data: 'nombres'},
                {data: 'apellidos'},
                {data: 'numeroid'},
                {data: 'btn'},
            ],
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                },
                'responsive': true,
                'autoWidth': false,

            });
            
        });
    </script>
</body>
</html>
@endsection