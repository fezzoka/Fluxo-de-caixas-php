@extends('layouts.base')
@section('conteudo')
<h1>
    @if($centro)
    Atualizar centro de custo
    @else
    Novo centros
    @endif
</h1>
@if ($centro)
<form action="{{ route('centro.update', ['id'=>$centro->id_centro_custo]) }}" method="post">
@else
<form action="{{ route('centro.store') }}" method="post"> 
@endif
    @csrf
    <div class="row">
        <div class="form-group col-md-5"
        <label for="centro_custo">centro*</label>
        <input type="text" name="centro_custo" id="centro_custo" value="{{$centro? $centro->centro_custo:old('centro_custo')}}"required class="form-control" >
    </div>
    <div class="form-group col-md-4"
    <label for="id_tipo"class="form-label">Tipo*</label>
    <select name="id_tipo" id="id_tipo" required class="form-control">
        <option value="">selecione</option>
        @foreach($tipos as $tipo)
        <option value="{{$tipo->id_tipo }}"
           {{($centro && $centro->id_tipo == $tipo->id_tipo)?'selected':''}} 
            >
            {{$tipo->tipo}}
        </option>
        @endforeach
    </select>
</label>
    <div class="form-group col-md2">
        <input type="submit" value="{{$centro?'Atualizar':'Cadastrar'}}"class="btn btn-primary">
    </div>
@endsection