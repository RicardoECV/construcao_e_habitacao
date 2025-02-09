<main class="container-fluid">

  <div class="row">

    <div class="col-12 text-center m-3">
      <h1>Editar Destaque (<?= substr($destaque_unico["titulo"],0 , 45); ?>)</h1>
    </div>

    <?php if(!empty($_GET["id"])): ?>

      <!-- Formulário de Edição de um Destaque -->
      <form class="row">   

        <div class="col-12 p-4 mx-auto text-center">

          <input type="hidden" name="id" value="<?= $destaque_unico["id"]; ?>">
          <label for="titulo">Título: </label>
          <input type="text" name="titulo" value="<?= $destaque_unico["titulo"]; ?>" autofocus required>
          <br><br>
          <label for="imagem">Imagem: </label>
          <input type="text" name="imagem" value="<?= $destaque_unico["imagem"]; ?>" required>
          <a class="btn btn-primary" target="_blank" href="../tinyfilemanager/tinyfilemanager.php">Gestor de Ficheiros</a>
          <br><br>

          <label for="texto">Texto: </label>
          <textarea name="texto" cols="100" rows="30" id="texto_menu_simples"><?= $destaque_unico["texto"]; ?></textarea>

          <!-- Editor de Texto -->
          <script>
            tinymce.init({
              selector: '#texto_menu_simples'
            });
          </script>        
        
        </div>

        <div class="col-12 text-center">
          <h5>Está na Home?</h5>          
          <input type="radio" id="sim" name="home_check" value="1" <?= ($destaque_unico["home_page"]) ? ("checked") : (""); ?>>
          <label for="sim">Sim</label><br>
          <input type="radio" id="nao" name="home_check" value="0" <?= (!$destaque_unico["home_page"]) ? ("checked") : (""); ?>>
          <label for="nao">Não</label><br><br>
        </div>

        <!-- Botões de Editar/Voltar -->
        <div class="col-12 m-auto text-center">
          <button class="btn btn-success">Editar</button>
          <a href="destaques.php" class="btn btn-danger">Voltar</a>
        </div>

      </form>

    <?php else: ?>

      <!-- Mensagem de Destaque Não Encontrado -->
      <div class="col-12 text-center m-3">
        <h1 class="text-danger">Destaque Não Encontrado!</h1>
      </div>

    <?php endif; ?>

  </div>

</main>