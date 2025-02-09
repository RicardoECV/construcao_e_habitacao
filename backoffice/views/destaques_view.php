<main class="container-fluid">

  <div class="row">
    <div class="col-12 text-center">
      <h1 class="p-3">Destaques (Edição)</h1>      
    </div>

    <!-- Botão de Criação de Novo Destaque -->
    <div class="col-12 text-center p-4">      
      <a class="text-decoration-none text-white btn btn-primary" href="destaque_novo.php">Novo Destaque</a>            
    </div>

    <!-- Tabela de Destaques -->
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
          <th>Está na Home?</th>  
          <th>Ações</th> 
        </tr>

        <?php foreach($destaques as $d): ?>
          <tr>            
            
            <td><img src="<?= $d["imagem"]; ?>" alt="<?= $d["imagem"]; ?>"></td>
            <td><?= $d["titulo"]; ?></td>
            <td><?= substr(strip_tags($d["texto"]),0 , 500); ?>...</td>
            <td><?= getUserName($d["id_criador"])["nome"]; ?></td>
            <td><?= $d["data_criacao"]; ?></td>            
            <td><?= getUserName($d["id_editor"])["nome"]; ?></td> 
            <td><?= $d["data_edicao"]; ?></td>    
            <td class="text-center"><?= ($d["home_page"]) ? "Sim" : "Não"; ?></td>
            
            <!-- Botões de Editar/Apagar -->
            <td>
              <a class="btn btn-primary" href="destaque_editar.php?id=<?= $d["id"]; ?>">Editar</a>   
              <br><br>           
              <a class="btn btn-danger" href="destaque_apagar.php?id=<?= $d["id"]; ?>">Apagar</a>
            </td>
            
          </tr>
        <?php endforeach; ?>

      </table>
    </div>
  </div>

</main>