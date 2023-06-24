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

                <?php
                  $codigo = isset($_GET['codigo']) ? $_GET['codigo'] : null;
                  $nome = isset($_GET['nome']) ? $_GET['nome'] : null;
                  $telefone = isset($_GET['telefone']) ? $_GET['telefone'] : null;
                  $cadastro = isset($_GET['cadastro']) ? $_GET['cadastro'] : null;

                  $codigoP = isset($_GET['codigoP']) ? $_GET['codigoP'] : null;
                  $nomeCliente = isset($_GET['nomeCliente']) ? $_GET['nomeCliente'] : null;
                  $dataPagamento = isset($_GET['dataPagamento']) ? $_GET['dataPagamento'] : null;
                  $valor = isset($_GET['valor']) ? $_GET['valor'] : null;
                  
                  $acao = isset($_GET['acao']) ? $_GET['acao'] : null;
                  $acao2 = isset($_GET['acao2']) ? $_GET['acao2'] : null;
                ?>

  <div class="container">
    <div class="row d-flex" style="margin-top: 2vh; justify-content:space-around; flex-wrap: wrap;">
      <div class="col-5">
            <div class="resultado d-flex" style="height: 30vh; width: 100%; margin-top: 2vh;">
                <div class="conteudo" style="height: 100%; width: 100%;margin: 10px;">

               
                  <?php
                        // Inclui o arquivo de conexão com o BD
                        include 'conexao.php';
                  
                        // Declaração SQL a ser executada
                  
                  
                        //inserir dados
                        if($acao == "inserir"){
                  
                          $sql = "INSERT INTO clientes VALUES ($codigo,'$nome', '$telefone', '$cadastro')";
                    
                          // Executa a declaração SQL
                          if ($connection->query($sql) === true) {
                              echo "Dados inseridos com sucesso!";
                          } else {
                              echo "Erro ao inserir dados: " . $connection->error;
                          }
                        }else{
                          //deletar dados
                          if($acao == "excluir"){
                          
                          $sql = "DELETE FROM clientes WHERE idcliente = '$codigo'";
                          
                          // Executa a declaração SQL
                          if ($connection->query($sql) === true) {
                              echo ('Registro apagado com sucesso!');
                          } else {
                              echo ('Erro ao apagar registro: ' . $connection->error);
                          }
                        }else{
                          if($acao == "consultar"){
                            
                  
                            $sql = "SELECT idcliente, nome, telefone, data_cadastro FROM clientes";
                  
                            // Executa a declaração SQL e retorna o resultado
                            $result = $connection->query($sql);
                            
                            // Verificar se há linhas de registros no resultado
                            if ($result->num_rows > 0) {
                            
                                // Faz Loop em cada registro recuperado
                                while ($row = $result->fetch_assoc()) {
                                    // Access the data in each row
                                    echo  ' ID: ' . $row["idcliente"] . '<br>';
                                    echo ' NOME: ' .$row["nome"]  . '<br>';
                                    echo ' TELEFONE: ' .$row["telefone"] . '<br>';
                                    echo ' CADASTRO EM: ' .$row["data_cadastro"] . '<br>' . '<br>';
                                }
                            
                            } else {
                                echo "Nenhum registro encontrado!";
                            }
                  
                  
                          }else{
                            if($acao == "atualizar"){
                  
                              $sql = "UPDATE clientes SET idcliente = '$codigo', nome = '$nome', telefone = '$telefone', data_cadastro = '$cadastro' WHERE idcliente = '$codigo'";
                    
                              // Executa a declaração SQL
                              if ($connection->query($sql) === true) {
                                  echo "Dados atualizados com sucesso.";
                              } else {
                                  echo "Erro ao atualizar dados: " . $connection->error;
                              }
                            
                            }
                  
                          }
                        }
                        }
                  ?>

                </div>
            </div>
      </div>
      <div class="col-5">
            <div class="resultado d-flex" style="margin-top: 2vh; justify-content:space-around; flex-wrap: wrap;">
                <div class="conteudo" style="height: 100%; width: 100%;margin: 10px;">

                <?php
                        // Inclui o arquivo de conexão com o BD
                        include 'conexao.php';
                  
                        // Declaração SQL a ser executada
                  
                  
                        //inserir dados
                        if($acao2 == "inserirP"){
                  
                          $sql = "INSERT INTO pagamento VALUES ('$codigoP','$nomeCliente', '$dataPagamento', $valor)";
                    
                          // Executa a declaração SQL
                          if ($connection->query($sql) === true) {
                              echo "Dados inseridos com sucesso!";
                          } else {
                              echo "Erro ao inserir dados: " . $connection->error;
                          }
                        }else{
                          //deletar dados
                          if($acao2 == "excluirP"){
                          
                          $sql = "DELETE FROM pagamento WHERE idpagamento = '$codigoP'";
                          
                          // Executa a declaração SQL
                          if ($connection->query($sql) === true) {
                              echo ('Registro apagado com sucesso!');
                          } else {
                              echo ('Erro ao apagar registro: ' . $connection->error);
                          }
                        }else{
                          if($acao2 == "consultarP"){
                            
                            // RESOLVER PROBLEMA DE NÃO CONSEGUIR UTILIZAR COMANDO 'OR'
                            $sql = "SELECT idpagamento, nomecliente, data_pagamento, valor_pagamento FROM pagamento WHERE nomecliente = '$nomeCliente'";
                  
                            // Executa a declaração SQL e retorna o resultado
                            $result = $connection->query($sql);
                            
                            // Verificar se há linhas de registros no resultado
                            if ($result->num_rows > 0) {
                            
                                // Faz Loop em cada registro recuperado
                                while ($row = $result->fetch_assoc()) {
                                    // Access the data in each row
                                    echo " ID: " . $row["idpagamento"] . '<br>' ;
                                    echo " CLIENTE: " . $row["nomecliente"] . '<br>' ;
                                    echo " DATA PAGAMENTO: " . $row["data_pagamento"] . '<br>' ;
                                    echo " VALOR: " . $row["valor_pagamento"] . '<br>' . '<br>';
                                }
                            
                            } else {
                                echo "Nenhum registro encontrado!";
                            }
                  
                  
                          }else{
                            if($acao2 == "atualizarP"){
                  
                              $sql = "UPDATE pagamento SET idpagamento = '$codigoP', nomecliente = '$nomeCliente',
                              data_pagamento = '$dataPagamento', valor_pagamento = '$valor' WHERE idpagamento = '$codigoP'";
                    
                              // Executa a declaração SQL
                              if ($connection->query($sql) === true) {
                                  echo "Dados atualizados com sucesso.";
                              } else {
                                  echo "Erro ao atualizar dados: " . $connection->error;
                              }
                            
                            }
                  
                          }
                        }
                        }
                  ?>

                    
                </div>
            </div>
      </div>
    </div>
  </div>











  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
  </body>
</html>