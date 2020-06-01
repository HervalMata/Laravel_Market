@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Produtos</h1>
                    </div><!-- /.col -->
                </div>
                @include('flash::message')
                <a href="{{ route('admin.products.create') }}" class="btn btn-lg btn-success">Criar Produto</a>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $p)
                        <tr>
                            <td>{{$p->name}}</td>
                            <td>{{$p->description}}</td>
                            <td>R$ {{number_format($p->price, 2, ',', '.')}}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.products.show', ['product' => $p->id]) }}"
                                       class="btn btn-sm btn-primary">Viasualizar</a>
                                    <a href="{{ route('admin.products.edit', ['product' => $p->id]) }}"
                                       class="btn btn-sm btn-warning">Editar</a>
                                    <form action="{{ route('admin.products.destroy', ['product' => $p->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Remover</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $products->links() }}
            </div>
        </section>
    </div>
@endsection
