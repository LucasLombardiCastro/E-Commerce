<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>Cardápio</title>
  <!-- mobile visualization -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon -->
  <link rel="shortcut icon" href="https://cdn4.iconfinder.com/data/icons/coffee-108/512/coffee-cafe-13-512.png">

  <!-- import bootstrap css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- import fontawesome css -->
  <script src="https://kit.fontawesome.com/8622f9455f.js" crossorigin="anonymous"></script>
  <!-- import personal css -->
  <link rel="stylesheet" href="Pedidos.css">
  <link rel="stylesheet" href="Main.css">

</head>

<body>
  <!-- NavBar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <img style="max-height: 50px;" src="https://cdn4.iconfinder.com/data/icons/coffee-108/512/coffee-cafe-13-512.png">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        </li>
        <li class="nav-item">
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Digite algo..." aria-label="Pesquisar">
        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Pesquisar</button>
      </form>
    </div>
  </nav>
  <!-- NavBar -->


  <div class="container cat-deck" style="margin-bottom: -110px; margin-top:30px;">
      <center>
        <p style="font-family:Roboto; font-size: 25px;margin-top:5px">Categorias</p>
        <button title="Doces" type="button" class="btn btn-danger btn-circle" id="Doces"><i class="fa fa-cookie-bite"></i></button>
        <button title="Salgados" type="button" class="btn btn-success btn-circle" id="Salgados" ><i class="fa fa-pizza-slice"></i></button>
        <button title="Bebidas" type="button" class="btn btn-warning btn-circle" id="Bebidas"><i class="fa fa-coffee"></i></button>
        <button title="Favoritos" type="button" class="btn btn-info btn-circle" id="Favoritos"><i class="fa fa-heart"></i></button>
      </center>
    </div>

  <!-- Construção Menu Pedidos -->
  <div class="menu-pedidos">
    <p class="texto-pedidos" id="valor"> Produtos </p>
    <hr style="width: 20%; margin-top:-10px; margin-bottom:-5px">
    <p class="texto-pedidos-adicional" style="font-size:18px"> Feitos com os Melhores Ingredientes! </p>


    <div class="row">
      <div class="column">
        <div class="card">
        <i class='fas fa-shopping-cart icon' id="iconofcard"> </i>
          <div class="card-padding" id="cardpadding">
            <div class="imagem-card" id="img-card"><a href="Index.php"><img src="https://d2gg9evh47fn9z.cloudfront.net/800px_COLOURBOX3389984.jpg" class="img-card1"  style="width:100%"></a></div>
            <h5 class="card-title" style="padding-top:20px">Bolo de Chocolate</h5>
            <p class="card-text">Pedaço de Bolo de Chocolate para seu café da manhã.</p>
            <small><del>R$: 3,00</del></small>
            <h5 class="text-success">R$: 2,00</h5>
          </div>
        </div>
      </div>


      <div class="column">
        <div class="card">
          <i class='fas fa-shopping-cart icon' id="iconofcard"> </i>
          <div class="card-padding" id="cardpadding">
            <div class="imagem-card" id="img-card"><a href="Index.php"><img src="https://d2gg9evh47fn9z.cloudfront.net/800px_COLOURBOX3389984.jpg" class="img-card1"  style="width:100%"></a></div>
            <h5 class="card-title" style="padding-top:20px">Bolo de Chocolate</h5>
            <p class="card-text">Pedaço de Bolo de Chocolate para seu café da manhã.</p>
            <small><del>R$: 3,00</del></small>
            <h5 class="text-success">R$: 2,00</h5>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="card">
        <i class='fas fa-shopping-cart icon' id="iconofcard"> </i>
          <div class="card-padding" id="cardpadding">
            <div class="imagem-card" id="img-card"><a href="Index.php"><img src="https://d2gg9evh47fn9z.cloudfront.net/800px_COLOURBOX3389984.jpg" class="img-card1"  style="width:100%"></a></div>
            <h5 class="card-title" style="padding-top:20px">Bolo de Chocolate</h5>
            <p class="card-text">Pedaço de Bolo de Chocolate para seu café da manhã.</p>
            <small><del>R$: 3,00</del></small>
            <h5 class="text-success">R$: 2,00</h5>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="card">
        <i class='fas fa-shopping-cart icon' id="iconofcard"> </i>
          <div class="card-padding" id="cardpadding">
            <div class="imagem-card" id="img-card"><a href="Index.php"><img src="https://d2gg9evh47fn9z.cloudfront.net/800px_COLOURBOX3389984.jpg" class="img-card1"  style="width:100%"></a></div>
            <h5 class="card-title" style="padding-top:20px">Bolo de Chocolate</h5>
            <p class="card-text">Pedaço de Bolo de Chocolate para seu café da manhã.</p>
            <small><del>R$: 3,00</del></small>
            <h5 class="text-success">R$: 2,00</h5>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div style="opacity: 1; position: relative; bottom: -5vh" class="container-xl mb-5 pb-5 mt-5 pt-5 jb">
    <div class="jumbotron">
      <h1 class="display-3 text-warning pa">Procurando Algo?</h1>
      <p class="display-4 pb">Insira abaixo e clique em pesquisar!</p>
      <hr class="my-4">
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2 pr-5" type="search" placeholder="Digite algo..." aria-label="Pesquisar">
        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Pesquisar</button>
      </form>
    </div>
  </div>

  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
          <h6 class="text-uppercase font-weight-bold">Sobre o Site</h6>
          <p>Template feita por Vinícius A. Template para cafererias e vitrines.</p>
          <p>Imagens e textos somente ilustrativos.</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <center>
            <h6 class="text-uppercase font-weight-bold">Criador da Template</h6>
            <p> Vinícius A.</p>
          </center>
        </div>
      </div>
      <div class="footer-copyright text-center">© 2020 Copyright: Vinícius</div>
    </div>
  </footer>

  <!-- import jquery JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <!-- import popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <!-- import bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <!-- waypoints JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" charset="utf-8"></script>
  <!-- import personal JS -->
  <script src="Produtos.js" charset="utf-8"></script> 
  <!-- Import JS of Icon -->
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>

</html>