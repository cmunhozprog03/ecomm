@extends('Admin.layouts.main')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Setores</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Forms</li>
            <li class="breadcrumb-item active" aria-current="page">Setores</li>
        </ol>
    </div>

    <div class="row justify-content-center">
       @if(Session::has('message'))
           <div class="alert alert-success">{{Session::get('message')}}</div>
        @endif
        <div class="col-lg-10">
            <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card mb-6">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Novo Setor</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Setor</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" >

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Descrição</label>
                            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description"></textarea>

                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-3">
                                <label for="condition">Ativo</label>
                                <input type="text" class="form-control @error('condition') is-invalid @enderror" id="condition" name="condition">

                                @error('condition')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="position">Ordem</label>
                                <input type="text" class="form-control @error('position') is-invalid @enderror" id="position" name="position">

                                @error('position')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image">Selecione a imagem</label>
                                <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image">

                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>

                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
