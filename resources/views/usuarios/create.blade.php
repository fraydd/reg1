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

<div class="container" style="height: 100vh ;"> 
    <form class="form" action="{{ url('/usuario' )}}" method="post" enctype='multipart/form-data'>
        @csrf
        <div class="row" > 

            <div class="col">

                    <p>Nombres (*): <input class="form-control" type="string" name="nombres" id="nombres" placeholder="Nombres" autofocus onkeypress="return tabular(event,this)"required ></p>

                    <p> Apellidos(*):<input class="form-control" type="string" name="apellidos" id="apellidos" placeholder="Apellidos"onkeypress="return tabular(event,this)"required></p>

                    <p>Fecha de nacimiento (*): <input class="date form-control" type="text"  name="fechan" placeholder="Año-Mes-Día" autocomplete="off" onkeypress="return tabular(event,this)"></p>

                    <div class="form-group">
                        <p>Teléfono:<input class="form-control" placeholder="Número" type="tel" name="telefono" id="telefono" onkeypress="return tabular(event,this)"required></p>
                    </div>

                    <div class="form-group">
                        <p class="">Identificación (*):</p>
                        <div class="row">
                            <div class="col-md-6">
                                
                                    <select  class="form-select" name="identificacion_id" id="identificacion_id"onkeypress="return tabular(event,this)"required>
                                        <option class="text-center" value="">  - Tipo -  </option>
                                        @foreach($identificaciones as $identificacion)
                                            <option value="{{ $identificacion['id'] }}">  {{ $identificacion['tipo'] }}  </option>
                                        @endforeach
                                    </select> 
                                    
                            </div> 
                            <div class="col-md-6">
                                <input  class="form-control"  type="string" name="numeroid" id="numeroid" placeholder="Numero ID"onkeypress="return tabular(event,this)"required>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Hijos:</label>
                  
                            <input class="form-control" type="number" name="cantidad_hijos" id="cantidad_hijos" placeholder="Cantidad"  onkeypress="return tabular(event,this)"required>
                            
         
          
                    </div>
            </div>

            
            <div class="col" >
                <div class="form-group">
                    <p class="">Lugar de nacimiento (*):</p>
                    <div class="row">
                        <div class="col-md-6">
                            <select class="form-select" name="pais_id" id="select-pais">
                                <option class="text-center" value="">- País -</option>
                                @foreach($paises as $pais)
                                    <option value="{{$pais['id']}}" >
                                        {{$pais->nombre}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select class="form-select"  name="estado_id" id="select-estado" >
                                <option  class="text-center" value="">- Estado -</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br>

                <div class="form-group">
                    <p class="">Lugar donde habita (*):</p>
                    <div class="row">
                        <div class="col-md-6">
                            <input class="form-control" placeholder="Ciudad" type="string" name="ciudad" id="ciudad" onkeypress="return tabular(event,this)"required>
                        </div>

                        <div class="col-md-6">
                            <input class="form-control" placeholder="Comuna" type="string" name="Direccion" id="Direccion" onkeypress="return tabular(event,this)"required>
                        </div>
                    </div>
                </div>


                    <br>
                    <div class="form-group">
                        <p class="">Adicciones (*): </p>
                        <div class="row">
                            <div class="col-md-6">
                            <input class="date form-control" type="text"  name="fechaa" placeholder="Año-Mes-Día" autocomplete="off" onkeypress="return tabular(event,this)">

                            </div>
                            <div class="col-md-6">
                                <select class="form-select"  name="addiction_id" id="addiction_id"onkeypress="return tabular(event,this)">
                                        <option class="text-center" value="">  - Adicciones -  </option>
                                        @foreach($addictions as $addiction)
                                            <option value="{{ $addiction['id'] }}">  {{ $addiction['nombre'] }}  </option>
                                        @endforeach
                                </select> 
                            </div>

                        
                        </div>
                    </div>
                    <br>
                    <select  class="form-select" name="gender_id" id="gender_id"onkeypress="return tabular(event,this)">
                        <option class="text-center" value="">  - Género -  </option>
                        @foreach($genders as $gender)
                            <option value="{{ $gender['id'] }}">  {{ $gender['tipo'] }}  </option>
                        @endforeach

                    </select> 
                    <br>
                    <select class="form-select"  name="sex_id" id="sex_id"onkeypress="return tabular(event,this)">
                        <option class="text-center" value="">  - Sexo -  </option>
                        @foreach($sexes as $sex)
                            <option value="{{ $sex['id'] }}">  {{ $sex['tipo'] }}  </option>
                        @endforeach

                    </select> 
                    <br>
                    <select class="form-select"  name="martial_id" id="martial_id"onkeypress="return tabular(event,this)">
                        <option class="text-center" value="">  - Estado civil -  </option>
                        @foreach($martials as $martial)
                            <option value="{{ $martial['id'] }}">  {{ $martial['tipo'] }}  </option>
                        @endforeach

                    </select> 
                    <br>
            </div>            
            <div class="col" >
                <label for="Nombre">Fotografía</label>
                <input class="form-control" type="file" name="foto" id="foto" accept="image/*" required>
                <br>
                <input  type="submit" value="Registrar" class="float-end btn btn-outline-success">
            </div>


        </div>
    </form>  

</div>
@endsection

@section('script')

<script src="/reg1\public\js\admin\usuario\crear.js"> </script>

@endsection



