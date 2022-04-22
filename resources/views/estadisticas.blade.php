@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <h1>Estadisticas</h1>
    <p>Aquí se muestran gráficas</p>
</body>   
</html>
<!-- <form action="POST" action="estadisticas/graph" id="form1">
    @csrf
    <input type="text" name="id" value="1">
    <input type="mail" name="mail">
</form> -->

<!-- <script>
    $.ajax({
        url: 'estadisticas/graph',
        method: 'POST',
        data: $("#form1").serialize()

    }).done(function(res){
        alert(res);
    });
</script> -->
@endsection