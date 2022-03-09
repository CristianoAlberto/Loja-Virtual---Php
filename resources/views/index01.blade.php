@extends('layouts.main')

@section('title', 'Loja virtual home')

@section('content')

    <div class="container">

        <div class=" mt-3  mb-3 d-flex justify-content-center align-items-center">
            <h1>Loja Virtual</h1>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="d-flex justify-content-center align-items-center">

                    <div class="card text-center">
                        <div class="card-body">

                            <div class="card-title mt-5 mb-3">

                                <img src="img/sacola.png" alt="Logotipo">
                            </div>

                            <div>

                                <a href="/logar" class="btn btn-primary  mt-3">
                                    Entrar
                                </a>

                            </div>

                            <div>

                                <a href="/cadastrar" class="btn btn-warning mt-3">
                                    Cadastrar
                                </a>

                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>



    </div>
@endsection
