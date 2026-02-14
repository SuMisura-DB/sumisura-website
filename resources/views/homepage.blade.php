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

    {{-- @dump($portfolioItems) --}}

        {{-- Hero Banner --}}
        <div id="hero-banner">
            <div class="container">

                <div class="content-container">
                    <h1>Construímos o seu projeto de sonho, chave-na-mão</h1>

                    <p class="subtitle">Da ideia à entrega final. Arquitetura, licenciamento e construção com qualidade e transparência em cada detalhe.</p>

                    {{-- Buttons Container --}}
                    <div class="buttons-container">

                        <button class="cta-button scroll-to-section" data-section-scroll="contact-section">
                            Pedir Orçamento
                        </button>

                        <button class="cta-button scroll-to-section" data-section-scroll="portfolio-section">
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

                            <span>Prazos claros</span>
                        </div>

                        <div class="guarantee">
                            <div class="icon-container">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check text-[#131823]" data-fg-eh6d32="2.20:2.3668:/src/app/components/Hero.tsx:74:17:3425:62:e:Check::::::BUmF"><path d="M20 6 9 17l-5-5"></path></svg>
                            </div>

                            <span>Qualidade e detalhe</span>
                        </div>

                    </div>

                </div>
                
                {{-- Background Image --}}
                <div class="bg-image-container">
                    {{-- <img src="/assets/img/content/hero-bg.jpg"> --}}
                    <video playsinline muted loop autoplay>
                        <source src="/assets/video/banner-bg.mp4" type="video/mp4">
                    </video>
                </div>

            </div>
        </div>

        {{-- Intro Section --}}
        <section id="intro-section" class="dark">
            <div class="container">

                <div class="row">

                    {{-- Intro Content --}}
                    <div class="intro-content-container col-md-7">

                        {{-- Section Title --}}
                        <div class="section-title-container">

                            <h2 class="title">Sobre a Su Misura</h2>
                            {{-- <h5 class="subtitle">Soluções completas para o seu projeto, do início ao fim</h5> --}}

                        </div>

                        <p>A SU MISURA desenvolve projetos chave-na-mão, desde a conceção até à entrega final. Cada obra é conduzida com rigor técnico e atenção ao pormenor, garantindo que a visão inicial se concretiza sem compromissos.</p>

                        <p>Trabalhamos com uma abordagem clara e direta, apoiando decisões informadas e mantendo um acompanhamento constante. A qualidade está nos detalhes, e a confiança constrói-se com presença e honestidade.</p>


                        <div class="selling-points-container">

                            <div class="item">

                                <div class="icon-container">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award text-[#29344A]" data-fg-c4dx17="63.6:63.3347:/src/app/components/Intro.tsx:46:21:1824:155:e:value.icon"><path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path><circle cx="12" cy="8" r="6"></circle></svg>
                                </div>

                                <h5 class="title">
                                    Qualidade e detalhe
                                </h5>

                                <div class="description">
                                    Acabamentos cuidados e execução sólida.
                                </div>

                            </div>

                            <div class="item">

                                <div class="icon-container">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye text-[#29344A]" data-fg-c4dx17="63.6:63.3347:/src/app/components/Intro.tsx:46:21:1824:155:e:value.icon"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                </div>

                                <h5 class="title">
                                    Transparência
                                </h5>

                                <div class="description">
                                    Decisões claras, sem ruído.
                                </div>

                            </div>

                            <div class="item">

                                <div class="icon-container">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-handshake text-[#29344A]" data-fg-c4dx17="63.6:63.3347:/src/app/components/Intro.tsx:46:21:1824:155:e:value.icon"><path d="m11 17 2 2a1 1 0 1 0 3-3"></path><path d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4"></path><path d="m21 3 1 11h-2"></path><path d="M3 3 2 14l6.5 6.5a1 1 0 1 0 3-3"></path><path d="M3 4h8"></path></svg>
                                </div>

                                <h5 class="title">
                                    Acompanhamento
                                </h5>

                                <div class="description">
                                    Presença e atenção ao longo do projeto.
                                </div>

                            </div>

                        </div>

                    </div>

                    {{-- Intro Image --}}
                    <div class="intro-image-container col-md-5">
                        <div class="image-container">
                            <img src="/assets/img/content/hero-bg.jpg">
                        </div>
                    </div>

                </div>

            </div>
        </section>

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
        <section id="portfolio-section" class="dark">
            <div class="container">

                {{-- Section Title --}}
                <div class="section-title-container">

                    <h2 class="title">Portfolio</h2>
                    <h5 class="subtitle">Projetos reais, do briefing à entrega</h5>

                </div>

                {{-- List Container --}}
                <div class="portfolio-items-container">

                    @foreach($portfolioItems as $item)

                        @php
                            $galleryGroup = 'portfolio-' . $item['id'];
                            // $previewImages = array_slice($item['images'], 0, 5); // preview only
                            $previewImages = $item['images'];
                        @endphp

                        <div class="portfolio-item">

                            {{-- Gallery Column --}}
                            <div class="gallery-column-container">

                                {{-- Gallery --}}
                                <div class="gallery-container splide" data-gallery-group="{{ $galleryGroup }}">

                                    <div class="splide__track">
                                        <ul class="splide__list">
                                            @forelse($previewImages as $img)
                                                <li class="splide__slide">
                                                    {{-- <img src="{{ $img }}" alt="{{ $item['title'] }}"> --}}
                                                    <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="
                                                        data-splide-lazy="{{ $img }}"
                                                        alt="{{ $item['title'] }}"
                                                        decoding="async"
                                                    />
                                                </li>
                                            @empty
                                                <li class="splide__slide">
                                                    <img src="{{ asset('assets/img/content/portfolio-item.webp') }}" alt="{{ $item['title'] }}">
                                                </li>
                                            @endforelse
                                        </ul>
                                    </div>

                                    {{-- Counter (optional if you already did it) --}}
                                    <div class="splide-counter">1 / {{ max(count($previewImages), 1) }}</div>

                                </div>

                                {{-- Hidden Fancybox links (FULL gallery, all images) --}}
                                <div class="fancybox-links" style="display:none;">
                                    @foreach($item['images'] as $img)
                                        <a href="{{ $img }}" data-fancybox="{{ $galleryGroup }}" data-caption="{{ $item['title'] }}"></a>
                                    @endforeach
                                </div>

                                <div class="view-gallery" data-open-gallery="{{ $galleryGroup }}">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-image" data-fg-rsn18="49.7:49.2474:/src/app/components/PortfolioGallery.tsx:62:9:2336:41:e:ImageIcon::::::sLT"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect><circle cx="9" cy="9" r="2"></circle><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path></svg>
                                    </div>
                                    Ver galeria completa
                                </div>

                            </div>

                            {{-- Content --}}
                            <div class="content-container">

                                <div class="location-wrapper mb-3">
                                <span class="location">{{ $item['location'] }}</span>
                                </div>

                                <h2 class="title mb-4">{{ $item['title'] }}</h2>

                                <div class="description-container mb-6">
                                <p class="description">{{ $item['description'] }}</p>
                                </div>

                                {{-- Tags --}}
                                @if(!empty($item['tags']))
                                <div class="tags-container mb-8">
                                    @foreach($item['tags'] as $tag)
                                    <div class="tag">{{ $tag }}</div>
                                    @endforeach
                                </div>
                                @endif

                                {{-- Challenge/Solution/Result --}}
                                @if(!empty($item['csr']))
                                <div class="challenge-solution-result-container">
                                    <div class="item">
                                    <span class="label">Desafio</span>
                                    <p class="description">{{ $item['csr']['challenge'] ?? '' }}</p>
                                    </div>
                                    <div class="item">
                                    <span class="label">Solução</span>
                                    <p class="description">{{ $item['csr']['solution'] ?? '' }}</p>
                                    </div>
                                    <div class="item">
                                    <span class="label">Resultado</span>
                                    <p class="description">{{ $item['csr']['result'] ?? '' }}</p>
                                    </div>
                                </div>
                                @endif

                                <hr>

                                {{-- Proof Points (optional) --}}
                                @if(!empty($item['proof_points']))
                                <div class="proof-points-container">
                                    @foreach($item['proof_points'] as $point)
                                    <div class="point">
                                        <div class="icon">
                                            {{-- @include('partials.portfolio-proof-icon', ['name' => $point['icon'] ?? null]) --}}
                                            {!! $point['icon'] !!}
                                        </div>
                                        <div class="desc">{{ $point['text'] ?? '' }}</div>
                                    </div>
                                    @endforeach
                                </div>
                                @endif

                            </div>

                        </div>

                    @endforeach

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

                        <div class="item-content">

                            {{-- Title --}}
                            <div class="title-container">
                                <h4>Briefing</h4>
                            </div>

                            {{-- Description --}}
                            <div class="description-container">
                                <p>Reunião inicial para entender as suas necessidades e visão</p>
                            </div>

                        </div>

                    </div>

                    {{-- Item --}}
                    <div class="phase-item">

                        {{-- Numbering --}}
                        <div class="numbering-container">
                            <span>02</span>
                        </div>

                        <div class="item-content">

                            {{-- Title --}}
                            <div class="title-container">
                                <h4>Projeto/3D</h4>
                            </div>

                            {{-- Description --}}
                            <div class="description-container">
                                <p>Desenvolvimento do projeto arquitetónico e visualização 3D</p>
                            </div>

                        </div>

                    </div>

                    {{-- Item --}}
                    <div class="phase-item">

                        {{-- Numbering --}}
                        <div class="numbering-container">
                            <span>03</span>
                        </div>

                        <div class="item-content">

                            {{-- Title --}}
                            <div class="title-container">
                                <h4>Orçamento</h4>
                            </div>

                            {{-- Description --}}
                            <div class="description-container">
                                <p>Proposta detalhada e transparente de custos e prazos</p>
                            </div>

                        </div>

                    </div>

                    {{-- Item --}}
                    <div class="phase-item">

                        {{-- Numbering --}}
                        <div class="numbering-container">
                            <span>04</span>
                        </div>

                        <div class="item-content">

                            {{-- Title --}}
                            <div class="title-container">
                                <h4>Execução</h4>
                            </div>

                            {{-- Description --}}
                            <div class="description-container">
                                <p>Gestão e construção com acompanhamento contínuo</p>
                            </div>

                        </div>

                    </div>

                    {{-- Item --}}
                    <div class="phase-item">

                        {{-- Numbering --}}
                        <div class="numbering-container">
                            <span>05</span>
                        </div>

                        <div class="item-content">

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

                        <iframe name="hs_hidden_iframe" style="display:none;"></iframe>

                        <form id="contact-form" method="POST" action="/contact-submit" target="hs_hidden_iframe">

                            @csrf

                            <div class="form-grid-row r2">

                                {{-- Name --}}
                                <div class="input-container">
                                    <label>Nome *</label>
                                    <input name="full_name" type="name" required>
                                </div>

                                {{-- Email --}}
                                <div class="input-container">
                                    <label>Email *</label>
                                    <input name="email" type="email" required>
                                </div>

                            </div>

                            <div class="form-grid-row r2">

                                {{-- Phone --}}
                                <div class="input-container">
                                    <label>Telefone *</label>
                                    <input name="tel" type="phone_number" required>
                                </div>

                                {{-- Type Of Service --}}
                                <div class="input-container">
                                    <label>Tipo de Serviço *</label>
                                    
                                    <select name="type_of_service" required>
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
                                <textarea name="message" required></textarea>
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