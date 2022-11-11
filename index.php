<?php 
  include 'componentes/header.php';
  include 'configuracao/conexao.php';

  $dbname = "bancodedados.db";
  $db = new SQLite3($dbname); 

?>

      <!--Inicio da HomePage-->
      <section id="cover" class="container">
        <div class="row g-2 justify-content-around">
          <div class="col-md-6 d-flex justify-content-center align-items-center order-lg-2">
            <div class="p-3">
              <img src="https://img.freepik.com/free-vector/drug-rehab-center-abstract-concept-vector-illustration-inpatient-drug-rehab-center-experimental-treatment-substance-abuse-rehabilitation-addiction-therapy-clinic-facility-abstract-metaphor_335657-1583.jpg?w=740&t=st=1665359642~exp=1665360242~hmac=a1fc0d6ea216a87a51a6f832ef5233fab2551295cc1eb796296966a702e4a6cf" alt="Ilustracao" class="mx-auto d-block w-100 img-fluid rounded-3">
            </div>
          </div>

          <div class="col-md-6 d-flex justify-content-center align-items-center order-lg-2">
            <div class="p-3">
              <h1 class="custom-highlight"><span class="custom-contrast">SAF</span>arma</h1>
              <h1>O melhor site de venda de drogas.</h1>
              <p>Compre sua droga agora mesmo! Além das drogas lhe daremos pontos de descontos para seu caixão. Aproveite!</p>
              <a href= "../produtos/produtos.php"><button class="btn btn-primary rounded-3 custom-btn" type="button"><i class="fas fa-shopping-cart px-2"></i>COMPRE AGORA</button></a>
            </div>
          </div>
        </div>
      </section>
      <!--Fim do Inicio HomePage-->
    </header>
    <!--header end-->



    <!--Secao Principal-->
    <main class="container">

      <!--Secao de Servicos-->
      <section id="usuarios" class="pt-5">
        <div class="row g-2 justify-content-around align-content-center">
          <div class="col-md-6 d-flex justify-content-center align-items-center order-1">
            <div class="col">
              
              <!--Criar Contar-->
              <div class="card p-3 mt-4 mb-3 custom-usuarios-card" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4 gy-3">
                    <img src="../assets/illust/senhor.png" alt="Senhor" class="mx-auto d-block custom-img-width">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body custom-text">
                      <a href="usuarios/Cadastro.php"><h5 class="card-title">Crie agora sua conta</h5></a>
                      <p class="card-text">Faça seu cadastro e tenha acesso a diversos benefícios e praticidades.</p>
                    </div>
                  </div>
                </div>
              </div>

              <!--Acessar Conta-->
              <div class="card p-3 mb-3 custom-usuarios-card" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4 gy-3">
                    <img src="../assets/illust/senhora.png" alt="" class="mx-auto d-block custom-img-width">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body custom-text">
                      <a href="../usuarios/Login.php"><h5 class="card-title">Acesse sua conta</h5></a>
                      <p class="card-text">Se você já é nosso cliente, basta acessar sua conta para aproveitar todos os seus benefícios.</p>
                    </div>
                  </div>
                </div>
              </div>

              <!--Acessar Compras-->
              <div class="card p-3 mb-3 custom-usuarios-card" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4 gy-3">
                    <img src="../assets/illust/senhor(1).png" alt="" class="mx-auto d-block custom-img-width">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body custom-text">
                      <a href="../usuarios/perfil.php"><h5 class="card-title">Edite o Seu Perfil</h5></a>
                      <p class="card-text">Edite os dados da sua conta sempre que precisar.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col order-lg-2 my-5 d-flex align-content-center" style="max-height: 480px;">
            <img src="../assets/illust/compras.png" alt="" class="mx-auto d-block w-100">
          </div>
        </div>
      </section>
      <!--Final da Secao Principal-->

      <!--Produtos-->
      <section id="produtos" style="padding-top: 80px;">

        <a href="produtos/produtos.php#medicamentos" class="pb-2"><h2>Medicamentos</h2></a>
        
			  <?php
            $todosMedicamentos = "SELECT * FROM produtos WHERE tipo ='Medicamento' LIMIT 3";
            $Medicamentos = $db->query($todosMedicamentos);
        ?>

        <div class="row row-cols-1 row-cols-md-3 g-4">
          <?php
            while($medicamento = $Medicamentos->fetchArray()) {
          ?>
          <div class="col">
            <div class="card h-100 shadow custom-card">
              <img src="<?php echo $medicamento['imagem']?>" alt="Medicamento" class="card-img-top w-100 custom-bg">
              <div class="card-body">
                <h4 class="card-title"><?php echo $medicamento['nome']?></h4>
              </div>
              <div class="card-footer custom-footer d-flex align-items-center justify-content-around mb-3">
                <div class="float-start">
                  <h4 class="custom-highlight mb-0">R$<?php echo number_format( $medicamento['preco'],2,",",".")?></h4>
                </div>
                <div class="row d-flex justify-content-around me-3">
							    <div class="col-sm-4">
									<a href="../produtos/item.php?u_id=<?php echo $medicamento['id'] ?>"><button class="btn btn-primary rounded-3 custom-btn px-2">Comprar</button></a>
									</div>
									
                </div>
              </div>
            </div>
          </div>
          <?php } ?>  
        </div>
        <div class="pt-5">
					<a href="produtos/produtos.php#vitaminas" class="pb-2"><h2>Vitaminas</h2></a>
					
					<?php
							$todosVitaminas = "SELECT * FROM produtos WHERE tipo ='Vitamina' LIMIT 3";
							$Vitaminas = $db->query($todosVitaminas);
					?>
		
					<div class="row row-cols-1 row-cols-md-3 g-4 mb-2">
						<?php
							while($vitamina = $Vitaminas->fetchArray()) {
						?>
						<div class="col">
							<div class="card h-100 shadow custom-card">
								<img src="<?php echo $vitamina['imagem']?>" alt="<?php echo $vitamina['nome']?>" class="card-img-top w-100 custom-bg">
								<div class="card-body">
									<h4 class="card-title"><?php echo $vitamina['nome']?></h4>
								</div>
								<div class="card-footer custom-footer d-flex align-items-center justify-content-around mb-3">
									<div class="float-start">
										<h4 class="custom-highlight mb-0">R$<?php echo number_format($vitamina['preco'],2,",",".")?></h4>
									</div>
									<div class="row d-flex justify-content-around me-3">
										 <div class="col-sm-4">
										 <a href="../produtos/item.php?u_id=<?php echo $vitamina['id'] ?>"><button class="btn btn-primary rounded-3 custom-btn px-2">Comprar</button></a>
										 </div>
									</div>
								</div>
							</div>
						</div>
						<?php } ?>  
					</div>
				</div>

				<!--Seçao Cuidados Pessoais-->
				<div class="pt-5">
        	<a href="produtos/produtos.php#cuidados" class="pb-2"><h2>Cuidados Pessoais</h2></a>
	        
				  <?php
	            $todosCuidados = "SELECT * FROM produtos WHERE tipo ='Cuidados Pessoais' LIMIT 3";
	            $Cuidados = $db->query($todosCuidados);
	        ?>
	
	        <div class="row row-cols-1 row-cols-md-3 g-4 mb-2">
	          <?php
	            while($cuidado = $Cuidados->fetchArray()) {
	          ?>
	          <div class="col">
	            <div class="card h-100 shadow custom-card">
	              <img src="<?php echo $cuidado['imagem']?>" alt="<?php echo $cuidado['nome']?>" class="card-img-top w-100 custom-bg">
	              <div class="card-body">
	                <h4 class="card-title"><?php echo $cuidado['nome']?></h4>
	              </div>
	              <div class="card-footer custom-footer d-flex align-items-center justify-content-between mb-3">
	                <div class="float-start">
	                  <h4 class="custom-highlight mb-0">R$<?php echo number_format( $cuidado['preco'],2,",",".")?></h4>
	                </div>
	                <div class="row d-flex justify-content-around me-3">
								    <div class="col-sm-4">
										  <a href="../produtos/item.php?u_id=<?php echo $cuidado['id'] ?>"><button class="btn btn-primary rounded-3 custom-btn px-2">Comprar</button></a>
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

<?php include 'componentes/footer.php'
?>