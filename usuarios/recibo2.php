<?php
/*com o $SESSION['UsuarioID'] você pode fazer 
uma query no banco de dados e pegar os dados do usuario*/
if (!isset($_SESSION)) session_start();
//incluir o arquivo conexao.php
include '../configuracao/conexao.php';
//incluir head

//criar a variavel de query com um select * da tabela usuarios
$query = "SELECT * FROM usuarios WHERE email = '" . $_SESSION['usuario'] . "' LIMIT 1";


//executar a query em PDO
$user = $db->query($query);

//pegar o id da venda
$IdVenda = $_GET['u_id'];

include '../componentes/header.php';
//fazer um foreach com os dados de $resultado e mostrar Nome no html
while ($linha = $user->fetchArray()) {
 
?>

                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Recibo</h1>
                                <div>
                                    <h3>Dados do Usuário</h3>
                                    <p>Nome: <?php echo $linha['nome']; ?></p>
  <p>Email <?php echo $linha['email']; ?></p>
   <p>Data de Nascimento: <?php echo $linha['data_nascimento']; ?></p>
                                    
                                </div>
                                <?php
                                /*Realizar uma query para pegar os dados da compra
                        e mostrar no html*/
                                $query2 = "SELECT * FROM compra WHERE id = '$IdVenda'";
                         
                                $venda = $db->query($query2);
                                while ($DadosVenda  = $venda->fetchArray()) {
                                ?>
                                    <div>

                                        <h3>Dados da Venda</h3>
                                        <p>Id da Venda: <?php echo $DadosVenda['id']; ?></p>
                                        <p>Valor da Venda: <?php echo $DadosVenda['valorTotal']; ?></p>
                                        <p>Quantidade: <?php echo $DadosVenda['quantidade']; ?></p>
                                 
                                     
                                    </div>

                                    <?php
                                    /*Realizar uma query para pegar os dados do produto
                        e mostrar no html*/
                                    $query3 = "SELECT * FROM produtos WHERE id = '" . $DadosVenda['id_produto'] . "'";
                            
                          $produtoQ = $db->query($query3);
                                    while ($produto = $produtoQ->fetchArray()) {
                                    ?>
                                        <div>
                                            <h3>Dados do Produto</h3>
                                            <img src="<?php echo $produto['imagem']; ?>" alt="Imagem do Produto" width="200px">

                                            <p>Nome do Produto: <?php echo $produto['nome']; ?></p>
                                            
                                            <p>Valor unitario: <?php echo $produto['preco']; ?></p>
                                           

                                        </div>
                                      
                                <?php
                                    }
                                }
                                ?>




                            </div>
                        </div>
                    </div>
                </section>

            <?php
        }

            ?>
<?php
   include "../componentes/footer.php";
?>