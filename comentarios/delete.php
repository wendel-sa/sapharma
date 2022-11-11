<?php
/*Arquivo que irá excluir um cmnt do banco de dados */
//incluir o banco de dados
include '../configuracao/conexao.php';
//pegando o id do cmnt
$id = $_GET['u_id'];
//deletando o comentario
$deleteComentario = "DELETE FROM comentario WHERE id = '$id'";

//se o comando for executado com sucesso
if($db->exec($deleteComentario)){
  echo "Comentario excluído com sucesso!";
}else{
  echo "Erro ao excluir comentario";
} 
?>