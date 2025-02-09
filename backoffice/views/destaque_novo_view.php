<main class="container-fluid">

  <div class="row">

    <div class="col-12 text-center m-3">
      <h1>Novo Destaque</h1>
    </div>

    <!-- Formulário de Criação do Novo Destaque -->
    <form class="row">   

      <div class="col-12 p-4 mx-auto text-center">

        <label for="titulo">Título: </label>
        <input type="text" name="titulo" autofocus required >
        <br><br>
        <label for="imagem">Imagem: </label>
        <input type="text" name="imagem" required>
        <a class="btn btn-primary" target="_blank" href="../tinyfilemanager/tinyfilemanager.php">Gestor de Ficheiros</a>
        <br><br>

        <label for="texto">Texto: </label>
        <textarea name="texto" cols="100" rows="30" id="texto_menu_simples"></textarea>

        <!-- Editor de Texto -->
        <script>
          tinymce.init({
            selector: '#texto_menu_simples'
          });
        </script>        
       
      </div>

      <div class="col-12 text-center">
        <h5>Está na Home?</h5>
        <input type="radio" id="sim" name="home_check" value="1">
        <label for="sim">Sim</label><br>
        <input type="radio" id="nao" name="home_check" value="0" checked>
        <label for="nao">Não</label><br><br>
      </div>

      <!-- Botões de Criar/Voltar -->
      <div class="col-12 m-auto text-center">
        <button class="btn btn-success">Criar</button>
        <a href="destaques.php" class="btn btn-danger">Voltar</a>
      </div>
  
    </form>

  </div>

</main>