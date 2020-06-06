@extends('layouts.app')
@section('content')
    <div class="container" id="code_prod_detail" style="margin-top: 50px">
        <div class="card">
            <div class="row no-gutters">
                <aside class="col-sm-5 border-right">
                    <article class="gallery-wrap">
                        <div class="img-big-wrap">
                            <div> <a href="images/items/1.jpg" data-fancybox=""><img src="images/items/1.jpg"></a></div>
                        </div> <!-- slider-product.// -->
                        <div class="img-small-wrap">
                            <div class="item-gallery"> <img src="images/items/1.jpg"></div>
                            <div class="item-gallery"> <img src="images/items/2.jpg"></div>
                            <div class="item-gallery"> <img src="images/items/3.jpg"></div>
                            <div class="item-gallery"> <img src="images/items/4.jpg"></div>
                        </div> <!-- slider-nav.// -->
                    </article> <!-- gallery-wrap .end// -->
                </aside>
                <aside class="col-sm-7">
                    <form method="post" action="{{route('cart.add')}}">
                        @csrf
                        <input type="hidden" name="product[name]" value="{{$product->name}}">
                        <input type="hidden" name="product[price]" value="{{$product->price}}">
                        <input type="hidden" name="product[slug]" value="{{$product->slug}}">
                    <article class="p-5">
                        <h3 class="title mb-3">{{$product->name}}</h3>

                        <div class="mb-3">
                            <var class="price h3 text-warning">
                                <span class="currency">R$</span><span class="num">{{number_format($product->price, 2, ',', '.')}}</span>
                            </var>
                        </div> <!-- price-detail-wrap .// -->
                        <dl>
                            <dt>Descrição</dt>
                            <dd>
                                <p>{{$product->description}}</p>
                            </dd>

                        </dl>
                        <dl>
                            <dt>Conteúdo</dt>
                            <dd>
                                <p>{{$product->body}}</p>
                            </dd>

                        </dl>
                        <dl class="row">
                            <dt class="col-sm-2">Material</dt>
                            @foreach($product->materials as $material)
                                <dd class="col-sm-2">{{$material->name}}</dd>
                            @endforeach

                            <dt class="col-sm-2">Cor</dt>
                            @foreach($product->colors as $color)
                                <dd class="col-sm-2">{{$color->name}}</dd>
                            @endforeach

                            <dt class="col-sm-3">Entrega</dt>
                            <dd class="col-sm-9">Brasil </dd>
                        </dl>
                        <div class="rating-wrap">

                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <div class="label-rating">132 visualizações</div>
                            <div class="label-rating">154 vendas </div>
                        </div> <!-- rating-wrap.// -->
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <dl class="dlist-inline">
                                    <dt>Quantiadade: </dt>
                                    <dd>
                                        <input type="number" name="product[amount]" class="form-control col-md-4" value="1">
                                        {{--<select class="form-control form-control-sm" style="width:70px;">
                                            <option> 1 </option>
                                            <option> 2 </option>
                                            <option> 3 </option>
                                        </select>--}}
                                    </dd>
                                </dl> <!-- item-property .// -->
                            </div> <!-- col.// -->
                            <div class="col-sm-7">

                            </div> <!-- col.// -->
                        </div> <!-- row.// -->
                        <hr>
                        <a href="#" class="btn  btn-primary"> Compre Agora </a>
                        <button type="submit" class="btn  btn-outline-primary"> <i class="fas fa-shopping-cart"></i> Adicionar Para o
                            carrinho </button>
                    </article> <!-- card-body.// -->
                    </form>
                </aside> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- card.// -->
    </div>
@endsection
