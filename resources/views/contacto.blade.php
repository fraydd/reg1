@extends('layouts.app')
@section('content')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <style>
     .texto{
         font-size: small;
     }
     .container-fluid {
        height: 100vh ;
}

 </style>
</head>
<body>

<div class="container" style="min-height: 100vh;"> 
    <div class="card-header">
        <h3>Ponte en contacto con nosotros</h3>
    </div>
    
    <div class="card-body">

        
            <br>
        <div class="row">
            <div class="col-sm"><img src="images/mahecha.png" alt="aaa" width="85px" height="98px">
            <p class="texto">Frey Camilo Mahecha</p>
                <a class="texto" href="mailto:Freyc.mahechav@uqvirtual.edu.co">Freyc.mahechav@uqvirtual.edu.co </a>
        </div>
            <div class="col-sm"><img src="images/luis.png" alt="aaa" width="80px" height="98px">
            <p class="texto" >Luis Manrique</p>
                <a class="texto" href="mailto:Lemanriqueg@uqvirtual.edu.co">Lemanriqueg@uqvirtual.edu.co</a>
        </div>
            <div class="col-sm"><img src="images/clavijo.png" alt="aaa" width="80px" height="98px">
            <p class="texto">Santiago Clavijo</p>
            <a class="texto" href="mailto:Lemanriqueg@uqvirtual.edu.co">Lemanriqueg@uqvirtual.edu.co</a>
        </div>
            <div class="col-sm"><img src="images/fredy.png" alt="aaa" width="90px" height="98px">
            <p class="texto">Fredy Chaves</p>
            <a class="texto" href="mailto:fredya.chavesb@uqvirtual.edu.co">Fredya.chavesb@uqvirtual.edu.co</a>
        </div>
            <div class="col-sm"><img src="images/manajer.png" alt="aaa" width="90px" height="98px">
            <p class="texto">Mauricio Grisales Garcia</p>
            <a class="texto" href="mailto:mgrisalesg@uqvirtual.edu.co">mgrisalesg@uqvirtual.edu.co</a>
        </div>

        </div>
    
        </div>
</div>

@endsection