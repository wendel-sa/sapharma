<?php
/*ARQUIVO DE PERFIL DO USUARIO */
session_start();

$idVenda = $_GET['u_id'];

//incluir o arquivo de conexao com o banco de dados
include "../configuracao/conexao.php";

//criar a variavel de query com um select * da tabela usuarios
$DadosUser = "SELECT * FROM usuarios WHERE
email = '" . $_SESSION['usuario'] . "'";

//executar a query em pdo
$consulta = $db->query($DadosUser);

//salva os dados do usuarios em variaveis
while ($row_user = $consulta->fetchArray()) {
    $id = $row_user["id"];
    $nome = $row_user['nome'];
    $email = $row_user['email'];
    $data_nascimento = $row_user['data_nascimento'];
    $foto = $row_user['foto'];
}

 /*Realizar uma query para pegar os dados da compra e mostrar no html*/
  $query2 = "SELECT * FROM compra WHERE id = '$idVenda'";
echo $query2;
  $venda = $db->query($query2);

  while ($DadosVenda  = $venda->fetchArray()) {
    $id_compra = $DadosVenda['id'];
    $quantidade_compra = $DadosVenda['quantidade'];
    $valor_total = $DadosVenda['valorTotal'];
    $id_produto = $DadosVenda['id_produto'];
  }

  $sql3 = "SELECT * FROM produtos WHERE id = '$id_produto'";
  echo $sql3;
    $produto = $db->query($sql3);

    while ($DadosProduto = $produto->fetchArray()) {
      $nome_produto = $DadosProduto['nome'];
      $descricao = $DadosProduto['descricao'];
      $preco = $DadosProduto['preco'];
      $foto = $DadosProduto['foto'];
    }

//inclui o arquivo de componentes/header.php
include "../componentes/header.php";
?>
<div>
   
  <div class="row">
<div class="col-2">
</div>
  </div>
<div class="px-5 overflow-auto">
					<div class="row custom-bg py-3 text-black d-flex  justify-content-center">
								<div class="col-md-4 shadow">
                  </br>
                  <hr>
										<h3 class="text-center">
											Recibo da compra
                      
										</h3>
                  <hr>
                  <h5 class="text-center">Informações do Cliente</h5>
                  <hr>
                  <div align="left">
                    <table>
                      <th scope="col">Nome:</th>
                      <th scope="col"><?php echo $nome ?></th>
                    </table>
                    <table>
                      <th scope="col">Email:</th>
                      <th scope="col"><?php echo $email ?></th>
                    </table>
                    <table>
                      <th scope="col">Data de Nascimento:</th>
                      <th scope="col"><?php echo $data_nascimento ?></th>
                    </table>
                  </br>
                    <hr>
                    <h5 class="text-center">Informações da Compra</h5>
                  <hr>
                  <div>
                    <table>
                      <th scope="col">Produto:</th>
                      <th scope="col"><?php echo $nome_produto ?></th>
                    </table>
                    <table>
                      <th scope="col">Quantidade:</th>
                      <th scope="col"><?php echo $quantidade_compra ?></th>
                    </table>
                    <table>
                      <th scope="col">Valor Unid:</th>
                      <th scope="col">R$<?php echo number_format( $valor ,2,",",".");?></th>
                    </table>
                    <table>
                      <th scope="col">Valor Total:</th>
                      <th scope="col">R$<?php echo number_format( $valor_total ,2,",",".");?></th>
                    </table>
                    </br>
                    <hr>
                    
                      SAFarma
                    </div>
                  </>
                  <div class="col-2">
                  </div>
                    
                </div>
          </div>
            <div align="center">
                    <button class="btn btn-warning text-white"  align="center" id="imprimir" onclick="window.print()">
                                    Imprimir
                              </button>
              
                    </div>
</div>
</div>
</div>
</div>
<?php
  include '../componentes/footer.php';
?>