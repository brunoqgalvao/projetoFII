<style>
@media only screen and (max-width: 768px){
  .p-sm-0 {
    padding: 0!important;
  }
}
  </style>


<section class="container-fluid">
  <div class='row bg-container' style='height:400px'>
    <!-- img de fundo -->
    <div class='bg' style="background-image:url('assets/itau_banner.jpg')"></div>
    <!-- foto e perfil e nome -->
    <div class="col-6 d-flex flex-column-reverse">
      <div class='row d-flex align-items-end ml-md-3 ml-1'>
        <div class='header-perfil-container' style="height:200px;width:200px">
          <a href="#" id="perfil-link"></a>
          <div class="avatar-container">
            <img src="assets/itau.jpg" alt="avatar" class="avatar-img">
          </div>
        </div>
        <h3 class='text-white'>Banco Itaú</h3>
      </div>
    </div>
  </div>
  </div>
    <div class="row">
      <div class="col-md-4 p-sm-0 p-md-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Banco Itaú</h5>
            <h6 class="card-subtitle mb-2 text-muted">Empresa</h6>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Volupt adipisicing elit.
              Volupt</p>
            <a href="#" class="card-link">Contato</a>
            <a href="#" class="card-link">Mensagem</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 p-sm-0 p-md-3">
        <?php include('postBox.php')?>
        <?php include('postBox.php')?>
        <?php include('postBox.php')?>

      </div>
    </div>
</section>