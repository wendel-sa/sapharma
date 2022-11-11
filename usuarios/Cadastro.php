<?php
include '../componentes/header.php'
?>

<section class="vh-100 gradient-custom">
    <div class="container py-3 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration">
                    <div class="card-body p-4 p-md-5 shadow-lg">
                        <h1 class="prod pb-3">Realize seu cadastro!</h1>
                        <form action="addUser.php" method="post">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome">
                            </div>
                          </br>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu email">
                            </div>
                        </br>
                            <div class="form-group">
                                <label>Data de nascimento</label>
                                <input type="date" class="form-control" name="data_nascimento" id="data_nascimento">
                            </div>
                          </br>
                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite sua senha">
                            </div>
                            </br>
                          
													  <div class="form-group">
															<label for="foto">Foto de Perfil</label>
                            </br>
															<input type="text" class="form-control" name="foto"  placeholder="Insira o endereço da imagem">
                               
														</div>
                            </br>
                            <div class="py-3">
                                <button type="submit" class="btn btn-primary btn-block mb-4">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</br>
</br>
</br>
</br>
<?php
include '../componentes/footer.php';
?>