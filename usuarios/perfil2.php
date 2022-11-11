<?php

/*ARQUIVO DE PERFIL DO USUARIO */
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../usuarios/Login.php");
    exit;
}
//incluir o arquivo de conexao com o banco de dados
include "../configuracao/conexao.php";

//criar a variavel de query com um select * da tabela usuarios
$DadosUser = "SELECT * FROM usuarios WHERE email = '" . $_SESSION['usuario'] . "'";

//executar a query em pdo
$consulta = $db->query($DadosUser);

//salva os dados do usuarios em variaveis
while ($row_user = $consulta->fetchArray()) {
    $id = $row_user["id"];
    $nome = $row_user['nome'];
    $email = $row_user['email'];
    $data_nascimento = $row_user['data_nascimento'];
    $foto = $row_user['foto'];
}

include '../componentes/header.php' 
?>


<section>
	<div class="tab py-3" style="height: 95vh;">
	    <button class="tablinks" onclick="openTab(event, 'firstTab')" id="defaultOpen">Meu Perfil</button>
	    <button class="tablinks" onclick="openTab(event, 'secondTab')">Editar Perfil</button>
	    <button class="tablinks" onclick="openTab(event, 'thirdTab')">Favoritos</button>
	    <button class="tablinks" onclick="openTab(event, 'fourthTab')">Histórico de Compras</button>
	    <button class="tablinks" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Sair da conta <i style="margin-right: 20px;" class="bi bi-box-arrow-right position-end"></i></button>
	</div>
	
	<!-- Modal
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"></h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	        <h4>Tem certeza que deseja sair da conta?</h4>
	      </div>
	      <div class="modal-footer"><button type="button" class="btn btn-danger" data-bs-dismiss="modal">Voltar</button>
	        <a href="logout.php"><button type="button" class="btn btn-secondary">Sair</button></a>
	      </div>
	    </div>
	  </div>
