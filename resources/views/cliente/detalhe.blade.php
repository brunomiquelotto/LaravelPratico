@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">
                    <li> <a href="{{ route('cliente.index') }}">Clientes</a>
                    <li class="active">Detalhes</li>
                </ol>
                <div class="panel-body">
                    <div class="col-xs-12 col-md-4 ">
                        <p><b>Cliente: </b>{{ $cliente->nome }}</p>
                        <p><b>E-mail:</b> {{$cliente->email}}</p>
                        <p><b>Endereço:</b> {{$cliente->endereco}}</p>
                    </div>
                    <div class="col-xs-12 col-md-8">
                        <table class="table table-condensed table-stripped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Título</th>
                                    <th>Numero</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cliente->telefones as $telefone)
                                <tr>
                                    <td scope="row" align="center">{{ $telefone->id }}</td>
                                    <td>{{ $telefone->titulo }}</td>
                                    <td>{{ $telefone->telefone }}</td>
                                    <td align="center">
                                        <a class="btn btn-xs btn-default" href="{{ route('telefone.editar',$telefone->id) }}">Editar</a>
                                        <a class="btn btn-xs btn-danger" href="javascript:(confirm('Apagar telefone?') ? window.location.href='{{route('telefone.deletar', $telefone->id)}}' : false)">Excluir</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <p>
                            <a class="btn btn-info" href="{{ route('telefone.adicionar', $cliente->id) }}">Novo telefone <span class="glyphicon glyphicon-plus"></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
