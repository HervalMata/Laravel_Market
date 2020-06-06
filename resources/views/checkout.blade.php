@extends('layouts.app')
@section('stylesheets')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection
@section('content')
    <main role="main">
        <br />
        <br />
        <section class="container">
            <div class="row">
                <aside class="col-sm-6">

                    <h4 class="subtitle-doc"># Detalhes da compra
                        <a href="#" data-html="code_payment" class="showcode">[code]</a>
                    </h4>
                    <div id="code_payment">

                        <article class="card">
                            <div class="card-body p-5">
                                <p class="alert alert-success">Total: R$ 1520,11</p>
                                <div id="code_itemside_img2">
                                    <div class="box items-bordered-wrap">
                                        <figure class="itemside">
                                            <div class="aside"><img src="images/items/4.jpg" class="img-sm"></div>
                                            <figcaption class="text-wrap align-self-center">
                                                <h6 class="title"><a href="#">Some name of item goes here nice</a></h6>
                                                <div class="price-wrap">
                                                    <span class="price-new">$1280</span>
                                                    <del class="price-old text-muted">$1980</del>
                                                </div> <!-- price-wrap.// -->
                                            </figcaption>
                                        </figure>
                                        <figure class="itemside">
                                            <div class="aside"><img src="images/items/5.jpg" class="img-sm"></div>
                                            <figcaption class="text-wrap align-self-center">
                                                <h6 class="title"><a href="#">Some name of item goes here nice</a></h6>
                                                <div class="price-wrap">
                                                    <span class="price-new">$1280</span>
                                                </div> <!-- price-wrap.// -->
                                            </figcaption>
                                        </figure>
                                        <figure class="itemside">
                                            <div class="aside"><img src="images/items/6.jpg" class="img-sm"></div>
                                            <figcaption class="text-wrap align-self-center">
                                                <h6 class="title"><a href="#">Some name of item goes here nice</a></h6>
                                                <div class="price-wrap">
                                                    <span class="price-new">$1280</span>
                                                </div> <!-- price-wrap.// -->
                                            </figcaption>
                                        </figure>
                                    </div> <!-- box.// -->
                                </div>
                                </div>
                        </article> <!-- card.// -->

                    </div> <!-- code-wrap.// -->

                </aside>
                <aside class="col-sm-6">

                    <h4 class="subtitle-doc"># Pagamento
                        <a href="#" data-html="code_payment2" class="showcode">[code]</a>
                    </h4>
                    <div id="code_payment2">

                        <article class="card">
                            <div class="card-body p-5">

                                <ul class="nav bg radius nav-pills nav-fill mb-3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#nav-tab-card">
                                            <i class="fa fa-credit-card"></i> Credit Card</a></li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#nav-tab-paypal">
                                            <i class="fab fa-paypal"></i> Paypal</a></li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#nav-tab-bank">
                                            <i class="fa fa-university"></i> Bank Transfer</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="nav-tab-card">
                                        <p class="alert alert-success">Some text success or error</p>
                                        <form role="form">
                                            <div class="form-group">
                                                <label for="username">Full name (on the card)</label>
                                                <input type="text" class="form-control" name="cardName" placeholder=""
                                                       required="">
                                            </div> <!-- form-group.// -->

                                            <div class="form-group">
                                                <label for="cardNumber">Card number <span class="brand-image"></span></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="cardNumber"
                                                           placeholder="">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text text-muted">
                                                            <i class="fab fa-cc-visa"></i> &nbsp; <i class="fab fa-cc-amex"></i>
                                                            &nbsp;
                                                            <i class="fab fa-cc-mastercard"></i>
                                                        </span>
                                                    </div>
                                                    <input type="hidden" name="cardBrand">
                                                </div>
                                            </div> <!-- form-group.// -->

                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label><span class="hidden-xs">Expiration</span> </label>
                                                        <div class="input-group">
                                                            <input type="number" name="cardMonth" class="form-control" placeholder="MM"
                                                                   name="">
                                                            <input type="number" name="cardYear" class="form-control" placeholder="YY"
                                                                   name="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV
                                                            <i class="fa fa-question-circle"></i></label>
                                                        <input type="number" name="cvv" class="form-control" required="">
                                                    </div> <!-- form-group.// -->
                                                    <div class="col-md-12 installments form-group">

                                                    </div>
                                                </div>
                                            </div> <!-- row.// -->
                                            <button class="subscribe btn btn-primary btn-block" name="proccessCheckout" type="button"> Confirm
                                            </button>
                                        </form>
                                    </div> <!-- tab-pane.// -->
                                    <div class="tab-pane fade" id="nav-tab-paypal">
                                        <p>Paypal is easiest way to pay online</p>
                                        <p>
                                            <button type="button" class="btn btn-primary"> <i class="fab fa-paypal"></i>
                                                Log in my Paypal </button>
                                        </p>
                                        <p><strong>Note:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. </p>
                                    </div>
                                    <div class="tab-pane fade" id="nav-tab-bank">
                                        <p>Bank accaunt details</p>
                                        <dl class="param">
                                            <dt>BANK: </dt>
                                            <dd> THE WORLD BANK</dd>
                                        </dl>
                                        <dl class="param">
                                            <dt>Accaunt number: </dt>
                                            <dd> 12345678912345</dd>
                                        </dl>
                                        <dl class="param">
                                            <dt>IBAN: </dt>
                                            <dd> 123456789</dd>
                                        </dl>
                                        <p><strong>Note:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. </p>
                                    </div> <!-- tab-pane.// -->
                                </div> <!-- tab-content .// -->

                            </div> <!-- card-body.// -->
                        </article> <!-- card.// -->

                    </div> <!-- code-wrap.// -->

                </aside> <!-- col.// -->
            </div>
        </section>
        <hr class="featurette-divider">
