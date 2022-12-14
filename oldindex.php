<?php
include 'componentes/header.php';


$dbname = "bancodedados.db";
$db = new SQLite3($dbname); 

//selecionar todos os produtos
$todosProdutos = "SELECT * FROM produtos";
//executar  o comando
$Produtos = $db->query($todosProdutos);

//selecionar todos os produtos
$todosMedicamentos = "SELECT * FROM produtos WHERE tipo = 'Medicamentos'";
//executar  o comando
$Medicamentos = $db->query($todosMedicamentos);

//selecionar todos os produtos
$todosVitaminas = "SELECT * FROM produtos WHERE tipo = 'Vitamina e bem estar'";
//executar  o comando
$Vitaminas = $db->query($todosVitaminas);

//selecionar todos os produtos
$todosCuidados = "SELECT * FROM produtos WHERE tipo = 'Cuidados Pessoais'";
//executar  o comando
$Cuidados = $db->query($todosCuidados);
?>

    <div class="py-3">
      <div class="card text-bg-dark">
        <img src="https://brasil.perfil.com/wp-content/uploads/2022/09/acompanhe-funeral-da-rainha-elizabeth-ii.jpg" class="card-img" height="300" alt="...">
        <div class="card-img-overlay">
          <h5 class="card-title">SAFarma</h5>
        </div>
      </div>
    </div>

    
    <!--Amostra de Produtos-->
    <div class="row py-5 px-3">
      <h1 class="text-left">
        Destaque!
      </h1>
  

      <!--Card #1-->
    <?php 

      while($produto = $Produtos->fetchArray()) {
    ?>
      <div class="col-2 p-2">
        <div class="card text-bg-light">
          <img class="card-img-top  p-1" src="
          <?php 
          echo $produto['imagem']
          ?>
          " alt="
          <?php
          echo $produto['nome']
          ?>
          " height="250">
          <div class="card-body">
              <center>
            <h5 class="card-title"><?php echo $produto['nome'] ?></h5>
            <p class="card-text"><?php echo $produto['tipo'] ?></p>
            <h5 class="card-text">R$ <?php echo $produto['preco'] ?> </h5>
            <a hre="/produtos/item.php" class="btn btn-secondary">Comprar</a>
              </center>
          </div>
        </div>
      </div>
    
         
      <?php
        }
      ?>

    <!--Amostra de Produtos-->
    <div class="row py-5 px-3">
      <h1 class="text-left">
        Medicamentos:
      </h1>
  

      <!--Card #1-->
    <?php 

      while($medicamento = $Medicamentos->fetchArray()) {
    ?>
      <div class="col-2 p-2">
        <div class="card text-bg-light">
          <img class="card-img-top  p-1" src="
          <?php 
          echo $medicamento['imagem']
          ?>
          " alt="
          <?php
          echo $medicamento['nome']
          ?>
          " height="250">
          <div class="card-body">
              <center>
            <h5 class="card-title"><?php echo $medicamento['nome'] ?></h5>
            <p class="card-text"><?php echo $medicamento['tipo'] ?></p>
            <h5 class="card-text">R$<?php echo $medicamento['preco'] ?></h5>
            <a hre="/produtos/item.php" class="btn btn-secondary">Comprar</a>
              </center>
          </div>
        </div>
      </div>
    
         
      <?php
        }
      ?>

<!--Amostra de Produtos-->
    <div class="row py-5 px-3">
      <h1 class="text-left">
        Vitaminas e Bem Estar:
      </h1>
  

      <!--Card #1-->
    <?php 

      while($vitaminas = $Vitaminas->fetchArray()) {
    ?>
      <div class="col-2 p-2">
        <div class="card text-bg-light">
          <img class="card-img-top  p-1" src="
          <?php 
          echo $vitaminas['imagem']
          ?>
          " alt="
          <?php
          echo $vitaminas['nome']
          ?>
          " height="250">
          <div class="card-body">
              <center>
            <h5 class="card-title"><?php echo $vitaminas['nome'] ?></h5>
            <p class="card-text"><?php echo $vitaminas['tipo'] ?></p>
            <h5 class="card-text">R$<?php echo $vitaminas['preco'] ?></h5>
            <a hre="/produtos/item.php" class="btn btn-secondary">Comprar</a>
              </center>
          </div>
        </div>
      </div>
    
         
      <?php
        }
      ?>

      <!--Amostra de Produtos-->
    <div class="row py-5 px-3">
      <h1 class="text-left">
        Cuidados Pessoais:
      </h1>

