@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Criar Categoria</h1>
                    </div><!-- /.col -->
                </div>

                <form action="{{ route('admin.categories.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Nome da Categoria</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                               value="{{ old('name') }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Descrição da Categoria</label>
                        <input type="text" name="description"
                               class="form-control @error('description') is-invalid @enderror"
                               value="{{ old('description') }}">
                        @error('description')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="btn btn-lg btn-success">Criar Categoria</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
