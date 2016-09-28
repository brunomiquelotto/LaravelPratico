@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">
                    <li class="active">Clientes</li>
                </ol>
                <div class="panel-body">
                    <p>
                        <a href="{{ route('cliente.adicionar') }}" class="btn btn-info">Adicionar</a>
                    </p>
                    <table class="table table-condensed table-stripped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Endereço</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($clientes as $cliente)
                            <tr>
                                <td scope="row">{{ $cliente->id }}</td>
                                <td>{{ $cliente->nome }}</td>
                                <td>{{ $cliente->email }}</td>
                                <td>{{ $cliente->endereco }}</td>
                                <td>
                                    <a class="btn btn-xs btn-default" href="{{ route('cliente.editar', $cliente->id) }}">Editar</a>
                                    <a class="btn btn-xs btn-danger" href="javascript:(confirm('Apagar cliente?') ? window.location.href='{{route('cliente.deletar', $cliente->id)}}' : false)">Excluir</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div align="center">
                            {!! $clientes->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
