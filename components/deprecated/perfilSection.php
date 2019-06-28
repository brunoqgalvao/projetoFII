<section id="hero">
  <!-- 1 / 2 -->
  <div class="all_avatar_container" id="avatar_hero_container">
    <img src="assets/avatar.jpg" alt="avatar" class="all_avatar_img">
  </div>
  <!-- 1 / 2 -->
  <!-- 2 / 2 -->
  <div id="info_usuario_container">
    <div id="hero_nome">
      <!-- IDs da DIV e dos SPAN não utilizados-->
      <span id="nome_usuario_hero">larissa</span> <!-- Foram estilizados em conjunto... -->
      <span id="sobrenome_usuario_hero">ferreira</span> <!-- ...na div#info_usuarios_container-->
    </div>
    <div id="hero_profissao">
      <span id="atividade">consultor financeiro</span>
      <span id="empresa">loren ipsum</span>
    </div>
    <div id="hero_local">
      <span id="pais">brasil</span>
      <span id="estado">são paulo</span>
      <span id="cidade">são paulo</span>
    </div>

    <!-- INPUT NUMBER-->
    <div id="hero_seguidores">
      <label for="num_seguidores" class="input_number_label" id="label_seguidores">seguidores</label>
      <div class="input_number_wrapper"><input type="number" name="" id="num_seguidores"></div>
    </div>
  </div>
  <!-- 2 / 2 -->
</section>

<main id="timeline">

  <!-- INÍCIO POST PADRÃO-->

  <div class="post_box_wrapper">

    <!-- AVATAR, NOME, SOBRENOME, DATA E HORA -->
    <header class="header_post">
      <div class="all_avatar_container avatar_post_container">
        <img src="assets/avatar.jpg" alt="avatar" class="all_avatar_img">
      </div>
      <div class="container_post_nome_sobrenome_data_horario">
        <div class="nome_sobrenome_post_container">
          <span class="nome_usuario_post">larissa</span> <!-- Classes do nome e do sobrenome não foram usadas -->
          <span class="sobrenome_usuario_post">ferreira</span> <!-- estilizados com :nth-of-type-->
        </div>
        <div class="data_horario">
          <input type="datetime" value="yyyy-mm-dd" class="data_hora data_post">
          <input type="local" value="hh:mm" class="data_hora hora_post">
        </div>
      </div>
    </header>
    <!-- POST ESCRITO -->
    <p class="post_escrito">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, provident!
      Animi, hic id quaerat molestiae cupiditate eum, obcaecati, inventore ullam maiores aperiam officia fuga?
      Reiciendis tenetur veniam repellendus quam est!</p>
    <!-- POST MEDIA (FOTOS, GRÁFICOS, VÍDEOS) -->
    <div class="post_media_container">
      <img src="assets/post.png" alt="post" class="post_media">
    </div>

    <!-- CURTIDAS, COMENTÁRIOS E COMPARTILHAMENTOS -->
    <footer class="post">
      <div class="curtir">
        <i class="fas fa-star"></i>
        <!-- INPUT NUMBER-->
        <label for="num_curtidas" class="input_number_label label_curtidas">curtir</label>
        <div class="input_number_wrapper"><input type="number" name="" class="num_curtidas"></div>
      </div>
      <div class="comentar">
        <i class="far fa-comment-alt"></i>
        <!-- INPUT NUMBER-->
        <label for="num_comentarios" class="input_number_label label_comentar">comentar</label>
        <div class="input_number_wrapper"><input type="number" name="" class="num_comentarios"></div>
      </div>
      <div class="compartilhar">
        <i class="fas fa-share-square"></i>
        <!-- INPUT NUMBER-->
        <label for="num_shared" class="input_number_label label_comentar">compartilhar</label>
        <div class="input_number_wrapper"><input type="number" name="" class="num_shared"></div>
      </div>
      <!-- FIM POST PADRÃO-->

    </footer>
  </div>
  <div class="post_box_wrapper">

<!-- AVATAR, NOME, SOBRENOME, DATA E HORA -->
<header class="header_post">
  <div class="all_avatar_container avatar_post_container">
    <img src="assets/avatar.jpg" alt="avatar" class="all_avatar_img">
  </div>
  <div class="container_post_nome_sobrenome_data_horario">
    <div class="nome_sobrenome_post_container">
      <span class="nome_usuario_post">larissa</span> <!-- Classes do nome e do sobrenome não foram usadas -->
      <span class="sobrenome_usuario_post">ferreira</span> <!-- estilizados com :nth-of-type-->
    </div>
    <div class="data_horario">
      <input type="datetime" value="yyyy-mm-dd" class="data_hora data_post">
      <input type="local" value="hh:mm" class="data_hora hora_post">
    </div>
  </div>
</header>
<!-- POST ESCRITO -->
<p class="post_escrito">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, provident!
  Animi, hic id quaerat molestiae cupiditate eum, obcaecati, inventore ullam maiores aperiam officia fuga?
  Reiciendis tenetur veniam repellendus quam est!</p>
<!-- POST MEDIA (FOTOS, GRÁFICOS, VÍDEOS) -->
<div class="post_media_container">
  <img src="assets/post.png" alt="post" class="post_media">
</div>

<!-- CURTIDAS, COMENTÁRIOS E COMPARTILHAMENTOS -->
<footer class="post">
  <div class="curtir">
    <i class="fas fa-star"></i>
    <!-- INPUT NUMBER-->
    <label for="num_curtidas" class="input_number_label label_curtidas">curtir</label>
    <div class="input_number_wrapper"><input type="number" name="" class="num_curtidas"></div>
  </div>
  <div class="comentar">
    <i class="far fa-comment-alt"></i>
    <!-- INPUT NUMBER-->
    <label for="num_comentarios" class="input_number_label label_comentar">comentar</label>
    <div class="input_number_wrapper"><input type="number" name="" class="num_comentarios"></div>
  </div>
  <div class="compartilhar">
    <i class="fas fa-share-square"></i>
    <!-- INPUT NUMBER-->
    <label for="num_shared" class="input_number_label label_comentar">compartilhar</label>
    <div class="input_number_wrapper"><input type="number" name="" class="num_shared"></div>
  </div>
  <!-- FIM POST PADRÃO-->

</footer>
</div>
</main>