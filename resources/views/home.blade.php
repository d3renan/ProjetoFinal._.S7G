@extends('master')
@section('content')
<div id="carouselExampleCaptions" class="carousel slide" style="margin-left: 10px; margin-right: 10px;">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1" style="margin-left: 10px; margin-right: 10px;"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"
                style="margin-left: 10px; margin-right: 10px;"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"
                style="margin-left: 10px; margin-right: 10px;"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"
                style="margin-left: 10px; margin-right: 10px;"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"
                style="margin-left: 10px; margin-right: 10px;"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"
                style="margin-left: 10px; margin-right: 10px;"></button>

        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('imagens/imagem1.png')}}" class="d-block w-100" alt="Capa do Jogo">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Piloto Fantasma</h5>
                    
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('imagens/imagem2.png')}}" class="d-block w-100" alt="Capa do Jogo">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Sala de Desafios</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('imagens/imagem3.png')}}" class="d-block w-100" alt="Capa do Jogo">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Shoter 3D de cima para baixo</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('imagens/cozinha.png')}}" class="d-block w-100" alt="Capa do Jogo">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Cozinha maluca</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('imagens/kiwi.png')}}" class="d-block w-100" alt="Capa do Jogo">
                <div class="carousel-caption d-none d-md-block">
                    <h5>KiwiStory</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('imagens/glockar.png')}}" class="d-block w-100" alt="Capa do Jogo">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Glockar</h5>
                </div>
            </div>
        </div>
      
@endsection