@extends('layout')
@section('titulo','Cadastro de Produto')
@section('conteudo')
<div class="container mt-5">
  <h2>Cadastro de Produto</h2>
  <form method="POST" action="{{route('produto.salvar')}}">
    @csrf
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome do produto" required>
    </div>
    <div class="form-group">
      <label for="descricao">Descrição:</label>
      <textarea class="form-control" id="descricao"  rows="4" name="descricao" placeholder="Informe a descrição do produto" required></textarea>
    </div>
    <div class="form-group">
      <label for="preco">Preço:</label>
      <input type="number" step="0.01" class="form-control" id="preco" name="preco" placeholder="Informe o preço do produto" required>
    </div>
    <div class="form-group">
      <label for="quantidade">Quantidade:</label>
      <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="Informe a quantidade disponível" required>
    </div>
    <div class="form-group">
      <label for="cod_barras">Código de Barras:</label>
      <input type="text" class="form-control" id="cod_barras" name="cod_barras" placeholder="Informe o código de barras">
    </div>
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