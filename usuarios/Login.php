<?php
  include '../componentes/header.php';
?>

<!--exibir foto de perfil-->

  <div class="row px-5 mt-n3">
    <div class="col-md-4 mt-5">
			
      <div class="float-start">
        <h5 class="mb-n2">Já tem uma conta? </h5>
        <h2>Faça o Login</h2>
      </div>
			
      <form action="../configuracao/validacao.php" method="POST">
      <!-- Email input -->
				
        <div class="form-outline mb-4">
          <input type="text" id="form2Example1" name="email" class="form-control" />
          <label class="form-label" for="form2Example1">Endereço de email</label>
        </div>
				
        <!-- Password input -->
        <div class="form-outline mb-4">
          <input type="password" id="form2Example2" name="senha" class="form-control" />
          <label class="form-label" for="form2Example2">Senha</label>
        </div>
				
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Login</button>

        <div class="d-flex flex-column align-items-end">
          <!-- Checkbox -->
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
            <label class="form-check-label" for="form2Example34"> Lembrar meus dados</label>
          </div>
          <div>
            <a href="#!">Esqueceu a senha?</a>
          </div>
        </div>
			</form>
    </div>
    <div class="col-md-8">
      <lottie-player class="mt-n5 me-n5 ms-3" src="https://assets8.lottiefiles.com/private_files/lf30_Y7PQoU.json"  background="transparent"  speed="1"  style="width: 700px; height: 500px;"  loop  autoplay></lottie-player>
    </div>
  </div>
    

  <!-- Register buttons -->
  <div class="text-center pt-5">
    <p>Ainda não tem uma conta? <a href="Cadastro.php">Cadastre-se</a></p>
    
  </div>
</form>

<?php
include '../componentes/footer.php';
?>
