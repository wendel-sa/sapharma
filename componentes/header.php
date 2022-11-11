<?php
if (!isset($_SESSION)) session_start();

// Verifica se mão há a variável da sessão que identifica o usuario
if (!isset($_SESSION['usuario'])) {
    // Destroi a sessão por segurança
    session_destroy();
}

?>

<!DOCTYPE html>
<html lang=pt-BR>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAFarma | Farmácia Online</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!---main css---->
    <link rel="stylesheet" href="../assets/newstyle.css">
    <!----google font---->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!----font awesome---->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <style>
      .bg-gradiente {
        background-image: linear-gradient(to top, rgba(193, 161, 211), rgba(0,0,0,0));
        }
    </style>
    
  </head>
  
  <body class="m-0">
    <!--header start-->
    <header id="header">
      <!--nav start-->
      <nav class="navbar navbar-expand-lg navbar-light fixed-top custom-navbar">
        <div class="content container-fluid">
          <div class="navbar-header">
            <a href="../index.php" class="navbar-brand float-end">
              <img src="../assets/logo.png" alt="SAFarma Logo" class="img-responsive custom-logo">
              <span class="custom-highlight"><strong class="custom-contrast">SAF</strong>arma</span>
            </a>
            <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ms-auto custom-ul">
              <li class="nav-item custom-li">
                <a href="../index.php#header" aria-current="page" class="nav-link active">Início</a>
              </li>
              <li class="nav-item custom-li">
                <a href="../index.php#usuarios" aria-current="page" class="nav-link">Usuários</a>
              </li>
              <li class="nav-item custom-li">
                <a href="../produtos/produtos.php" aria-current="page" class="nav-link">Produtos</a>
              </li>
							<!-- Dropdown Favoritos-->							
							<div class="dropstart">
                <a class="btn btn-danger dropdown-toggle p-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="fa-solid fa-heart px-2"></i>
                 </a>
                <ul class="dropdown-menu">
    							<div style="width: 500px;" class="row">
						<!--dropdown do bootstrap-->
               <div class="list-group w-auto">
                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                  <img src="https://media.istockphoto.com/id/154273665/pt/foto/frasco-de-comprimidos-no-fundo-branco.webp?s=612x612&w=is&k=20&c=nN7YC8QfW7f8ExOfPRot6FoooRbCSJQOyb_YF4jRaOE=" alt="twbs" width="50px" height="50px" class="rounded-circle flex-shrink-0">
                  	<div class="d-flex gap-2 w-100 justify-content-between">
                   		<div>
                      	<h6 class="mb-0">Preço : R$5,99</h6>
                      	<p class="mb-0 opacity-75">ATELENOL</p>
												<form action="../favoritos/delete.php" method="post">
													
												</form>
												 <div>
													<label></label>
													
												 </div>	
												<button class="btn border border-dark" type="submit">
												  <i class="bi bi-heart-fill text-danger btn btn-dark"></i>
													Remover dos favoritos</button>
                      </div>
                     <small class="opacity-50 text-nowrap">now</small>
                    </div>
                </a>
  							<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    							<img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
   	 								<div class="d-flex gap-2 w-100 justify-content-between">
      								<div>
        								<h6 class="mb-0">Another title here</h6>
        								<p class="mb-0 opacity-75">Some placeholder content in a paragraph that goes a little longer so it wraps to a new line.</p>
      								</div>
      							 <small class="opacity-50 text-nowrap">3d</small>
    								</div>
  							</a>
  							<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    							<img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
    								<div class="d-flex gap-2 w-100 justify-content-between">
      								<div>
        								<h6 class="mb-0">Third heading</h6>
        								<p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
      								</div>
      							 <small class="opacity-50 text-nowrap">1w</small>
    								</div>
  							</a>
							 </div>
						 </div>
  				 </ul>
				 </div>
              <li class="nav-item custom-li">
                <a href="../index.php#produtos" aria-current="page" class="nav-link"><i class="star"></i></a>
              </li>
                
            </ul>
             <div class="dropstart">
                    <button class="nav-link btn btn-dark" type="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                        <i class="bi bi-person"></i>
                    </button>
                    <ul class="dropdown-menu rounded-2">
                        <?php
                        //se estiver logado
                        if (isset($_SESSION['usuario'])) {
                            echo '<li class="nav-item"><a class="dropdown-item btn btn-light text-black w-md-25 w-50 w-lg-100" aria-current="page" href="../usuarios/perfil.php">Perfil</a></li>';
                            echo '<li class="nav-item"><a class="dropdown-item btn btn-light text-black w-md-25 w-50 w-lg-100" aria-current="page" href="../configuracao/logout.php">Sair</a></li>';
                        } else {
                            echo '<li class="nav-item"><a class="nav-link btn btn-light text-black w-md-25 w-50 w-lg-100" aria-current="page" href="../usuarios/Login.php">Entrar</a></li>';
                        }

                        ?>


                    </ul>
                </div>
          </div>
        </div>
      </nav>
      <!--nav end-->
      
