@extends('login.layout')
@section('title', 'Pagina Home')
@section('content')

<main class="vw-100 vh-100 d-flex align-items-center justify-content-center flex-column " style="background-color: #452B34">

    <img src="{{ asset('img/logoluxury.png') }}" style="width:300px">

    <div class="d-flex flex-row w-auto" style="height:600px">

        <!-- <div class="bg-laranja h-100 p-2 form-login" style="width:95vw; height:500px">
            <section class="w-100 d-flex justify-content-start ">
                <img src="{{ asset('img/register.png') }}" style="width:50px">
            </section>
    
            <section class="w-100 d-flex justify-content-end mb-5 ">
                <p class="text-preto fs-1 fw-bold ">
                    Register
                </p>
            </section>
    
            <section class="w-100 d-flex justify-content-center align-items-center">
                <div class="w-75  d-flex flex-column  align-items-center gap-3">
    
                    <input class=" fs-3 bg-input w-100" type="text" style="height:45px"/>
                    <input class=" fs-3 bg-input w-100" type="text" style="height:45px"/>
                    <input class=" fs-3 bg-input w-100" type="text" style="height:45px"/>
        
                    <button class="w-100 btn btn-preto text-input fw-bold fs-3 d-flex justify-content-center align-items-center mt-4" style="height:45px">
                        Entrar
                    </button>
        
                    <p class="text-preto fs-6">
                        Já tem uma conta? <a class="fw-bold text-preto" href="{{ url('/login')}}">entrar</a>
                    </p>
                </div>
            </section>
        </div>   -->
        
        
        <div class="bg-laranja h-100 p-2 form-login" style="width:95vw; height:500px">
            <section class="w-100 d-flex justify-content-start ">
                <img src="{{ asset('img/register.png') }}" style="width:50px">
            </section>
    
            <section class="w-100 d-flex justify-content-end mb-5 ">
                <p class="text-preto fs-1 fw-bold ">
                    Confirm
                </p>
            </section>
    
            <section class="w-100 d-flex justify-content-center align-items-center">
                <div class="w-75  d-flex flex-column  align-items-center">
    
                    <p class="text-vermelho fs-3 mb-0 text-center fw-bold">
                        Para enviar uma requisição de conta é necessário confirmar seu email!
                    </p>

                    <p class="text-preto fs-5 mb-0 text-center fw-normal w-75">
                        Enviamos um email para o seguinte endereço: xxxxx@xxx.com
                    </p>


                    <input class=" fs-3 bg-input w-100 mt-4 mb-4" type="text" style="height:45px"/>
        
                    <button class="w-100 btn btn-preto text-input fw-bold fs-3 d-flex justify-content-center align-items-center mt-4" style="height:45px">
                        Confirmar
                    </button>
                </div>
            </section>
        </div>  

        <div class="bg-creme h-100 p-2 card justify-content-between align-items-center ">
            <section class="w-100 d-flex justify-content-end ">
              
            </section>
    
            <section class="w-100 d-flex justify-content-center flex-column text-center">
                <h2 class="fs-1 fw-bold text-preto">Bem vindo(a)</h2>
                <h3 class="fs-5">Realize seu cadastro para acessar o sistema</h3>
            </section>

            <section class="w-100 d-flex justify-content-center flex-column text-center">
                <p>Desenvolvido por kaynan</p>
            </section>

        </div>

    </div>

</main>


@endsection