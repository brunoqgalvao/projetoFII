<!-- TODO:
  - fazer carousel com X divs - tem que ter no mínimo 3 ;
  - só aparacem as 3 divs centrais, e tem um parametro que controla aonde tá a "rolagem";
  - as divs intermediarias tem position relative e tamanho relative;
  - a div central é maior, z index maior;
  - dois botoes com position relative que tem transparency e aparecem no hover;
  - click no botao da esquerda gera uma animação para a esquerda e "load" dos items novos;
  - para a direita, a mesma coisa;
-->

<style>
  .banner {
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-content:space-around;

    height:40vh;
    width:100%;
    content: "";
    background:url(assets/skyline.jpg) no-repeat 0 0;
    background-size: cover;
    
  }
  .banner-search-box, .banner-btn-analise {
    margin:0 auto;
    width: 40%;
    padding:0.2em;
  }
  .banner-search-box > input{
    width:100%;
    padding:0.2em;
    border-radius: var(--std-border-radius);
    box-shadow: 5px 5px 5px rgba(0,0,0,0.5);

  }
  .banner-btn-analise > button {
    width:100%;
    padding:0.2em;
    border-radius: var(--std-border-radius);
    box-shadow: 5px 5px 5px rgba(0,0,0,0.5);
  }

  .btn-padrao {
    background-color: var(--main-color);
    color:white;
    border:none;
  }
  
  @media(max-width:576px){
    .banner-search-box, .banner-btn-analise {
    margin:0 auto;
    width: 80%;
    padding:0.2em;
  }
  }

</style>

<style>

.carrousel {
  display:block;
  position:relative;
  width:100%;
  height:30vh;
}
.carrousel > * {
  position:absolute;
  z-index:1;
  width:300px;
  height:90%;
  margin:0 auto;
  right:0;
  left:0;
  
  display:flex;
  justify-content:center;
  align-items:center;

}

</style>

<main>
  <div class='banner'>
    <div class= 'banner-search-box'> 
      <input type='text' id='bannerSearchBox' name='bannerSearchBox' placeholder='Busque aqui o seu investimento'/>
    </div>
    <div class= 'banner-btn-analise'> 
      <button class='btn-analise btn-padrao'>Comparar fundos</button>
    </div>
  </div>
  <div class='carrousel'>
    <div class='carrousel-item' id='item1' carrousel-target='1'>TESTE</div>
    <div class='carrousel-item' id='item2' carrousel-target='2'>TESTE</div>
    <div class='carrousel-item' id='item3' carrousel-target='3'>TESTE</div>
    <div class='carrousel-item' id='item4' carrousel-target='4'>TESTE</div>
    <div class='carrousel-item' id='item5' carrousel-target='5'>TESTE</div>
    <div class='carrousel-item' id='item6' carrousel-target='6'>TESTE</div>
  </div>
</main>

<script>

document.querySelectAll(.)


</script>