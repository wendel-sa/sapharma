<?php
include '../configuracao/conexao.php';
/*arquivo com uma lista de usuarios cadastrados no banco de dados*/

//criar a query de selecao
$selecionar = "SELECT * FROM usuarios";

//executar query
$resultado = $db->query($selecionar);

//incluir o arquivo componentes/header.php
include '../componentes/header.php';
?>

<section>
 <div class="container">
  <div class="row"> 
     <div class="col-12">
        <h1 class="text-center">
        Lista de Usuários
         </h1>
     </div>
  </div>
</div>

<section>
  
<div class="row">
  <div class="col-12">
    <table class="table table-striped">
      <thead>
        <tr>
           <th scope="col">Nome</th>
           <th scope="col">Email</th>
           <th scope="col">Data de Nascimento</th>
           <th scope="col">Senha</th>
        </tr>
      </thead>
 
     <tbody>
      <?php while ($linha = $resultado->fetchArray()) { ?>
         <tr>
           <td><?php echo $linha["nome"]; ?></td>
           <td><?php echo $linha["email"]; ?></td>
           <td><?php echo $linha["data_nascimento"]; ?></td>
           <td><?php echo $linha["senha"]; ?></td>
       <td>
         <button href="editarUser.php?id=<?php echo $linha["id"]; ?>"
            class="btn btn-primary">Editar</button>
         <a href="delete.php?u_id=<?php echo $linha['id']; ?>" class="btn btn-dark">Excluir</a>
             </td>
           </tr>
          <?php } ?>
       </tbody>
     </table>
    </div>
   </div>
  </div>
</section>
  
 <?php 
// incluir o arquivo footer.php
include '../componentes/footer.php';
?>

