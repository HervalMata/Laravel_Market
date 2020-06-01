@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
    <h1>Criar Produto</h1>
    <form action="{{ route('admin.products.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label>Nome do Produto</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label>Descrição do Produto</label>
            <input type="text" name="description" class="form-control">
        </div>

        <div class="form-group">
            <label>Conteúdo do Produto</label>
            <textarea cols="30" rows="10" name="body" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label>Preço do Produto</label>
            <input type="text" name="price" class="form-control">
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
