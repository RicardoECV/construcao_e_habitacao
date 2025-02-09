<main class="container-fluid">

  <?php if(empty($menu_simples)): ?>

    <!-- Mensagem de Menu Não Encontrado -->
    <div class="row">
      <div class="col-12">
        <h2 class="text-danger text-center p-4">Menu Não Encontrado!</h2>
      </div>
    </div>

  <?php else: ?>

  <!-- Título e Informações do Menu Simples  -->
  <div class="row">
    <div class="col-12 text-center p-3">
      <h1>Edição</h1>
      <h3>Página: (<?= $menu_simples["titulo"]; ?>)</h3>
      <h4>Ultimo Editor: (<?= getUserName($menu_simples["id_editor"])["nome"]; ?>)</h4>
      <h4>Data Ultima Edição: (<?= $menu_simples["data_edicao"]; ?>)</h4>
    </div>
  </div>

  <!-- Formulário de Edição do Menu Simples -->
  <form class="row">
    <input type="hidden" name="pagina" value="<?= $pagina; ?>">
    <div class="col-12 p-4 mx-auto text-center">
      
      <textarea name="texto" cols="100" rows="30" id="texto_menu_simples"><?= $menu_simples["texto"]; ?></textarea>
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
      <a href="home.php" class="btn btn-danger">Voltar</a>
    </div>
  </form>

  <?php endif; ?>
  
</main>