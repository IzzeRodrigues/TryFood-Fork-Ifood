<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="icon" href="IMAGES/icone.png" type="image/png">
  <title>TryFood - Seu site de não-pedir comida!</title>
</head>
<body>
  <div class="half-bg">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top">
        <div class="container">
          <!--Responsividade do navbar-->
          <button class="navbar-toggler toggle d-block d-sm-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false"
            aria-label="toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- navbar esquerda -->
          <img src="IMAGES/Try.png" class="m-0" height="110" />
          <div class="collapse navbar-collapse ms-4" id="navbarColor03">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">Entregador</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Restaurante e Mercado</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Carreiras</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">TryFood Card</a>
              </li>
            </ul>
          </div>
          <!-- login -->
          <ul class="nav navbar-nav navbar-right">
            <div class="nav-item">
              <button class="btn r d-none d-sm-block font-weight-bold text-danger">criar conta</button>
            </div>
            <div class="nav-item ms-4">
              <button class="btn btn-danger px-md-4">Entrar</button>
            </div>
          </ul>
        </div>
      </nav>
    </header>
    <main>
      <!-- títulos -->
      <h2 class="text-center mt-5">Tudo pra Dificultar seu dia a dia</h2>
      <h5 class="text-center mt-4 subtitulo">peça comida, ou morra tentando!</h5>

      <!-- barra de pesquisa -->
      <div class="container">
        <form action="https://www.ifood.com.br/busca" class="form-group row mt-5 justify-content-center" method="get">
          <div class="col-md-6 col-sm-12 ">
            <input type="text" class="rounded form-control form-control-lg" id="usr"
              placeholder="Endereço de entrega ou itens" id="q" name="q">
          </div>
          <div class="col-md-1 col-12 d-grid text-center mt-2 mt-md-0">
            <input type="submit" value="Buscar" class="btn-lg btn botao btn-danger">
          </div>
        </form>
      </div>

      <!-- Botão restaurante e mercado -->
      
  <div class="container">
    <div class="row mt-5 justify-content-center">
      
      <div class="col-md-4 col-6 ">
        <div class="img-container" style="max-height: 100px;">
          <div class="btn btn-danger rounded-4 d-flex align-items-center" >
            <div class="row">
              <div class="col-sm-6 d-flex flex-column justify-content-between mb-3">
                <h2 class="font-weight-bold mt-3 mb-5">Restaurante</h2>
                <button class="btn btn-primary" style="background-color: #b02a37; border: none;"><a class="textRest" href="/restaurante">Ver mais</a></button>
              </div>
              <div class="col-sm-6 mt-md-5">
                <img class="img-fluid" src="IMAGES/teste.png">
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="col-md-4 col-6">
        <div class="img-container" style="max-height: 100px;">
          <div class="btn btn-success rounded-4 d-flex align-items-center">
            <div class="row">
              <div class="col-sm-6 d-flex flex-column justify-content-between mb-3">
                <h2 class="font-weight-bold mt-3 mb-5">Mercados</h2>
                <button class="btn btn-primary" style="background-color: #146c43; border: none;">Ver mais </button>
              </div>
              <div class="col-sm-6 mt-md-5">
                <img class="img-fluid" src="IMAGES/market.png">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- {{-- <div class="container">
    <div class="row mt-4 d-flex justify-content-center" style="margin-bottom: 80px;">
      <div class="col-md-2 col-4">
        <div class="card border-0">
          <img class="card-img-top image-shadow" src="IMAGES/bebidas.png">
          <div class="card-body">
          <div class="d-flex justify-content-center">
              <div class="row col-12 d-flex justify-content-center">
                <div class="col-11 text-center fw-bold mx-0 px-0" style="width: 80px;">Bebidas</div>
                <div class="col-1 text-center px-0 fw-bold text-danger" >></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-4">
        <div class="card border-0">
          <img class="card-img-top  image-shadow" src="IMAGES/farmacia.png">
          <div class="card-body">
          <div class="d-flex justify-content-center">
              <div class="row col-12 d-flex justify-content-center">
                <div class="col-11 text-center fw-bold mx-0 px-0" style="width: 80px;">Farmácia</div>
                <div class="col-1 text-center px-0 fw-bold text-danger" >></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-4">
        <div class="card border-0">
          <img class="card-img-top  image-shadow" src="IMAGES/petshop.png">
          <div class="card-body">
            <div class="d-flex justify-content-center">
              <div class="row col-12 d-flex justify-content-center">
                <div class="col-11 text-center fw-bold mx-0 px-0" style="width: 80px;">Petshop</div>
                <div class="col-1 text-center px-0 fw-bold text-danger" >></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}} -->
  </div>
  
  <!-- div fechando o background cinza -->
  </div>
  
  <!-- BEBIDAS - FARMACIA - PETSHOP -->


<div class="bg-light">
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
</div>

</main>  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  <script src="js/bootstrap.js"></script>
<!--<footer>
RODAPÉZÃO DAORA
</footer> -->
</body>
</html>