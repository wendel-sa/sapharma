<?php
/*Arquivo que irá receber os dados
//do formulário da compra*/

//incluir o arquivo de conexao com o banco de dados
  include '../configuracao/conexao.php';

//receber os dados do formulário
$idProduto = $_POST['idProduto'];
$idUsuario = $_POST['idUsuario'];
$quantidade = $_POST['quantidade'];
$valor = $_POST['valor'];

//converte o valor para float
$valor = floatval($valor);

//converte quantidade para int
$quantidade = (int)$quantidade;
$valorTotal = $quantidade * $valor;

//inserir os dados da compra
$result_compra = "INSERT INTO compra (id_produto, id_usuario, quantidade, valorTotal) VALUES ('$idProduto', '$idUsuario', '$quantidade', '$valorTotal')";
//executar a query em pdo
$resultado_compra = $db->exec($result_compra);

//verificar se foi inserido
if ($resultado_compra) {
    header("Location: ../usuarios/perfil.php");
									
}else{
	echo "Erro ao finalizar compra";
}
?>