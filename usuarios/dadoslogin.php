<?php
include '../componentes/header.php';
  ?> 

<?php
$emailDigitado = $_POST['email'];
$senhaDigitado = $_POST['senha'];


  ?> 


<div class="card mb-1" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-3">
      <img src="https://cdn.pixabay.com/photo/2014/04/02/10/48/sign-304618_1280.png" class="img-fluid rounded-start" alt="...">
    </div>
    
    <div class="col-md-4">
      <div class="card-body">
        <h5 class="card-title"><?php echo $emailDigitado ?></h5>
        <p class="card-text"><?php echo $senhaDigitado ?></p>
        <p class="card-text"><small class="text-muted">Dados Cadastrado!</small></p>
      
      </div>
    </div>
  </div>
</div>

<?php
include 'componentes/footer.php';
?>