<main class="container-fluid">

  <div class="row">

    <div class="col-12 text-center">
      <h1 class="p-3">Notícias (Edição)</h1>      
    </div>

    <!-- Botão de Criação de Nova Notícia -->
    <div class="col-12 text-center p-4">      
      <a class="text-decoration-none text-white btn btn-primary" href="noticia_nova.php">Nova Notícia</a>           
    </div>

    <!-- Tabela de Notícias -->
    <div class="col-12">
      <table>

        <tr class="text-center">   
          <th>Imagem</th>
          <th>Título</th>
          <th>Texto</th>
          <th>Criador</th> 
          <th>Data de Criaçao</th>             
          <th>Editor</th>            
          <th>Data da Ultima Edição</th>          
          <th>Ações</th>
        </tr>

        <?php foreach($noticias as $n): ?>
          <tr>

            <td><img src="<?= $n["imagem"]; ?>" alt="<?= $n["imagem"]; ?>"></td>
            <td><?= $n["titulo"]; ?></td>
            <td><?= substr(strip_tags($n["texto"]),0 , 500); ?>...</td> 
            <td><?= getUserName($n["id_criador"])["nome"]; ?></td>
            <td><?= $n["data_criacao"]; ?></td>            
            <td><?= getUserName($n["id_editor"])["nome"]; ?></td> 
            <td><?= $n["data_edicao"]; ?></td>     
            
            <!-- Botões de Editar/Apagar -->
            <td>
              <a class="btn btn-primary" href="noticia_editar.php?id=<?= $n["id"]; ?>">Editar</a>   
              <br><br>           
              <a class="btn btn-danger" href="noticia_apagar.php?id=<?= $n["id"]; ?>">Apagar</a>
            </td>
            
          </tr>
        <?php endforeach; ?>

      </table>
    </div>

  </div>

</main>