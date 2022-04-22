@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script> // este script hace que tabule el enter !!!
function tabular(e,obj) 
        {
            tecla=(document.all) ? e.keyCode : e.which;
            if(tecla!=13) return;
            frm=obj.form;
            for(i=0;i<frm.elements.length;i++) 
                if(frm.elements[i]==obj) 
                { 
                    if (i==frm.elements.length-1) 
                        i=-1;
                    break 
                }
            /*ACA ESTA EL CAMBIO*/
            if (frm.elements[i+1].disabled ==true )    
                tabular(e,frm.elements[i+1]);
            else frm.elements[i+1].focus();
            return false;
        }  

</script>

<body>

<div class="container" style="height: 400px; border: 1px solid #000; background: #fff"> 
    <form action="{{ url('/usuario' )}}" method="post" enctype='multipart/form-data'>
        @csrf
        <div class="row" > 


            <div class="col">
                <label for="Nombre">Nombres</label>
                <br>
                    <input type="string" name="Nombre1" id="Nombre1" placeholder="Primer nombre" autofocus onkeypress="return tabular(event,this)" >
                <br>
                <br>
                    <input type="string" name="Nombre2" id="Nombre2" placeholder="Segundo nombre"onkeypress="return tabular(event,this)"required>
                <br>
                <label for="Nombre">Apellidos</label>
                <br>
                    <input type="string" name="Apellido1" id="Apellido1" placeholder="Primer Apellido"onkeypress="return tabular(event,this)"required>
                <br>
                <br>
                    <input type="string" name="Apellido2" id="Apellido2" placeholder="Segundo Apellido"onkeypress="return tabular(event,this)"required>
                <br>
            </div>


            <div class="col" >
                <label for="Nombre">Teléfono</label>
                <br>
                    <input type="tel" name="Tel" id="Tel" onkeypress="return tabular(event,this)"required>
                <br>
                <label for="Nombre">Dirección</label>
                <br>
                    <input type="string" name="Direccion" id="Direccion" onkeypress="return tabular(event,this)"required>
                <br>
                <label for="Nombre">Edad</label>
                <br>
                    <input type="number" name="Edad" id="Edad" onkeypress="return tabular(event,this)"required>
                <br>
            </div>
                
            
            <div class="col" >
                <div class="container" style="height: 200px;border: 1px solid #000 ;">

                <label for="Nombre">Fotografía</label>
                <br>
                <input type="file" name="foto" id="foto" accept="image/*" required>
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