<main class="container-fluid">

  <div class="row">

    <div class="col-12 text-center m-3">
      <h1>Novo Empreendimento</h1>
    </div>

    <!-- Formulário de Criação de um Novo Empreendimento -->
    <form class="row">   
      
      <div class="col-12 p-4 mx-auto text-center">

        <label for="titulo">Título: </label>
        <input type="text" name="titulo" autofocus required >
        <br><br>
        <label for="imagem">Imagem 1: </label>
        <input type="text" name="imagem_1">
        <br><br>
        <label for="imagem">Imagem 2: </label>
        <input type="text" name="imagem_2">
        <br><br>
        <label for="imagem">Imagem 3: </label>
        <input type="text" name="imagem_3">
        <br><br>
        <label for="imagem">Imagem 4: </label>
        <input type="text" name="imagem_4">
        <br><br>
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

      <!-- Botões de Criar/Voltar -->
      <div class="col-12 m-auto text-center">
        <button class="btn btn-success">Criar</button>
        <a href="empreendimentos.php" class="btn btn-danger">Voltar</a>
      </div>
  
    </form>

  </div>

</main>