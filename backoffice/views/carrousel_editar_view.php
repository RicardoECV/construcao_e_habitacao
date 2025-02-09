<main class="container-fluid">

  <div class="row">

    <div class="col-12 text-center m-3">
      <h1>Editar Banner do Carrousel</h1>
    </div>

    <?php if(!empty($_GET["id"])): ?>

      <!-- Formulário de Edição do Banner do Carrousel -->
      <form class="row">   

        <div class="col-12 p-4 mx-auto text-center">
          <input type="hidden" name="id" value="<?= $carrousel_banner["id"]; ?>">          
          <label for="imagem">Imagem: </label>
          <input type="text" name="imagem" value="<?= $carrousel_banner["imagem"]; ?>" required>
          <a class="btn btn-primary" target="_blank" href="../tinyfilemanager/tinyfilemanager.php">Gestor de Ficheiros</a>
          <br><br>
        </div>

        <!-- Botões de Editar/Voltar -->
        <div class="col-12 m-auto text-center">
          <button class="btn btn-success">Editar</button>
          <a href="carrousel.php" class="btn btn-danger">Voltar</a>
        </div>

      </form>

    <?php else: ?>

      <!-- Mensagem de Banner do Carrousel Não Encontrado -->
      <div class="col-12 text-center m-3">
        <h1 class="text-danger">Banner do Carrousel Não Encontrado!</h1>
      </div>

    <?php endif; ?>

  </div>

</main>