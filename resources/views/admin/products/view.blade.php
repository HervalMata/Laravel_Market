@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Visualizar Produto</h1>
                    </div><!-- /.col -->
                </div>
    <form>
        @csrf

        <div class="form-group">
            <label>Nome do Produto</label>
            <input type="text" name="nane" class="form-control" value="{{ $product->name }}" disabled>
        </div>

        <div class="form-group">
            <label>Descrição do Produto</label>
            <input type="text" name="description" class="form-control" value="{{ $product->description }}" disabled>
        </div>

        <div class="form-group">
            <label>Conteúdo do Produto</label>
            <textarea cols="30" rows="10" name="body" class="form-control" disabled>{{ $product->body }}</textarea>
        </div>

        <div class="form-group">
            <label>Preço do Produto</label>
            <input type="text" name="price" class="form-control" value="{{ $product->price }}" disabled>
        </div>

        <div class="form-group">
            <label>Slug do Produto</label>
            <input type="text" name="slug" class="form-control" value="{{ $product->slug }}" disabled>
        </div>

        <div>
            <a href="{{ route('admin.products.index') }}" class="btn btn-sm btn-primary">Retornar</a>
        </div>
    </form>
            </div>
        </section>
    </div>
@endsection
