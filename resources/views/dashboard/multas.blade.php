@extends('dashboard.layout')
@section('title', 'Pagina Default')
@section('content')
    <form class="formulario w-100 d-flex flex-wrap justify-content-start gap-3 pt-5 p-3 overflow-auto">
        <div class="d-flex w-100 flex-column ">
            <label class="fs-4 text-input fw-semibold pb-3">Multas</label>
            <div class="table-responsive">
                <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                        <th scope="col">Assunto</th>
                        <th scope="col" class="text-center">Descrição</th>
                        <th scope="col" class="text-center">Data</th>
                        <th scope="col" class="text-center">Pagar Online</th>
                        <!-- <th scope="col"></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Assunto</td>
                            <td class="text-center">Descrição</td>
                            <td class="text-center">Data</td>
                            <td class="text-center"></td>
                            <!-- <td class="d-flex flex-row justify-content-center gap-2">
                                <button type="button" class="btn btn-success fw-semibold text-preto text-center p-0" style=" width:50px; height:auto">Editar</button>
                                <button type="button" class="btn btn-vermelho fw-semibold text-white text-center p-0" style=" width:50px; height:auto">Apagar</button>
                            </td> -->
                            
                        </tr>
                    </tbody>
                    </table>
            </div>
        </div>
        <!-- <div class="w-100">
            <button type="button" class="btn btn-success fw-semibold text-preto text-center mt-5 p-0 fs-5" style=" width:160px; height:50px">Registrar novo aviso</button>
        </div> -->
    </form>
@endsection