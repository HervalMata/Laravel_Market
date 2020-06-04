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
            <label>Categorias do Produto</label>
            <select name="categories" id="" class="form-control" disabled>
                @foreach($categories as $category)
                    <option value="{{$category->id}}"
                            @if($product->categories->contains($category)) selected @endif
                    >{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Cores do Produto</label>
            <select name="colors[]" id="" class="form-control" disabled>
                @foreach($colors as $color)
                    <option value="{{$color->id}}" @if ($product->$color->contains($color))
                    selected
                        @endif>{{$color->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Materiais do Produto</label>
            <select name="materials[]" id="" class="form-control" disabled>
                @foreach($materials as $material)
                    <option value="{{$material->id}}" @if ($product->$material->contains($material))
                    selected
                        @endif>{{$material->name}}</option>
                @endforeach
            </select>
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
