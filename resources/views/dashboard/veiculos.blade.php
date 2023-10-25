@extends('dashboard.layout')
@section('title', 'Pagina Default')
@section('content')
    <form class="formulario w-100 d-flex flex-wrap justify-content-start gap-3 pt-5 p-3 overflow-auto">
        <div class="d-flex flex-column ">
            <label class="fs-4 text-input fw-semibold">Nome Completo</label>
            <input type="text"  class="nome bg-transparent input-form text-creme fs-4 p-2" style="border: 1px solid #88D1CA;height:45px" placeholder="Nome Completo"/>
        </div>

        <div class="d-flex flex-column">
            <label class="fs-4 text-input fw-semibold">Relação com residencia</label>
            <select class="form-select bg-transparent text-laranja" aria-label="Default select example" style="border: 1px solid #88D1CA;height:45px">
                <option selected>Genero</option>
                <option value="1">Masculino</option>
                <option value="2">Feminino</option>
                <option value="3">Outro</option>
            </select>
        </div>
        <div class="d-flex flex-column ">
            <label class="fs-4 text-input fw-semibold">Placa</label>
            <input type="text"  class="bg-transparent input-form text-creme fs-4 p-2" style="border: 1px solid #88D1CA;height:45px" placeholder="Nome Completo"/>
        </div>

        <div class="d-flex flex-column ">
            <label class="fs-4 text-input fw-semibold">Modelo</label>
            <input type="text"  class="bg-transparent input-form text-creme fs-4 p-2" style="border: 1px solid #88D1CA;height:45px" placeholder="Nome Completo"/>
        </div>

        <div class="d-flex flex-column ">
            <label class="fs-4 text-input fw-semibold">Marca</label>
            <input type="text"  class="bg-transparent input-form text-creme fs-4 p-2" style="border: 1px solid #88D1CA;height:45px" placeholder="Nome Completo"/>
        </div>

        <div class="d-flex flex-column ">
            <label class="fs-4 text-input fw-semibold">Cor</label>
            <input type="text"  class="bg-transparent input-form text-creme fs-4 p-2" style="border: 1px solid #88D1CA;height:45px" placeholder="Nome Completo"/>
        </div>

        <div class="d-flex w-100 flex-column ">
            <label class="fs-4 text-input fw-semibold">Veiculos registrados</label>
            <div class="table-responsive">
                <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                        <th scope="col">Nome do proprietário</th>
                        <th scope="col" class="text-center">Categoria</th>
                        <th scope="col" class="table-celular text-center" >Placa</th>
                        <th scope="col" class="table-celular text-center">Cor</th>
                        <th scope="col" class="table-celular text-center">Marca</th>
                        <th scope="col" class="table-celular text-center">Modelo</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nome do proprietário</td>
                            <td class="text-center">Categoria</td>
                            <td class="table-celular text-center">placa</td>
                            <td class="table-celular text-center">Cor</td>
                            <td class="table-celular text-center">Marca</td>
                            <td class="table-celular text-center">modelo</td>
                            <td class="d-flex flex-row justify-content-center gap-2">
                                <button type="button" class="btn btn-success fw-semibold text-preto text-center p-0" style=" width:50px; height:auto">Editar</button>
                                <button type="button" class="btn btn-vermelho fw-semibold text-white text-center p-0" style=" width:50px; height:auto">Apagar</button>
                            </td>
                            
                        </tr>
                    </tbody>
                    </table>
            </div>
        </div>

        <div class="w-100">
            <button type="button" class="btn btn-success fw-semibold text-preto text-center mt-5 p-0 fs-3" style=" width:160px; height:50px">Confirmar</button>
        </div>
    </form>
@endsection