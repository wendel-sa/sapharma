<?php
//se a sessao nao existir, inicia uma
if (!isset($_SESSION)) session_start();

//verifica se o usuario esta logado
if (!isset($_SESSION['usuario'])) {
    //se nao estiver logado, redireciona para a pagina de login
    header("Location: ../usuarios/login.php");
    exit;
}

include '../configuracao/conexao.php';
include '../componentes/header.php';
?>

<section class="container">
    <h1 class="text-center">
        Todas as compras
    </h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Produto</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Valor Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result_compra = "SELECT * FROM compra";
            $resultado_compra = $db->query($result_compra);
            while ($row_compra = $resultado_compra->fetchArray()) {
                $id_venda = $row_compra['id'];
                $idProduto = $row_compra['id_produto'];
                $result_produto = "SELECT * FROM produtos WHERE id = '$idProduto'";
                $resultado_produto = $db->query($result_produto);
                while ($row_produto = $resultado_produto->fetchArray()) {
                    $nome_produto = $row_produto['nome'];
                    $preco = $row_produto['preco'];
                }
                $quantidade_compra = $row_compra['quantidade'];
                $valor_total = $row_compra['valorTotal'];
            ?>
                <tr>
                    <td scope="row"><?php echo $id_venda ?></td>
                    <td><?php echo $nome_produto ?></td>
                    <td><?php echo $quantidade_compra ?></td>
                    <td>R$<?php echo number_format($valor_total, 2, ",", "."); ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>

    </table>
</section>

<section class="container">
    <h1 class="text-center">
        Compras usuario Logado
    </h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Produto</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Valor Total</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result_compra = "SELECT * FROM compra WHERE id_usuario = " . $_SESSION['idUsuario'];
            $resultado_compra = $db->query($result_compra);
            while ($row_compra = $resultado_compra->fetchArray()) {
                $id_venda = $row_compra['id'];
                $idProduto = $row_compra['id_produto'];
                $result_produto = "SELECT * FROM produtos WHERE id = '$idProduto'";
                $resultado_produto = $db->query($result_produto);
                while ($row_produto = $resultado_produto->fetchArray()) {
                    $nome_produto = $row_produto['nome'];
                    $preco = $row_produto['preco'];
                }
                $quantidade_compra = $row_compra['quantidade'];
                $valor_total = $row_compra['valorTotal'];
            ?>
                <tr>
                    <td scope="row"><?php echo $id_venda ?></td>
                    <td><?php echo $nome_produto ?></td>
                    <td><?php echo $quantidade_compra ?></td>
                    <td>R$<?php echo number_format($valor_total, 2, ",", "."); ?></td>
                    <td>
                        <a href="../usuarios/recibo.php?id=<?php echo $row_compra['id']; ?>" class="btn btn-primary">Recibo</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>

    </table>
</section>

<?php
include '../componentes/footer.php';
?>