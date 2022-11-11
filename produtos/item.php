<?php

//se a sessão não existir, iniciar a sessão
if (!isset($_SESSION)) session_start();

include '../configuracao/conexao.php';

$id = $_GET['u_id'];

include '../componentes/header.php';

//fazer um select na tabela produtos
$sql = "SELECT * FROM produtos WHERE Id= $id";

//executar o select em pdo

$resultado = $db->query($sql);


while ($item = $resultado->fetchArray()) {
    

?>
	<!-- Product section-->
	<section>
			<div class="container px-4 px-lg-5 my-5">
					<div class="row gx-4 gx-lg-5 align-items-top">
							<div class="col-md-6"><img class="card-img-top mb-5 mb-md-0 shadow rounded" src="<?php echo $item['imagem'] ?>" alt="<?php echo $item['nome']; ?>" /></div>
							<div class="col-md-6">
							
									<h1 class="display-4 fw-bolder"><?php echo $item['nome']; ?></h1>
									<div class="fs-5 mb-2">
											<h2>R$ <?php echo number_format($item['preco'], 2, ",", "."); ?></h2>
									</div>
									<p class="lead"> <?php echo $item['descricao']; ?></p>


									<div class="d-flex">

										<?php
										//se o usuario esta logado
										//mostrar o botao de comprar
										if (isset($_SESSION['usuario'])) {
												$idUser = "SELECT id FROM usuarios WHERE email = '" . $_SESSION['usuario'] . "'";
												$resultadoId = $db->query($idUser);

												while ($id = $resultadoId->fetchArray()) {
														$idUsuario = $id['id'];
												}
										?>

										<form action="../produtos/compra.php" method="POST">
											<div class="row d-flex justify-content-between align-items-center me-2">
												<div class="col">
													<input type="hidden" name="valor" value="<?php echo $item['preco']; ?>">
													<input type="hidden" name="idProduto" value="<?php echo $item['id']; ?>">
													<input type="hidden" name="idUsuario" value="<?php echo $idUsuario; ?>">
													<div class="form-group d-flex flex-column">
														<label for="quantidade"><b>Quantidade</b></label>
											
														<input type="number" class="form-control py-2" name="quantidade" id="quantidade" value="1">
												</div>
											</div>
											<div class="col-md-6 row-cols-1 py-1">
												<button class="btn custom-btn" type="submit"><i class="fas fa-shopping-cart">			</i>Comprar</button>
											</div>
										</form>
										<div class="d-grip gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
											<?php
												//Verifica se o produto já está nos favoritos
												$sqlFavoritos = "SELECT * FROM favoritos WHERE id_usuario = '$idUsuario' AND id_produto = '$item[id]'";
												$verifica = $db->query($sqlFavoritos);
	
												$verifica = $verifica->fetchArray(SQLITE3_ASSOC);
												if($verifica > 0) {
											?>
	
												<form action="../favoritos/delete.php" method="POST">
													<input type="hidden" name="id_usuario" value="<?php echo $idUsuario ?>">
													<input type="hidden" name="id_produto" value="<?php echo $item['id'] ?>">
	
													<button class="btn custom-btn btn-lg rounded-circle py-2" type="submit">
														<i class="fa-solid fa-skull"></i>
												 
													</button>
												</form>
													
											<?php 
												} else { 
											?>
													
												<form action="../favoritos/insert.php" method="POST">
													<input type="hidden" name="id_usuario" value="<?php echo $idUsuario ?>">
													<input type="hidden" name="id_produto" value="<?php echo $item['id'] ?>">
	
													<button class="btn custom-btn btn-lg rounded-circle py-2" type="submit">
														 <i class="fa-solid fa-heart"></i>
													</button>
												</form>
											
											<?php 
												} 
											} else {
												//se o usuario nao esta logado botao para fazer login
											?>

											<a href="../usuarios/login.php" class="btn custom-btn btn-lg py-2">
												Faça seu login 
											</a>
											<?php
												}
											?>

											
											
										</div>
									</div>
												
							</div>
					</div>
			</div>
			
	</section>


	<section>
		<main class="container">
			<!-- Produtos Relacionados-->
			<section class="mt-5 mb-5 py-2 bg-light rounded">
				<div class="container px-4 px-lg-5 mt-1">
					<h2 class="fw-bolder mb-4">Produtos Relacionados</h2>
					<div class="row row-cols-1 row-cols-md-3 g-4">

						<!--Card-->
						<?php
							$todosProdutos = "SELECT * FROM produtos WHERE tipo = '" . $item['tipo'] . "' AND id != '" . $item['id'] . "' LIMIT 3";
							$Produtos = $db->query($todosProdutos);

							while ($produto = $Produtos->fetchArray()) {
						?>
								
							<div class="col">
								<div class="card h-100 shadow custom-card">
									<img src="<?php echo $produto['imagem'] ?>" alt="Medicamento" class="card-img-top w-100 custom-bg">
									<div class="card-body">
											<h4 class="card-title"><?php echo $produto['nome'] ?></h4>
									</div>
									<div class="card-footer custom-footer d-flex align-items-center justify-content-around mb-3">
										<div class="float-start">
												<h4 class="custom-highlight mb-0">R$<?php echo number_format($produto['preco'], 2, ",", ".") ?></h4>
										</div>
										<div class="row d-flex justify-content-around me-3">
											<div class="col-sm-4">
												<a href="../produtos/item.php?u_id=<?php echo $produto['id'] ?>"><button class="btn rounded-3 custom-btn px-2">Comprar</button></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</section>
		</main>

        </br>

        <!-- Seção dos comentarios-->
        <div class="container mt-5">
					<div class="row d-flex justify-content-center">
						<div class="col-md-12">
							<div class="headings d-flex justify-content-between align-items-center">
								<h2 class="fw-bolder">Comentários</h2>
							</div>

							<?php
								if (isset($_SESSION['usuario'])) {
							?>
							<div class="card py-3 px-5">
								<form action="../comentarios/addComentario.php" method="POST">
										<div class="d-flex justify-content-start flex-row align-items-center">
											<input type="hidden" name="id_produto" value="<?php echo $item['id'] ?>">
											<input type="hidden" name="id_usuario" value="<?php echo $idUsuario ?>">
											<img src="<?php echo $foto ?>" width="60" class="user-img rounded-circle me-3">
											<span>
												<h4 class="font-weight-bold text-danger mb-n3">Você</h4>
												</br>
												<textarea class="w-200 h6 pe-5 form-control" rows="1" id="comentario" name="comentario" placeholder="Deixe sua avaliação..."></textarea>
											</span>
										</div>

										<div class="action d-flex justify-content-between mt-2 align-items-center">
											<div class="reply px-4">
												<div class="form-group form-group d-flex flex-row align-items-baseline mb-0">
													<label for="nota" class="me-1">
														<h5> Nota</h5>
													</label>
													<select class="form-control" name="nota" id="nota">
														<option value="1">1<i class="bi bi-star-fill"></i> </option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
													</select>
												</div>
											</div>

											<div class="icons align-items-center">
												<button class="btn custom-btn rounded" type="submit">Publicar</button>
											</div>
										</div>
									</div>
									</form>							
								</div>
							<?php /*fechando do if para sessão do usuário*/ } ?>
						
							<!--Demais comentários-->					
							<?php
								$todosComentarios = "SELECT * FROM comentario WHERE id_produto = $item[id]";
								$resultadoComentario = $db->query($todosComentarios);

								while ($comentario = $resultadoComentario->fetchArray()) {
									$nomeUsuario = "SELECT nome, foto FROM usuarios WHERE id = $comentario[id_usuario]";
									$resultadoNome = $db->query($nomeUsuario);
									while ($nome = $resultadoNome->fetchArray()) {
										$nomeUsuario = $nome['nome'];
										$fotoUsuario  = $nome['foto'];
										
									}

							?>
		
								<div class="card px-5 py-3 mt-2">
									<div class="d-flex justify-content-between align-items-center">
										<div class="user d-flex flex-row justify-content-start align-items-center">
											<img src="<?php echo $fotoUsuario ?>" width="60" class="user-img rounded-circle me-3">
											<span>
												<h4 class="font-weight-bold text-danger mb-n3"><?php echo $nomeUsuario ?></h4>
												<br>
												<small class="font-weight-bold">
													<?php echo $comentario['comentario'] ?>
												</small>
											</span>
										</div>
										
										<small><i class="fa fa-star text-warning"></i>
											<?php echo $comentario['nota'] ?></small>
									</div>

									<div class="action d-flex justify-content-end mt-2 align-items-center">
										<?php echo $comentario['data'] ?>
									</div>			
								</div>			
							<?php } ?>
					</section>




<?php
		}
	
	include '../componentes/footer.php'
?>