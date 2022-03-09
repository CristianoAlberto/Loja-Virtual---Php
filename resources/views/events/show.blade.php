@extends('layouts.main')

@section('title', $produtos->nome)

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
                        <a class="aedit" href="cadastrarProduto">+ Produto </a> &nbsp;&nbsp;
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
                    <form action="pesquisarP" method="post">
                        <input id="pesquisarProduto" name="pesquisarProduto" type="search" class="mt-5 form-control"
                            placeholder="Pesquisar...">
                        <button type="submit" class="btn btn-primary mt-3">
                            Buscar
                        </button>
                    </form>
                </div>
                <div>


                    <div id="area-principal">
                        <div id="postagem">
                            <img src="/img/lojavirtual/{{ $produtos->imagem }}" width="560 px" height="550px">
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-sm-6">
                <!-- Mais info -->
                <div id="area-principal">
                    <div id="postagem">
                        <h1>{{ $produtos->nome }}</h1>
                        <h2>{{ $produtos->descricao }}</h2>
                        <h3>{{ $produtos->preco }}</h3>
                        <h4>{{ $produtos->data }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
