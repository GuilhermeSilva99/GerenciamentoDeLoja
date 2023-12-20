<div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome do produto" value ="{{isset($produto->nome)?$produto->nome : ''}}" required>
</div>
<div class="form-group">
    <label for="descricao">Descrição:</label>
    <textarea class="form-control" id="descricao"  rows="4" name="descricao" placeholder="Informe a descrição do produto" required>{{isset($produto->descricao)?$produto->descricao : ''}}</textarea>
</div>
<div class="form-group">
    <label for="preco">Preço:</label>
    <input type="number" step="0.01" class="form-control" id="preco" name="preco" placeholder="Informe o preço do produto" value ="{{isset($produto->preco)?$produto->preco : ''}}" oninput="validarPreco(this)" min="0" required>
</div>
<div class="form-group">
    <label for="quantidade">Quantidade:</label>
    <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="Informe a quantidade disponível"  value ="{{isset($produto->quantidade)?$produto->quantidade : ''}}" oninput="validarQuantidade(this)" min="0" required>
</div>
<div class="form-group">
    <label for="cod_barras">Código de Barras:</label>
    <input type="text" class="form-control" id="cod_barras" name="cod_barras" placeholder="Informe o código de barras" value ="{{isset($produto->cod_barras)?$produto->cod_barras : ''}}">
</div>
<div class="form-group">
    <input type="number" hidden class="form-control" id="id" name="id" value ="{{isset($produto->id)?$produto->id : ''}}"required>
</div>

<script>
  function validarQuantidade(input) {
    // Converte o valor para um número inteiro
    let valor = parseInt(input.value);

    // Verifica se o valor é negativo
    if (valor < 0 || isNaN(valor)) {
      // Define o valor como zero se for negativo ou não for um número
      input.value = 0;
    }
  }

  function validarPreco(input) {
    // Converte o valor para um número de ponto flutuante
    let valor = parseFloat(input.value);

    // Verifica se o valor é negativo
    if (valor < 0 || isNaN(valor)) {
      // Define o valor como zero se for negativo ou não for um número
      input.value = 0.00.toFixed(2);
    }
  }
</script>