<?php 
/*arquivo pra listar os comentarios*/
//incluir banco de dados 
include '../configuracao/conexao.php';

//fazendo select no banco de dados
$selecionarComentarios=" SELECT * FROM comentario";

//executar o comando
$comentarios = $db->query($selecionarComentarios);

//incluindo o header
include '../componentes/header.php';
?>

<div class="container">
 <div class="row">
  <div class="col-12">
    <h1 class="text-center text-black">
			Comentários
		</h1>  
	</div>
 </div>

<div class="row">
 <div class="col-12">
   <table class="table table-striped table-dark">
      <thead>
				<tr>
				 <th scope="col">ID</th>
				 <th scope="col">ID Usuario</th>
				 <th scope="col">ID Produto</th>
				 <th scope="col">Comentário</th>
			   <th scope="col">Nota</th>
				 <th scope="col">Data</th>
				 <th scope="col">Ações</th>
				</tr>
			</thead>
      <tbody>
				<?php 
         //se a tabela tiver dados
          if($comentarios->fetchArray()){
						 //percorrer a tabela
						while ($comentario = $comentarios->fetchArray()){
							?>
							<tr>
								<td scope="row"><?php echo $comentario['id']; ?></td>
								<td scope="row"><?php echo $comentario['id_usuario']; ?></td>
								<td scope="row"><?php echo $comentario['id_produto']; ?></td>
								<td scope="row"><?php echo $comentario['comentario']; ?></td>
								<td scope="row"><?php echo $comentario['nota']; ?></td>
								<td scope="row"><?php echo $comentario['data']; ?></td>
								<td>
									<a href="delete.php?u_id=<?php echo $comentario['id'];?>" class="btn btn-danger">Excluir</a>
									<a href="editar.php?u_id=<?php echo $comentario['id'];?>" class="btn btn-warning">Editar</a>
								</td>
							</tr>
				<?php
						}
					} else{
						?>
						<tr>
							<td class="text-center">
								Nenhum comentario cadastrado
							</td>
						</tr>
				<?php
					}
        ?>
			 </tbody>
	  </table>
   </div>
  </div>
 </div>


<?php
include '../componentes/footer.php';
?>