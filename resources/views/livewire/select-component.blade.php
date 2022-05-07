<div>
    <br>
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
@endif
</div>
