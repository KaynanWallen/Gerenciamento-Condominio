@extends('login.layout')
@section('title', 'Pagina Home')
@section('content')

<main class="vw-100 vh-100 d-flex align-items-center justify-content-center flex-column " style="background-color: #452B34">

    <!-- <img src="/../resources/img/logoluxury.png" style="width:300px"> -->
    <img src="{{ asset('img/logoluxury.png') }}" style="width:300px">


    <div class="d-flex flex-row w-auto" style="height:600px">
        
        <div class="bg-creme h-100 p-2 card justify-content-between align-items-center ">
            <section class="w-100 d-flex justify-content-end ">
              
            </section>
    
            <section class="w-100 d-flex justify-content-center flex-column text-center">
                <h2 class="fs-1 fw-bold text-preto">Bem vindo(a) de volta</h2>
                <h3 class="fs-5">Realize o login e acesse o sistema</h3>
            </section>

            <section class="w-100 d-flex justify-content-center flex-column text-center">
                <p>Desenvolvido por kaynan</p>
            </section>

        </div>

        <div class="bg-laranja h-100 p-2 form-login" style="width:95vw; height:500px">
            <section class="w-100 d-flex justify-content-end ">
                <img src="{{ asset('img/cadeado.png') }}" style="width:50px">
            </section>
    
            <section class="w-100 d-flex justify-content-start">
                <p class="text-preto fs-1 fw-bold ">
                    Login
                </p>
            </section>
    
            <section class="w-100 d-flex justify-content-center align-items-center">
                <div class="w-75  d-flex flex-column  align-items-center gap-3">
    
                    <input class=" fs-3 bg-input w-100" type="text" style="height:45px"/>
                    <input class=" fs-3 bg-input w-100" type="text" style="height:45px"/>
        
                    <p class="text-preto fs-6 mb-0">
                        <a>Esqueceu sua senha?</a>
                    </p>
        
                    <button class="w-100 btn btn-preto text-input fw-bold fs-3 d-flex justify-content-center align-items-center" style="height:45px">
                        Entrar
                    </button>
        
                    <p class="text-preto fs-6">
                        Não tem uma conta? <a class="fw-bold text-preto" href="{{ url('/register') }}">cadastrar-se</a>
                    </p>
                    
                </div>
            </section>
        </div> 

    </div>

</main>


@endsection