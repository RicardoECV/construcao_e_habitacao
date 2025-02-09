<main class="container-fluid">

  <?php if(!empty($noticia_unica)): ?>

    <div class="row">

      <!-- Confirmação de Eliminação de Notícia -->
      <div class="col-12 text-center p-5">        
        <h2>Deseja Apagar a Notícia (<?= $noticia_unica["titulo"]; ?>) ?</h2>      
      </div>

      <!-- Botões de Confirmação -->
      <div class="col-12 text-center">
        <a class="btn btn-danger text-decoration-none text-white p-3 m-4" href="noticia_apagada.php?id=<?= $noticia_unica["id"]; ?>">Sim</a>
        <a class="text-decoration-none text-white p-3 m-4 btn btn-primary" href="noticias.php">Não</a>
      </div>
      
    </div>

  <?php else: ?>

    <!-- Mensagem de Notícia Não Encontrada -->
    <div class="row">
      <div class="col-12 text-center p-4">
        <h2 class="text-danger">Destaque Não Encontrado</h2>
      </div>
    </div>

  <?php endif; ?>

</main>