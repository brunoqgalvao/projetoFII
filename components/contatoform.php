<!-- This is the contato form -->
<!-- TODO:
  - CSS
  - nome
  - email
  - comentário
  - submit button
-->
<!-- FIXME: Arrumar classes para CSS-->
<div class="container login-container">
  <div class="row justify-content-center">
    <div class="col-10 col-md-6 login-form">
      <div class='login-form-title'>CONTATE-NOS</div>
      <form>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Nome">
        </div>
        <div class="form-group">
          <input type="email" class="form-control" placeholder="Seu email">
        </div>
        <div class="form-group">
          <textarea name="comentario" class ="form-control" cols="8" rows="10" placeholder="Comentários e sugestões"></textarea>
        </div>
        <div class="form-row">
          <div class="col-7 col-md-9">
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
          </div>
          <div class="col-3">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
