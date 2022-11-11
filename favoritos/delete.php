<?php
//arquivo pra tirar dos favoritos

//banco de dados
include '../configuracao/conexao.php';

//recebe o id usuario
$id_usuario = $_POST['id_usuario'];
//recebe id produto
$id_produto = $_POST['id_produto'];

//Deletar dos favoritos
$delete = $db->query("DELETE FROM favoritos WHERE id_usuario = '$id_usuario' AND id_produto = '$id_produto'");
if($delete){
	echo "Produto deletado dos favoritos";
}else{
	echo "Erro ao deletar dos favoritos";
}