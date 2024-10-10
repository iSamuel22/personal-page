@extends('components.app')

@section('title', 'Contato')

@section('content')
<div class="container mt-5">
    <h1>
        <i class="fas fa-envelope"></i> Contato
    </h1>
    <p class="text-center">Fique à vontade para me contatar através dos canais abaixo. Estou sempre aberto a novas oportunidades e colaborações.</p>

    <div class="row justify-content-center mt-5">
        <div class="col-md-4 text-center">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <i class="fas fa-envelope fa-3x mb-3 text-primary"></i>
                    <h5 class="card-title">E-mail</h5>
                    <p class="card-text">
                        <a href="mailto:samueljubim47@gmail.com" class="text-dark">samueljubim47@gmail.com</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <i class="fab fa-github fa-3x mb-3 text-dark"></i>
                    <h5 class="card-title">GitHub</h5>
                    <p class="card-text">
                        <a href="https://github.com/smuelp" class="text-dark">github.com/smuelp</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-4">
        <div class="col-md-4 text-center">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <i class="fab fa-instagram fa-3x mb-3 text-danger"></i>
                    <h5 class="card-title">Instagram</h5>
                    <p class="card-text">
                        <a href="https://instagram.com/_ipsamuel" class="text-dark">@_ipsamuel</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <i class="fab fa-whatsapp fa-3x mb-3 text-success"></i>
                    <h5 class="card-title">WhatsApp</h5>
                    <p class="card-text">
                        <a href="https://wa.me/5522992851058" class="text-dark">(22) 99285-1058</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection