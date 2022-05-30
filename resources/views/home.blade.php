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
    <style>
        .imagen {
                background-image: url(images/taxi.jpg);
                background-size: 100% auto;
                background-position: bottom center;
                background-repeat: no-repeat;

}
.texto{
                color: #FFF;
                margin: 0 auto;
                text-align: center;

                font: italic bold 40px Georgia;
                text-shadow: 1px 1px 0 #34d16e;
            }
    </style>
  </head>

  <body class="imagen">
      
        <div class="container" style="height: 100vh ;">
        <h1 class="texto" > Registro de habitantes de calle de Armenia Quindío </h1> 
        
      </div>
   

          

    
    </body>
</html>
@endsection
