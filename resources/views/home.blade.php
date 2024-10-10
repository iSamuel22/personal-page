@extends('components.app')

@section('title', 'Home')

@section('content')
<div class="container mt-5">
    <h1>
        <i class="fas fa-home"></i> Bem-vindo ao meu site!
    </h1>
    <p>Olá! Eu sou Samuel Pena, um desenvolvedor apaixonado por tecnologia e inovação. Neste espaço, compartilho meus projetos, aprendizado e um pouco sobre meus interesses.</p>

    <div class="row mt-5">
        <div class="col-md-4">
            <img src="{{ asset('images/img.jpg') }}" alt="Descrição da Imagem" class="img-fluid rounded-circle" />
        </div>
        <div class="col-md-8">
            <h2>Projetos em Andamento</h2>
            <p>Atualmente estou trabalhando nos seguintes projetos:</p>
            <ul>
                <li><strong>Projeto Java:</strong> Um sistema web que gerencia o histórico de atendimentos de pacientes e médicos em uma clínica.</li>
                <li><strong>Projeto Laravel:</strong> Um sistema que faz um CRUD simples de produtos.</li>
                <li><strong>Projeto Python:</strong> Um sistema onde os usuários possam registrar, pesquisar e gerenciar seus livros.</li>
                <li><strong>Projeto JavaScript:</strong> Um aplicativo web que permita aos usuários gerenciar suas listas de compras de forma interativa.</li>
                <li><strong>Projeto Java:</strong> Um sistema que permita aos usuários pesquisar e reservar quartos em diferentes hotéis.</li>
            </ul>
        </div>
    </div>

    <div class="container mt-5">
        <h2>Aprendizado Contínuo</h2>
        <p>Estou sempre em busca de novos conhecimentos e habilidades. Atualmente, quero aprender:</p>
        <ul>
            <li>Python</li>
            <li>Spring Boot</li>
            <li>JavaScript</li>
        </ul>
    </div>


    <div class="container mt-5">
        <h2>Interesses Pessoais</h2>
        <p>Além da programação, tenho interesse em:</p>
        <ul>
            <li>Jogos, principalmente Valorant</li>
            <li>Leitura de livros de ficção científica</li>
            <li>Filmes e séries de ação</li>
            <li>Tocar bateria e guitarra</li>
        </ul>
    </div>

    <div class="mt-5 text-center">
        <h2>Citação Inspiradora</h2>
        <blockquote class="blockquote">
            <p class="mb-0">"A única maneira de fazer um excelente trabalho é amar o que você faz."</p>
            <footer class="blockquote-footer">Steve Jobs</footer>
        </blockquote>
    </div>
    @endsection