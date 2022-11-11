<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SAFarma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="../assets/style.css" rel="stylesheet">
  </head>
  
  <body>
    
    <nav class="navbar navbar-expand px-3">
      <div class="container-fluid">
        <img class="navbar-brand" src="../assets/logo.png" alt="Logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../index.php">Início</a>
          </li>
      
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Produtos</a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="../produtos/Produtos.php">Cadastrar Produtos</a></li>
            <li>
              <a class="dropdown-item" href="../produtos/listaprodutos.php">Lista de Produtos</a></li>
      
          </ul>
        </li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Acesse</a>
              
           <ul class="dropdown-menu">
             <li>
               <a class="dropdown-item" href="../usuarios/Login.php">Faça 
                Login</a>
             </li>
            
             <li>
               <a class="dropdown-item" href="../usuarios/Cadastro.php">Cadastre-se</a>
             </li>
            
             <li>
               <hr class="dropdown-divider">
             </li>

						 <li>
               <a class="dropdown-item" href="../usuarios/listaUser.php">Lista de usuários</a>
             </li>
            
             <li>
               <a class="dropdown-item" href="https://saf.com.br/saf-assistencial.html">Assinante SAF</a>
             </li>
            
              </ul>
           </li>
      </ul>
      <form class="d-flex px-2 m-0" role="search">
        <input class="form-control md-6-lg" type="search" placeholder="Pesquise aqui..." aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Buscar</button>
      </form>
      <a href="../produtos/carrinho.php"><ion-icon class="me-1 mr-2 text-light" size="large" name="cart"></ion-icon></a>
          
    </div>
  </div>
</nav>