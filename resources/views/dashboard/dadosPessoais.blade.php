@extends('dashboard.layout')
@section('title', 'Pagina Default')
@section('content')
    <form class="formulario w-100 d-flex flex-wrap justify-content-start gap-3 pt-5 p-3 overflow-auto">
        <!-- <div class="w-50 d-flex flex-column ">
            <label class="fs-4 text-input fw-semibold">Nome Completo</label>
            <input type="text"  class="bg-transparent input-form text-creme fs-4 p-2" style="border: 1px solid #88D1CA;height:45px" placeholder="Nome Completo"/>
        </div>

        <div class="w-25 d-flex flex-column ">
            <label class="fs-4 text-input fw-semibold">Gênero</label>
            <select class="form-select bg-transparent" aria-label="Default select example" style="border: 1px solid #88D1CA;height:45px">
                <option selected>Genero</option>
                <option value="1">Masculino</option>
                <option value="2">Feminino</option>
                <option value="3">Outro</option>
            </select>
        </div> -->

        <div class="d-flex flex-column ">
            <label class="fs-4 text-input fw-semibold">Nome</label>
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
            <label class="fs-4 text-input fw-semibold">RG</label>
            <input type="text"  class="bg-transparent input-form text-creme fs-4 p-2" style="border: 1px solid #88D1CA;height:45px" placeholder="Nome Completo"/>
        </div>

        <div class="d-flex flex-column ">
            <label class="fs-4 text-input fw-semibold">CPF</label>
            <input type="text"  class="bg-transparent input-form text-creme fs-4 p-2" style="border: 1px solid #88D1CA;height:45px" placeholder="Nome Completo"/>
        </div>


        <div class="d-flex flex-column ">
            <label class="fs-4 text-input fw-semibold">Data</label>
            <input type="text"  class="bg-transparent input-form text-creme fs-4 p-2" style="border: 1px solid #88D1CA;height:45px" placeholder="Nome Completo"/>
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

        <div class=" d-flex flex-column ">
            <label class="fs-4 text-input fw-semibold">Email</label>
            <input type="text"  class="bg-transparent input-form text-creme fs-4 p-2" style="border: 1px solid #88D1CA;height:45px" placeholder="Nome Completo"/>
        </div>

        <div class="d-flex flex-column ">
            <label class="fs-4 text-input fw-semibold">numero de telefone</label>
            <input type="text"  class="bg-transparent input-form text-creme fs-4 p-2" style="border: 1px solid #88D1CA;height:45px" placeholder="Nome Completo"/>
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
            <label class="fs-4 text-input fw-semibold">Residencia</label>
            <input type="text"  class="bg-transparent input-form text-creme fs-4 p-2" style="border: 1px solid #88D1CA;height:45px" placeholder="Nome Completo"/>
        </div>

        <div class="w-100">
            <button type="button" class="btn btn-success fw-semibold text-preto text-center mt-5 p-0 fs-3" style=" width:160px; height:50px">Confirmar</button>
        </div>
    </form>
@endsection