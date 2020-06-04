<header class="section-header">

    <nav class="navbar navbar-light navbar-expand p-0" style="background-color: #e4606d;">
        <div class="container">
            <ul class="navbar-nav d-none d-md-flex mr-auto">
                <li class="nav-item"><a class="nav-link" href="#"><strong>Home</strong></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><strong>Entrega</strong></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><strong>Pagamento</strong></a></li>
            </ul>
            <ul class="navbar-nav">
                <li  class="nav-item"><a href="#" class="nav-link"> Call: +99812345678 </a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><strong> Português </strong></a>
                    <ul class="dropdown-menu dropdown-menu-right" style="max-width: 100px;">
                        <li><a class="dropdown-item" href="#">English</a></li>
                        <li><a class="dropdown-item" href="#">France </a></li>
                    </ul>
                </li>
            </ul> <!-- list-inline //  -->
        </div> <!-- navbar-collapse .// -->
        </div> <!-- container //  -->
    </nav> <!-- header-top-light.// -->

    <section class="header-main border-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-6">
                    <a href="http://bootstrap-ecommerce.com" class="brand-wrap">
                        <img class="logo" src="{{ asset('adminlte/img/Crislogo.jpg') }}" style="width: 60px;"><p>Laços da Cris</p>
                    </a> <!-- brand-wrap.// -->
                </div>
                <div class="col-lg-4 col-12 col-sm-12">
                    <form action="#" class="search">
                        <div class="input-group w-100">
                            <input type="text" class="form-control" placeholder="Pesquisar">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form> <!-- search-wrap .end// -->
                </div> <!-- col.// -->
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="widgets-wrap float-md-right">
                        <div class="widget-header  mr-3">
                            <a href="{{route('cart.index')}}" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
                            <span class="badge badge-pill badge-danger notify">{{array_sum(array_column(session()->get('cart'), 'amount'))}}</span>
                        </div>
                        <div class="widget-header icontext">
                            <a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
                            <div class="text">
                                <span class="text-muted">Bemvindo!</span>
                                <div>
                                    <a href="#">Entrar</a> |
                                    <a href="#"> Cadastre-se</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- widgets-wrap.// -->
                </div> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- container.// -->
    </section> <!-- header-main .// -->
<nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom" style="background-color: #e4606d">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link pl-0" data-toggle="dropdown" href="#"><strong> <i class="fa fa-bars"></i> &nbsp  Todas as categorias</strong></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Laços</a>
                        <a class="dropdown-item" href="#">Tiaras</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Viseiras</a>
                        <a class="dropdown-item" href="#">Faixas</a>
                        <a class="dropdown-item" href="#">Category 3</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Laços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tiaras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Viseiras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Faixas Para Bebes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Fitness sport</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Clothing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Furnitures</a>
                </li>
            </ul>
        </div> <!-- collapse .// -->
    </div> <!-- container .// -->
</nav>

</header> <!-- section-header.// -->
