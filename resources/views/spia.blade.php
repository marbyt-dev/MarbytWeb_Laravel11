@include('layouts/header')
{{-- Particles in background --}}
<div id="particles-js"></div>
{{-- Navbar --}}
@include('layouts/navbar')

{{-- Sección 1: Texto Principal --}}
<div class="section section_out">
    <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-12 text-center">
            <div class="hero-section">
                <div class="hero-header">
                    <img src="{{ asset('img/logos/spia/logoSpia.webp') }}" alt="SPIA Logo" class="hero-logo">
                    <h1 class="hero-title">{{ __('messages.spiaWelcomeTitle') }}</h1>
                </div>
                <p class="hero-description">{{ __('messages.spiaWelcomeDescription') }}</p>
            </div>
        </div>
    </div>
    {{-- Agregar más espacio entre los dos fade-ups --}}
    <div style="margin-top: 60px;"></div>
    <div class="row" data-aos="fade-up" data-aos-delay="250">
        <div class="col-md-8 col-12">
            <div class="image-banner-section">
                <div class="image-overlay">
                    <h2>{{ __('messages.spiaIntroduction') }}</h2>
                    <p>{{ __('messages.spiaDescription') }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12" data-aos="fade-up" data-aos-delay="350">
            <div class="side-image-section">
                <img src="{{ asset('img/logos/spia/img1_2.png') }}" alt="Proceso SPIA" class="side-image">
            </div>
        </div>
    </div>
</div>

{{-- Sección 3: Proceso con Zigzag (sin flechas) --}}
<div class="section section_out">
    <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-12 text-center">
            <div class="process-title-section">
                <h2>{{ __('messages.spiaOurProcess') }}</h2>
            </div>
        </div>
    </div>
    
    <div class="row" style="margin-top: 10px">
        <div class="col-12">
            <div class="process-container">
                @php
                    $processSteps = [
                        ['icon' => '🐟', 'title' => 'spiaStep1Title', 'description' => 'spiaStep1Desc', 'delay' => '100'],
                        ['icon' => '🩸', 'title' => 'spiaStep2Title', 'description' => 'spiaStep2Desc', 'delay' => '200'],
                        ['icon' => '🔬', 'title' => 'spiaStep3Title', 'description' => 'spiaStep3Desc', 'delay' => '300'],
                        ['icon' => '⚙️', 'title' => 'spiaStep4Title', 'description' => 'spiaStep4Desc', 'delay' => '400'],
                        ['icon' => '📊', 'title' => 'spiaStep5Title', 'description' => 'spiaStep5Desc', 'delay' => '500']
                    ];
                @endphp

                @foreach ($processSteps as $index => $step)
                    <div class="process-step {{ $index % 2 == 1 ? 'reverse' : '' }}" 
                         data-aos="fade-up" 
                         data-aos-delay="{{ $step['delay'] }}">
                        <div class="step-icon step-icon-{{ $index + 1 }}">
                            {{ $step['icon'] }}
                        </div>
                        <div class="step-content">
                            <h3>{{ __('messages.' . $step['title']) }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

{{-- Sección 4: Segunda Imagen (Galería) --}}
<div class="section section_out">
    <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-md-6 col-12">
            <div class="gallery-container">
                <div class="gallery-text-above">
                    <h3>{{ __('messages.spiaImg2Text') }}</h3>
                </div>
                <div class="gallery-item gallery-item-1">
                    <img src="{{ asset('img/logos/spia/img2.png') }}" alt="Unique Experiences" class="gallery-image">
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="gallery-container">
                <div class="gallery-text-above">
                    <h3>{{ __('messages.spiaImg3Text') }}</h3>
                </div>
                <div class="gallery-item gallery-item-2">
                    <img src="{{ asset('img/logos/spia/img3.png') }}" alt="Extraordinary Results" class="gallery-image">
                </div>
            </div>
        </div>
    </div>
    {{-- Modificar esta parte para que el recuadro englobe texto e imagen --}}
    <div class="row" data-aos="fade-up" data-aos-delay="250">
        <div class="col-12">
            <div class="combined-text-image-section">
                <div class="combined-content">
                    <h2>{{ __('messages.spiaImg4Text') }}</h2>
                    <div class="combined-image-container">
                        <img src="{{ asset('img/logos/spia/img4_2.png') }}" alt="Our Commitment" class="combined-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Sección 5: Contacto con teléfono, email y logos --}}
<div class="section section_out">
    <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-12 text-center">
            <div class="contact-section">
                <h2>{{ __('messages.contact') }}</h2>
                
                {{-- Información de contacto --}}
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-phone contact-icon"></i>
                        <span class="contact-text">+34 678 44 11 49</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope contact-icon"></i>
                        <span class="contact-text">spia@marbyt.com</span>
                    </div>
                </div>
                
                {{-- Logos --}}
                <div class="logos-container">
                    <img src="{{ asset('img/horizontal_preferente_blanco_color_marino.svg') }}" alt="Logo M" class="contact-logo">
                    <img src="{{ asset('img/logos/colabs/public/umu.webp') }}" alt="Logo UM" class="contact-logo">
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Section 3: Contact and footer --}}
<div class="section" id="section3">
    @include('sections/section3')
