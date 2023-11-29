<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="icon" href="IMAGES/icone.png" type="image/png">
    <title>TryFood - Seu site de não-pedir comida!</title>
</head>

<body>
    <header class="teste">
        <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light border-bottom">
            <div class="container-fluid">
                <!--Responsividade do navbar-->
                <button class="navbar-toggler toggle d-block d-sm-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false"
                    aria-label="toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- navbar esquerda -->
                <img src="IMAGES/Try.png" class="ms-4" height="80" />
                <div class="collapse navbar-collapse ms-4" id="navbarColor03">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item d-flex align-items-center">
                            <a class="nav-link" href="/">Início</a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <a class="nav-link text-danger" href="#">Restaurantes</a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <a class="nav-link" href="#">Mercados</a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <a class="nav-link" href="#">Bebidas</a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <a class="nav-link" href="#">Farmácias</a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <a class="nav-link" href="#">Pets</a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <a class="nav-link" href="#">Shopping</a>
                        </li>
                        <div class="container-fluid col-5 d-flex align-items-center">
                            <form action="https://www.ifood.com.br/busca" class="form-group row m-0 col-12" method="get">
                                <div class="m-0">
                                    <input type="text" class="rounded form-control form-control-lg col-12 pe-2 m-0"
                                        id="usr" placeholder="Busque por Item ou Loja" id="q"
                                        name="q" class="place">
                                </div>
                            </form>
                        </div>
                        <div class="d-flex flex-row col-4">
                            <li class="nav-item col-6 m-0 d-flex align-items-center justify-content-end">
                                <a href="#" class="nav-link fw-bold">Próximo de você</a>
                            </li>
                            <li class="nav-item col-2  d-flex align-items-center">
                                <a href="#" class="nav-link fw-bold"><img src="./IMAGES/sair.png" height="20"></a>
                            </li>
                            <li class="nav-item col-2  d-flex align-items-center">
                                <a href="#" class="nav-link fw-bold"><img src="./IMAGES/bolsa.png" height="20"></a>
                            </li>
                            <li class="nav-item col-2">
                                <a class="nav-link m-0">R$0,00</a>
                                <a class="nav-link p-0 ms-2" height="2">0 itens</a>
                            </li>
                        </div>
                    </ul>
                    <hr>
                </div>
        </nav>
        </div>
        
        {{-- carrosel fake --}}
        <div class="row justify-content-center mt-5">
            <div class="col-1 justify-content-center">
                <a href="">
                    <img src="./IMAGES/hamb.png" height="85">
                    <p class="text-center">Lanches</p>
                </a>
            </div>
            <div class="col-1 justify-content-center">
                <a href="">
                    <img src="./IMAGES/hamb.png" height="85">
                    <p class="text-center">Lanches</p>
                </a>
            </div>
            <div class="col-1 justify-content-center">
                <a href="">
                    <img src="./IMAGES/hamb.png" height="85">
                    <p class="text-center">Lanches</p>
                </a>
            </div>
            <div class="col-1 justify-content-center">
                <a href="">
                    <img src="./IMAGES/hamb.png" height="85">
                    <p class="text-center">Lanches</p>
                </a>
            </div>
            <div class="col-1 justify-content-center">
                <a href="">
                    <img src="./IMAGES/hamb.png" height="85">
                    <p class="text-center">Lanches</p>
                </a>
            </div>
            <div class="col-1 justify-content-center">
                <a href="">
                    <img src="./IMAGES/hamb.png" height="85">
                    <p class="text-center">Lanches</p>
                </a>
            </div>
            <div class="col-1 justify-content-center">
                <a href="">
                    <img src="./IMAGES/hamb.png" height="85">
                    <p class="text-center">Lanches</p>
                </a>
            </div>
            <div class="col-1 justify-content-center">
                <a href="">
                    <img src="./IMAGES/hamb.png" height="85">
                    <p class="text-center">Lanches</p>
                </a>
            </div>
            <div class="col-1 justify-content-center">
                <a href="">
                    <img src="./IMAGES/hamb.png" height="85">
                    <p class="text-center">Lanches</p>
                </a>
            </div>
            <div class="col-1 justify-content-center">
                <a href="">
                    <img src="./IMAGES/hamb.png" height="85">
                    <p class="text-center">Lanches</p>
                </a>
            </div>
        </div>

        {{-- famosos no ifood --}}
        <div class="container mt-5">
            <h5>Fracassados no tryFood</h5>
        </div>
        <div class="row d-flex justify-content-around mx-5 mt-5 ">
            <div class="col-2 rounded-3 border p-0 overflow-hidden img-container">
                <a href="">
                    <img src="./IMAGES/1.jpg" height="150">
                </a>
            </div>
            <div class="col-2 rounded-3 border p-0 overflow-hidden img-container">
                <a href="">
                    <img src="./IMAGES/2.jpg" height="150">
                </a>
            </div>
            <div class="col-2 rounded-3 border p-0 overflow-hidden img-container">
                <a href="">
                    <img src="./IMAGES/3.jpg" height="150">
                </a>
            </div>
            <div class="col-2 rounded-3 border p-0 overflow-hidden img-container">
                <a href="">
                    <img src="./IMAGES/4.jpg" height="150">
                </a>
            </div>
            <div class="col-2 rounded-3 border p-0 overflow-hidden img-container">
                <a href="">
                    <img src="./IMAGES/5.jpg" height="150">
                </a>
            </div>
        </div>

        <div class="mt-5">
            <div class="btn-group d-flex justify-content-evenly">
                <div class="dropdown">
                    <button class="btn btn-light rounded-pill border dropdown-toggle " type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Ordenar</button>
                </div>
                <div class="">
                    <button type="button" class="btn btn-light rounded-pill border ">Entrega Grátis</button>
                </div>
                <div class="dropdown">
                    <button class="btn btn-light rounded-pill border dropdown-toggle " type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">vale-refeição</button>
                </div>
                <div class="">
                    <button type="button" class="btn btn-light rounded-pill border">Super Restaurantes</button>
                </div>
                <div class="dropdown">
                    <button class="btn btn-light rounded-pill border dropdown-toggle " type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        distância
                    </button>
                </div>
                <div class="">
                    <button type="button" class="btn btn-light rounded-pill border ">Entrega Parceira</button>
                </div>
                <div class="">
                    <button type="button" class="btn btn-light rounded-pill border ">Pra Retirar</button>
                </div>
                <div class="">
                    <button type="button" class="btn btn-light rounded-pill border ">Filtros</button>
                </div>
                <div class="">
                    <button type="button" class="btn btn-light rounded-pill border ">Limpar</button>
                </div>
            </div>
        </div>
        </div>
    </header>

    <Main>
<!--         
        <div class="container">
            <h5 class="mt-5">Mais porcarias</h5>
            <div class="grid row mt-5 col-12 row-gap-3">
  
                -->
            </div>
        </div>
    </Main>

    <script src="js/bootstrap.js"></script>
</body>

</html>
