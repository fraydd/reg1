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

<div class="container" style="height: 600px; border: 1px solid #000; background: #fff"> 
    <form action="{{ url('/usuario' )}}" method="post" enctype='multipart/form-data'>
        @csrf
        <div class="row" > 


            <div class="col">
                <label for="Nombre">Nombres</label>
                <br>
                    <input type="string" name="nombre" id="nombre" placeholder="Primer nombre" autofocus onkeypress="return tabular(event,this)"required >
                <br>
                <br>
                    <input type="string" name="nombre_2" id="nombre_2" placeholder="Segundo nombre"onkeypress="return tabular(event,this)">
                <br>
                <label for="Nombre">Apellidos</label>
                <br>
                    <input type="string" name="apellido" id="apellido" placeholder="Primer Apellido"onkeypress="return tabular(event,this)"required>
                <br>
                <br>
                    <input type="string" name="apellido_2" id="apellido_2" placeholder="Segundo Apellido"onkeypress="return tabular(event,this)"required>
                <br>
                <br>
                <label for="Nombre">Edad</label>
                <br>
                    <input type="number" name="edad" id="edad" onkeypress="return tabular(event,this)"required>
                <br>
                <label for="Nombre">Teléfono</label>
                <br>
                    <input type="tel" name="telefono" id="telefono" onkeypress="return tabular(event,this)"required>
                <br>
            </div>


            <div class="col" >

                <label for="Nombre">Dirección</label>
                <br>
                    <input type="string" name="Direccion" id="Direccion" onkeypress="return tabular(event,this)"required>
                <br>

                <label for="Nombre">Hijos</label>
                <br>
                    <input type="number" name="cantidad_hijos" id="cantidad_hijos" onkeypress="return tabular(event,this)"required>
                <br>
                <br>



                <label for="Nombre">Identificación</label>
                <br>
                <!-- <input type="string" name="identificacion_id" id="identificacion_id" placeholder="Tipo de ID"onkeypress="return tabular(event,this)"required> -->
                <select   name="identificacion_id" id="identificacion_id"onkeypress="return tabular(event,this)"required>
                            <option value="">  --- Tipo de docuento---  </option>
                            @foreach($identificaciones as $identificacion)
                             <option value="{{ $identificacion['id'] }}">  {{ $identificacion['tipo'] }}  </option>
                            @endforeach
                               
                            
                    
                </select> 
                <br>

                
                <br>
                <input type="string" name="numeroid" id="numeroid" placeholder="Numero ID"onkeypress="return tabular(event,this)"required>
                <br>

                <br>
                    <input type="string" name="estado_id" id="estado_id" placeholder="Estado"onkeypress="return tabular(event,this)"required>               
                    <br>


                    <label for="pais">País</label><br>
                    
                    <select name="pais_id" id="select-pais">
                        <option value="">-- País --</option>
                        @foreach($paises as $pais)
                            <option value="{{$pais['id']}}" >
                                {{$pais->nombre}}
                            </option>
                        @endforeach
                    </select><br>
                
                
                    <label for="ciudad">Estado</label><br>
                    <select name="estado_id" id="select-estado" style="height: 25px; width: 200px; ">
                    <option value="">-- Estado --</option>
                    </select>

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

@section('script')

<script src="/reg1\public\js\admin\usuario\crear.js"> </script>
@endsection

