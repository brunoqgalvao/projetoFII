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
  </div>
</main>