</div>

{{-- Modales --}}
@include('layouts/modals')

{{-- Cookie policy --}}
@if (!isset($_COOKIE['is_cookie_compliance_accepted'])):
    @include('layouts/cookies')
@endif

@include('layouts/footer')

<style>
/* Estilos personalizados para las nuevas secciones */
.section_out {
    margin-bottom: 0px;
}

.hero-section {
    padding: 80px 20px;
    background: #2d3141;
    border-radius: 15px;
    color: white;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    margin-bottom: 0px;
}

.hero-header {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}

.hero-logo {
    height: 120px;
    width: auto;
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 0;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.hero-description {
    font-size: 1.3rem;
    opacity: 0.9;
    max-width: 800px;
    margin: 0 auto;
}

.image-banner-section {
    position: relative;
    height: 400px;
    background: #c95311;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    margin-bottom: 0px;
    overflow: hidden;
}

.image-overlay {
    text-align: center;
    z-index: 1;
}

.image-overlay h2 {
    font-size: 2.5rem;
    margin-bottom: 15px;
}

.image-overlay p {
    font-size: 1.2rem;
}

/* Estilos para la imagen lateral */
.side-image-section {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 400px;
    padding: 20px;
}

.side-image {
    max-width: 100%;
    height: auto;
    max-height: 350px;
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.side-image:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 35px rgba(0,0,0,0.2);
}

.process-title-section {
    margin-bottom: 5px;
}

.process-title-section h2 {
    font-size: 2.8rem;
    color: #2c3e50;
    margin-bottom: 15px;
}

.process-container {
    position: relative;
    max-width: 1000px;
    margin: 0 auto;
}

.process-step {
    display: flex;
    align-items: center;
    margin-bottom: 8px;
    position: relative;
}

.process-step.reverse {
    flex-direction: row-reverse;
}

.step-icon {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    color: white;
    margin: 0 30px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    position: relative;
    z-index: 2;
    flex-shrink: 0;
}

.step-icon-1 { background: #e74c3c; }
.step-icon-2 { background: #3498db; }
.step-icon-3 { background: #2ecc71; }
.step-icon-4 { background: #f39c12; }
.step-icon-5 { background: #9b59b6; }

.step-content {
    flex: 1;
    padding: 30px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

.step-content h3 {
    font-size: 1.5rem;
    color: #2c3e50;
    margin-bottom: 10px;
}

.step-content p {
    color: #7f8c8d;
    margin-bottom: 0;
}

/* Estilos para la galería con texto encima */
.gallery-container {
    margin-bottom: 20px;
}

.gallery-text-above {
    background: white;
    padding: 25px 20px;
    border-radius: 15px 15px 0 0;
    text-align: center;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.gallery-text-above h3 {
    font-size: 1.8rem;
    color: #2c3e50;
    margin-bottom: 0;
    font-weight: 600;
    line-height: 1.2;
}

.gallery-item {
    height: 300px;
    border-radius: 0 0 15px 15px;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.gallery-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.gallery-image:hover {
    transform: scale(1.05);
}

/* NUEVOS ESTILOS: Sección combinada de texto e imagen en un solo recuadro */
.combined-text-image-section {
    display: flex;
    justify-content: center;
    width: 100%;
}

.combined-content {
    background: white;
    padding: 50px 30px;
    border-radius: 15px;
    text-align: center;
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    max-width: 800px;
    width: 100%;
}

.combined-content h2 {
    font-size: 2.8rem;
    margin-bottom: 40px;
    font-weight: 700;
    color: #2c3e50;
}

.combined-image-container {
    margin-top: 30px;
}

.combined-image {
    width: 100%;
    max-width: 500px;
    height: auto;
    border-radius: 15px;
    box-shadow: 0 12px 35px rgba(0,0,0,0.2);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.combined-image:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 45px rgba(0,0,0,0.25);
}

/* Mantener los estilos antiguos para compatibilidad (por si se usan en otra parte) */
.additional-text-section {
    background: white;
    padding: 50px 30px;
    border-radius: 15px;
    text-align: center;
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    margin-bottom: 40px;
}

.additional-text-section h2 {
    font-size: 2.8rem;
    margin-bottom: 20px;
    font-weight: 700;
    color: #2c3e50;
}

.additional-text-section p {
    font-size: 1.2rem;
    max-width: 700px;
    margin: 0 auto;
    color: #555;
    line-height: 1.6;
}

.additional-image-container {
    max-width: 600px;
    width: 100%;
}

.additional-image-centered {
    width: 100%;
    height: auto;
    border-radius: 15px;
    box-shadow: 0 12px 35px rgba(0,0,0,0.2);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.additional-image-centered:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 45px rgba(0,0,0,0.25);
}

/* Estilos para la sección de contacto */
.contact-section {
    padding: 60px 20px;
    background: #c95311;
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
}

.contact-section h2 {
    font-size: 2.5rem;
    color: white;
    margin-bottom: 40px;
    font-weight: 700;
}

/* Estilos para la información de contacto */
.contact-info {
    margin-bottom: 40px;
}

.contact-item {
    display: inline-flex;
    align-items: center;
    margin: 0 30px 20px 30px;
    color: white;
    font-size: 1.2rem;
    transition: transform 0.3s ease;
}

.contact-item:hover {
    transform: translateY(-2px);
}

.contact-icon {
    font-size: 1.5rem;
    margin-right: 15px;
    color: white;
}

.contact-text {
    font-weight: 500;
}

.logos-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 60px;
    flex-wrap: wrap;
}

.contact-logo {
    height: 100px;
    width: auto;
    transition: transform 0.3s ease, filter 0.3s ease;
    filter: brightness(1.2);
}

.contact-logo:hover {
    transform: scale(1.1);
}

@keyframes shimmer {
    0% { left: -100%; }
    100% { left: 100%; }
}

/* Responsive */
@media (max-width: 768px) {
    .hero-header {
        flex-direction: column;
        gap: 15px;
    }
    
    .hero-logo {
        height: 90px;
    }
    
    .hero-title {
        font-size: 2.5rem;
        text-align: center;
    }
    
    .hero-description {
        font-size: 1.1rem;
    }
    
    .side-image-section {
        height: 300px;
        padding: 15px;
        margin-top: 20px;
    }
    
    .side-image {
        max-height: 250px;
    }
    
    .process-step {
        flex-direction: column !important;
        text-align: center;
        margin-bottom: 5px;
    }
    
    .process-step.reverse {
        flex-direction: column !important;
    }
    
    .step-icon {
        margin: 0 0 20px 0;
    }
    
    .gallery-container {
        margin-bottom: 20px;
    }
    
    .gallery-text-above {
        padding: 20px 15px;
        border-radius: 10px 10px 0 0;
    }
    
    .gallery-text-above h3 {
        font-size: 1.5rem;
    }
    
    .gallery-item {
        height: 200px;
        border-radius: 0 0 10px 10px;
    }
    
    /* Responsive para la nueva sección combinada */
    .combined-content {
        padding: 40px 20px;
        border-radius: 10px;
        margin: 0 15px;
    }
    
    .combined-content h2 {
        font-size: 2.2rem;
        margin-bottom: 30px;
    }
    
    .combined-image {
        max-width: 100%;
        border-radius: 10px;
    }
    
    .additional-text-section {
        padding: 40px 20px;
        margin-bottom: 30px;
        border-radius: 10px;
    }
    
    .additional-text-section h2 {
        font-size: 2.2rem;
    }
    
    .additional-text-section p {
        font-size: 1.1rem;
    }
    
    .additional-image-container {
        max-width: 90%;
        margin: 0 auto;
    }
    
    .additional-image-centered {
        border-radius: 10px;
    }
    
    .contact-section {
        padding: 40px 15px;
    }
    
    .contact-section h2 {
        font-size: 2rem;
        margin-bottom: 30px;
    }
    
    .contact-item {
        display: flex;
        margin: 0 0 15px 0;
        justify-content: center;
    }
    
    .contact-info {
        margin-bottom: 30px;
    }
    
    .logos-container {
        gap: 30px;
    }
    
    .contact-logo {
        height: 80px;
    }
}
</style>

<script>
$(document).ready(function() {
    // Inicializar tooltips si los hay
    $('[data-toggle="tooltip"]').tooltip();
    
    // Animación adicional para los pasos del proceso
    $('.process-step').each(function(index) {
        $(this).delay(index * 100).queue(function() {
            $(this).addClass('animate-in').dequeue();
        });
    });
});
</script>