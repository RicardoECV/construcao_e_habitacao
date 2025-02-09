<main class="container-fluid">

  <?php if(!empty($empreendimento_unico)): ?>

    <!-- Confirmção de Eliminação de Empreendimento -->
    <div class="row">

      <div class="col-12 text-center p-5">        
        <h2>Deseja Apagar o Empreendimento (<?= $empreendimento_unico["titulo"]; ?>) ?</h2>      
      </div>

      <!-- Botões de Confirmação -->
      <div class="col-12 text-center">
        <a class="btn btn-danger text-decoration-none text-white p-3 m-4" href="empreendimento_apagado.php?id=<?= $empreendimento_unico["id"]; ?>">Sim</a>
        <a class="text-decoration-none text-white p-3 m-4 btn btn-primary" href="empreendimentos.php">Não</a>
      </div>

    </div>

  <?php else: ?>

    <!-- Mensagem de Empreendimento Não Encontrado -->
    <div class="row">
      <div class="col-12 text-center p-4">
        <h2 class="text-danger">Empreendimento Não Encontrado</h2>
      </div>
    </div>

  <?php endif; ?>

</main>