</div-->
	
	
	<div id="firstTab" class="tabcontent py-3 d-flex justify-content-center">
		<div class="row col-md-8 p-2 bg-light rounded shadow">
			<h3><?php echo $nome ?></h3>
	    <div class="col-10 ps-3 mt-3">
				<h4 class="display-"><?php echo $email ?></h4>
				<h4><?php echo $cpf ?></h4>
				<h4><?php echo $data_nascimento ?></h4>
			</div>
			<div class="col-2 d-flex align-items-center">
				<button type="button" class="btn custom-btn w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
					<i class="bi bi-pencil-square text-light"></i>
				</button>
			</div>
		</div>
		<div class="col-4" style="">
			<img class="img-fluid text-center rounded"  style="width:100%; max-height:500px;" src="<?php echo $foto ?>"></img>
			</div>
	
	            </div>
	        </div>
	</div-->
	
	</div>
	
	<div id="secondTab" class="tabcontent">
	    <h3>Editar Perfil</h3>
	    <div class="row overflow-auto" style="max-height: 75vh;">
	        <div class="col-9 row">
	            <div class="col-5">
	                <form action="../Conexao/updatePerfil.php" method="post" class="w3-container">
	                    <div style="display: none;">
	                        <input type="text" name="id" value="85">
	                    </div>
	
	
	                    <label>Nome:</label>
	                    <input id="input" class="w3-input" type="text" name="editaNome" placeholder="Nome de usuario" value="eu">
	                    
	                  <label>Email:</label>
	                    <input id="input" class="w3-input" type="text" readonly name="email" style="color: gray" value="eu@mail.com">
	
	                    <label>Data de Nascimento:</label>
	                    <input id="input" class="w3-input" type="date" name="editaNascimento" placeholder="Data de Nascimento" value="0000-00-00">
	
	                    <label>Telefone:</label>
	                    <input id="input" class="w3-input" type="text" name="editaTelefone" placeholder="Seu telefone" value="9213939">
	
	                    <label>Foto do Perfil:</label>
	                    <input id="input" class="w3-input pegaFT" type="text" name="editaFoto" placeholder="Cole o link da sua foto aqui" value=""></br>
	                  <div>  <img class="img-fluid text-center"  style="width:160px; height: 160px;" id="mostraFT" src=""></img>
	  </div>
	
	            </div>
	
	                  
	
	
	            <div class="col-6">
	                <label>CEP:</label>
	                <input id="input" class="w3-input" type="text" name="editaCep" placeholder="CEP" value="3214325213">
	
	              <label>Estado:</label>
	                <input id="input" class="w3-input" type="text" name="estado" placeholder="Estado" value="PE">
	
	              <label>Cidade:</label>
	                <input id="input" class="w3-input" type="text" name="cidade" placeholder="Cidade" value="eSTADO">
	
	                <label>Bairro:</label>
	                <input id="input" class="w3-input" type="text" name="editaBairro" placeholder="Bairro" value="Bairro">
	              
	                <label>Rua:</label>
	                <input id="input" class="w3-input" type="text" name="editaRua" placeholder="Nome da rua" value="Rua">
	
	              <label>Numero:</label>
	                <input id="input" class="w3-input" type="text" name="numero" placeholder="Numero" value="203">
	
	              <label>Complemento:</label>
	                <input id="input" class="w3-input" type="text" name="editaComplemento" placeholder="Complemento" value="">
	
	                <label>CPF:</label>
	                <input id="input" class="w3-input" type="text" name="editaCpf" placeholder="CPF" value="291391293">
	
	
	            </div>
	                  
	
	                  
	            <input class="input btn btn-secondary" type="submit" value="Alterar" style="width: 80px; height: 35px; margin: 2%">
	
	
	</form>
	            <script>
	              
	                function Senha() {
	                    var novaSenha = document.getElementById('novaSenha').value;
	                    var novaSenha2 = document.getElementById('novaSenha2').value;
	                    var senhaAntiga = document.getElementById('senhaAntiga').value;
	
	                    if (senhaAntiga == "Senha") {
	                        if(novaSenha == "Senha"){
	                            alert('A nova senha não pode ser igual a senha antiga');
	                        }else if(novaSenha == "" || novaSenha2 == ""){
	                          alert("Ainda tem campos em branco");
	                        }else if(novaSenha != novaSenha2){
	                            alert('A senhas novas não conferem');
	                        }else if(novaSenha.length < 5 || novaSenha2.length < 5){
	                          alert("Senha muito pequena, deve ser maior que 5 digitos");
	                        }
	                          
	                    }else{
	                      alert("A senha antiga digitada não é igual a senha cadastrada");
	                    }
	
	                  if(senhaAntiga == "Senha" && novaSenha == novaSenha2 && novaSenha != "Senha" && novaSenha2.length > 4){
	                    document.getElementById('verificar').style.display="none";
	                    document.getElementById('enviar').style.display="block";
	                    $('#enviar').prop('type', 'submit');
	                  }
	                }
	          </script>
	<form action="../Conexao/updateSenha.php" method="post" class="w3-container">
	                <h3>Alterar Senha</h3>
	
	                <input class="w3-input" type="number" name="id" value="85" hidden>
	  
	                <label>Senha antiga:</label>
	                <input id="senhaAntiga" class="w3-input" type="password" name="senhaAntiga" placeholder="Senha Antiga">
	
	                <label>Nova Senha:</label>
	                <input id="novaSenha" class="w3-input" type="password" name="novaSenha" placeholder="Nova senha">
	
	                <label>Confirme a Senha:</label>
	                <input id="novaSenha2" class="w3-input" type="password" name="novaSenha2" placeholder="Confirme a senha">
	
	                <input id="verificar" type="button" class="input btn btn-secondary" style="width: 80px; height: 35px; margin: 2%" value="Verificar" onclick="Senha()">
	                <input id="enviar" style="display: none" class="input btn btn-success" style="width: 80px; height: 35px; margin: 2%" value="Continuar">
	</form>
	
	
	
	
	        </div>
	        
	
	<script>
	
	                    $(".pegaFT").keyup(function() {
	        //pegar o valor do input
	        var url = document.querySelector(".pegaFT").value;
	        //substituir o src da imagem pelo valor do input
	        $("#mostraFT").attr('src', url);
	    }
	    );
	
	                    </script>
	          
	    </div>
	</div>
	
	<div id="thirdTab" class="tabcontent">
	    <div class=" p-4">
	        <h2 class="">Meus Favoritos <i class="bi bi-star-fill" style="color: #DAA520;"></i></h2>
	        
	
	        <div class="overflow-auto" style="height: 400px;">
	
	                            <div class="d-flex pt-3">
	                    <p class="pb-3 mb-0 border-bottom col-6">
	                        <strong class="d-block ">
	                            Nenhum produto favoritado.
	                        </strong>
	                    </p>
	                </div>
	            
	
	        </div>
	    </div>
	  
	</div>
	
	<div id="fourthTab" class="tabcontent">
	    <div class=" p-4">
	        <h2 class="">Minhas compras <i class="bi bi-cart-check-fill"></i></h2>
	        <p>Compras efetuadas:</p>
	
	        <div class="overflow-auto" style="height: 400px;">
	
	                                    <div class="d-flex pt-3">
	                            <div class="bd-placeholder-img flex-shrink-0 me-2">
	                                <a href="../Produtos/detalhesProdutoTeste.php?id=5"><img  class="img-fluid" style="width: 100px;" src="https://m.media-amazon.com/images/I/41G6Hlu3TBL._AC_SX679_.jpg" width="100" height="100" class="rounded-5" alt=""></a>
	                            </div>
	
	                            <p class="pb-3 mb-0 border-bottom col-6">
	                                <strong class="d-block ">
	                                    Apple iPhone 13 Pro Max (1 TB) - Azul-Sierra                                </strong>
	                      <span class="d-block">
	                      Quantidade: 1                        </span>
	                                <span class="d-block">
	                                    R$: 14.699,00                                </span>
	                                <strong>Descrição:</strong>
	                                <span class="d-block">
	                                    Tela Super Retina XDR com ProMotion, para uma experiência fluida e responsiva. Um upgrade dramático no sistema de câmera e no que você pode fazer com ele.                                 </span>
	
	                                <small class="d-block">
	                                    Comprado em: 2022-11-08 00:00:00                                </small>
	                            </p>
	
	                            <div class="float-end">
	                                                                  <!-- Button trigger modal -->
	                                    <div class="py-3">
	                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal5">
	                                            Reavaliar <i class="bi bi-star-fill"></i>
	                                        </button>
	                                    </div>
	
	                                  <!-- Modal -->
	                                    <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                        <div class="modal-dialog">
	                                            <div class="modal-content">
	                                                <div class="modal-header">
	                                                    <h5 class="modal-title" id="exampleModalLabel">
	                                                        <b>Avaliar: </b>Apple iPhone 13 Pro Max (1 TB) - Azul-Sierra                                                    </h5>
	                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	                                                </div>
	                                                <div class="modal-body">
	                                                    <form action="../Conexao/editaAvaliacao.php" method="POST">
	                                                        <input type="hidden" name="idCompra" value="135">
	                                                        <input type="hidden" name="idProduto" value="5">
	                                                        <input type="hidden" name="DataAvaliacao" value="2022-11-09">
	
	                                                        <div class="form-group">
	                                                            <h3>Avalie o Produto</h3>
	                                                            <input type="range" min="1" max="5" value="5" name="Nota" class="slider myRange">
	                                                            <p class="text-warning"><i class="bi bi-star-fill"></i> : <span class="demo" style="font-size: 16px"></span></p>
	                                                        </div>
	                                                        <div class="form-group">
	                                                            <label class="">Comentário:</label>
	                                                                    
	                                                            <textarea class="form-control rounded-1" name="Comentario" placeholder="LOLOLOLOLOLOL" rows="3"></textarea>
	                                                        </div>
	                                                        <div class="py-3">
	                                                        <a href="../Conexao/deleteAvaliacao.php" style="text-decoration: none;"><button class="btn btn-danger">Excluir Avaliação</button></a>
	                                                            <button type="submit" class="btn btn-secondary">Avaliar</button>
	                                                        </div>
	                                                    </form>
	                                                </div>
	
	                                            </div>
	                                        </div>
	                                    </div>
	                                                              <a target="_blank" href="../Produtos/comprovante.php?idCompra=135&&id=5" class="btn btn-success">
	                                    Ver Recibo <i class="bi bi-pencil-square"></i>
	                                </a>
	                            </div>
	                        </div>
	                                        <div class="d-flex pt-3">
	                            <div class="bd-placeholder-img flex-shrink-0 me-2">
	                                <a href="../Produtos/detalhesProdutoTeste.php?id=6"><img  class="img-fluid" style="width: 100px;" src="https://images.kabum.com.br/produtos/fotos/161470/controle-sem-fio-dualsense-cosmic-red-ps5-pre-venda_1621439350_gg.jpg" width="100" height="100" class="rounded-5" alt=""></a>
	                            </div>
	
	                            <p class="pb-3 mb-0 border-bottom col-6">
	                                <strong class="d-block ">
	                                    Controle joystick sem fio Sony PlayStation DualSense CFI-ZCT1 cosmic red                                </strong>
	                      <span class="d-block">
	                      Quantidade: 4                        </span>
	                                <span class="d-block">
	                                    R$: 1.400,00                                </span>
	                                <strong>Descrição:</strong>
	                                <span class="d-block">
	                                    Explore novas fronteiras dos games no seu PS5 com o lançamento do controle sem fio DualSense Cosmic Red.                                </span>
	
	                                <small class="d-block">
	                                    Comprado em: 2022-11-08 00:00:00                                </small>
	                            </p>
	
	                            <div class="float-end">
	                                                                    <!-- Button trigger modal -->
	                                    <div class="py-3">
	                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal6">
	                                            Avaliar <i class="bi bi-star-fill"></i>
	                                        </button>
	                                    </div>
	
	                                    <!-- Modal -->
	                                    <div class="modal fade card" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                        <div class="modal-dialog">
	                                            <div class="modal-content">
	                                                <div class="modal-header text-light">
	                                                    <h5 class="modal-title" id="exampleModalLabel">
	                                                        Avaliar Controle joystick sem fio Sony PlayStation DualSense CFI-ZCT1 cosmic red                                                    </h5>
	                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	                                                </div>
	                                                <div class="modal-body">
	                                                    <form action="../Usuarios/avaliar.php" method="POST">
	                                                        <input type="hidden" name="IdCompra" value="136">
	                                                        <input type="hidden" name="idProduto" value="6">
	                                                        <input type="hidden" name="DataAvaliacao" value="2022-11-09">
	
	                                                        <div class="form-group">
	                                                            <h3 class="text-light">Avalie o Produto</h3>
	                                                            <input type="range" min="1" max="5" value="5" name="Nota" class="slider myRange">
	                                                            <p class="text-warning"><i class="bi bi-star-fill"></i> : <span class="demo" style="font-size: 16px"></span></p>
	                                                        </div>
	                                                        <div class="form-group">
	                                                            <label class="text-light">Comentário:</label>
	                                                            <textarea class="form-control rounded-1" name="Comentario" placeholder="Gostei bastante ...." rows="3"></textarea>
	                                                        </div>
	                                                        <div class="py-3">
	                                                            <button type="submit" class="btn btn-secondary">Avaliar</button>
	                                                        </div>
	                                                    </form>
	                                                </div>
	
	                                            </div>
	                                        </div>
	                                    </div>
	                                                                <a target="_blank" href="../Produtos/comprovante.php?idCompra=136&&id=6" class="btn btn-success">
	                                    Ver Recibo <i class="bi bi-pencil-square"></i>
	                                </a>
	                            </div>
	                        </div>
	                                        <div class="d-flex pt-3">
	                            <div class="bd-placeholder-img flex-shrink-0 me-2">
	                                <a href="../Produtos/detalhesProdutoTeste.php?id=3"><img  class="img-fluid" style="width: 100px;" src="https://images.kabum.com.br/produtos/fotos/sync_mirakl/323052/Monitor-LED-28-4K-3840-x-2160-UHD-Display-Port-HDMI-FreesSync-Widescreen-HQ-HQ28RBG_1660323532_gg.jpg" width="100" height="100" class="rounded-5" alt=""></a>
	                            </div>
	
	                            <p class="pb-3 mb-0 border-bottom col-6">
	                                <strong class="d-block ">
	                                    Monitor LED 28 4K 3840 x 2160 uhd Display Port hdmi FreesSync Widescreen hq HQ28RBG                                </strong>
	                      <span class="d-block">
	                      Quantidade: 228                        </span>
	                                <span class="d-block">
	                                    R$: 430.920,00                                </span>
	                                <strong>Descrição:</strong>
	                                <span class="d-block">
	                                    Com a tecnologia AMD FreeSync, esqueça cortes e repetições de imagens tanto em jogos quanto ao assistir vídeos.                                </span>
	
	                                <small class="d-block">
	                                    Comprado em: 2022-11-08 00:00:00                                </small>
	                            </p>
	
	                            <div class="float-end">
	                                                                    <!-- Button trigger modal -->
	                                    <div class="py-3">
	                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal3">
	                                            Avaliar <i class="bi bi-star-fill"></i>
	                                        </button>
	                                    </div>
	
	                                    <!-- Modal -->
	                                    <div class="modal fade card" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                        <div class="modal-dialog">
	                                            <div class="modal-content">
	                                                <div class="modal-header text-light">
	                                                    <h5 class="modal-title" id="exampleModalLabel">
	                                                        Avaliar Monitor LED 28 4K 3840 x 2160 uhd Display Port hdmi FreesSync Widescreen hq HQ28RBG                                                    </h5>
	                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	                                                </div>
	                                                <div class="modal-body">
	                                                    <form action="../Usuarios/avaliar.php" method="POST">
	                                                        <input type="hidden" name="IdCompra" value="137">
	                                                        <input type="hidden" name="idProduto" value="3">
	                                                        <input type="hidden" name="DataAvaliacao" value="2022-11-09">
	
	                                                        <div class="form-group">
	                                                            <h3 class="text-light">Avalie o Produto</h3>
	                                                            <input type="range" min="1" max="5" value="5" name="Nota" class="slider myRange">
	                                                            <p class="text-warning"><i class="bi bi-star-fill"></i> : <span class="demo" style="font-size: 16px"></span></p>
	                                                        </div>
	                                                        <div class="form-group">
	                                                            <label class="text-light">Comentário:</label>
	                                                            <textarea class="form-control rounded-1" name="Comentario" placeholder="Gostei bastante ...." rows="3"></textarea>
	                                                        </div>
	                                                        <div class="py-3">
	                                                            <button type="submit" class="btn btn-secondary">Avaliar</button>
	                                                        </div>
	                                                    </form>
	                                                </div>
	
	                                            </div>
	                                        </div>
	                                    </div>
	                                                                <a target="_blank" href="../Produtos/comprovante.php?idCompra=137&&id=3" class="btn btn-success">
	                                    Ver Recibo <i class="bi bi-pencil-square"></i>
	                                </a>
	                            </div>
	                        </div>
	                
	
	        </div>
	
				OBS: Caso tenha realizado a compra de algum produto errado ou por engano entrar em contato com nosso SAC <a href="https://wa.me/5587991384872?text=Olá, comprei um produto por engano por engano e gostaria de solicitar uma devolução" target="_blank"><img style="width: 30px; border-radius: 50%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9coGtJuHVosJNwPjKv_nXB1ADapaRD-fV8XEYsqkgeMJsTLDWlRx0&usqp=CAE&s" ></a>
			</div>
	</div>


