
<div class="container">
    
<div class="row d-flex" style="margin-top: 3vh; justify-content:space-around;">

<div class="col-5">
<h1>Clientes</h1>

<form action="index.php" method="GET">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Código</label>
          <input type="number" class="form-control" name="codigo" placeholder="Insira seu ID">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nome</label>
          <input type="text" class="form-control" name="nome" placeholder="Insira seu nome">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Telefone</label>
          <input type="texto" class="form-control" name="telefone" placeholder="Insira seu telefone">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Data de cadastro</label>
          <input type="date" class="form-control" name="cadastro" placeholder="Insira a data de cadastro">
        </div>

        <button type="submit" class="btn btn-dark" name="acao" value="inserir">Inserir</button>
        <button type="submit" class="btn btn-dark" name="acao" value="excluir">Excluir</button>
        <button type="submit" class="btn btn-dark" name="acao" value="atualizar">Atualizar</button>
        <button type="submit" class="btn btn-dark" name="acao" value="consultar">Consultar registros</button>
        
    

    </form>
</div>
<div class="col-5">
<h1>Pagamento</h1>

<form action="index.php" method="GET">
    <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Código</label>
          <input type="number" class="form-control" name="codigoP" placeholder="Insira o ID do pagamento">
        </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nome do cliente</label>
      <input type="text" class="form-control" name="nomeCliente" placeholder="Insira seu nome">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Valor a pagar</label>
      <input type="number" class="form-control" name="valor" placeholder="Insira ao valor">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Data de pagamento</label>
      <input type="date" class="form-control" name="dataPagamento" placeholder="Insira a data">
    </div>

    <button type="submit" class="btn btn-dark" name="acao2" value="inserirP">Inserir</button>
    <button type="submit" class="btn btn-dark" name="acao2" value="excluirP">Excluir</button>
    <button type="submit" class="btn btn-dark" name="acao2" value="atualizarP">Atualizar</button>
    <button type="submit" class="btn btn-dark" name="acao2" value="consultarP">Consulta por nome</button>
    


</form>
</div>
</div>
</div>

