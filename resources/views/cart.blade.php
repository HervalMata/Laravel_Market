@extends('layouts.app')
@section('content')
    <!-- ========================= SECTION PAGETOP ========================= -->
    <section class="section-pagetop bg">
        <div class="container">
            <h2 class="title-page">Carrinho de Compras</h2>
        </div> <!-- container //  -->
    </section>
    <!-- ========================= SECTION INTRO END// ========================= -->

    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-y">
        <div class="container">

            <div class="row">
                <main class="col-md-9">
                    <div class="card">
                        @if($cart)
                        <table class="table table-borderless table-shopping-cart">
                            <thead class="text-muted">
                            <tr class="small text-uppercase">
                                <th scope="col">Produto</th>
                                <th scope="col" width="120">Quantidade</th>
                                <th scope="col" width="120">Preço</th>
                                <th scope="col" class="text-right" width="200"> </th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $total = 0; @endphp
                            @foreach($cart as $c)
                            <tr>
                                <td>
                                    <figure class="itemside">
                                        <div class="aside"><img src="images/items/1.jpg" class="img-sm"></div>
                                        <figcaption class="info">
                                            <a href="#" class="title text-dark">{{$c['name']}}</a>
                                        </figcaption>
                                    </figure>
                                </td>
                                <td>
                                    {{$c['amount']}}
                                    {{--<select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>--}}
                                </td>
                                @php
                                    $subtotal = $c['price'] * $c['amount'];
                                    $total += $subtotal;
                                @endphp
                                <td>
                                    <div class="price-wrap">
                                        <var class="price">R$ {{number_format($subtotal, 2, ',', '.')}}</var>

                                        <small class="text-muted">Rs {{number_format($c['price'], 2, ',', '.')}} cada</small>


                                    </div> <!-- price-wrap .// -->
                                </td>
                                <td class="text-right">
                                    <a data-original-title="Salvar para lista de desejos" title="" href="" class="btn btn-light" data-toggle="tooltip"> <i class="fa fa-heart"></i></a>
                                    <a href="{{route('cart.remove', ['slug' => $c['slug'])}}" class="btn btn-light"> Remover</a>
                                </td>
                            </tr>
                            @endforeach
                            {{--<tr>
                                <td>
                                    <figure class="itemside">
                                        <div class="aside"><img src="images/items/2.jpg" class="img-sm"></div>
                                        <figcaption class="info">
                                            <a href="#" class="title text-dark">Product name  goes here nice</a>
                                            <p class="text-muted small">Size: XL, Color: blue, <br> Brand: Gucci</p>
                                        </figcaption>
                                    </figure>
                                </td>
                                <td>
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </td>
                                <td>
                                    <div class="price-wrap">
                                        <var class="price">$149.97</var>
                                        <small  class="text-muted"> $75.00 each </small>
                                    </div> <!-- price-wrap .// -->
                                </td>
                                <td class="text-right">
                                    <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip"> <i class="fa fa-heart"></i></a>
                                    <a href="" class="btn btn-light btn-round"> Removed</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <figure class="itemside">
                                        <div class="aside"><img src="images/items/3.jpg" class="img-sm"></div>
                                        <figcaption class="info">
                                            <a href="#" class="title text-dark">Another name of some product goes just here</a>
                                            <p class="small text-muted">Size: XL, Color: blue,  Brand: Tissot</p>
                                        </figcaption>
                                    </figure>
                                </td>
                                <td>
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </td>
                                <td>
                                    <div class="price-wrap">
                                        <var class="price">$98.00</var>
                                        <small class="text-muted"> $578.00 each</small>
                                    </div> <!-- price-wrap .// -->
                                </td>
                                <td class="text-right">
                                    <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip"> <i class="fa fa-heart"></i></a>
                                    <a href="" class="btn btn-light btn-round"> Remover</a>
                                </td>
                            </tr>--}}
                            </tbody>
                        </table>
                        @else
                            <div class="alert alert-warning">Carrinho vazio!</div>
                        @endif
                        <div class="card-body border-top">
                            <a href="#" class="btn btn-primary float-md-right"> Finalizar Pagamento <i class="fa fa-chevron-right"></i> </a>
                            <a href="{{route('cart.index')}}" class="btn btn-light"> <i class="fa fa-chevron-left"></i> Continuar Comprando </a>
                            <a href="{{route('cart.cancel')}}" class="btn btn-primary float-md-right"> Cancelar Compra <i class="fa fa-close"></i> </a>
                        </div>
                    </div> <!-- card.// -->

                    <div class="alert alert-success mt-3">
                        <p class="icontext"><i class="icon text-success fa fa-truck"></i> Entrega Grátis dentro de 1 á 2 semanas</p>
                    </div>

                </main> <!-- col.// -->
                <aside class="col-md-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label>Tem coupom?</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="" placeholder="Coupon code">
                                        <span class="input-group-append">
							<button class="btn btn-primary">Applicar</button>
						</span>
                                    </div>
                                </div>
                            </form>
                        </div> <!-- card-body.// -->
                    </div>  <!-- card .// -->
                    <div class="card">
                        <div class="card-body">
                            <dl class="dlist-align">
                                <dt>Preço Total:</dt>
                                <dd class="text-right">R$ {{number_format($total, 2, ',', '.')}}</dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Desconto:</dt>
                                <dd class="text-right">USD 658</dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Total:</dt>
                                <dd class="text-right  h5"><strong>$1,650</strong></dd>
                            </dl>
                            <hr>
                            <p class="text-center mb-3">
                                <img src="images/misc/payments.png" height="26">
                            </p>

                        </div> <!-- card-body.// -->
                    </div>  <!-- card .// -->
                </aside> <!-- col.// -->
            </div>

        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

    <!-- ========================= SECTION  ========================= -->
    <section class="section-name bg padding-y">
        <div class="container">
            <h6>Pagamento e  politica de devolução</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        </div><!-- container // -->
    </section>
    <!-- ========================= SECTION  END// ========================= -->
@endsection
