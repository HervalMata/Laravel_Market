@extends('layouts.app')
@section('content')
    <h2 class="alert alert-success">
        Muito obrigado por sua compra!
    </h2>
    <h2>
        Seu pedido foi processado, código do pedido: {{request()->get('order')}}.
    </h2>
@endsection
