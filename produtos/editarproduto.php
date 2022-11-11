<?php 
//arquivo para preencher o formulario com os dados do produto
//conexao com o banco de dados
include '../configuracao/conexao.php';

//Recebe o id do produto via GET
$id = $_GET['id'];

//selecione os dados do produto
$result_produto = "SELECT * FROM produtos WHERE id = '$id' LIMIT 1";

//executa a query do produto
$resultado_produto = $db->query($result_produto);

//faça um loop para pegar os dados do produto
while($row_produto = $resultado_produto->fetchArray()) {
	$nome = $row_produto['nome'];
	$tipo = $row_produto['tipo'];
	$descricao = $row_produto['descricao'];
	$preco = $row_produto['preco'];
	$quantidade = $row_produto['quantidade'];
	$imagem = $row_produto['imagem'];
}

//inclua o header
include '../componentes/header.php';
?>
<section class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-white">
				<h1>Editar</h1>
			</div>
	<div class="row text-white">
		<div class="col-md-12">
			<form action="updateproduto.php"
				  method="POST">
<div class="form-group">  
  <label for="nome">Nome</label>
  <input type="text" class="from-control"
    name="nome"
    id="nome" 
  value="<?php echo $nome; ?>">
</div>
				
<div class="form-group">  
  <label for="tipo">Tipo</label>
  <input type="text" class="from-control" name="tipo" id="tipo"
  value="<?php echo $tipo; ?>"> </input>
</div>
        
<div class="form-group">  
  <label for="descricao">Descrição</label>
  <textarea class="from-control"
    name="descricao"
    id="descricao" rows="3">
  <?php echo $descricao; ?> </textarea>
</div>

<div class="form-group">
  <label for="preco">Preço</label>
  <input type="text" class="from-control"
    name="preco"
    id="preco" value="<?php echo $preco; ?>">
</div>

<div class="form-group">
  <label for="quantidade">Quantidades</label>
  <input type="text" class="from-control"
    name="quantidade"
    id="quantidade" value="<?php echo $quantidade; ?>">
</div>

<div class="form-group row py-2">
   <div class="col-8">
      <label for="imagem">Imagem</label>
      <input text="type" class="form-control"
          name="imagem"
          id="imagem"
          value="<?php echo $imagem;?>">
	 </div>

  <div class="col-4">
     <img src="<?php echo $imagem;?>"
     class="img-fluid"
     height="50vh" alt="Imagem do produto">
  </div>
</div> 

<input type="hidden" name="id" value="<?php echo $id; ?>">
<button type="submit" class="btn btn-secondary">Editar</button>
	</form>
</div>
</div>
</div>
</section>		

<?php
include '../componentes/footer.php'
	?>