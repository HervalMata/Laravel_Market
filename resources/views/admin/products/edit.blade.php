@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Atualizar Produto</h1>
                    </div><!-- /.col -->
                </div>
    <form action="{{ route('admin.products.update', ['product' => $product->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nome do Produto</label>
            <input type="text" name="nane" class="form-control @error('name') is-invalid @enderror" value="{{ $product->name }}">
            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Descrição do Produto</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ $product->description }}">
            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Conteúdo do Produto</label>
            <textarea cols="30" rows="10" name="body" class="form-control @error('body') is-invalid @enderror">{{ $product->body }}</textarea>
            @error('body')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Preço do Produto</label>
            <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ $product->price }}">
            @error('price')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Slug do Produto</label>
            <input type="text" name="slug" class="form-control" value="{{ $product->slug }}">
        </div>

        <div>
            <button type="submit" class="btn btn-lg btn-success">Atualizar Produto</button>
        </div>
    </form>
            </div>
        </section>
    </div>
@endsection
