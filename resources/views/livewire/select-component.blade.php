<div>
    <!-- <br>
    <select wire:model='selectPais'>
        <option value="">--- País ---</option>
        @foreach ($paises as $pais)
            <option value="{{$pais->id}}">{{$pais->nombre}}</option>
        @endforeach
    </select>

    
@if(!is_null($estados))
    <br>
    <select wire:model='selectEstados'>
        <option value="">--- Ciudad ---</option>
        @foreach ($estados as $estado)
            <option value="{{$estado->id}}">{{$estado->nombre}}</option>
        @endforeach
    </select>
@endif -->


<br>
<select name="" id="" class="fotm-control" wire:model="pais">
    <option value="">--- País ---</option>
    @foreach($paises as $pais)
        <option value="{{$pais->id}}">{{$pais->nombre}}</option>
    @endforeach
</select>

<br>
<br>

<select name="" id="" class="fotm-control" wire:model="estado">
    <option value="">--- Ciudad ---</option>
    @if($estados->count()==0)
        <option value="">Primero seleccione un país</option>
    @endif
        @foreach($estados as $estado)
            <option value="{{$estado->id}}">{{$estado->nombre}}</option>
        @endforeach



</select>
</div>
