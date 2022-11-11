<?php
include '../configuracao/conexao.php';

//pegar dados do formulário
$nome = $_POST['nome']. " ". $_POST['sobrenome'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];
$senha = $_POST['senha'];
$foto = $_POST['foto'];



//inserir os dados no banco de dados
//criar query de inserção
$inserir = "INSERT INTO usuarios(nome, email, data_nascimento, senha, foto) VALUES 
  ('$nome', '$email' , '$data_nascimento' , '$senha' , '$foto')";

//executar a query
$db->exec($inserir);

//redirecionar para a pagina de listar usuarios
header("Location: Login.php");
/**/
header("Location: Login.php");

?>
