@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Visualizar Categoria</h1>
                    </div><!-- /.col -->
                </div>
    <form>
        @csrf

        <div class="form-group">
            <label>Nome da Categoria</label>
            <input type="text" name="nane" class="form-control" value="{{ $category->name }}" disabled>
        </div>

        <div class="form-group">
            <label>Descrição da Categoria</label>
            <input type="text" name="description" class="form-control" value="{{ $category->description }}" disabled>
        </div>

        <div class="form-group">
            <label>Slug da Categoria</label>
            <input type="text" name="slug" class="form-control" value="{{ $category->slug }}" disabled>
        </div>

        <div>
            <a href="{{ route('admin.categories.index') }}" class="btn btn-sm btn-primary">Retornar</a>
        </div>
    </form>
            </div>
        </section>
    </div>
@endsection
