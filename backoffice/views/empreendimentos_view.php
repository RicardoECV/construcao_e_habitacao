<main class="container-fluid">

  <div class="row">
    <div class="col-12 text-center">
      <h1 class="p-3">Empreendimentos (Edição)</h1>      
    </div>

    <!-- Botão de Criação de Empreendimento Novo -->
    <div class="col-12 text-center p-4">
      <a class="text-decoration-none text-white btn btn-primary" href="empreendimento_novo.php">Novo Empreendimento</a>            
    </div>

    <!-- Tabela de Empreendimentos -->
    <div class="col-12">
      <table>

        <!-- Cabeçalho da Tabela dos Empreendimentos -->
        <tr class="text-center">    
          <th>Imagems</th>          
          <th>Título</th>
          <th>Texto</th>
          <th>Criador</th> 
          <th>Data de Criaçao</th>             
          <th>Editor</th>            
          <th>Data da Ultima Edição</th>          
          <th>Ações</th>
        </tr>

        <?php foreach($empreendimentos as $e): ?>
          <tr>

            <!-- Secção de Imagens de Cada Empreendimento -->
            <td>
              <div class="d-flex flex-wrap justify-content-center gap-2">
                <?php for($i = 1; $i <= 4; $i++): ?>

                  <?php if(empty($e["imagem_$i"])): ?>

                    <div class="border-2 border border-black p-3"> 
                      <p class="m-0">Não Contem Imagem <?= $i; ?></p>
                    </div>   
                    
                  <?php else: ?>

                    <img src="<?= $e["imagem_$i"]; ?>" alt="<?= $e["imagem_$i"]; ?>"> 

                  <?php endif; ?>
                  
                <?php endfor; ?>
              </div>              
            </td>

            <!-- Informações de cada Empreendimento -->
            <td><?= $e["titulo"]; ?></td>
            <td><?= substr(strip_tags($e["texto"]),0 , 200); ?>...</td> 
            <td><?= getUserName($e["id_criador"])["nome"]; ?></td>
            <td><?= $e["data_criacao"]; ?></td>            
            <td><?= getUserName($e["id_editor"])["nome"]; ?></td> 
            <td><?= $e["data_edicao"]; ?></td>  

            <!-- Botões de Editar/Apagar -->
            <td>
              <a class="btn btn-primary" href="empreendimento_editar.php?id=<?= $e["id"]; ?>">Editar</a>   
              <br><br>           
              <a class="btn btn-danger" href="empreendimento_apagar.php?id=<?= $e["id"]; ?>">Apagar</a>
            </td>
            
          </tr>
        <?php endforeach; ?>

      </table>
    </div>
  </div>

</main>