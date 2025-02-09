<main class="container-fluid">

  <div class="row">
    <div class="col-12 text-center">
      <h1 class="p-3">Carrousel (Edição)</h1>      
    </div>

    <!-- Botão de Criação de um Novo Banner do Carrousel -->
    <div class="col-12 text-center p-4">      
      <a class="text-decoration-none text-white btn btn-primary" href="carrousel_novo_banner.php">Nova Imagem</a>            
    </div>

    <!-- Tabela de Banners do Carrousel -->
    <div class="col-auto m-auto text-center">
      <table>

        <tr class="text-center">
          <th>Ordem</th>
          <th>Imagem</th>
          <th>Criador</th> 
          <th>Data de Criaçao</th>             
          <th>Editor</th>            
          <th>Data da Ultima Edição</th>            
          <th>Ações</th> 
        </tr>

        <?php foreach($carrousel as $i => $c): ?>
          <tr>

            <td><?= $i+1; ?></td>
            <td><img class="carousel-img" src="<?= $c["imagem"]; ?>" alt="<?= $c["imagem"]; ?>"></td> 
            <td><?= getUserName($c["id_criador"])["nome"]; ?></td>
            <td><?= $c["data_criacao"]; ?></td>            
            <td><?= getUserName($c["id_editor"])["nome"]; ?></td> 
            <td><?= $c["data_edicao"]; ?></td>  
            
            <!-- Botões de Editar/Apagar -->
            <td>
              <a class="btn btn-primary" href="carrousel_editar.php?id=<?= $c["id"]; ?>">Editar</a>   
              <br><br>           
              <a class="btn btn-danger" href="carrousel_apagar.php?id=<?= $c["id"]; ?>">Apagar</a>
            </td>
            
          </tr>
        <?php endforeach; ?>

      </table>
    </div>
  </div>

</main>