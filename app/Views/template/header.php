<header>


  <img src="<?php echo base_url(); ?>/src/img/logo_brush.png" alt="Logo salão">

  <div id="menu">
    <ul>
      <li><a href="">Home</a></li>
      <li><a href="">Sobre</a></li>
      <li><a href="">Artigos</a></li>
      <li><a href="">Procedimentos</a></li>
      <li><a href="">Links</a></li>
      <li><a href="">Contato</a></li>
    </ul>
  </div>



  <h1>Studio Daniela Carvalho</h1>

</header>


<style>
  h1 {
    color: #a468c0;
    font-style: italic;
    font-family: 'Times New Roman', Times, serif;
  }







  header {
    height: 60px;
    display: flex;
    background-color: pink;
    padding: 20px 20px;
    justify-content: space-between;
    align-items: center;


  }

  img {
    width: 10em;
    height: 12em;


  }


  #menu ul {
    padding: 10px;
    margin: 10px;
    float: left;
    width: 100%;
    list-style: none;
    font: 100% Arial;

  }

  #menu ul li {
    display: inline;
  }

  #menu ul li a {

    color: #a468c0;
    text-decoration: none;
    padding: 2px 10px;

  }

  #menu ul li a:hover {
    background-color: #8a5287;
    padding: 0.5em;
    border-radius: 0.5em;
    transition: 1s;
    font-weight: bold;
</style>