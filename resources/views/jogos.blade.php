@extends('home')
@section('content')
    
<div class="row row-cols-1 row-cols-md-3 g-4" style="margin-top: 50px; margin-left: 10px; margin-right: 10px;">
        <div class="col">
            <div class="card h-100">
                <img src="{{asset('imagens/imagem1.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ghost Racer Template</h5>
                    <p class="card-text">Uma corrida estilo neon 3D no qual você disputa com versões fantasma para
                        superar seus proprios recordes.</p>
                    <a href="{{asset('jogo/Ghost Racer Template/jogo1.html')}}"><button type="button"
                            class="btn btn-primary btn-sm">START</button></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="{{asset('imagens/imagem2.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Room Template Challenger</h5>
                    <p class="card-text">Colete quantas caixas de ferramentas voc~e puder, enquanto támbem evita
                        armadilhas.0</p>
                    <a href="{{asset('jogo/Challenge Room Template/index.html')}}"><button type="button"
                            class="btn btn-primary btn-sm">START</button></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="{{asset('imagens/imagem3.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Shoter 3D de cima para baixo</h5>
                    <p class="card-text">Destranque portas e corra de monstros perigosos numa dungeon 3D.</p>
                    <a href="{{asset('jogo/3D-Top-Down-Shooter-Template/index.html')}}"><button type="button"
                            class="btn btn-primary btn-sm">START</button></a>
                </div>
            </div>
        </div>
    </div>
    <a href="" style="border: 10px;"></a>
    <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-top: 50px; margin-left: 10px; margin-right: 10px;">
        <div class="col">
            <div class="card h-100">
                <img src="{{asset('imagens/glockar.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Glokar</h5>
                    <p class="card-text">Capitão Glorktar e seus companheiros roubaram os planis de mintagem de uma arma
                        de ultima geração. Encontre seu bando e interfira antes que ele coloque seu plano em ação.</p>
                    <a href="{{asset('jogo/Glokar/index.html')}}"><button type="button" class="btn btn-primary btn-sm">START</button></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="{{asset('imagens/kiwi.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">KiwiStory</h5>
                    <p class="card-text">Clã Kiwi enviou o pequeno kiro par colher alguns insetos de jujuba, mas ele se
                        perdeu durante o caminho! ajude-o a encontrar o caminho de volta para casa.
                    </p>
                    <a href="{{asset('jogo/KiwiStory/index.html')}}"><button type="button"
                            class="btn btn-primary btn-sm">START</button></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="{{asset('imagens/csnnon.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Canhão de lançamento</h5>
                    <p class="card-text">Um jogo de plataforma onde voc~e se auto lançar de poderosos canhões.</p>
                    <a href="{{asset('jogo/Cannon Launch Template/index.html')}}"><button type="button"
                            class="btn btn-primary btn-sm">START</button></a>
                </div>
            </div>
        </div>
    </div>
    <a href="" style="border: 10px;"></a>
    <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-top: 50px; margin-left: 10px; margin-right: 10px;">
        <div class="col">
            <div class="card h-100">
                <img src="{{asset('imagens/cozinha.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Cozinha maluca</h5>
                    <p class="card-text">Seu restaurante nunca viu tantos clientes! Faça o possivel para servir todo
                        mundo antes que o tempo acabe.</p>
                    <a href="{{asset('jogo/Kitchen Frenzy Template/index.html')}}"><button type="button"
                            class="btn btn-primary btn-sm">START</button></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="{{asset('imagens/gancho.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Tiro de gancho</h5>
                    <p class="card-text">uma plataforma onde o personagem pode se locomover com ajuda de um gancho
                        horizontalmente.
                    </p>
                    <a href="{{asset('jogo/Hookshot Template/index.html')}}"><button type="button"
                            class="btn btn-primary btn-sm">START</button></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="{{asset('imagens/chaoo.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Patrolling Trap Template</h5>
                    <p class="card-text">Um template de plataforma com armadilhas que se movem e precisam ser evitadas
                        pelo personagem.</p>
                    <a href="{{asset('jogo/Patrolling Trap Template/index.html')}}"><button type="button"
                            class="btn btn-primary btn-sm">START</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-top: 50px; margin-left: 10px; margin-right: 10px;">
        <div class="col">
            <div class="card h-100">
                <img src="{{asset('imagens/navinha atira.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Infinite Dash Template</h5>
                    <p class="card-text">Atire nos alienígenas invasores antes que eles chegem a terra!.</p>
                    <a href="{{asset('jogo/Classic Shoot em up Template/index.html')}}"><button type="button"
                            class="btn btn-primary btn-sm">START</button></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="{{asset('imagens/Batery dash.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Batery Dash</h5>
                    <p class="card-text">Esse plataforma 3D desafia você a levar uma pequena bateria até o fim do nivel.
                    </p>
                    <a href="{{asset('jogo/Battery Sprint Template/index.html')}}"><button type="button"
                            class="btn btn-primary btn-sm">START</button></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="{{asset('imagens/imagem3.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Novidades em breve</h5>
                    <p class="card-text">O site está passando por atualizações e melhorias.</p>
                    
                </div>
            </div>
        </div>
    </div>
    <a href="" style="border: 10px;"></a>
    <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-top: 50px; margin-left: 10px; margin-right: 10px;">

    </div>
    
@endsection