@extends('generic-template')

    {{-- Styles --}}
    @push('styles')
        {{-- <link rel="stylesheet" href="{{ asset('assets/css/pages/after-sales.css') }}" />
        <link rel="stylesheet" href="/assets/css/country-code-plugin/intlTelInput.css"> --}}
    @endpush

    {{-- Custom Scripts --}}
    @push('scripts')
        {{-- <script src="/assets/js/after-sales.js"></script>

        <!-- Intl Phone Input -->
        <script src="/assets/js/country-code-plugin/intlTelInput.js"></script>
        <script src="/assets/js/country-code-plugin/utils.js"></script>
        <script src="/assets/js/country-code-plugin/tel-input-script.js"></script> --}}
    @endpush

    {{-- Page Content --}}
    @section('content')

        {{-- Hero Banner --}}
        <div id="hero-banner">
            <div class="container">

                <div class="content-container">
                    <h1>Construímos o seu projeto de sonho, chave-na-mão</h1>

                    <p class="subtitle">Da ideia à entrega final. Arquitetura, licenciamento e construção com qualidade e transparência em cada detalhe.</p>

                    {{-- Buttons Container --}}
                    <div class="buttons-container">

                        <button class="cta-button">
                            Pedir Orçamento
                        </button>

                        <button class="cta-button">
                            Ver Portfolio
                        </button>
                        
                    </div>

                    {{-- Checkmarks --}}
                    <div class="guarantees-container">

                        <div class="guarantee">
                            <div class="icon-container">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check text-[#131823]" data-fg-eh6d32="2.20:2.3668:/src/app/components/Hero.tsx:74:17:3425:62:e:Check::::::BUmF"><path d="M20 6 9 17l-5-5"></path></svg>
                            </div>

                            <span>Chave-na-mão</span>
                        </div>

                        <div class="guarantee">
                            <div class="icon-container">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check text-[#131823]" data-fg-eh6d32="2.20:2.3668:/src/app/components/Hero.tsx:74:17:3425:62:e:Check::::::BUmF"><path d="M20 6 9 17l-5-5"></path></svg>
                            </div>

                            <span>Chave-na-mão</span>
                        </div>

                        <div class="guarantee">
                            <div class="icon-container">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check text-[#131823]" data-fg-eh6d32="2.20:2.3668:/src/app/components/Hero.tsx:74:17:3425:62:e:Check::::::BUmF"><path d="M20 6 9 17l-5-5"></path></svg>
                            </div>

                            <span>Chave-na-mão</span>
                        </div>

                    </div>

                </div>
                
                {{-- Background Image --}}
                <div class="bg-image-container">
                    <img src="/assets/img/content/hero-bg.jpg">
                </div>

            </div>
        </div>

        {{-- Services --}}
        <section id="services-section">
            <div class="container">

                {{-- Section Title --}}
                <div class="section-title-container">

                    <h2 class="title">Serviços</h2>
                    <h5 class="subtitle">Soluções completas para o seu projeto, do início ao fim</h5>

                </div>

                {{-- Services Grid --}}
                <div class="services-grid">

                    {{-- Service --}}
                    <div class="service-item">

                        <div class="icon-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building2 lucide-building-2 text-[#29344A] group-hover:text-white transition-colors duration-300" data-fg-d95f13="2.21:2.2519:/src/app/components/Services.tsx:58:17:1993:195:e:service.icon"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path><path d="M10 6h4"></path><path d="M10 10h4"></path><path d="M10 14h4"></path><path d="M10 18h4"></path></svg>
                        </div>

                        <h6 class="service-title">Arquitetura e Licenciamento</h6>

                        <p class="service-description">Projetos de arquitetura personalizados e gestão de licenças</p>

                    </div>

                    {{-- Service --}}
                    <div class="service-item">

                        <div class="icon-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building2 lucide-building-2 text-[#29344A] group-hover:text-white transition-colors duration-300" data-fg-d95f13="2.21:2.2519:/src/app/components/Services.tsx:58:17:1993:195:e:service.icon"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path><path d="M10 6h4"></path><path d="M10 10h4"></path><path d="M10 14h4"></path><path d="M10 18h4"></path></svg>
                        </div>

                        <h6 class="service-title">Arquitetura e Licenciamento</h6>

                        <p class="service-description">Projetos de arquitetura personalizados e gestão de licenças</p>

                    </div>

                    {{-- Service --}}
                    <div class="service-item">

                        <div class="icon-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building2 lucide-building-2 text-[#29344A] group-hover:text-white transition-colors duration-300" data-fg-d95f13="2.21:2.2519:/src/app/components/Services.tsx:58:17:1993:195:e:service.icon"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path><path d="M10 6h4"></path><path d="M10 10h4"></path><path d="M10 14h4"></path><path d="M10 18h4"></path></svg>
                        </div>

                        <h6 class="service-title">Arquitetura e Licenciamento</h6>

                        <p class="service-description">Projetos de arquitetura personalizados e gestão de licenças</p>

                    </div>

                    {{-- Service --}}
                    <div class="service-item">

                        <div class="icon-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building2 lucide-building-2 text-[#29344A] group-hover:text-white transition-colors duration-300" data-fg-d95f13="2.21:2.2519:/src/app/components/Services.tsx:58:17:1993:195:e:service.icon"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path><path d="M10 6h4"></path><path d="M10 10h4"></path><path d="M10 14h4"></path><path d="M10 18h4"></path></svg>
                        </div>

                        <h6 class="service-title">Arquitetura e Licenciamento</h6>

                        <p class="service-description">Projetos de arquitetura personalizados e gestão de licenças</p>

                    </div>

                    {{-- Service --}}
                    <div class="service-item">

                        <div class="icon-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building2 lucide-building-2 text-[#29344A] group-hover:text-white transition-colors duration-300" data-fg-d95f13="2.21:2.2519:/src/app/components/Services.tsx:58:17:1993:195:e:service.icon"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path><path d="M10 6h4"></path><path d="M10 10h4"></path><path d="M10 14h4"></path><path d="M10 18h4"></path></svg>
                        </div>

                        <h6 class="service-title">Arquitetura e Licenciamento</h6>

                        <p class="service-description">Projetos de arquitetura personalizados e gestão de licenças</p>

                    </div>

                    {{-- Service --}}
                    <div class="service-item">

                        <div class="icon-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building2 lucide-building-2 text-[#29344A] group-hover:text-white transition-colors duration-300" data-fg-d95f13="2.21:2.2519:/src/app/components/Services.tsx:58:17:1993:195:e:service.icon"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path><path d="M10 6h4"></path><path d="M10 10h4"></path><path d="M10 14h4"></path><path d="M10 18h4"></path></svg>
                        </div>

                        <h6 class="service-title">Arquitetura e Licenciamento</h6>

                        <p class="service-description">Projetos de arquitetura personalizados e gestão de licenças</p>

                    </div>

                </div>

            </div>
        </section>

        {{-- Portfolio --}}
        <section id="portfolio-section">
            <div class="container">

                {{-- Section Title --}}
                <div class="section-title-container">

                    <h2 class="title">Portfolio</h2>
                    <h5 class="subtitle">Projetos realizados com dedicação e excelência</h5>

                </div>

                {{-- Portfolio Container --}}
                <div class="portfolio-container">

                    {{-- Portfolio Item --}}
                    <div class="portfolio-item">

                        <div class="image-container">

                            <img class="portfolio-item-img" src="/assets/img/content/portfolio-item.webp">

                        </div>

                        <div class="content-container">

                            <h6 class="service-name">Construção Nova</h6>
                            <span class="service-location">Lisboa</span>

                        </div>

                    </div>

                    {{-- Portfolio Item --}}
                    <div class="portfolio-item">

                        <div class="image-container">

                            <img class="portfolio-item-img" src="/assets/img/content/portfolio-item.webp">

                        </div>

                        <div class="content-container">

                            <h6 class="service-name">Construção Nova</h6>
                            <span class="service-location">Lisboa</span>

                        </div>

                    </div>

                    {{-- Portfolio Item --}}
                    <div class="portfolio-item">

                        <div class="image-container">

                            <img class="portfolio-item-img" src="/assets/img/content/portfolio-item.webp">

                        </div>

                        <div class="content-container">

                            <h6 class="service-name">Construção Nova</h6>
                            <span class="service-location">Lisboa</span>

                        </div>

                    </div>

                    {{-- Portfolio Item --}}
                    <div class="portfolio-item">

                        <div class="image-container">

                            <img class="portfolio-item-img" src="/assets/img/content/portfolio-item.webp">

                        </div>

                        <div class="content-container">

                            <h6 class="service-name">Construção Nova</h6>
                            <span class="service-location">Lisboa</span>

                        </div>

                    </div>

                    {{-- Portfolio Item --}}
                    <div class="portfolio-item">

                        <div class="image-container">

                            <img class="portfolio-item-img" src="/assets/img/content/portfolio-item.webp">

                        </div>

                        <div class="content-container">

                            <h6 class="service-name">Construção Nova</h6>
                            <span class="service-location">Lisboa</span>

                        </div>

                    </div>

                </div>

            </div>
        </section>

        {{-- How we work --}}
        <section id="how-we-work-section">
            <div class="container">

                {{-- Section Title --}}
                <div class="section-title-container">

                    <h2 class="title">Como trabalhamos</h2>
                    <h5 class="subtitle">Um processo claro e estruturado em 5 fases</h5>

                </div>

                <div class="work-phases-container">

                    {{-- Item --}}
                    <div class="phase-item">

                        {{-- Numbering --}}
                        <div class="numbering-container">
                            <span>01</span>
                        </div>

                        {{-- Title --}}
                        <div class="title-container">
                            <h4>Briefing</h4>
                        </div>

                        {{-- Description --}}
                        <div class="description-container">
                            <p>Reunião inicial para entender as suas necessidades e visão</p>
                        </div>

                    </div>

                    {{-- Item --}}
                    <div class="phase-item">

                        {{-- Numbering --}}
                        <div class="numbering-container">
                            <span>02</span>
                        </div>

                        {{-- Title --}}
                        <div class="title-container">
                            <h4>Projeto/3D</h4>
                        </div>

                        {{-- Description --}}
                        <div class="description-container">
                            <p>Desenvolvimento do projeto arquitetónico e visualização 3D</p>
                        </div>

                    </div>

                    {{-- Item --}}
                    <div class="phase-item">

                        {{-- Numbering --}}
                        <div class="numbering-container">
                            <span>03</span>
                        </div>

                        {{-- Title --}}
                        <div class="title-container">
                            <h4>Orçamento</h4>
                        </div>

                        {{-- Description --}}
                        <div class="description-container">
                            <p>Proposta detalhada e transparente de custos e prazos</p>
                        </div>

                    </div>

                    {{-- Item --}}
                    <div class="phase-item">

                        {{-- Numbering --}}
                        <div class="numbering-container">
                            <span>04</span>
                        </div>

                        {{-- Title --}}
                        <div class="title-container">
                            <h4>Execução</h4>
                        </div>

                        {{-- Description --}}
                        <div class="description-container">
                            <p>Gestão e construção com acompanhamento contínuo</p>
                        </div>

                    </div>

                    {{-- Item --}}
                    <div class="phase-item">

                        {{-- Numbering --}}
                        <div class="numbering-container">
                            <span>05</span>
                        </div>

                        {{-- Title --}}
                        <div class="title-container">
                            <h4>Entrega</h4>
                        </div>

                        {{-- Description --}}
                        <div class="description-container">
                            <p>Finalização e entrega do projeto pronto a habitar</p>
                        </div>

                    </div>

                </div>

            </div>
        </section>

        {{-- Ready to start your project? --}}
        <section id="ready-to-start-project-cta-section">
            <div class="container">

                {{-- Section Title --}}
                <div class="section-title-container">

                    <h2 class="title">Pronto para começar o seu<br> projeto?</h2>
                    <h5 class="subtitle">Fale connosco hoje e receba um orçamento personalizado sem compromisso.<br> Transformamos a sua visão em realidade.</h5>

                </div>

                {{-- CTA Button --}}
                <div class="cta-container">
                    <button class="cta-button">
                        Pedir Orçamento Gratuito
                    </button>
                </div>

            </div>
        </section>

        {{-- Contact --}}
        <section id="contact-section">
            <div class="container">

                {{-- Section Title --}}
                <div class="section-title-container">

                    <h2 class="title">Contacto</h2>
                    <h5 class="subtitle">Entre em contacto connosco. Responderemos em breve.</h5>

                </div>

                <div class="content-container">

                    <div class="content">

                        <h4 class="contact-title">Fale connosco</h4>

                        <p class="contact-paragraph">Estamos disponíveis para esclarecer todas as suas dúvidas e apresentar a melhor solução para o seu projeto.</p>

                        {{-- Company Info --}}
                        <div class="info-container">

                            {{-- Info Item --}}
                            <div class="info-item">

                                <div class="logo-container">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone text-[#29344A]" data-fg-bj0719="2.26:2.8187:/src/app/components/Contact.tsx:64:19:2006:64:e:Phone::::::BYrl">
                                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                </div>

                                <div class="title-value-container">

                                    <div class="title">
                                        <h6>Telefone</h6>
                                    </div>

                                    <div class="value">
                                        +351 912 345 678
                                    </div>

                                </div>

                            </div>

                            {{-- Info Item --}}
                            <div class="info-item">

                                <div class="logo-container">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail text-[#29344A]" data-fg-bj0727="2.26:2.8187:/src/app/components/Contact.tsx:76:19:2595:63:e:Mail::::::D8Ro"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                                </div>

                                <div class="title-value-container">

                                    <div class="title">
                                        <h6>Email</h6>
                                    </div>

                                    <div class="value">
                                        geral@sumisura-db.com
                                    </div>

                                </div>

                            </div>

                            {{-- Info Item --}}
                            <div class="info-item">

                                <div class="logo-container">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin text-[#29344A]" data-fg-bj0735="2.26:2.8187:/src/app/components/Contact.tsx:88:19:3186:65:e:MapPin::::::EHMc"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                </div>

                                <div class="title-value-container">

                                    <div class="title">
                                        <h6>Área de atuação</h6>
                                    </div>

                                    <div class="value">Lisboa e Grande Lisboa</div>

                                </div>

                            </div>

                        </div>

                    </div>

                    {{-- Form container --}}
                    <div class="form-container">

                        <form>

                            <div class="form-grid-row r2">

                                {{-- Name --}}
                                <div class="input-container">
                                    <label>Nome *</label>
                                    <input name="name" type="name" required>
                                </div>

                                {{-- Email --}}
                                <div class="input-container">
                                    <label>Email *</label>
                                    <input name="name" type="name" required>
                                </div>

                            </div>

                            <div class="form-grid-row r2">

                                {{-- Phone --}}
                                <div class="input-container">
                                    <label>Telefone *</label>
                                    <input name="name" type="name" required>
                                </div>

                                {{-- Type Of Service --}}
                                <div class="input-container">
                                    <label>Tipo de Serviço *</label>
                                    
                                    <select required>
                                        <option selected hidden value="">Por favor selecione</option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                        <option>D</option>
                                    </select>
                                </div>

                            </div>

                            {{-- Message --}}
                            <div class="input-container">
                                <label>Mensagem</label>
                                <textarea></textarea>
                            </div>

                            {{-- Submit --}}
                            <button type="submit" class="cta-button">
                                Enviar Pedido
                            </button>

                        </form>

                    </div>

                </div>

            </div>
        </section>

    @endsection