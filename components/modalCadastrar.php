<!-- Modal -->
<div class="modal fade" id="modalCadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body login-form">
        <div class='login-form-title'>CADASTRE-SE PROJETO FII</div>
        <hr/>
        <div class='btn-login-facebook text-center'>
          <a class="btn btn-lg btn-facebook" href="./">
            Cadastro com facebook
          </a>
        </div>
        <hr/>
        <form action="./">
          <div id="cadastro-nome">
            <div class="form-group">
              Email: <input type="text" class="form-control" placeholder="Seu e-mail *" name='email' value="" required/>
            </div>
            <div class="form-group">
              <button type="avancar" class="btn-submit" id='btn-avancar' onClick="avancarCadastro()">Cadastrar</button>
            </div>
          </div>
          <div id="cadastro-dados" style="display: none">
            <div class="form-group">
              Nome: <input type="text" class="form-control" placeholder="Seu nome *" name='name' value="" required/>
            </div>
            <div class="form-group">
              Senha: <input type="password" class="form-control" placeholder="Sua senha *" name='password' value="" required
              />
            </div>
            <div class="form-group">
              Confirmar Senha: <input type="password" class="form-control" placeholder="Confirmar senha *" name='confirmPassword' value="" required
              />
            </div>
            <div class="form-group">
              <input type="submit" class="btn-submit" value="Cadastrar" />
            </div>
          </div>
          <div class="form-group">
            <a href="#" id='login-forget-pwd' data-toggle="modal" data-dismiss="modal" data-target="#modalLogin">Já tem cadastro?</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- TODO: refatorar esse script para fora do arquivo -->
<!-- TODO: alinhar como será essa funcionalidade -->
<script>
  var btnForgetPwd = document.querySelector('#login-forget-pwd');
  btnForgetPwd.addEventListener('click',function(){
    alert('um email foi enviado ao seu ...');
  })
  btnForgetPwdParent = btnForgetPwd.parentNode;
  btnForgetPwdParent.appendChild()

  var node = document.createElement("LI");                 // Create a <li> node
var textnode = document.createTextNode("Water");         // Create a text node
node.appendChild(textnode);                              // Append the text to <li>
document.getElementById("myList").appendChild(node);     // Append <li> to <ul> with id="myList"

function avancarCadastro(){
  btnAvancar = document.querySelector("#btn-avancar");
  cadDados = document.querySelector("#cadastro-dados");
  btnAvancar.style.display = 'none';
  cadDados.style.display = 'block';

}

</script>
