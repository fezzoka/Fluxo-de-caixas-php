@extends('layouts.base')

@section('conteudo')
    <h1>Centros de Custo
    -
    <a href="{{ route('centro.create') }}" class="btn btn-dark">
        Novo
    </a>
</h1>

<table class="table table-striped table-border">
    <thead>    
        <tr>
            <th>Ações</th>
            <th>ID</th>
            <th>centro</th>
            <th>Centro de Custo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($centros->get() as $centro)
        <tr>
            <td>
                <a href="{{ route('centro.edit', ['id'=>$centro->id_centro_custo]) }}" class="btn btn-primary">
                    Editar
                </a>
                <a href="{{ route('centro.edit', ['id'=>$centro->id_centro_custo]) }}" class="btn btn-danger">
                    Deletar
                </a>
               <a href="{{ route('centro.edit', ['id'=>$centro->id_centro_custo]) }}" class="btn btn-primary">
                    Exibir
                
            </td>
            <td>{{$centro->id_centro_custo}}</td>
            <td>{{$centro->tipo->tipo}}</td>
            <td>{{$centro->id_centro_custo}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection