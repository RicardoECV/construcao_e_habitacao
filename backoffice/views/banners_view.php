<main class="container-fluid">

  <div class="row">
    <div class="col-12 text-center">
      <h1 class="p-3">Banners (Edição)</h1>      
    </div>
  
    <!-- Tabela de Banners das Páginas do Site -->
    <div class="col-auto m-auto text-center">
      <table>

        <tr class="text-center">        
          <th>Imagem</th>            
          <th>Página</th>           
          <th>Editor</th>            
          <th>Data da Ultima Edição</th>                    
          <th>Ações</th>
        </tr>

        <?php foreach($banners as $b): ?>

          <tr>            
            <td><img class="carousel-img" src="<?= $b["imagem"]; ?>" alt="<?= $b["imagem"]; ?>"></td>  
            <td><?= getPaginaBanner($b["pagina"]); ?></td>  
            <td><?= getUserName($b["id_editor"])["nome"]; ?></td>       
            <td><?= $b["data_edicao"]; ?></td>   
            
            <!-- Botão de Editar -->
            <td>
              <a class="btn btn-primary" href="banner_editar.php?id=<?= $b["id"]; ?>">Editar</a>                 
            </td>
          </tr>
          
        <?php endforeach; ?>

      </table>
    </div>
  </div>

</main>