@endsection
@section('scripts')
    <script src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        const sessionId = '{{session()->get('pagseguro_session_code')}}';
        PagSeguroDirectPayment.setSessionId(sessionId);
    </script>
    <script>
        let amountTransaction = '{{$cartItems}}';
        let cardNumber = document.querySelector('input[name=card_number]');
        let spanBrand = document.querySelector('span.brand-image');
        cardNumber.addEventListener('keyup', function () {
            if(cardNumber.value.length >= 6) {
                PagSeguroDirectPayment.getBrand({
                    cardBin: cardNumber.value.substr(0, 6),
                    success: function (res) {
                        let imgFlag = `<img src="https://stc.pagseguro.uol.com.r/public/img/payment-methodsflag/68x30/${res.brand.name}.png">`
                        spanBrand.innerHTML = imgFlag;
                        document.querySelector('input[name=cardBrand]').value,

                        getInstallments(amountTransaction, res.brand.name);
                    },
                    error: function (err) {
                        console.log(err);
                    },
                    complete: function (res) {
                        console.log('Complete:' + res);
                    }
                });
            }
        });

        let submitButton = document.querySelector('button.proccessCheckout')
        submitButton.addEventListener('click', function (event) {
            event.preventDefault();
            PagSeguroDirectPayment.createCardToken({
                cardNumber: document.querySelector('input[name=cardNumber]').value,
                brand: document.querySelector('input[name=brand]').value,
                cvv: document.querySelector('input[name=cvv]').value,
                expirationMonth: document.querySelector('input[name=cardMonth]').value,
                expirationYear: document.querySelector('input[name=cardYear]').value,
                success: function (res) {
                    console.log(res);
                    proccessPayment(res.card.token)
                }
            });
        });

        function proccessPayment(token) {
            let data = {
                cardToken: token,
                hash: PagSeguroDirectPayment.getSenderHash(),
                installment: document.querySelector('select.select_installments').value,
                cardName: document.querySelector('input[name=cardName]'),
                _token: '{{csrf_token()}}'
            };
            $.ajax({
                type: "POST",
                url: '{{route("checkout.proccess")}}',
                data: data,
                dataType: 'json',
                success: function (res) {
                    toastr.success(res.data.message, 'Sucesso!');
                    window.location.href = '{{route('checkout.thanks')}} ? order=' + res.data.order;
                }
            });
        }
        function getInstallments(amount, brand) {
            PagSeguroDirectPayment.getInstallment({
                amount: amount,
                brand: brand,
                maxInstallmentNoInterest: 0,
                success: function (res) {
                    let selectInstallments = drawSelectInstallments(res.installments[brand]);
                    document.querySelector('div.installments').innerHTML = selectInstallments;
                },
                error: function (err) {
                    console.log(err);
                },
                complete: function (res) {
                    console.log('Complete:' + res);
                }
            })
            function drawSelectInstallments(installments) {
                let select = '<label>Opções de Parcelamento: </label>';
                select += '<select class="form-control select_installments">';
                for (let l of installments) {
                    select += `<option value="${l.quantity}|${l.installmentAmount}">${l.quantity}x de ${l.installmentAmount} - Total fica ${l.totalAmount}</option>`;
                }
                select += '</select>';
                return select;
            }
        }
    </script>
@endsection
