<main class="container-fluid">

  <div class="row">

    <div class="col-12 text-center my-3">
      <h1>Empreendimento Editar (<?= substr($empreendimento_unico["titulo"],0 , 45); ?>)</h1>
    </div>

    <?php if(!empty($_GET["id"])): ?>

      <!-- Formulário de Edição de um Empreendimento -->
      <form class="row">   

        <div class="col-12 p-4 mx-auto text-center">

          <input type="hidden" name="id" value="<?= $empreendimento_unico["id"]; ?>">
          <label for="titulo">Título: </label>
          <input type="text" name="titulo" value="<?= $empreendimento_unico["titulo"]; ?>" autofocus required>
          <br><br>
          <label for="imagem">Imagem 1: </label>
          <input type="text" name="imagem_1" value="<?= $empreendimento_unico["imagem_1"]; ?>">
          <br><br>
          <label for="imagem">Imagem 2: </label>
          <input type="text" name="imagem_2" value="<?= $empreendimento_unico["imagem_2"]; ?>">
          <br><br>
          <label for="imagem">Imagem 3: </label>
          <input type="text" name="imagem_3" value="<?= $empreendimento_unico["imagem_3"]; ?>">
          <br><br>
          <label for="imagem">Imagem 4: </label>
          <input type="text" name="imagem_4" value="<?= $empreendimento_unico["imagem_4"]; ?>">
          <br><br>
          <a class="btn btn-primary" target="_blank" href="../tinyfilemanager/tinyfilemanager.php">Gestor de Ficheiros</a>
          <br><br>

          <label for="texto">Texto: </label>
          <textarea name="texto" cols="100" rows="30" id="texto_menu_simples"><?= $empreendimento_unico["texto"]; ?></textarea>

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
          <a href="empreendimentos.php" class="btn btn-danger">Voltar</a>
        </div>

      </form>

    <?php else: ?>

      <!-- Mensagem de Empreendimento Não Encontrado -->
      <div class="col-12 text-center m-3">
        <h1 class="text-danger">Empreendimento Não Encontrado!</h1>
      </div>

    <?php endif; ?>

  </div>

</main>