</section>

<style>
    * {
        box-sizing: border-box
    }

    body {
        font-family: "Lato", sans-serif;
    }

    .tab {
        float: left;
        color: white;
        width: 25%;
        height: 100%;
				background-color: #7c459c;
    }

    .tab button {
        display: block;
        background-color: inherit;
        color: white;
        padding: 22px 16px;
        width: 90%;
        border: none;
        outline: none;
        text-align: left;
        cursor: pointer;
        transition: 0.3s;
        font-size: 17px;
        margin: 3%;
        border-radius: 4px;
    }

    .tab button:hover {
        background-color: rgba(250,250,250, 0.3);
        color: white;
    }

    .tab button.active {
        width: 100%;
        background-color: #f4f5ff;
        color: black;
    }

    .tabcontent {
        float: left;
        padding: 10px 12px;
        border: 1px solid #ccc;
        width: 75%;
        border-left: none;
        height: auto;
        border-radius: 0 10px 10px 0;
    }

</style>

<script>
    /*pegar a url da imagem colocada em um input com o id="teste" 
    e substituir o src da imagem pelo url da imagem*/
    document.getElementById("teste").addEventListener("change", function() {
        //pegar o valor do input
        var url = document.getElementById("teste").value;
        //substituir o src da imagem pelo valor do input
        document.getElementById("imagem").src = url;
    });
