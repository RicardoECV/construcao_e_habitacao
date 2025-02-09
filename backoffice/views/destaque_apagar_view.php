<main class="container-fluid">

  <?php if(!empty($destaque_unico)): ?>

    <!-- Confirmção de Eliminação de Destaque -->
    <div class="row">

      <div class="col-12 text-center p-5">        
        <h2>Deseja Apagar o Destaque (<?= $destaque_unico["titulo"]; ?>) ?</h2>      
      </div>

      <!-- Botões de Confirmação -->
      <div class="col-12 text-center">
        <a class="btn btn-danger text-decoration-none text-white p-3 m-4" href="destaque_apagado.php?id=<?= $destaque_unico["id"]; ?>">Sim</a>
        <a class="text-decoration-none text-white p-3 m-4 btn btn-primary" href="destaques.php">Não</a>
      </div>

    </div>

  <?php else: ?>

    <!-- Mensagem de Destaque Não Encontrado -->
    <div class="row">
      <div class="col-12 text-center p-4">
        <h2 class="text-danger">Destaque Não Encontrado</h2>
      </div>
    </div>

  <?php endif; ?>

</main>