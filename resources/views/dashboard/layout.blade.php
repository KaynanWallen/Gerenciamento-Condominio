<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#AbrirMenu").click(function() {
                $("#menuLeft").toggleClass("d-none");
                $("#AbrirMenu").toggleClass("d-none");
            });

            $("#FecharMenu").click(function() {
                $("#menuLeft").toggleClass("d-none");
                $("#AbrirMenu").toggleClass("d-none");
            });
        });

    </script>

    
</head>
<body>
    <footer class="vw-100 bg-creme" style="height:120px;">
        <img src="{{ asset('img/logoluxury.png') }}" style="width:200px">
    </footer>


    <main class="vw-100 bg-preto d-flex flex-row" style="height:calc(100vh - 120px)">

        <section id="AbrirMenu" class="d-none cursor-pointer" role='button'>
            <div class="definir-position bg-creme d-flex justify-content-center align-items-center" style="width:70px; height:50px">                
                <img src="{{ asset('img/seta.png') }}" style="width:30px">
            </div>
        </section>

        <!-- Add position-absolute para celular -->
        <section id="menuLeft" class="definir-position d-flex bg-creme p-2 flex-column justify-content-between" style="width:300px;height:calc(100vh - 120px)">
            <div class="d-flex flex-column  gap-3">
                <section  class="w-100 d-flex justify-content-end ">
                    <img id="FecharMenu" class="d-flex" src="{{ asset('img/close.png') }}" style="width:30px" role='button'>
                </section>
                <div>
                    <section>
                        <p class="mb-0 fs-3 fw-semibold text-preto">Informações</p>
                        <div  class="bg-laranja" style="width: 200px; height:1px">
                        </div>
                    </section>

                    <section class="mt-2 ms-2 d-flex flex-column">
                        <div class="hover d-flex flex-row gap-2" style="height:25px" role='button'>
                            <a class="d-flex flex-row gap-2 h-100 text-preto" href="{{ url('/chave') }}">
                                <img src="{{ asset('img/chave.png') }}" style="height:25px">
                                <p class="fw-semibold fs-5">Minha Chave</p>          
                            </a>
                        </div>

                        <div class="hover d-flex flex-row gap-2" style="height:25px" role='button' >
                            <a class="d-flex flex-row gap-2 h-100 text-preto" href="{{ url('/avisos') }}">
                                <img src="{{ asset('img/avisos.png') }}" style="height:25px">
                                <p class="fw-semibold fs-5">Avisos</p>
                            </a>
                        </div>

                        <div class="hover d-flex flex-row gap-2" style="height:25px" role='button'>
                            <a class="d-flex flex-row gap-2 h-100 text-preto" href="{{ url('/multas') }}">
                                <img src="{{ asset('img/multa.png') }}" style="height:25px">
                                <p class="fw-semibold fs-5">Multas</p>
                            </a>
                        </div>

                        <div class="hover d-flex flex-row gap-2" style="height:25px" role='button'>
                            <a class="d-flex flex-row gap-2 h-100 text-preto" href="{{ url('/reclamações') }}">
                                <img src="{{ asset('img/reclamacao.png') }}" style="height:25px">
                                <p class="fw-semibold fs-5">Reclamações</p>
                            </a>
                        </div>

                        
                        <div class="hover d-flex flex-row gap-2" style="height:25px" role='button'>
                            <a class="d-flex flex-row gap-2 h-100 text-preto" href="{{ url('/dados') }}">
                                <img src="{{ asset('img/dados.png') }}" style="height:25px">
                                <p class="fw-semibold fs-5">Dados Pessoais</p>
                            </a>
                        </div>
                    </section>
                </div>


                <div>
                    <section>
                        <p class="mb-0 fs-3 fw-semibold text-preto">Cadastros</p>
                        <div  class="bg-laranja" style="width: 200px; height:1px">
                        </div>
                    </section>

                    <section class="mt-2 ms-2 d-flex flex-column">
                        <div class="hover d-flex flex-row gap-2" style="height:25px" role='button'>
                            <a class="d-flex flex-row gap-2 h-100 text-preto" href="{{ url('/moradores') }}">
                                <img src="{{ asset('img/moradores.png') }}" style="height:25px">
                                <p class="fw-semibold fs-5">Moradores</p>
                            </a>
                        </div>

                        <div class="hover d-flex flex-row gap-2" style="height:25px" role='button'>
                            <a class="d-flex flex-row gap-2 h-100 text-preto" href="{{ url('/visitantes') }}">
                                <img src="{{ asset('img/frequente.png') }}" style="height:25px">
                                <p class="fw-semibold fs-5">Visitantes Frequentes</p>
                            </a>
                        </div>

                        <div class="hover d-flex flex-row gap-2" style="height:25px" role='button'>
                            <a class="d-flex flex-row gap-2 h-100 text-preto" href="{{ url('/veiculos') }}">
                                <img src="{{ asset('img/veiculo.png') }}" style="height:25px">
                                <p class="fw-semibold fs-5">Veiculos</p>
                            </a>
                        </div>

                        <div class="hover d-flex flex-row gap-2" style="height:25px" role='button'>
                            <a class="d-flex flex-row gap-2 h-100 text-preto" href="{{ url('/pets') }}">
                                <img src="{{ asset('img/pets.png') }}" style="height:25px">
                                <p class="fw-semibold fs-5">Pets</p>
                            </a>
                        </div>

                        
                    </section>
                </div>

                <div>
                    <section>
                        <p class="mb-0 fs-3 fw-semibold text-preto">Reservas</p>
                        <div  class="bg-laranja" style="width: 200px; height:1px">
                        </div>
                    </section>

                    <section class="mt-2 ms-2 d-flex flex-column">
                        <div class="hover d-flex flex-row gap-2" style="height:25px" role='button'>
                            <a class="d-flex flex-row gap-2 h-100 text-preto" href="{{ url('/reservar/salao') }}">
                                <img src="{{ asset('img/festa.png') }}" style="height:25px">
                                <p class="fw-semibold fs-5">Salão de Festas</p>
                            </a>
                        </div>

                        <div class="hover d-flex flex-row gap-2" style="height:25px" role='button'>
                            <a class="d-flex flex-row gap-2 h-100 text-preto" href="{{ url('/reservar/quadra') }}">
                                <img src="{{ asset('img/quadra.png') }}" style="height:25px">
                                <p class="fw-semibold fs-5">Quadra</p>
                            </a>
                        </div>
                        
                    </section>
                </div>


            </div>

            <div class="ms-2">
                <div class="d-flex flex-row gap-2" style="height:25px">
                    <img src="{{ asset('img/logout.png') }}" style="height:25px">
                    <p class="fw-semibold fs-5">Sair</p>
                </div>
            </div>
        </section>
        
        <section class="w-100 d-flex justify-content-center align-items-start " style="height:calc(100vh - 120px)">
            @yield('content')
        </section>
    </main>
</body>
</html>