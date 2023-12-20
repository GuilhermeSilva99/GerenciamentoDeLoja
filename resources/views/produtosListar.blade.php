@extends('layout')
@section('titulo','Lista de Produtos')

@section('conteudo')
<div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Lista de Produtos</h1>
            </div>
            <div class="col-md-4">
                <a href="{{route('produto.cadastrar')}}" class="btn btn-primary">Cadastrar</a>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{ $produto->descricao }}</td>
                        <td>{{ $produto->preco }}</td>
                        <td>{{ $produto->quantidade }}</td>
                        <td><a href="{{route('produto.editar',$produto->id)}}" class="btn btn-warning">Editar</a> </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endSection