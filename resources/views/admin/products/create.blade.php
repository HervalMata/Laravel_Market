@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Criar Produto</h1>
                    </div><!-- /.col -->
                </div>

                <form action="{{ route('admin.products.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nome do Produto</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                               value="{{ old('name') }}">
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
                               value="{{ old('description') }}">
                        @error('description')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Conteúdo do Produto</label>
                        <textarea cols="30" rows="10" name="body"
                                  class="form-control @error('body') is-invalid @enderror"
                                  value="{{ old('body') }}"></textarea>
                        @error('body')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Preço do Produto</label>
                        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror"
                               value="{{ old('price') }}">
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
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Fotos do Produto</label>
                        <input type="file" name="photos[]" class="form-control @error('photos') is-invalid @enderror" multiple>
                        @error('photos')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Slug do Produto</label>
                        <input type="text" name="slug" class="form-control">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-lg btn-success">Criar Produto</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
