<?php

$dbname = "../bancodedados.db";
$db = new SQLite3($dbname); 

// criando a tabela de produtos no banco de dados 
$TabelaProdutos = 
  "CREATE TABLE IF NOT EXISTS produtos(
id INTEGER PRIMARY KEY AUTOINCREMENT,
nome TEXT,
tipo TEXT,
descricao TEXT,
preco REAL,
quantidade INTEGER,
imagem TEXT
)";

$db->exec($TabelaProdutos);


//criando a tabela de usuários no banco de dados
$TabelaUsuario = 
  "CREATE TABLE IF NOT EXISTS usuarios (
id INTEGER PRIMARY KEY AUTOINCREMENT,
nome TEXT,
email TEXT,
data_nascimento TEXT,
senha TEXT,
foto TEXT
)";

$db->exec($TabelaUsuario);

//tabela de compra
$TabelaCompra =
  "CREATE TABLE IF NOT EXISTS compra(
id INTEGER PRIMARY KEY AUTOINCREMENT,
id_usuario INTEGER,
id_produto INTEGER,
quantidade INTEGER,
valorTotal REAl,
FOREIGN KEY (id_usuario) REFERENCES usuarios(id),
FOREIGN KEY (id_produto) REFERENCES produtos(id)
)";

$db->exec($TabelaCompra);

//tabela de comentarios

$TabelaComentario =
"CREATE TABLE IF NOT EXISTS comentario(
id INTEGER PRIMARY KEY AUTOINCREMENT,
id_usuario INTEGER,
id_produto INTEGER,
nota INTEGER,
comentario TEXT,
data TEXT,
FOREIGN KEY (id_usuario) REFERENCES usuarios(id),
FOREIGN KEY (id_produto) REFERENCES produtos(id))";

$db->exec($TabelaComentario);

//Tabela de favorito
$tabelaFavoritos =
	"CREATE TABLE IF NOT EXISTS favoritos(
id INTEGER PRIMARY KEY AUTOINCREMENT,
id_usuario INTEGER,
id_produto INTEGER,
FOREIGN KEY(id_usuario) REFERENCES usuario(id),
FOREIGN KEY(id_produto) REFERENCES usuario(id)
)";
$db->exec($tabelaFavoritos);
?>