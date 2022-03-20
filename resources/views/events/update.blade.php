@extends('layouts.main')
@section('title', 'Cadastrar Produto')
@section('content')

    <div class="container">
        <div class="modal-header">
            <h1 class="fonte">Update o seu produto</h1>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <form action="/updateP/{{ $produtos->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label class="mt-3 text-white">Nome do produto</label>
                    <input type="text" class="form-control  mb-3" id="nomeProduto" name="nomeProduto"
                        value="{{ $produtos->nome }}" required>

                    <label class="text-white">Descrição do produto</label>
                    <textarea class="form-control" name="descricaoProduto" id="descricaoProduto"
                        value="{{ $produtos->descricao }}">{{ $produtos->descricao }}</textarea>

                    <input type="file" class="form-control
                mt-3" name="imagemProduto" id="imagemProduto">
                    <div class="mt-5">
                        <label class="fonte text-white">Att imagem já guardada:</label>
                        <img height="100px" with="100px" src="/img/lojavirtual/{{ $produtos->imagem }}">
                    </div>

            </div>

            <div class="col-sm-3">
                <label class="fonte mt-3 text-white">Digite o preço do produto</label>
                <input type="text" value="{{ $produtos->preco }}" required class="form-control mb-3" id="precoProduto"
                    name="precoProduto" required>

                <input type="date" name="dataProduto" id="dataProduto" value="{{ $produtos->data }}"
                    class="form-control">

                    <label class="fonte mt-3 text-white">Digite a quantidade do seu produto</label>

                    <input type="text" name="quantidadeProduto" id="quantidadeProduto" value="{{ $produtos->quantidade }}"
                        class="form-control mt-1" required>
            </div>


            <div>
                <button class="btn btn-dark mt-3" type="submit">
                    Cadastrar
                </button>

                <button class="btn btn-dark mt-3" type="">
                    <a href="/events/show/{{ $produtos->id }}">
                        Voltar
                    </a>
                </button>
            </div>

            </form>

        </div>

    </div>

@endsection
