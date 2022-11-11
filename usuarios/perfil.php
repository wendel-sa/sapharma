<?php
/*ARQUIVO DE PERFIL DO USUARIO */
session_start();

if (!isset($_SESSION['usuario'])) {
	header("Location: ../usuarios/Login.php");
	exit;
}
//incluir o arquivo de conexao com o banco de dados
include "../configuracao/conexao.php";

//criar a variavel de query com um select * da tabela usuarios
$DadosUser = "SELECT * FROM usuarios WHERE email = '" . $_SESSION['usuario'] . "'";

//executar a query em pdo
$consulta = $db->query($DadosUser);

//salva os dados do usuarios em variaveis
while ($row_user = $consulta->fetchArray()) {
	$id = $row_user["id"];
	$nome = $row_user['nome'];
	$email = $row_user['email'];
	$data_nascimento = $row_user['data_nascimento'];
	$foto = $row_user['foto'];
}

//inclui o arquivo de componentes/header.php
include "../componentes/header.php";
?>

<section class="pb-5">
	<div class="container efeito-vidro">
		<div class="row pt-5">
			<div class="col-4 pe-5">
				<!--NOME-->
				<h3><?php echo $nome ?></h3>
				<img class="mb-3 img-thumbnail" style="max-width: 150px; max-height: 150px;" src="<?php echo $foto ?>" alt="Foto de Perfil">
				</br>

				<!--EMAIL-->
				<p><b>E-mail: </b><?php echo $email ?></p>

				<!--DATA DE NASCIMENTO-->
				<p> <b>Data de Nascimento: </b><?php echo $data_nascimento ?></b></p>

				<!-- Button trigger modal -->
				<button type="button" class="btn custom-btn w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
					Editar dados
				</button>
			</div>


			<!-- Criar o historico de produtos com acesso ao banco de dados-->
			<div class="col-8">
				<div class="row custom-bg py-3 text-black shadow overflow-auto">
					<div class="col">
						<h2 class="text-center h1">
							Histórico de Compras
						</h2>

						<a class="btn custom-btn w-100" href="../vendas/lista.php">Ver Historico</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>

					<div class="modal-body">
						<form action="updateperfil.php" method="POST">
							<label for="foto">Foto:</label>
							<input type="text" class="from-control" name="foto" id="foto" value="<?php echo $foto ?>">
							<input type="hidden" name="id" value="<?php echo $id; ?>">
							<div class="form-group">
								<label for="nome">Nome:</label>
								<input type="text" class="from-control" name="nome" id="nome" value="<?php echo $nome; ?>">
								<div class="form-group">
									<label for="tipo">E-mail:</label>
									<input type="text" class="from-control" name="email" id="email" value="<?php echo $email; ?>"> </input>
								</div>


								<div class="form-group row py-2">
									<div class="col-8">
										<label for="imagem">Data de nascimento:</label><br>
										<input type="date" class="form-control" name="data_nascimento" id="data_nascimento" value="<?php echo $data_nascimento; ?>">
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
											<button type="hidden" name="id" value="<?php echo $id; ?>" class="btn custom-btn">Editar</button>
										</div>
									</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>
	</div>
	</div>



	</div>
	</div>
	</div>
</section>


<!-- itens favoritados do usuario-->
<div class="row">
	<div class="col-12">
		<h2>Produtos Favoritos</h2>
		<!--Card que irá aparecer os produtos favoritos-->
		<div class="col-12">
			<section>
				<div class="container">
					<div class="row">
						<?php
						$favoritos = "SELECT * FROM favoritos  WHERE id_usuario = '" . $id . "'";
						$consulta = $db->query($favoritos);
						//se a consulta retornar algum resultado
						if ($consulta->fetchArray() > 0) {
						?>
							<div class="row row-cols-lg-3 align-items-stretch">

								<?php
								while ($linha = $consulta->fetchArray()) {
									$produtos = "SELECT * FROM produtos  WHERE id = '" . $linha["id_produto"] . "'";
									$consulta2 = $db->query($produtos);
									while ($linha2 = $consulta2->fetchArray()) {
								?>

										<div class="col">
											<div class="card card-cover overflow-hidden text-bg-dark rounded-4 shadow-lg h-50">

												<div style="background-image: url(<?php echo $linha2['imagem'] ?>); background-size: cover; background-position: center; height: 500px;" class="m-2"></div>
												<h3 class="fav display-6 lh-1 fw-bold px-3 mb-4">
													<?php
													echo $linha2['nome'];
													?>
												</h3>
												<ul class="d-flex justify-content-around list-unstyled mt-auto">
													<li class="d-flex align-items-center">
														<h4 class="fav left">
															R$
															<?php
															echo number_format($linha2["preco"], 2, ",", ".");
															?>
														</h4>
													</li>
													<li class="d-flex align-items-center">
														<a href="../produtos/item.php?u_id=<?php echo $linha2["id"]; ?>" class="btn custom-btn">Ver Produto</a>
													</li>
												</ul>
											</div>
										</div>
							</div>

					<?php }
								} ?>
					</div>
				<?php } else {
				?>
					<div class="col-12">
						<h1 class="text-center">
							Nenhum produto favoritado
						</h1>
					</div>
				<?php }
				?>
				</div>
		</div>
		</section>
		<?php
		//inclui o arquivo de componentes/footer.php
		include "../componentes/footer.php";
		?>