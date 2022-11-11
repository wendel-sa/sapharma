<?php
include '../componentes/header.php';


$nomeDigitado = $_POST['nome'];
$sobrenomeDigitado = $_POST['sobrenome'];
$emailDigitado = $_POST['email'];
$senhaDigitado = $_POST['senha'];
$fotoDigitado = $_POST['foto'];
?>

<div class="row">
    <div class="col-6" : <div class="p-3">
        <div class="card border-dark mb-3 " style="max-width: 18rem;">
            <div class="card-header">
                <?php echo $nomeDigitado, " ", $sobrenomeDigitado; ?>
            </div>
            <div class="card-body text-dark">
                <h5 class="card-title"> <?php echo $emailDigitado ?>
                </h5>
                <h3 class="card-title">....... </h3>
                <p class="card-text"> Você agora é membro da SAFarma.</p>
                <p class="card-text"> Seja bem-vindo nossa família</p>
            </div>
        </div>
    </div>

    <div class="col-6 bg-danger">
<img
    </div>
</div>
<?php
include '../componentes/footer.php';
?>
