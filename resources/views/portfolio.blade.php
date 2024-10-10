@extends('components.app')

@section('title', 'Portfólio')

@section('content')
<div class="container">
    <h1>
        <i class="fas fa-briefcase"></i> Portfólio
    </h1>
    <p>Aqui estão alguns dos projetos que desenvolvi:</p>

    <ul class="list-group">
        <li class="list-group-item">
            <h5>Projeto 1: Lista de Tarefas</h5>
            <p>Um sistema completo de gerenciamento de tarefas utilizando React.</p>
            <a href="https://github.com/iSamuel22/to-do-list-react.git" class="btn btn-primary">
                <i class="fab fa-github"></i> Veja no GitHub
            </a>
        </li>

        <li class="list-group-item">
            <h5>Projeto 2: Aplicativo Desktop</h5>
            <p>Aplicativo desenvolvido com Java utilizando a ferramenta Scene Builder.</p>
            <a href="https://github.com/smuelp/collection-manager.git" class="btn btn-primary">
                <i class="fab fa-github"></i> Veja no GitHub
            </a>
        </li>

        <li class="list-group-item">
            <h5>Projeto 3: Matemática Computacional</h5>
            <p>Projeto de Matemática Computacional que realiza cálculos de derivadas utilizando Java FX.</p>
            <a href="https://github.com/smuelp/derivation-numeric.git" class="btn btn-primary">
                <i class="fab fa-github"></i> Veja no GitHub
            </a>
        </li>
    </ul>
</div>
@endsection