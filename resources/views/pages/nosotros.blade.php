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
    <div class="page-header align-items-start min-vh-50 pt-5 pb-5 m-3 border-radius-lg" style="background-image: url('/img/portada-3.jpg'); background-position: center;">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 text-center mx-auto">
                    <h1 class="text-white mb-2 mt-5">¡Acerca de Nosotros!</h1>
                    <p class="text-lead text-white">Nuestro objetivo principal es: <br>Crear un cambio dentro de nuestro país ofreciendo una innovación tecnológica a todas esas empresas que lo necesitan.</p>
                </div>
            </div>
        </div>
    </div>
</main>
<div class="container">

    <div class="row row-cols-1 row-cols-md-1 g-3 justify-content-center-media">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center mx-auto">
                <h1 class="text-black mb-2 mt-5">Nuestros Valores</h1>
                <!-- <p class="text-lead text-black">Cree una cuenta para tener acceso a nuestras capacitaciones, soporte tecnico
                y desarrollo de software a la medida.</p> -->
            </div>
        </div>
        <div class="card mb-3 " style="max-width: 70%;">
            <div class="row g-0 ">
                <div class="col-md-4 ">
                    <img src="/img/v-libertad.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8 d-grid justify-content-center align-items-center">
                    <div class="card-body ">
                        <h5 class="card-title">Libertad</h5>
                        <p class="card-text">Dentro de CEI apoyamos la creatividad y la libertad de ideas, en nuestro equipo de trabajo, ya que un trabajador creativo es mucho más valioso.</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end-media">
            <div class="card height-230 mb-3 " style="max-width: 70%;">
                <div class="row g-0 d-flex flex-row-reverse-media">
                    <div class="col-md-4" style="background-size: cover; background-position: center;">
                        <img src="/img/v-excelencia.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Excelencia</h5>
                            <p class="card-text">CEI ofrece un servicio de calidad dando lo mejor de cada miembro de su equipo obteniendo así confianza de nuestros clientes.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="card height-230 mb-3" style="max-width: 70%;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="/img/v-puntualidad.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Puntualidad</h5>
                        <p class="card-text">Dentro de CEI se tiene altamente contemplado los tiempos valorando cada segundo que nos dan nuestro equipo de trabajo y clientes.</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end-media">
        <div class="card height-230 mb-3" style="max-width: 70%;">
            <div class="row g-0 d-flex flex-row-reverse-media">
                <div class="col-md-4">
                    <img src="/img/v-trabajo-equipo.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Trabajo en equipo</h5>
                        <p class="card-text">Cada persona tiene ideas diferentes, y dentro de nuestro equipo queremos crear algo de excelencia y solo se puede lograr apoyándonos unos a otros.</p>

                    </div>
                </div>

            </div>
        </div>
        </div>
        <div class="card height-230 mb-3" style="max-width: 70%;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="/img/v-responsabilidad.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Responsabilidad</h5>
                        <p class="card-text">CEI cumple con cada uno de sus objetivos sin fallar ninguno.</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end-media">
        <div class="card height-230 mb-3" style="max-width: 70%;">
            <div class="row g-0 d-flex flex-row-reverse-media">
                <div class="col-md-4">
                    <img src="/img/v-honestidad.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Honestidad</h5>
                        <p class="card-text">Valor clave dentro de CEI para el trabajo en equipo y para crear un vínculo con nuestros clientes.</p>

                    </div>
                </div>

            </div>
        </div>
        </div>
    </div>
    @include('layouts.footers.auth.footer')
</div>

@endsection