@extends('layouts.main')

@section('title', 'Cadastrar Usuario')

@section('content')
    <div class="container">
        <div class="modal-header mb-3">
            <h1 class="fonte">Cadastre-se</h1>
        </div>
        <div class="row">
            <div class="col-sm-12 mt-3">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="cardd mb-5">
                        <div class="card-body">
                            <form method="post" action="../controller/Classes/cadastrarUsuario.php" class="fonte">
                                <div>
                                    <label>Nome</label>
                                    <input type="text" class="form-control mb-3" name="nome" placeholder="Digite o seu nome"
                                        required />
                                </div>

                                <div>
                                    <label>Email</label>
                                    <input type="email" class="form-control mb-3" name="email"
                                        placeholder="Digite o seu email" required />
                                </div>

                                <div>
                                    <label>Número de telefone</label>
                                    <input type="text" class="form-control mb-3" name="numero"
                                        placeholder="Digite o seu número" required />
                                </div>

                                <div>
                                    <label>Password</label>
                                    <input type="password" class="form-control mb-3" name="password"
                                        placeholder="Digite a sua password" required />
                                </div>
                                <div>
                                    <label>Empresa</label>
                                    <input type="text" class="form-control mb-3" name="empresa"
                                        placeholder="Digite  o nome da sua empresa" required />
                                </div>

                                <div>
                                    <button class="btn btn-success mt-4" type="submit">
                                        Cadastrar
                                    </button>

                                    <button class="btn btn-dark mt-4" type="">
                                        <a href="/"> Voltar </a>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
