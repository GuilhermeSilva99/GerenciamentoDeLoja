@extends('layout')
@section('titulo','Cadastro de Produto')
@section('conteudo')
<div class="container mt-5">
  <h2>Cadastro de Produto</h2>
  <form method="POST" action="{{route('produto.salvar')}}">
    @csrf
    
    @include('formProduto')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
            <div class="col-md-4">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>

  </form>
</div>
@endSection