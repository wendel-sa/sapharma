<?php
include'../configuracao/conexao.php';
//pegar id do url
$IdCompra = $_GET['u_id'];

//variavel com o comando de deletar
$DeletarCompra= "DELETE FROM compra WHERE id ='$IdCompra'";

echo $DeletarCompra;

$teste = $db->query($DeletarCompra);
//execute comando
if($teste){
  echo "Produto Excluído com sucesso!";
} else {
  echo "Erro ao excluir produto";
}

?>
