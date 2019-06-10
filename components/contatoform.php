<!-- This is the contato form -->
<!-- TODO:
  - fazer form passando por varios steps via javascript
-->
<!-- FIXME: Arrumar classes para CSS-->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-10 col-md-5">
      <fieldset>
        <div class="text-center mt-5">
        <legend>CONTATE-NOS</legend>
        </div>
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
          <div class="form-group">
            <div class="justify-content-between">
              <div class="form-inline">
                <div class="form-check ml-0">
                  <input type="checkbox" class="form-check-input" id="postarNome">
                  <label class="form-check-label" for="postarNome">Não postar meu nome</label>
                </div>
                  <button type="submit" class="btn btn-primary">Submit</button> 
              </div>
            </div>
          </div>
        </form>  
      </fieldset>
    </div>
  </div>
</div>
