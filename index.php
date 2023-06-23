<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Academia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

    <?php include 'header.php'?>
    <?php include 'clientes.php'?>


  <div class="container">
    <div class="row d-flex" style="margin-top: 2vh; justify-content:space-around;">
      <div class="col-5">
            <div class="resultado" style="height: 30vh; width: 100%; border: 1px solid gray; margin-top: 2vh; border-radius: 10px;">
                <div class="conteudo" style="margin: 10px;">

               
                <?php
                  $nome = isset($_GET['nome']) ? $_GET['nome'] : null;
                  $telefone = isset($_GET['telefone']) ? $_GET['telefone'] : null;
                  $cadastro = isset($_GET['cadastro']) ? $_GET['cadastro'] : null;
                  $acao = isset($_GET['acao']) ? $_GET['acao'] : null;


                  echo $nome . '<br>';
                  echo $telefone . '<br>';
                  echo $cadastro . '<br>';
                ?>


                </div>
            </div>
      </div>
      <div class="col-5">
            <div class="resultado" style="height: 30vh; width: 100%; border: 1px solid gray; margin-top: 2vh; border-radius: 10px;">
                <div class="conteudo" style="margin: 10px;">


                <?php
                  $nomeCliente = isset($_GET['nomeCliente']) ? $_GET['nomeCliente'] : null;
                  $dataPagamento = isset($_GET['dataPagamento']) ? $_GET['dataPagamento'] : null;
                  $valor = isset($_GET['valor']) ? $_GET['valor'] : null;
                  $acao = isset($_GET['acao']) ? $_GET['acao'] : null;

                  echo $nomeCliente . '<br>';
                  echo $dataPagamento . '<br>';
                  echo $valor . '<br>';
                ?>

                    
                </div>
            </div>
      </div>
    </div>
  </div>

  <?php

      // Inclui o arquivo de conexão com o BD
      include 'conexao.php';

      // Declaração SQL a ser executada


      //inserir dados
      if($acao == "inserir"){

        $sql = "INSERT INTO clientes VALUES (0,'$nome', '$telefone', '$cadastro')";
  
        // Executa a declaração SQL
        if ($connection->query($sql) === true) {
            echo "Dados inseridos com sucesso!";
        } else {
            echo "Erro ao inserir dados: " . $connection->error;
        }
      }

?>










  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>