<main class="container-fluid">

  <?php if(!empty($carrousel_banner)): ?>

    <!-- Confirmção de Eliminação de Banner do Carrousel -->
    <div class="row">

      <div class="col-12 text-center p-5">        
        <h2>Deseja Apagar o Banner do Carrousel ?</h2>      
      </div>

      <!-- Botões de Confirmação -->
      <div class="col-12 text-center">
        <a class="btn btn-danger text-decoration-none text-white p-3 m-4" href="carrousel_apagado.php?id=<?= $carrousel_banner["id"]; ?>">Sim</a>
        <a class="text-decoration-none text-white p-3 m-4 btn btn-primary" href="carrousel.php">Não</a>
      </div>

    </div>

  <?php else: ?>

    <!-- Mensagem de Banner do Carrousel Não Encontrado -->
    <div class="row">
      <div class="col-12 text-center p-4">
        <h2 class="text-danger">Banner do Carrousel Não Encontrado</h2>
      </div>
    </div>

  <?php endif; ?>

</main>