<?php
include'../configuracao/conexao.php';
//pegar id do url
$IdProduto = $_GET['u_id'];

//variavel com o comando de deletar
$DeletarProduto= "DELETE FROM produtos WHERE id ='$IdProduto'";

//execute comando
if($db->exec($DeletarProduto)) {
  echo "Produto Excluído com sucesso!";
} else {
  echo "Erro ao excluir produto";
}

?>
