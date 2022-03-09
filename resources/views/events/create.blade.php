@extends('layouts.main')

@section('title', 'Cadastrar Produto')

@section('content')

    <div class="container">
        <div class="modal-header">
            <h1 class="fonte">Cadastre o seu produto</h1>
        </div>
        <div class="row">
            <div class="col-sm-6">

                <form action="/cadastrarP" method="post" enctype="multipart/form-data">
                    @csrf
                    <label class="mt-3 text-white">Nome do produto</label>
                    <input type="text" class="form-control  mb-3" id="nomeProduto" name="nomeProduto"
                        placeholder="Digite o nome do seu produto" required>

                    <label class="text-white">Descrição do produto</label>
                    <textarea class="form-control" name="descricaoProduto" id="descricaoProduto" placeholder="Digite a descriçao do seu produto"></textarea>

                    <input type="file" class="form-control
                mt-3" name="imagemProduto" id="imagemProduto">

            </div>

            <div class="col-sm-3">
                <label class="fonte mt-3 text-white">Digite o preço do produto</label>
                <input type="text" placeholder=" 10.00Akz" required class="form-control mb-3" id="precoProduto" name="precoProduto" required>

                <input type="date" name="dataProduto" id="dataProduto" class="form-control">
            </div>


            <div>
                <button class="btn btn-dark mt-3" type="submit">
                    Cadastrar
                </button>

                <button class="btn btn-dark mt-3" type="">
                    <a href="/">
                        Voltar
                    </a>
                </button>
            </div>

            </form>

        </div>

    </div>

@endsection