<!--Card #1-->
    <?php 

      while($cuidados = $Cuidados->fetchArray()) {
    ?>
      <div class="col-2 p-2">
        <div class="card text-bg-light">
          <img class="card-img-top  p-1" src="
          <?php 
          echo $cuidados['imagem']
          ?>
          " alt="
          <?php
          echo $cuidados['nome']
          ?>
          " height="250">
          <div class="card-body">
              <center>
            <h5 class="card-title"><?php echo $cuidados['nome'] ?></h5>
            <p class="card-text"><?php echo $cuidados['tipo'] ?></p>
            <h5 class="card-text">R$<?php echo $cuidados['preco'] ?></h5>
            <a hre="/produtos/item.php" class="btn btn-secondary">Comprar</a>
              </center>
          </div>
        </div>
      </div>
    
         
      <?php
        }
      ?>
      </div>
    <!-- PRODUTOS, IMAGENS E DESCRI????ES -->
    <!-- <h1 class="prod">Calcitran D3</h1>
    <img alt="Calcitran" src="https://a-static.mlcdn.com.br/800x560/suplemento-vitaminico-calcitran-d3-com-60-comprimidos-divcom-pharma/drogaonet/687909658/cec280564dbd9b04cfb10a741bf96915.jpeg">
    <h3 class="desc">?? um suplemento vitam??nico e mineral que auxilia na reposi????o de c??lcio do organismo.</h3>
    
    <h1 class="prod">Polivitamin??co 50+</h1>
    <img alt="Polivitminico" src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSjH4wUuSbEKvLzsBsUbPJ4kZG_XaQu961sLadtj4d_BjuLKu0HFhe-zwx7W8MU0j4zOP342_o2zHdoq3Z5tPFfysndeMTs288GjEdfHMfuRzqcXtvuFDlB">
    <h3 class="desc">Sua composi????o de nutrientes foi cuidadosamente escolhida de modo a complementar a ingest??o de vitaminas e minerais para a sa??de e o bem-estar dos indiv??duos com mais de 50 anos</h3>
    
    <h1 class="prod">??mega 3</h1>
    <img alt="Omega3" src="https://m.media-amazon.com/images/I/61Em4NrCiwL._AC_SX425_.jpg">
    <h3 class="desc">O ??mega 3 Catarinense ?? um suplemento alimentar em formato de c??psulas que auxilia na manuten????o dos n??veis saud??veis de triglicer??deos, controla a press??o arterial e o colesterol, e previne doen??as cardiovasculares.</h3>

    <h1 class="prod">Risendronato</h1>
    <img alt="Risendronato" src="https://e.drogasul.med.br/4429-large_default/grisedronato-sodico-35-mg-4-cpr.jpg
">
    <h3 class="desc">O Risedronato s??dico ?? destinado ao tratamento e preven????o da osteoporose (perda de material ??sseo) em mulheres no per??odo p??s-menopausa para reduzir o risco de fraturas vertebrais e n??o vertebrais.
?? tamb??m destinado ao tratamento da osteoporose em homens com alto risco de fraturas e tratamento da osteoporose estabelecida em mulheres no per??odo p??s-menopausa para reduzir o risco de fraturas de quadril.</h3>
    
    <h1 class="prod">Ibandronato</h1>
    <img alt="calcitran" src="https://images.webfarmas.com.br/7898146826614.jpg
">
    <h3 class="desc">O Ibandronato de S??dio ?? um medicamento usado para tratar a osteoporose em mulheres ap??s a menopausa.
Sua a????o pode reverter a perda ??ssea e diminuir as chances de fraturas decorrentes do enfraquecimento dos ossos.
</h3>
    
    <h1 class="prod">Alendronato</h1>
    <img alt="Alendronato" src="https://vendas.carvalhodistribuidora.com.br/2778-large_default/alendronato-sodico-70mg-4cpr60.jpg">
      
    <h3 class="desc">O Alendronato de S??dio ?? um composto que atua como um potente inibidor espec??fico da reabsor????o ??ssea.
O Alendronato de S??dio pertence ?? classe de medicamentos n??o hormonais chamados bifosfonatos, que ajudam na reconstitui????o dos ossos e faz com que os ossos tenham menos propens??o a fraturas.
</h3> -->


<?php
include 'componentes/footer.php';
?>