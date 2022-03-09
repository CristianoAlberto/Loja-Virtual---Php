@extends('layouts.main')

@section('title', 'Logar')

@section('content')
    <div class="container">
        <div class="modal-header mb-3">
            <h1>Iniciar Sessão</h1>
        </div>

        <div class="row">
            <div class="col-sm-12 mt-3">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="../controller/Classes/logarUsuario.php" class="fonte">
                                <div class="mt-5">
                                    <label>Email ou Número</label>
                                    <input type="text" class="form-control mb" name="email"
                                        placeholder="Digite o seu email ou número" required />
                                </div>

                                <div class="mt-2 mb-5">
                                    <label>Palavra-passe</label>
                                    <input type="password" class="form-control mb-3" name="password"
                                        placeholder="Digite a sua palavra-passe" required />
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 mb-3">
                                        <button class="btn btn-danger" type="submit">
                                            Iniciar
                                        </button>
                                    </div>

                                    <div class="col-sm-12">
                                        <button class="btn btn-danger" type="">
                                            <a href="/"> Voltar </a>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
