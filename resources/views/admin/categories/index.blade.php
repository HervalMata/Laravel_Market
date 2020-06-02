@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Categorias</h1>
                    </div><!-- /.col -->
                </div>
                @include('flash::message')
                <a href="{{ route('admin.categories.create') }}" class="btn btn-lg btn-success">Criar Categoria</a>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $c)
                        <tr>
                            <td>{{$c->name}}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.categories.show', ['category' => $c->id]) }}"
                                       class="btn btn-sm btn-primary">Viasualizar</a>
                                    <a href="{{ route('admin.categories.edit', ['category' => $c->id]) }}"
                                       class="btn btn-sm btn-warning">Editar</a>
                                    <form action="{{ route('admin.categories.destroy', ['category' => $c->id]) }}" method="post">
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
                {{ $categories->links() }}
            </div>
        </section>
    </div>
@endsection
