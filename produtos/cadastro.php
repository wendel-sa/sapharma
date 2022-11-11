<?php
  include '../configuracao/conexao.php';
  include '../componentes/header.php';
?>
    
    <div class="row py-3 px-5">
  
      <h1 class='text-left'>Cadastre o Produto</h1>

      <div class="col-6">
        <form action="insert.php" method="POST">
          <div>
            <label class="form-label pt-3">Nome</label>
            <input type="text" class="form-control" name="nome">
          </div>

          <div>
            <label class="form-label pt-3">Tipo</label>
            <input type="text" class="form-control" name="tipo">
          </div>

          <div>
            <label class="form-label pt-3">Descrição</label>
            <input type="text" class="form-control" name="descricao">
          </div>
          
          <div>
            <label class="form-label pt-3">Quantidade</label>
            <input type="number" class="form-control" name="quantidade">
          </div>

          <div>
            <label class="form-label  pt-3">Preço</label>
            <input type="number" step="any" class="form-control" name="preco">
          </div>
          
          <div>
            <label class="form-label  pt-3">Endereço da Imagem</label>
            <input type="text" class="form-control" name="imagem">
          </div>
            
          <div class="py-3">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </div>
        </form>
      </div>
      <div class="col-6">
        <img style="border-radius: 10px;"src="https://media.gettyimages.com/photos/pharmacist-takes-medication-off-of-shelf-picture-id1165344671?k=20&m=1165344671&s=612x612&w=0&h=fceO9AYV9nsdNoZpfwSh6m9j4qVt28X741xNLslD2TA=" alt="Homem repondo estoque">
      </div>
    </div>

  <?php
include '../componentes/footer.php';
    ?>
        
    <!-- PRODUTOS, IMAGENS E DESCRIÇÕES -->
    <!-- <h1 class="prod">Calcitran D3</h1>
    <img alt="Calcitran" src="https://a-static.mlcdn.com.br/800x560/suplemento-vitaminico-calcitran-d3-com-60-comprimidos-divcom-pharma/drogaonet/687909658/cec280564dbd9b04cfb10a741bf96915.jpeg">
    <h3 class="desc">É um suplemento vitamínico e mineral que auxilia na reposição de cálcio do organismo.</h3>
    
    <h1 class="prod">Polivitaminíco 50+</h1>
    <img alt="Polivitminico" src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSjH4wUuSbEKvLzsBsUbPJ4kZG_XaQu961sLadtj4d_BjuLKu0HFhe-zwx7W8MU0j4zOP342_o2zHdoq3Z5tPFfysndeMTs288GjEdfHMfuRzqcXtvuFDlB">
    <h3 class="desc">Sua composição de nutrientes foi cuidadosamente escolhida de modo a complementar a ingestão de vitaminas e minerais para a saúde e o bem-estar dos indivíduos com mais de 50 anos</h3>
    
    <h1 class="prod">Ômega 3</h1>
    <img alt="Omega3" src="https://m.media-amazon.com/images/I/61Em4NrCiwL._AC_SX425_.jpg">
    <h3 class="desc">O Ômega 3 Catarinense é um suplemento alimentar em formato de cápsulas que auxilia na manutenção dos níveis saudáveis de triglicerídeos, controla a pressão arterial e o colesterol, e previne doenças cardiovasculares.</h3>

    <h1 class="prod">Risendronato</h1>
    <img alt="Risendronato" src="https://e.drogasul.med.br/4429-large_default/grisedronato-sodico-35-mg-4-cpr.jpg
">
    <h3 class="desc">O Risedronato sódico é destinado ao tratamento e prevenção da osteoporose (perda de material ósseo) em mulheres no período pós-menopausa para reduzir o risco de fraturas vertebrais e não vertebrais.
É também destinado ao tratamento da osteoporose em homens com alto risco de fraturas e tratamento da osteoporose estabelecida em mulheres no período pós-menopausa para reduzir o risco de fraturas de quadril.</h3>
    
    <h1 class="prod">Ibandronato</h1>
    <img alt="calcitran" src="https://images.webfarmas.com.br/7898146826614.jpg
">
    <h3 class="desc">O Ibandronato de Sódio é um medicamento usado para tratar a osteoporose em mulheres após a menopausa.
Sua ação pode reverter a perda óssea e diminuir as chances de fraturas decorrentes do enfraquecimento dos ossos.
</h3>
    
    <h1 class="prod">Alendronato</h1>
    <img alt="Alendronato" src="https://vendas.carvalhodistribuidora.com.br/2778-large_default/alendronato-sodico-70mg-4cpr60.jpg">
      
    <h3 class="desc">O Alendronato de Sódio é um composto que atua como um potente inibidor específico da reabsorção óssea.
O Alendronato de Sódio pertence à classe de medicamentos não hormonais chamados bifosfonatos, que ajudam na reconstituição dos ossos e faz com que os ossos tenham menos propensão a fraturas.
</h3> -->
  
