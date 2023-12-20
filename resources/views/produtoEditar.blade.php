@extends('layout')
@section('titulo','Cadastro de Produto')
@section('conteudo')
<div class="container mt-5">
  <h2>Editar Produto</h2>
  <form method="POST" action="{{route('produto.atualizar')}}">
    @csrf
    @include('formProduto')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
            <div class="col-md-4">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>

  </form>
</div>
@endSection