@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <div id="centro">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-6">
                    <div id="area">
                        <h1 id="logo">
                            Loja Virtual
                        </h1>
                    </div>
                </div>

                <div class=" col-6 col-md-6">
                    <div id="menu">
                        <a class="aedit" href="home">Home</a> &nbsp;&nbsp;
                        <a class="aedit" href="create">+ Produto </a> &nbsp;&nbsp;
                        <a class="aedit" href="/">Sair</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 mt-5">
                <div>
                    <form action="/pesquisarP" method="post">
                        <input id="pesquisarProduto" name="pesquisarProduto" type="search" class="mt-5 form-control" placeholder="Pesquisar...">
                        <button type="submit" class="btn btn-primary mt-3">
                            Buscar
                        </button>
                        </form>
                </div>
                <div>

                    @foreach ($produtos as $produto)
                        <div id="area-principal">
                            <div id="postagem">

                                <img src="/img/lojavirtual/{{ $produto->imagem }}" width="260 px" height="150px">
                                <h1>{{ $produto->nome }}</h1>
                                <h3>{{ $produto->preco }}</h3>

                                <a href="/events/show/{{ $produto->id }}" class="btn btn-dark">Saber mais</a>
                                <a href="/events/update/{{ $produto->id }}" class="btn btn-info">Editar</Em></a>
                                <a href="/events/destroy/{{ $produto->id }}" class="btn btn-warning">Elminar</a>

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="col-sm-6">
                <!-- Mais info -->
            </div>
        </div>
    </div>
@endsection
