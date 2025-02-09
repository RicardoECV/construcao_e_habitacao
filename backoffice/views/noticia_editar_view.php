<main class="container-fluid">

  <div class="row">

    <div class="col-12 text-center m-3">
      <h1>Editar Notícia (<?= substr($noticia_unica["titulo"], 0, 45); ?>)</h1>
    </div>

    <?php if(!empty($_GET["id"])): ?>

      <!-- Formulário de Edição da Notícia -->
      <form class="row">   

        <div class="col-12 p-4 mx-auto text-center">

          <input type="hidden" name="id" value="<?= $noticia_unica["id"]; ?>">
          <label for="titulo">Título: </label>
          <input type="text" name="titulo" value="<?= $noticia_unica["titulo"]; ?>" autofocus required>
          <br><br>
          <label for="imagem">Imagem: </label>
          <input type="text" name="imagem" value="<?= $noticia_unica["imagem"]; ?>" required>
          <a class="btn btn-primary" target="_blank" href="../tinyfilemanager/tinyfilemanager.php">Gestor de Ficheiros</a>
          <br><br>

          <label for="texto">Texto: </label>
          <textarea name="texto" cols="100" rows="30" id="texto_menu_simples"><?= $noticia_unica["texto"]; ?></textarea>

          <!-- Editor de Texto -->
          <script>
            tinymce.init({
              selector: '#texto_menu_simples'
            });
          </script>        
        
        </div>

        <!-- Botões de Editar/Voltar -->
        <div class="col-12 m-auto text-center">
          <button class="btn btn-success">Editar</button>
          <a href="noticias.php" class="btn btn-danger">Voltar</a>
        </div>

      </form>

    <?php else: ?>

      <!-- Mensagem de Noticia Não Encontrada -->
      <div class="col-12 text-center m-3">
        <h1 class="text-danger">Notícia Não Encontrado!</h1>
      </div>

    <?php endif; ?>

  </div>

</main>