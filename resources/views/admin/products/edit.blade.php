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
                @include('flash::message')
                <form action="{{ route('admin.products.update', ['product' => $product->id]) }}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Nome do Produto</label>
                        <input type="text" name="nane" class="form-control @error('name') is-invalid @enderror"
                               value="{{ $product->name }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Descrição do Produto</label>
                        <input type="text" name="description"
                               class="form-control @error('description') is-invalid @enderror"
                               value="{{ $product->description }}">
                        @error('description')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Conteúdo do Produto</label>
                        <textarea cols="30" rows="10" name="body"
                                  class="form-control @error('body') is-invalid @enderror">{{ $product->body }}</textarea>
                        @error('body')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Preço do Produto</label>
                        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror"
                               value="{{ $product->price }}">
                        @error('price')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Categorias do Produto</label>
                        <select name="categories" id="" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}"
                                        @if($product->categories->contains($category)) selected @endif
                                >{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Cores do Produto</label>
                        <select name="colors[]" id="" class="form-control">
                            @foreach($colors as $color)
                                <option value="{{$color->id}}" @if ($product->$color->contains($color))
                                    selected
                                @endif>{{$color->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Materiais do Produto</label>
                        <select name="materials[]" id="" class="form-control">
                            @foreach($materials as $material)
                                <option value="{{$material->id}}" @if ($product->$material->contains($material))
                                    selected
                                @endif>{{$material->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Fotos do Produto</label>
                        <input type="file" name="photos[]" class="form-control @error('photos.*') is-invalid @enderror" multiple>
                        @error('photos')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="btn btn-lg btn-success">Atualizar Produto</button>
                    </div>
                </form>
                <hr>
                <div class="row">
                    @foreach($product->photos as $photo)
                        <div class="col-4">
                            <img src="{{ asset('storage/' . $photo->image) }}" alt="" class="img-fluid">
                            <form action="{{ route('admin.photo.remove') }}" method="post">
                                @csrf
                                <input type="hidden" name="photoName" value="$photo->image">
                                <button type="submit" class="btn btn-sm btn-danger">Remover</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
