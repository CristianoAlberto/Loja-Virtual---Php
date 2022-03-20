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
<<<<<<< HEAD
                    <form
=======
                    <form 
>>>>>>> 1729a61d3311e5182a12aef3671347947e4e3c77
                    action="pesquisarP"
                    method="post">
                        <input
                        id="pesquisarProduto"
                        name="pesquisarProduto"
                        type="search"
                        class="mt-5 form-control"
                        placeholder="Pesquisar...">
                        <button
                        type="submit"
                        class="btn btn-primary mt-3">
                        Buscar
                        </button>
                    </form>
              </div>
              </div>
              </div>
                  <div class="row">
                   <div class="col-sm-6 col-md-12 mt-5 mb-5">
                    <div>
                        <div class="meuPost">
<<<<<<< HEAD
                            <img id="img" src="/img/lojavirtual/{{ $produtos->imagem }}" width="560 px" height="550px">
=======
                            <img src="/img/lojavirtual/{{ $produtos->imagem }}" width="560 px" height="550px">
>>>>>>> 1729a61d3311e5182a12aef3671347947e4e3c77
                        </div>
                    </div>
           <div class="row ">
            <div class="col-md-12 col-sm-6 ">
                <div  >
                    <div class="meuPost organiza">
                        <h1>{{ $produtos->nome }}</h1>
                        <h2>{{ $produtos->preco }}</h2>
                        <h3>{{ $produtos->descricao }}</h3>
<<<<<<< HEAD
                        <h5>Data de postagem: {{date('d/m/Y', strtotime($produtos->data)) }}</h5>
=======
                        <h4>{{ $produtos->data }}</h4>
>>>>>>> 1729a61d3311e5182a12aef3671347947e4e3c77

                        <!--Botões -->
                       <div class="mt-5 mb-3">
                        <button class="btn btn-secondary"> <!--Coloca o link aqui --> Editar </button>
                        <button class="btn btn-warning">   <!--Coloca o link aqui --> Eliminar </button>
                        <span> &nbsp; </span>
                        <span> &nbsp; </span>
                        <button class="btn btn-success">   <!--Coloca o link aqui --> XXXX </button>
                        <button class="btn btn-dark">      <!--Coloca o link aqui --> Voltar </button>
                       </div>
<<<<<<< HEAD
                    </div>
=======
                    </div> 
>>>>>>> 1729a61d3311e5182a12aef3671347947e4e3c77
                </div>
            </div>
           </div>
        </div>
        </div>
    </div>
@endsection
