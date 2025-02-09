<main class="container-fluid">

  <div class="row">
    <div class="col-12 text-center">
      <h1 class="p-3">Contactos (Edição)</h1>      
    </div>    

    <!-- Tabela de Contactos -->
    <div class="col-auto m-auto text-center">
      <table>

        <tr class="text-center">
          <th>Morada</th>
          <th>Telefone</th>            
          <th>Fax</th>  
          <th>Email</th>  
          <th>Facebook</th> 
          <th>Editor</th> 
          <th>Data da Ultima Edição</th> 
          <th>Ações</th> 
        </tr>
       
        <tr>

          <td><?= $contactos["morada"]; ?></td>
          <td><?= $contactos["telefone"]; ?></td>            
          <td><?= $contactos["fax"]; ?></td>            
          <td><?= $contactos["email"]; ?></td>            
          <td><?= $contactos["facebook"]; ?></td>            
          <td><?= getUserName($contactos["id_editor"])["nome"]; ?></td>            
          <td><?= $contactos["data_edicao"]; ?></td>  
          
          <!-- Botão de Editar -->
          <td>
            <a class="btn btn-primary" href="contactos_editar.php">Editar</a>  
          </td>
          
        </tr>
     
      </table>
    </div>
  </div>

</main>