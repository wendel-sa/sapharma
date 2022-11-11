<?php
/*Arquivo que ira receber os dados do
//formulario de update e mandar para o banco */
//incluir o arquivo de conexao com o banco de dados
include "../configuracao/conexao.php";

//receber os dados do formulario
$foto = $_POST['foto'] == '' ? 'https://img.r7.com/images/meme-sorriso-forcado-hide-the-pain-harold-maurice-andras-arato-08112019141226221?dimensions=630x404' : $_POST['foto'] ;
$id = $_POST['id'];


//atualizar os dados do usuario
$result_produto ="UPDATE usuarios
SET foto='$foto'
WHERE id='$id'";


//executar a query em pdo
$resultado_perfil = $db->exec($result_produto);

//verificar se foi alterado
//redirecionar para a pagina de listar usuarios
header("Location: perfil.php");


?>