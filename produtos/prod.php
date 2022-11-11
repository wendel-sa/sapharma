<?php
include '../configuracao/conexao.php';

//selecionar todos os produtos
$todosProdutos = "SELECT * FROM produtos";
//executar  o comando
$Produtos = $db->query($todosProdutos);

?>
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
            <h5 class="card-text"><?php echo $produto['preco'] ?></h5>
            <a hre="/produtos/item.php" class="btn btn-secondary">Comprar</a>
              </center>
          </div>
        </div>
      </div>
         
      <?php
        }
      ?>
