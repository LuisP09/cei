@extends('layouts.app')

@section('content')
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            @include('layouts.navbars.guest.navbar')
        </div>
    </div>
</div>
<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('/img/portada-1.jpg'); background-position: center;">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 text-center mx-auto">
                    <h1 class="text-white mb-2 mt-5">¡Innovar hoy, es el triunfo del mañana!</h1>
                    <p class="text-lead text-white">Cree una cuenta para tener acceso a nuestras capacitaciones, soporte tecnico
                        y desarrollo de software a la medida.</p>
                </div>
            </div>
        </div>
    </div>
</main>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-5">
            <div class="col">
                <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                    <div class="card mb-9" style="height: 540px;">
                        <div class="row g-0">
                            <div class="card mb-4">
                                <img src="/img/era-digital-2.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="col-md-12">
                                <div class="card-body">
                                    <h5 class="card-title">Desarrollo Web</h5>
                                    <p class="card-text">Trae tu empresa a la era digital. Desarrollamos tu sitio o aplicación web cubriendo las necesidades de tu negocio, ayudando a que tu empresa este a la vanguardia con las nuevas tecnologías de la información.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                    <div class="card mb-9" style="height: 540px;">
                        <div class="row g-0">
                            <div class="card mb-3">
                                <img src="/img/asesoria-ti-2.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-12">
                                <div class="card-body">
                                    <h5 class="card-title">Asesorias TI</h5>
                                    <p class="card-text">Sabemos que toda empresa tiene necesidades diferentes, es por ello que contamos con capacitaciones en diversos temas relacionados con las nuevas tecnologías, las cuales pueden ser tomadas de forma presencial o de forma remota.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                    <div class="card mb-9" style="height: 540px;">
                        <div class="row g-0">
                            <div class="card mb-3">
                                <img src="/img/soporte-tec-1.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-12">
                                <div class="card-body">
                                    <h5 class="card-title">Soporte Técnico</h5>
                                    <p class="card-text"> En CEI contamos con personal capacitado para la realización de actividades de mantenimiento, tanto preventivo como correctivo, con lo cual pretendemos ofrecerle un servicio de calidad, esto le permitirá a su negocio e instalaciones funcionar de la mejor manera.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>

@endsection