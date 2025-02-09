<main class="container-fluid">

  <div class="row">
    <div class="col-12 text-center p-5">
      <h1>Backoffice Login</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-auto p-4 mx-auto border border-3 border-success rounded-4 text-center">

      <!-- Login/Senha Incorretos -->
      <?php if($form): ?>
        <h2 class="text-danger py-4">Login ou PW errados!</h2>
      <?php endif; ?>

      <!-- Formulário Login -->
      <form method="post">        
        <input type="text" name="login" placeholder="Login" autofocus>
        <br><br>
        <input type="password" name="pw" placeholder="Password">
        <br><br>
        <button class="btn btn-outline-success">Login</button>
      </form>

    </div>
  </div>

</main>