@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Clientes</div>

                <div class="panel-body">
                    <h1>Olá!</h1>
                    <p> Confira a lista de clientes:</p>
                    <table class="table table-condensed table-stripped table-bordered table-hover">
                        <thead>
                            <th> Nome </th>
                            <th> E-mail </th>
                            <th> Endereço </th>
                        </thead>
                        <tbody>

                        @foreach($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->nome }}</td>
                                <td>{{ $cliente->email }}</td>
                                <td>{{ $cliente->endereco }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
