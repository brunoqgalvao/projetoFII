<style>
  /*-- Global Selectors --*/
  a {
    color: #47649F;
  }

  body {
    font-family: 'helvetica';
  }

  /*-- Bootstrap Override Style --*/


  /*-- Content Style --*/
  .post-footer-option li {
    float: left;
    margin-right: 50px;
    padding-bottom: 15px;
  }

  .post-footer-option li a {
    color: #AFB4BD;
    font-weight: 500;
    font-size: 1.3rem;
  }

  .photo-profile {
    border: none;
  }

  .anchor-username h4 {
    font-weight: bold;
  }

  .anchor-time {
    color: var(--verde);
    font-size: 1.2rem;
  }

  .post-footer-comment-wrapper {
    background-color: #F6F7F8;
  }
</style>

<div class="card p-3 mb-3">
  <div class="panel-body">
    <section class="post-heading">
      <div class="row">
        <div class="col-md-12">
          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object photo-profile" src="./assets/itau.jpg" width="40" height="40" alt="...">
              </a>
            </div>
            <div class="media-body ml-2 mt-2 align-items-end">
              <a href="#" class="anchor-username">
                <h4 class="media-heading">Itaú</h4>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="post-body py-2 bg-container">
      <div class='bg-container' style="height:200px">
        <div class='bg' style="background-image:url('assets/itau_banner.jpg')"></div>
      </div>
      <div class='post-text pt-2'>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
        turpis sem, dictum id bibendum eget, malesuada ut massa. Ut scel
        erisque nulla sed luctus dapibus. Nulla sit amet mi vitae purus sol
        licitudin venenatis. Praesent et sem urna. Integer vitae lectus nis
        l.</p>
      </div>
    </section>
    <section class="post-footer">
      <hr>
      <div class="post-footer-option container">
        <ul class="list-unstyled d-flex justify-content-center">
          <li><a href="#">
              <i class="fa fa-thumbs-up" style="color:var(--verde)"></i>
              <span class='d-none d-md-inline' style='font-size:0.6em'>Curtir</span>
            </a></li>
          <li><a href="#">
            <i class="fa fa-comment"  style="color:var(--verde)"></i> 
            <span class='d-none d-md-inline ' style='font-size:0.6em'>Comentar</span>
          </a></li>
          <li><a href="#">
            <i class="fa fa-share"  style="color:var(--verde)"></i> 
            <span class='d-none d-md-inline' style='font-size:0.6em'>Compartilhar
              </span
            </a></li>
        </ul>
      </div>
      <div class="post-footer-comment-wrapper">
        <div class="comment-form">

        </div>
      </div>
    </section>
  </div>
</div>