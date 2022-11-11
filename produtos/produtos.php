<?php
include '../configuracao/conexao.php';
include '../componentes/header.php';
?>



    <main class="container">
      <!--Produtos-->
      <section id="produtos">

        <!--Medicamentos-->
        <div id="medicamentos" class="accordion mb-5" id="accordionExample">
          <div class="accordion-item">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <img src="https://cdn-icons-png.flaticon.com/512/4383/4383360.png" alt="icon" class="px-2 img-responsive custom-logo w-auto" height="90">
              <h2 class="accordion-header" id="headingOne">Medicamentos</h2>
            </button>
        
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">

              <?php
              $todosMedicamentos = "SELECT * FROM produtos WHERE tipo ='Medicamento'";
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
                      <h4 class="card-title"><?php echo $medicamento['nome'] ?> </h4>
                      </div>
                      <div class="card-footer custom-footer d-flex align-items-center justify-content-between mb-3">
                        <div class="float-start">
                        <h4 class="custom-highlight mb-0">R$<?php echo number_format($medicamento['preco'],2,",",".")?></h4>
                        </div>
                        <div class="row d-flex justify-content-around me-5">
  							          <div class="col-sm-4">
  									      <a href="../produtos/item.php?u_id=<?php echo $medicamento['id'] ?>"><button class="btn btn-primary rounded-3 custom-btn px-4">Comprar</button></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>  
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--Vitaminas-->
        <div id="vitaminas" class="accordion mb-5" id="accordionExample">
          <div class="accordion-item">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              <img src="https://cdn-icons-png.flaticon.com/512/3159/3159839.png" alt="icon" class="px-2 img-responsive custom-logo w-auto" height="90">
              <h2 class="accordion-header" id="headingTwo">Vitaminas</h2>
            </button>
        
            <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
        
			      <?php
                $todosVitaminas = "SELECT * FROM produtos WHERE tipo ='Vitamina'";
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
              <div class="card-footer custom-footer d-flex align-items-center justify-content-between mb-3">
                <div class="float-start">
                  <h4 class="custom-highlight mb-0">R$<?php echo number_format($vitamina['preco'],2,",",".")?></h4>
                </div>
                <div class="row d-flex justify-content-around me-5">
							     <div class="col-sm-2">
									 <a href="../produtos/item.php?u_id=<?php echo $vitamina['id'] ?>"><button class="btn btn-primary rounded-3 custom-btn px-4">Comprar</button></a>
                   </div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>  
        </div>
              </div>
            </div>
          </div>
        </div>
        
        
        <!--Cuidados-->
        <div id="cuidados" class="accordion mb-5" id="accordionExample">
          <div class="accordion-item">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
              <img src="https://cdn-icons-png.flaticon.com/512/3993/3993693.png" alt="icon" class="px-2 img-responsive custom-logo w-auto" height="90">
              <h2 class="accordion-header ps-2" id="headingThree">Cuidados Pessoais</h2>
            </button>
        
            <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
        
			          <?php
                  $todosCuidados = "SELECT * FROM produtos WHERE tipo ='Cuidados Pessoais'";
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
                          <h4 class="custom-highlight mb-0">R$<?php echo number_format($cuidado['preco'],2,",",".")?></h4>
                        </div>
                        <div class="row d-flex justify-content-around me-5">
    							        <div class="col-sm-4">
    									      <a href="../produtos/item.php?u_id=<?php echo $cuidado['id'] ?>"><button class="btn btn-primary rounded-3 custom-btn px-4">Comprar</button></a>
    									    </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>  
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php
include '../componentes/footer.php'
?>


    <!--div class="row p-3 px-5">
      <div class="col-6 card-produto">
          <div>
            <h3 class="card-title pt-3">Nome</h3>
            <h1><strong><?php echo $nomeDigitado ?></strong></h1>
          </div>
          <div>
            <h3 class="card-title pt-3">Tipo</h3>
            <h2><?php echo $tipoDigitado ?></h2>
          </div>
          <div>
            <h3 class="card-title pt-3">Valor</h3>
            <h2>R$<?php echo $valorDigitado ?></h2>
          </div>
          <div>
            <h3 class="card-title pt-3">Descrição</h3>
            <h2><?php echo $descricaoDigitado ?></h2>
          </div>
          <div>
            <h3 class="card-title pt-3">Quantidade</h3>
            <h2><?php echo $quantidadeDigitado ?></h2>
          </div>
      </div>
      <div class="col-6">
        <img style="border-radius: 10px;" src="<?php echo $imagemDigitado ?>" class="img-fluid rounded-start" alt="<?php echo $nomeDigitado ?>">
      </div>
</div-->