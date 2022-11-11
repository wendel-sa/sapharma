<?php 
//arquivo pra mandar pra favoritos

//banco de dados
include '../configuracao/conexao.php';

//recebe o id usuario
$id_usuario = $_POST['id_usuario'];
//recebe id produto
$id_produto = $_POST['id_produto'];

//verifica se ja ta no favoritos
$verifica =$db->query("SELECT * FROM favoritos WHERE id_usuario = '$id_usuario' AND id_produto = '$id_produto'");
$verifica = $verifica->fetchArray(SQLITE3_ASSOC);
if($verifica > 0){
	echo "Produto já está nos favoritos";
}else{
	
	//insere o produto nos favoritos
	$insere = $db->query("INSERT INTO favoritos (id_usuario, id_produto)
VALUES ('$id_usuario', '$id_produto')");
	
	if($insere){
		echo "Produto adicionado aos favoritos";
	}else{
		echo "Erro ao adicionar aos favoritos";
	}
}