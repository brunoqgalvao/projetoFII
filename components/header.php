<!--  -->
<!-- FIXME: Mobile não está resolvido no header - vai ser CSS? -->

<header>
    <div class= 'logo-container'>
      <a href="./index.php" class="logo-container-link"></a>
      <div class="logo-container-logo-bg"></div>
      <span class="logo-container-title">projeto fii</span>
    </div>
    <div class="col-5 d-none d-md-block">
    </div>
    <div class= 'header-login-btns'>
      <div class="mb-2">
      <button type="button" class="btn btn-padrao" data-toggle="modal" data-target="#modalCadastrar">
        CADASTRAR
      </button>      
    </div>
      <button type="button" class="btn btn-login" data-toggle="modal" data-target="#modalLogin">
        ENTRAR
      </button>
      <?php include('components/modalLogin.php');?>
      <?php include('components/modalCadastrar.php');?>

    </div>
</header>