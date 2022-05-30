@extends('layouts.app')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    img {
        width:  auto;
        height: 250px;
    }
</style>
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

<div class="container " style="min-height: 100vh ;"> 
<div class="card-header">
        <h3>Registrar </h3>
    </div>
    <br>
    <form class="form-floating " action="{{ url('/usuario' )}}" method="post" enctype='multipart/form-data'>
        @csrf
        <div class="row" > 

            <div class="col">

                <div class="form-floating mb-6">
                    <input class="form-control" type="string" name="nombres" id="nombres" value="{{old('nombres')}}" placeholder="Nombres" autofocus onkeypress="return tabular(event,this)" >
                    <label for="nombres">Nombres *</label>
                    @error('nombres')
                        <small style="color:brown;">*{{$message}}</small>
                    @enderror
                    <br>
                </div>


                <div class="form-floating mb-6">
                    <input class="form-control" type="string" name="apellidos" id="apellidos" value="{{old('apellidos')}}" placeholder="Apellidos"onkeypress="return tabular(event,this)">
                    <label for="apellidos">Apellidos *</label>
                    @error('apellidos')
                        <small style="color:brown;">*{{$message}}</small>
                    @enderror
                    <br>
                </div>


                <div class="form-floating mb-6">
                     <input class="date form-control" type="text"  name="fechan"  value="{{old('fechan')}}" placeholder="Año-Mes-Día" autocomplete="off" onkeypress="return tabular(event,this)">
                     <label for="fechan">Fecha de nacimiento *</label> 
                     @error('fechan')
                        <small style="color:brown;">*{{$message}}</small>
                    @enderror
                    <br>
                </div>

                <div class="form-floating mb-6">
                    <input class="form-control" placeholder="Número" type="tel" name="telefono" id="telefono"  value="{{old('telefono')}}"  onkeypress="return tabular(event,this)">                   
                    <label for="telefono">Teléfono</label>
                    <br>
                </div>


                    <div class="form-group">
                       <label for="identificacion_id">Identificación </label> 
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select  class="form-select"  name="identificacion_id" id="identificacion_id" aria-placeholder="pais" onkeypress="return tabular(event,this)">
                                        <option value=""></option>
                                        @foreach($identificaciones as $identificacion)
                                            <option value="{{ $identificacion['id'] }}">  {{ $identificacion['tipo'] }}  </option>
                                        @endforeach
                                    </select> 
                                    <label for="identificacion_id">Tipo ID</label>
                                    @error('identificacion_id')
                                        <small style="color:brown;">*{{$message}}</small>
                                    @enderror
                                    <br>
                                </div>    


                            </div> 
                            <div class="col-md-6">
                                <div class="form-floating mb-6">
                                    <input  class="form-control"  type="string" name="numeroid" id="numeroid" value="{{old('numeroid')}}" placeholder="Numero ID"onkeypress="return tabular(event,this)">
                                    <label for="numeroid">Numero ID *</label>

                                    @error('numeroid')
                                        <small style="color:brown;">*{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    

            </div>

            
            <div class="col" >
            <div class="form-floating mb-6">      
                        <input class="form-control" type="number" name="cantidad_hijos" id="cantidad_hijos" value="{{old('cantidad_hijos')}}"  placeholder="Cantidad"  onkeypress="return tabular(event,this)">
                         <label  for="email"># Hijos</label>   
                         <br>  
                    </div>

                <div class="form-floating mb-6">    
                    <select class="form-select"  name="martial_id" id="martial_id"onkeypress="return tabular(event,this)">
                        <option class="text-center" value="">  - Estado civil -  </option>
                        @foreach($martials as $martial)
                            <option value="{{ $martial['id'] }}">  {{ $martial['tipo'] }}  </option>
                        @endforeach
                    </select> 
                    <label for="martial_id"> Estado civil</label>

                    @error('martial_id')
                        <small style="color:brown;">*{{$message}}</small>
                    @enderror
                    <br>
                </div>

                <div class="form-group">
                    <label >Lugar de nacimiento </label>
                   
                    <div class="row">
                        <div class="col-md-6">

                            <div  class="form-floating mb-6">
                                <select class="form-select" name="pais_id" id="select-pais">
                                    <option class="text-center" value=""></option>
                                    @foreach($paises as $pais)
                                        <option value="{{$pais['id']}}" >
                                            {{$pais->nombre}}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="pais_id">País *</label>
                                
                                @error('pais_id')
                                    <small style="color:brown;">*{{$message}}</small>
                                @enderror
                               
                            </div>

                        </div>


                        <div class="col-md-6">
                            <div class="form-floating mb-6">

                            
                                <select class="form-select"  name="estado_id" id="select-estado" >
                                    <option  class="text-center" value=""></option>
                                </select>
                                <label for="estado_id">Estado *</label>
                                @error('estado_id')
                                            <small style="color:brown;">*{{$message}}</small>
                                 @enderror
                                        
                            </div>
                        </div>
                    </div>
                </div>
                <br>



                <div class="form-group">
                    <label for="">Lugar donde habita</label>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-6">
                                <input class="form-control" value="{{old('ciudad')}}" placeholder="Ciudad" type="string" name="ciudad" id="ciudad" onkeypress="return tabular(event,this)">
                                <label for="ciudad">Ciudad</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating mb-6">
                                <input class="form-control" placeholder="Comuna" value="{{old('Direccion')}}" type="string" name="Direccion" id="Direccion" onkeypress="return tabular(event,this)">
                                <label for="Direccion">Comuna</label>
                            </div>
                        </div>
                    </div>
                </div>


                    <br>
                    <div class="form-group">
                         <label for="">Adicción</label> 
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-floating mb-6" >
                                    <input class="date form-control" type="text"  name="fechaa" value="{{old('fechaa')}}" placeholder="Año-Mes-Día" autocomplete="off" onkeypress="return tabular(event,this)">
                                    <label for="fechaa">Fecha </label>

                                </div>
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

                 

                    
            </div>            
            <div class="col" >
            <div class="form-floating mb-6">
                        <select  class="form-select" name="gender_id" id="gender_id"  onkeypress="return tabular(event,this)">
                            <option class="text-center" value="">  - Género -  </option>
                            @foreach($genders as $gender)
                                <option value="{{ $gender['id'] }}">  {{ $gender['tipo'] }}  </option>
                            @endforeach
                            

                        </select> 
                        <label for="gender_id">Género *</label>
                        @error('gender_id')
                                            <small style="color:brown;">*{{$message}}</small>
                        @enderror
                    </div>
                    <br>

                <div class="form-floating mb-6">

                    <select class="form-select"  name="sex_id" id="sex_id"onkeypress="return tabular(event,this)">
                        <option class="text-center" value="">  - Sexo -  </option>
                        @foreach($sexes as $sex)
                            <option value="{{ $sex['id'] }}">  {{ $sex['tipo'] }}  </option>
                        @endforeach

                    </select> 
                    <label for="sex_id">Sexo *</label>
                    @error('sex_id')
                                        <small style="color:brown;">*{{$message}}</small>
                    @enderror

                </div>
                    <br>

                <div class="form-floating mb-6">
                    <select class="form-select"  name="occupation_id" id="occupation_id"onkeypress="return tabular(event,this)">
                        <option class="text-center" value="">  - Fuente de ingresos -  </option>
                        @foreach($occupations as $occupation)
                            <option value="{{ $occupation['id'] }}">  {{ $occupation['nombre'] }}  </option>
                        @endforeach

                    </select> 
                    <label for="occupation_id">Ocupación *</label>
                    @error('occupation_id')
                        <small style="color:brown;">*{{$message}}</small>
                    @enderror
                    <br>
                </div>
                    <br>
                <label for="foto">Fotografía</label>
                <input class="form-control" type="file" name="foto" id="foto" accept="image/*" >
                @error('foto')
                         <small style="color:brown;">*{{$message}}</small>
                        @enderror

                <br>

                <input  type="submit" value="Registrar" class="float-end btn btn-outline-success">
                <br>
                <br>
                <div class="row">
                <div id="preview" style="max-width: 250px ;">
                    <p class="text-center"> Imagen</p>
                </div></div>

                <br>
                
            </div>


        </div>
    </form>  

</div>
@endsection

@section('script')

<script src="/reg1\public\js\admin\usuario\crear.js"> </script>

<script>
    (function(){
        function fpreview(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload=function(e){
                    $('#preview').html("<img  src='"+e.target.result+"'/>")
                }
                reader.readAsDataURL(input.files[0])
            }
        }
        $('#foto').change(function(){
            fpreview(this);
        });
    })();
</script>

@endsection