</script>

<script>
    function openTab(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    document.getElementById("defaultOpen").click();
</script>

   <script>

var slider = document.getElementsByClassName('myRange');
        var output = document.getElementsByClassName('demo');
        for (let i = 0; i < slider.length; i++) {
            output[i].innerHTML = slider[i].value;
            slider[i].oninput = function() {
                output[i].innerHTML = this.value;
            }
        }
     
        $(".rating-box").show().css('left', $(".rating-n li").eq(0).offset().left);

        $(".rating-n").mouseenter(function() {
            $(".rating-box").show();
        }).mouseleave(function() {
            //$(".rating-box").hide();
        });


        $(".rating-n li").mouseenter(function() {
            var offset = $(this).offset();
            $(".rating-box").stop().animate({
                'left': offset.left
            });

            var index = $(this).index();
            $(".rating-preview").stop().animate({
                'margin-top': (index * 50) * -1
            });
        });

        // Animation preview
        $('.rating-preview').delay(500).animate({
            'margin-top': -50
        }, 500, function() {
            $('.rating-preview').delay(500).animate({
                'margin-top': -100
            }, 500);

        });

        $('.rating-box').delay(500).animate({
            'left': "+=45"
        }, 500, function() {

            $('.rating-box').delay(500).animate({
                'left': "+=45"
            }, 500)

        });
    </script>
    