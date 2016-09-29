@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('cliente.index') }}">Clientes</a></li>
                    <li><a href="{{ route('cliente.detalhe', $telefone->cliente->id)}}">Detalhes</a>
                    <li class="active">Editar telefone</li>
                </ol>
                <div class="panel-body">
                    <p><b>Cliente:</b> {{$telefone->cliente->nome}}</p>
                    <form action="{{ route('telefone.atualizar', $telefone->id) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="text" name="titulo" class="form-control" placeholder="Título do Telefone" value="{{$telefone->titulo}}">
                        </div>
                        <div class="form-group">
                            <label for="telefone">Número do telefone</label>
                            <input type="text" name="telefone" class="form-control" placeholder="(99) 9999-9999" value="{{$telefone->telefone}}">
                        </div>
                        <button class="btn btn-info">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
