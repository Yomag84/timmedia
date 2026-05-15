<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="TIMMedia – Professional Computer Training, Online Registration, Typing, Document Printing, Photocopy & Scanning services in Yaba, Lagos. CAC-registered, affordable, reliable.">
    <meta name="keywords" content="computer training Lagos, online registration Nigeria, document printing Yaba, typing services, photocopy scanning, digital services Lagos, FCE(T) Akoka">
    <meta name="author" content="TIMMedia">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="theme-color" content="#0f2d5e">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="TIMMedia">

    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="business.business">
    <meta property="og:title" content="TIMMedia – Digital Business Services | Yaba, Lagos">
    <meta property="og:description" content="Computer Training, Online Registration, Typing, Printing, Photocopy & Scanning services in Yaba, Lagos. CAC-registered and trusted by the community.">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:site_name" content="TIMMedia">
    <meta property="og:image" content="{{ asset('img/logo.svg') }}">
    <meta property="og:image:width" content="200">
    <meta property="og:image:height" content="200">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="TIMMedia – Digital Business Services | Yaba, Lagos">
    <meta name="twitter:description" content="Professional computer training, online registration, typing, printing, and scanning services in Yaba, Lagos.">
    <meta name="twitter:image" content="{{ asset('img/logo.svg') }}">

    <!-- Favicon & App Icons -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('img/favicon.svg') }}">
    <link rel="alternate icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/icon-192.svg') }}">
    <link rel="manifest" href="{{ asset('manifest.json') }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url('/') }}">

    <title>TIMMedia – Digital Business Services | Yaba, Lagos</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- AOS – Animate on Scroll -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary:  { DEFAULT: '#0f2d5e', light: '#1a4480', lighter: '#2563a8' },
                        accent:   { DEFAULT: '#f59e0b', light: '#fbbf24', dark: '#d97706' },
                        surface:  '#f8fafc',
                    },
                    fontFamily: {
                        sans:    ['"Plus Jakarta Sans"', 'Inter', 'sans-serif'],
                        display: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <style>
        html { scroll-behavior: smooth; }
        body { font-family: 'Plus Jakarta Sans', Inter, sans-serif; }

        .grad-text {
            background: linear-gradient(135deg, #0f2d5e 0%, #2563a8 50%, #f59e0b 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-bg {
            background:
                radial-gradient(ellipse 80% 50% at 20% 30%, rgba(37,99,168,0.18) 0%, transparent 60%),
                radial-gradient(ellipse 60% 60% at 80% 70%, rgba(245,158,11,0.12) 0%, transparent 60%),
                linear-gradient(160deg, #0a1f40 0%, #0f2d5e 40%, #1a4480 100%);
        }

        .card-glow {
            position: relative;
            border-radius: 1rem;
            background: white;
            transition: transform .3s ease, box-shadow .3s ease;
        }
        .card-glow::before {
            content: '';
            position: absolute;
            inset: -1px;
            border-radius: 1rem;
            background: linear-gradient(135deg, #2563a8, #f59e0b, #2563a8);
            background-size: 200% 200%;
            opacity: 0;
            transition: opacity .3s ease;
            z-index: -1;
            animation: gradShift 3s ease infinite;
        }
        .card-glow:hover { transform: translateY(-6px); box-shadow: 0 20px 40px rgba(15,45,94,.15); }
        .card-glow:hover::before { opacity: 1; }

        @keyframes gradShift {
            0%   { background-position: 0% 50%; }
            50%  { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            animation: floatBlob 8s ease-in-out infinite;
        }
        @keyframes floatBlob {
            0%,100% { transform: translateY(0) scale(1); }
            50%      { transform: translateY(-30px) scale(1.05); }
        }

        #navbar { transition: background .4s ease, box-shadow .4s ease; }
        #navbar.scrolled { background: rgba(10,31,64,0.97) !important; box-shadow: 0 4px 24px rgba(0,0,0,.3); }

        .section-label {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(37,99,168,.1);
            color: #2563a8;
            font-size: .75rem;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            padding: 5px 14px;
            border-radius: 100px;
            border: 1px solid rgba(37,99,168,.2);
        }

        .stat-card {
            background: rgba(255,255,255,.06);
            border: 1px solid rgba(255,255,255,.12);
            backdrop-filter: blur(10px);
            border-radius: 1rem;
        }

        .icon-wrap {
            width: 60px; height: 60px;
            display: flex; align-items: center; justify-content: center;
            border-radius: .75rem;
            background: linear-gradient(135deg, rgba(37,99,168,.12), rgba(245,158,11,.12));
            flex-shrink: 0;
            transition: transform .3s;
        }
        .card-glow:hover .icon-wrap { transform: scale(1.1) rotate(-3deg); }

        .timeline-dot {
            width: 12px; height: 12px;
            border-radius: 50%;
            background: #f59e0b;
            border: 3px solid white;
            box-shadow: 0 0 0 3px #f59e0b44;
            flex-shrink: 0;
        }

        #mobile-menu { transition: max-height .4s ease, opacity .4s ease; max-height: 0; overflow: hidden; opacity: 0; }
        #mobile-menu.open { max-height: 400px; opacity: 1; }

        .form-input {
            width: 100%;
            padding: .75rem 1rem;
            border: 1.5px solid #e2e8f0;
            border-radius: .75rem;
            font-size: .95rem;
            transition: border-color .3s, box-shadow .3s;
            background: white;
            color: #0f172a;
            outline: none;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .form-input:focus { border-color: #2563a8; box-shadow: 0 0 0 3px rgba(37,99,168,.15); }
        .form-input::placeholder { color: #94a3b8; }

        #progress-bar {
            position: fixed; top: 0; left: 0; height: 3px; z-index: 9999;
            background: linear-gradient(90deg, #2563a8, #f59e0b);
            width: 0%; transition: width .1s linear;
        }

        .testimonial-card { background: white; border-radius: 1rem; box-shadow: 0 4px 24px rgba(15,45,94,.08); }

        @keyframes marquee { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
        .marquee-track { animation: marquee 30s linear infinite; display: flex; gap: 3rem; white-space: nowrap; }
    </style>

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">{!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'LocalBusiness',
        'name' => 'TIMMedia',
        'image' => asset('img/logo.svg'),
        'description' => 'Professional computer training, online registration, typing, printing, photocopy and scanning services.',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Shop 11, Aluta Shopping Complex, FCE(T) Akoka',
            'addressLocality' => 'Yaba',
            'addressRegion' => 'Lagos State',
            'postalCode' => '101212',
            'addressCountry' => 'NG',
        ],
        'telephone' => '',
        'email' => 'info@timmedia.com.ng',
        'url' => url('/'),
        'priceRange' => '$$',
        'foundingDate' => '2021-02-11',
        'areaServed' => 'Lagos',
        'serviceArea' => 'Yaba, Lagos State, Nigeria',
        'aggregateRating' => [
            '@type' => 'AggregateRating',
            'ratingValue' => '5',
            'ratingCount' => '50',
        ],
        'sameAs' => ['https://www.google.com/maps/search/TIMMedia+Yaba+Lagos'],
        'hasMap' => 'https://maps.google.com/?q=Federal+College+of+Education+Technical+Akoka+Yaba+Lagos',
        'potentialAction' => [
            '@type' => 'ContactAction',
            'target' => [
                '@type' => 'EntryPoint',
                'urlTemplate' => route('contact.send'),
            ],
        ],
    ], JSON_UNESCAPED_SLASHES) !!}</script>

    <!-- JSON-LD Organization Schema -->
    <script type="application/ld+json">{!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'TIMMedia',
        'url' => url('/'),
        'logo' => asset('img/logo.svg'),
        'description' => 'CAC-registered digital business centre providing computer training, online registration, typing, printing, photocopy and scanning services in Lagos, Nigeria.',
        'foundingDate' => '2021-02-11',
        'contactPoint' => [
            '@type' => 'ContactPoint',
            'telephone' => '',
            'contactType' => 'Customer Service',
            'email' => 'info@timmedia.com.ng',
        ],
    ], JSON_UNESCAPED_SLASHES) !!}</script>

    <!-- JSON-LD Services Schema -->
    <script type="application/ld+json">{!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'LocalBusiness',
        'name' => 'TIMMedia',
        'offers' => [
            ['@type' => 'Service', 'name' => 'Computer Training', 'description' => 'Professional computer training programmes including Microsoft Office, internet, email, and digital literacy.'],
            ['@type' => 'Service', 'name' => 'Online Registration', 'description' => 'Fast and accurate assistance with JAMB, WAEC, NECO portals, NYSC applications, and government e-services.'],
            ['@type' => 'Service', 'name' => 'Professional Typing', 'description' => 'Accurate document typing service for academic assignments, business letters, CVs, and legal documents.'],
            ['@type' => 'Service', 'name' => 'Document Printing', 'description' => 'High-quality colour and black-and-white printing for documents of all sizes.'],
            ['@type' => 'Service', 'name' => 'Photocopy Services', 'description' => 'Reliable and affordable photocopying for personal, academic, and business documents.'],
            ['@type' => 'Service', 'name' => 'Document Scanning', 'description' => 'High-resolution digital scanning of physical documents for archiving and online submission.'],
        ],
    ], JSON_UNESCAPED_SLASHES) !!}</script>
</head>
<body class="bg-white text-gray-900 antialiased">

    <div id="progress-bar"></div>

    {{-- ══ NAVBAR ══ --}}
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 bg-transparent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between py-4">
                <a href="#home" class="flex items-center gap-2.5 group">
                    <img src="{{ asset('img/logo.svg') }}" alt="TIMMedia Logo" class="w-10 h-10 group-hover:scale-105 transition-transform" />
                    <div class="leading-none">
                        <span class="text-white font-black text-xl tracking-wide">TIM</span><span class="text-amber-400 font-black text-xl tracking-wide">MEDIA</span>
                        <p class="text-white/50 text-[10px] tracking-widest uppercase mt-0.5">Digital Services</p>
                    </div>
                </a>

                <div class="hidden md:flex items-center gap-1">
                    <a href="#home" class="nav-link px-4 py-2 text-white/80 hover:text-white text-sm font-medium rounded-lg hover:bg-white/10 transition-all">Home</a>
                    <a href="#about" class="nav-link px-4 py-2 text-white/80 hover:text-white text-sm font-medium rounded-lg hover:bg-white/10 transition-all">About</a>
                    <a href="#services" class="nav-link px-4 py-2 text-white/80 hover:text-white text-sm font-medium rounded-lg hover:bg-white/10 transition-all">Services</a>
                    <a href="#why-us" class="nav-link px-4 py-2 text-white/80 hover:text-white text-sm font-medium rounded-lg hover:bg-white/10 transition-all">Why Us</a>
                    <a href="#contact" class="nav-link px-4 py-2 text-white/80 hover:text-white text-sm font-medium rounded-lg hover:bg-white/10 transition-all">Contact</a>
                </div>

                <a href="#contact" class="hidden md:inline-flex items-center gap-2 bg-amber-500 hover:bg-amber-400 text-white font-semibold text-sm px-5 py-2.5 rounded-xl shadow-lg hover:shadow-xl transition-all hover:-translate-y-0.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                    Get in Touch
                </a>

                <button id="menu-btn" class="md:hidden text-white p-2 rounded-lg hover:bg-white/10 transition">
                    <svg id="icon-open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    <svg id="icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="md:hidden bg-blue-950/95 backdrop-blur-md border-t border-white/10 px-4">
            <div class="py-4 flex flex-col gap-1">
                <a href="#home"     class="mobile-link block px-4 py-2.5 text-white/80 hover:text-white hover:bg-white/10 rounded-lg text-sm font-medium transition">Home</a>
                <a href="#about"    class="mobile-link block px-4 py-2.5 text-white/80 hover:text-white hover:bg-white/10 rounded-lg text-sm font-medium transition">About</a>
                <a href="#services" class="mobile-link block px-4 py-2.5 text-white/80 hover:text-white hover:bg-white/10 rounded-lg text-sm font-medium transition">Services</a>
                <a href="#why-us"   class="mobile-link block px-4 py-2.5 text-white/80 hover:text-white hover:bg-white/10 rounded-lg text-sm font-medium transition">Why Us</a>
                <a href="#contact"  class="mobile-link block px-4 py-2.5 text-white/80 hover:text-white hover:bg-white/10 rounded-lg text-sm font-medium transition">Contact</a>
                <a href="#contact"  class="mt-2 inline-flex items-center justify-center gap-2 bg-amber-500 text-white font-semibold text-sm px-5 py-2.5 rounded-xl">Get in Touch</a>
            </div>
        </div>
    </nav>

    {{-- ══ HERO ══ --}}
    <section id="home" class="hero-bg relative min-h-screen flex items-center overflow-hidden pt-20">
        <div class="blob w-96 h-96 bg-blue-500/20 top-10 -left-20" style="animation-delay:0s"></div>
        <div class="blob w-64 h-64 bg-amber-400/15 bottom-20 right-10" style="animation-delay:3s"></div>
        <div class="blob w-48 h-48 bg-blue-300/10 top-1/2 left-1/2" style="animation-delay:6s"></div>
        <div class="absolute inset-0 opacity-5" style="background-image:linear-gradient(rgba(255,255,255,.3) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.3) 1px,transparent 1px);background-size:60px 60px;"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 w-full">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <div data-aos="fade-right" data-aos-duration="900">
                    <span class="inline-flex items-center gap-2 text-amber-400 text-xs font-bold uppercase tracking-widest mb-6">
                        <span class="w-6 h-px bg-amber-400"></span>
                        Est. February 2021 · Yaba, Lagos
                    </span>
                    <h1 class="text-5xl sm:text-6xl lg:text-7xl font-black text-white leading-tight mb-6">
                        Your Trusted<br>
                        <span class="text-amber-400">Digital</span><br>
                        <span class="text-white/90">Business</span> Hub
                    </h1>
                    <p class="text-white/70 text-lg leading-relaxed mb-8 max-w-lg">
                        TIMMedia provides comprehensive computer and digital business services — from professional training to printing, scanning, typing and online registration — all under one roof at FCE(T) Akoka.
                    </p>

                    <div class="flex flex-wrap gap-4 mb-12">
                        <a href="#services" class="inline-flex items-center gap-2.5 bg-amber-500 hover:bg-amber-400 text-white font-bold px-7 py-3.5 rounded-xl shadow-xl hover:shadow-2xl transition-all hover:-translate-y-1 text-base">
                            Explore Services
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                        <a href="#contact" class="inline-flex items-center gap-2.5 bg-white/10 hover:bg-white/20 text-white font-semibold px-7 py-3.5 rounded-xl border border-white/20 transition-all hover:-translate-y-1 text-base backdrop-blur-sm">
                            Contact Us
                        </a>
                    </div>

                    <div class="flex flex-wrap gap-6">
                        <div class="stat-card px-5 py-3 text-center"><p class="text-2xl font-black text-amber-400">5+</p><p class="text-white/60 text-xs mt-0.5">Years of Service</p></div>
                        <div class="stat-card px-5 py-3 text-center"><p class="text-2xl font-black text-amber-400">6</p><p class="text-white/60 text-xs mt-0.5">Core Services</p></div>
                        <div class="stat-card px-5 py-3 text-center"><p class="text-2xl font-black text-amber-400">100s</p><p class="text-white/60 text-xs mt-0.5">Clients Served</p></div>
                    </div>
                </div>

                <div data-aos="fade-left" data-aos-duration="900" data-aos-delay="200" class="hidden lg:block">
                    <div class="relative">
                        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl p-8 shadow-2xl">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-12 h-12 bg-amber-500 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17H3a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v10a2 2 0 01-2 2h-2"/></svg>
                                </div>
                                <div>
                                    <p class="text-white font-bold">Computer Training</p>
                                    <p class="text-white/50 text-xs">Professional Courses</p>
                                </div>
                            </div>
                            <div class="space-y-3">
                                @foreach (['Microsoft Office Suite', 'Internet & Email Basics', 'Digital Literacy', 'Data Entry & Processing'] as $course)
                                    <div class="flex items-center gap-3 bg-white/5 rounded-lg px-4 py-2.5">
                                        <div class="w-2 h-2 bg-amber-400 rounded-full flex-shrink-0"></div>
                                        <span class="text-white/80 text-sm">{{ $course }}</span>
                                        <svg class="w-4 h-4 text-green-400 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="absolute -top-5 -right-5 bg-amber-500 text-white rounded-xl px-4 py-2 shadow-lg">
                            <p class="text-xs font-black uppercase tracking-wide">CAC Registered</p>
                            <p class="text-white/80 text-[10px]">BN No. 3296646</p>
                        </div>
                        <div class="absolute -bottom-5 -left-5 bg-white rounded-xl px-4 py-3 shadow-xl flex items-center gap-2">
                            <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            </div>
                            <div>
                                <p class="text-gray-900 text-xs font-bold">Trusted Since 2021</p>
                                <p class="text-gray-500 text-[10px]">Quality Guaranteed</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" style="width:100%;height:64px;display:block;">
                <path d="M0 80L48 69.3C96 58.7 192 37.3 288 32C384 26.7 480 37.3 576 48C672 58.7 768 69.3 864 69.3C960 69.3 1056 58.7 1152 48C1248 37.3 1344 26.7 1392 21.3L1440 16V80H0Z" fill="white"/>
            </svg>
        </div>
    </section>

    {{-- ══ MARQUEE ══ --}}
    <div class="bg-blue-950 py-3 overflow-hidden">
        <div class="marquee-track">
            @php $items = ['Computer Training','Online Registration','Professional Typing','Document Printing','Photocopy Services','Document Scanning','CAC Registered Business','Yaba, Lagos']; @endphp
            @foreach (array_merge($items, $items, $items) as $item)
                <span class="text-white/50 text-sm font-medium flex items-center gap-3 shrink-0">
                    <span class="w-1.5 h-1.5 bg-amber-400 rounded-full inline-block"></span>
                    {{ $item }}
                </span>
            @endforeach
        </div>
    </div>

    {{-- ══ ABOUT ══ --}}
    <section id="about" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <div data-aos="fade-right" data-aos-duration="800" class="relative">
                    <div class="rounded-2xl p-10 relative overflow-hidden" style="background:linear-gradient(135deg,#0f2d5e,#1a4480)">
                        <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full translate-x-20 -translate-y-20"></div>
                        <div class="absolute bottom-0 left-0 w-48 h-48 bg-amber-500/10 rounded-full -translate-x-10 translate-y-10"></div>
                        <div class="relative z-10">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="w-16 h-16 bg-amber-500 rounded-2xl flex items-center justify-center shadow-lg">
                                    <span class="text-white font-black text-2xl">T</span>
                                </div>
                                <div>
                                    <h3 class="text-white font-black text-2xl tracking-wide">TIMMEDIA</h3>
                                    <p class="text-white/60 text-sm">Digital Business Services</p>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <div class="flex items-start gap-3 rounded-xl p-4" style="background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.1)">
                                    <span class="text-xl mt-0.5">📍</span>
                                    <div><p class="text-white/50 text-xs uppercase tracking-wider mb-0.5">Location</p><p class="text-white text-sm font-medium">Aluta Shopping Complex, Shop 11, FCE(T) Akoka, Yaba, Lagos</p></div>
                                </div>
                                <div class="flex items-start gap-3 rounded-xl p-4" style="background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.1)">
                                    <span class="text-xl mt-0.5">🏛️</span>
                                    <div><p class="text-white/50 text-xs uppercase tracking-wider mb-0.5">Registration</p><p class="text-white text-sm font-medium">CAC Business Name No. BN 3296646</p></div>
                                </div>
                                <div class="flex items-start gap-3 rounded-xl p-4" style="background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.1)">
                                    <span class="text-xl mt-0.5">📅</span>
                                    <div><p class="text-white/50 text-xs uppercase tracking-wider mb-0.5">Established</p><p class="text-white text-sm font-medium">February 11, 2021</p></div>
                                </div>
                                <div class="flex items-start gap-3 rounded-xl p-4" style="background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.1)">
                                    <span class="text-xl mt-0.5">⚡</span>
                                    <div><p class="text-white/50 text-xs uppercase tracking-wider mb-0.5">Type</p><p class="text-white text-sm font-medium">Computer & Digital Services Centre</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-amber-400 rounded-2xl -z-10 opacity-50"></div>
                    <div class="absolute -top-4 -left-4 w-16 h-16 bg-blue-700 rounded-xl -z-10 opacity-30"></div>
                </div>

                <div data-aos="fade-left" data-aos-duration="800" data-aos-delay="150">
                    <span class="section-label mb-4">About Us</span>
                    <h2 class="text-4xl lg:text-5xl font-black text-gray-900 leading-tight mb-6">
                        Empowering You With<br>
                        <span class="grad-text">Digital Excellence</span>
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        TIMMedia is a CAC-registered digital business centre located in the heart of the academic community at the Federal College of Education (Technical), Akoka, Yaba, Lagos State.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-8">
                        We bridge the gap between individuals, students, and institutions and the digital world by providing accessible, affordable, and high-quality computer training and document services. Whether you need to upskill with computer training, complete online registrations, or get professional printing and scanning done — TIMMedia has you covered.
                    </p>

                    <div class="space-y-4">
                        @foreach ([
                            ['2021', 'Business officially registered with CAC under Business Name Act, February 2021.'],
                            ['2022', 'Expanded services to include full online registration support for JAMB, WAEC & government portals.'],
                            ['2024', 'Grew to serve hundreds of students and professionals across Lagos annually.'],
                            ['2025+', 'Continuing to provide quality digital services to the FCE(T) Akoka and Yaba community.'],
                        ] as [$year, $desc])
                            <div class="flex items-start gap-4">
                                <div class="flex flex-col items-center">
                                    <div class="timeline-dot mt-1"></div>
                                    <div class="w-px flex-1 bg-amber-200 my-1 min-h-6"></div>
                                </div>
                                <div class="pb-2">
                                    <span class="text-amber-500 font-bold text-sm">{{ $year }}</span>
                                    <p class="text-gray-500 text-sm mt-0.5">{{ $desc }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ══ SERVICES ══ --}}
    <section id="services" class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16" data-aos="fade-up">
                <span class="section-label mb-4">Our Services</span>
                <h2 class="text-4xl lg:text-5xl font-black text-gray-900 leading-tight mb-4">
                    Everything You Need,<br><span class="grad-text">All in One Place</span>
                </h2>
                <p class="text-gray-500 text-lg">From computer training to document processing — TIMMedia delivers professional services to individuals, students, and businesses in Yaba, Lagos.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                {{-- Computer Training --}}
                <div class="card-glow p-8 shadow-sm border border-gray-100" data-aos="fade-up" data-aos-delay="0">
                    <div class="icon-wrap mb-5">
                        <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17H3a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v10a2 2 0 01-2 2h-2"/></svg>
                    </div>
                    <h3 class="text-xl font-black text-gray-900 mb-3">Computer Training</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-5">Practical, hands-on training programmes for beginners and intermediate users covering the essential tools needed in today's digital workplace.</p>
                    <ul class="space-y-2">
                        @foreach (['Microsoft Word & Excel', 'PowerPoint Presentations', 'Internet & Email Usage', 'Data Entry & Spreadsheets'] as $item)
                            <li class="flex items-center gap-2.5 text-sm text-gray-600">
                                <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>{{ $item }}
                            </li>
                        @endforeach
                    </ul>
                    <div class="mt-6 pt-5 border-t border-gray-100"><span class="text-xs text-blue-700 font-semibold bg-blue-50 px-3 py-1 rounded-full">Beginner Friendly</span></div>
                </div>

                {{-- Online Registration --}}
                <div class="card-glow p-8 shadow-sm border border-gray-100" data-aos="fade-up" data-aos-delay="80">
                    <div class="icon-wrap mb-5">
                        <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                    </div>
                    <h3 class="text-xl font-black text-gray-900 mb-3">Online Registration</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-5">Fast and accurate assistance for all types of online form submissions, portal registrations, and digital applications across Nigeria.</p>
                    <ul class="space-y-2">
                        @foreach (['JAMB / WAEC / NECO Portals', 'NYSC & School Applications', 'Government e-Portals', 'Job & Scholarship Forms'] as $item)
                            <li class="flex items-center gap-2.5 text-sm text-gray-600">
                                <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>{{ $item }}
                            </li>
                        @endforeach
                    </ul>
                    <div class="mt-6 pt-5 border-t border-gray-100"><span class="text-xs text-blue-700 font-semibold bg-blue-50 px-3 py-1 rounded-full">Fast Turnaround</span></div>
                </div>

                {{-- Typing --}}
                <div class="card-glow p-8 shadow-sm border border-gray-100" data-aos="fade-up" data-aos-delay="160">
                    <div class="icon-wrap mb-5">
                        <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                    </div>
                    <h3 class="text-xl font-black text-gray-900 mb-3">Professional Typing</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-5">Accurate, neatly formatted document typing for individuals and organisations with quick turnaround at competitive rates.</p>
                    <ul class="space-y-2">
                        @foreach (['Academic Assignments & Projects', 'Business Letters & Reports', 'CVs & Cover Letters', 'Forms & Legal Documents'] as $item)
                            <li class="flex items-center gap-2.5 text-sm text-gray-600">
                                <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>{{ $item }}
                            </li>
                        @endforeach
                    </ul>
                    <div class="mt-6 pt-5 border-t border-gray-100"><span class="text-xs text-blue-700 font-semibold bg-blue-50 px-3 py-1 rounded-full">Error-Free Output</span></div>
                </div>

                {{-- Printing --}}
                <div class="card-glow p-8 shadow-sm border border-gray-100" data-aos="fade-up" data-aos-delay="0">
                    <div class="icon-wrap mb-5">
                        <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/></svg>
                    </div>
                    <h3 class="text-xl font-black text-gray-900 mb-3">Printing Services</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-5">High-quality colour and black-and-white printing for documents of all sizes. We handle everything from single pages to bulk print orders.</p>
                    <ul class="space-y-2">
                        @foreach (['Colour & B/W Printing', 'Bulk Document Printing', 'Posters & Banners', 'A4, A3 & Custom Sizes'] as $item)
                            <li class="flex items-center gap-2.5 text-sm text-gray-600">
                                <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>{{ $item }}
                            </li>
                        @endforeach
                    </ul>
                    <div class="mt-6 pt-5 border-t border-gray-100"><span class="text-xs text-blue-700 font-semibold bg-blue-50 px-3 py-1 rounded-full">Crisp & Clear</span></div>
                </div>

                {{-- Photocopy --}}
                <div class="card-glow p-8 shadow-sm border border-gray-100" data-aos="fade-up" data-aos-delay="80">
                    <div class="icon-wrap mb-5">
                        <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="text-xl font-black text-gray-900 mb-3">Photocopy Services</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-5">Reliable, affordable photocopying for personal, academic, and business documents. Quick service with attention to clarity and quality.</p>
                    <ul class="space-y-2">
                        @foreach (['Single & Multiple Copies', 'Certificates & IDs', 'Academic Documents', 'Business Papers'] as $item)
                            <li class="flex items-center gap-2.5 text-sm text-gray-600">
                                <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>{{ $item }}
                            </li>
                        @endforeach
                    </ul>
                    <div class="mt-6 pt-5 border-t border-gray-100"><span class="text-xs text-blue-700 font-semibold bg-blue-50 px-3 py-1 rounded-full">High Volume OK</span></div>
                </div>

                {{-- Scanning --}}
                <div class="card-glow p-8 shadow-sm border border-gray-100" data-aos="fade-up" data-aos-delay="160">
                    <div class="icon-wrap mb-5">
                        <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18"/></svg>
                    </div>
                    <h3 class="text-xl font-black text-gray-900 mb-3">Document Scanning</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-5">Convert your physical documents into high-resolution digital files — perfect for archiving, emailing, and uploading to online portals.</p>
                    <ul class="space-y-2">
                        @foreach (['Certificates & Transcripts', 'IDs & Passports', 'Business & Legal Docs', 'PDF / JPEG Output'] as $item)
                            <li class="flex items-center gap-2.5 text-sm text-gray-600">
                                <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>{{ $item }}
                            </li>
                        @endforeach
                    </ul>
                    <div class="mt-6 pt-5 border-t border-gray-100"><span class="text-xs text-blue-700 font-semibold bg-blue-50 px-3 py-1 rounded-full">High Resolution</span></div>
                </div>

            </div>
        </div>
    </section>

    {{-- ══ WHY US ══ --}}
    <section id="why-us" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <div data-aos="fade-right" data-aos-duration="800">
                    <span class="section-label mb-4">Why TIMMedia</span>
                    <h2 class="text-4xl lg:text-5xl font-black text-gray-900 leading-tight mb-6">
                        The Smart Choice for<br><span class="grad-text">Digital Services</span>
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-10">
                        We combine expertise, speed, and affordability to deliver services that consistently exceed expectations — right in the heart of the FCE(T) Akoka community.
                    </p>

                    <div class="space-y-6">
                        <div class="flex items-start gap-5">
                            <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            </div>
                            <div><h4 class="font-bold text-gray-900 mb-1">CAC-Registered & Trustworthy</h4><p class="text-gray-500 text-sm leading-relaxed">Officially registered with the Corporate Affairs Commission of Nigeria — your documents and information are safe with us.</p></div>
                        </div>
                        <div class="flex items-start gap-5">
                            <div class="w-12 h-12 rounded-xl bg-amber-100 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div><h4 class="font-bold text-gray-900 mb-1">Fast & Reliable Service</h4><p class="text-gray-500 text-sm leading-relaxed">We understand your time is precious. Our streamlined processes ensure quick delivery without compromising on quality.</p></div>
                        </div>
                        <div class="flex items-start gap-5">
                            <div class="w-12 h-12 rounded-xl bg-green-100 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                            </div>
                            <div><h4 class="font-bold text-gray-900 mb-1">Affordable Pricing</h4><p class="text-gray-500 text-sm leading-relaxed">Premium quality services at student and budget-friendly rates — no hidden charges, ever.</p></div>
                        </div>
                        <div class="flex items-start gap-5">
                            <div class="w-12 h-12 rounded-xl bg-purple-100 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <div><h4 class="font-bold text-gray-900 mb-1">Friendly Expert Team</h4><p class="text-gray-500 text-sm leading-relaxed">Our knowledgeable and approachable staff guide you through every step with patience and care.</p></div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-left" data-aos-duration="800" data-aos-delay="150">
                    <div class="grid grid-cols-2 gap-5">
                        <div class="rounded-2xl p-8 bg-blue-950 text-white flex flex-col items-center justify-center text-center min-h-36 shadow-sm">
                            <p class="text-5xl font-black mb-2">@php echo date('Y') - 2021; @endphp +</p><p class="text-white/70 text-sm font-medium">Years in Business</p>
                        </div>
                        <div class="rounded-2xl p-8 bg-amber-500 text-white flex flex-col items-center justify-center text-center min-h-36 shadow-sm">
                            <p class="text-5xl font-black mb-2">6</p><p class="text-white/70 text-sm font-medium">Core Services</p>
                        </div>
                        <div class="rounded-2xl p-8 bg-white border-2 border-gray-100 flex flex-col items-center justify-center text-center min-h-36 shadow-sm">
                            <p class="text-5xl font-black mb-2 text-gray-900">100%</p><p class="text-gray-500 text-sm font-medium">Customer Focus</p>
                        </div>
                        <div class="rounded-2xl p-8 bg-white border-2 border-gray-100 flex flex-col items-center justify-center text-center min-h-36 shadow-sm">
                            <p class="text-5xl font-black mb-2 text-gray-900">∞</p><p class="text-gray-500 text-sm font-medium">Community Impact</p>
                        </div>
                    </div>

                    <div class="mt-5 bg-slate-50 rounded-2xl p-6 border border-gray-100 shadow-sm">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-10 h-10 bg-red-100 rounded-xl flex items-center justify-center">
                                <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <h4 class="font-bold text-gray-900">Conveniently Located</h4>
                        </div>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            <strong>Shop 11, Aluta Shopping Complex</strong><br>
                            Federal College of Education (Technical) Akoka,<br>
                            Yaba, Lagos State, Nigeria.
                        </p>
                        <a href="https://maps.google.com/?q=Federal+College+of+Education+Technical+Akoka+Yaba+Lagos" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 text-blue-700 font-semibold text-sm mt-3 hover:text-blue-900 transition">
                            View on Google Maps
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ══ TESTIMONIALS ══ --}}
    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-14" data-aos="fade-up">
                <span class="section-label mb-4">What Clients Say</span>
                <h2 class="text-4xl font-black text-gray-900">Trusted by the <span class="grad-text">Community</span></h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach ([
                        ['Adaeze O.', 'FCET Student', 'TIMMedia helped me complete my JAMB portal registration quickly. The staff were so patient and professional. Highly recommend!'],
                        ['Mr. Babatunde L.', 'Lecturer, FCE(T)', 'I always bring my lecture materials here for printing and binding. The quality is consistently excellent and the price is fair.'],
                        ['Chioma N.', 'Recent Graduate', 'The computer training I received at TIMMedia gave me the confidence to apply for office jobs. Worth every kobo!'],
                    ] as [$name, $role, $review])
                    <div class="testimonial-card p-7" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="flex gap-1 mb-4">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            @endfor
                        </div>
                        <p class="text-gray-600 text-sm leading-relaxed mb-5 italic">"{{ $review }}"</p>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center text-white font-bold text-sm flex-shrink-0" style="background:linear-gradient(135deg,#0f2d5e,#1a4480)">
                                {{ substr($name, 0, 1) }}
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 text-sm">{{ $name }}</p>
                                <p class="text-gray-400 text-xs">{{ $role }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ══ CTA BANNER ══ --}}
    <section class="hero-bg py-20 relative overflow-hidden">
        <div class="blob w-96 h-96 bg-blue-400/20 -top-20 -left-20"></div>
        <div class="blob w-64 h-64 bg-amber-400/15 -bottom-10 right-10" style="animation-delay:4s"></div>
        <div class="absolute inset-0 opacity-5" style="background-image:linear-gradient(rgba(255,255,255,.3) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.3) 1px,transparent 1px);background-size:60px 60px;"></div>
        <div class="relative z-10 max-w-3xl mx-auto px-4 text-center" data-aos="fade-up">
            <h2 class="text-4xl lg:text-5xl font-black text-white mb-5">
                Ready to Get Started?<br><span class="text-amber-400">We're Here For You.</span>
            </h2>
            <p class="text-white/70 text-lg mb-10">Visit us at Shop 11, Aluta Shopping Complex, FCE(T) Akoka, Yaba — or reach out via our contact form.</p>
            <a href="#contact" class="inline-flex items-center gap-3 bg-amber-500 hover:bg-amber-400 text-white font-bold text-lg px-10 py-4 rounded-2xl shadow-2xl transition-all hover:-translate-y-1">
                Contact Us Today
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </section>

    {{-- ══ CONTACT ══ --}}
    <section id="contact" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-start">

                <div data-aos="fade-right">
                    <span class="section-label mb-4">Contact Us</span>
                    <h2 class="text-4xl lg:text-5xl font-black text-gray-900 leading-tight mb-6">
                        Let's Talk —<br><span class="grad-text">We'd Love to Help</span>
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-10">
                        Have a question, need a quote, or want to enrol in one of our training programmes? Send us a message and we'll get back to you promptly.
                    </p>

                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <div><p class="font-bold text-gray-900 mb-0.5">Our Location</p><p class="text-gray-500 text-sm">Shop 11, Aluta Shopping Complex, FCE(T) Akoka, Yaba, Lagos State</p></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-amber-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div><p class="font-bold text-gray-900 mb-0.5">Email Us</p><p class="text-gray-500 text-sm">info@timmedia.com.ng</p></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div><p class="font-bold text-gray-900 mb-0.5">Business Hours</p><p class="text-gray-500 text-sm">Monday – Saturday: 8:00 AM – 6:00 PM</p></div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-left" data-aos-delay="150">
                    <div class="bg-slate-50 rounded-2xl p-8 lg:p-10 border border-gray-100 shadow-sm">

                        @if ($errors->any())
                            <div class="mb-6 bg-red-50 border border-red-200 rounded-xl p-4">
                                <p class="text-red-700 font-semibold text-sm mb-2">Please correct the following:</p>
                                <ul class="list-disc list-inside space-y-1">
                                    @foreach ($errors->all() as $error)
                                        <li class="text-red-600 text-sm">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <h3 class="text-xl font-black text-gray-900 mb-6">Send Us a Message</h3>

                        <form method="POST" action="{{ route('contact.send') }}" class="space-y-5">
                            @csrf

                            <div class="grid sm:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Full Name <span class="text-red-500">*</span></label>
                                    <input type="text" name="name" value="{{ old('name') }}" placeholder="e.g. Chidi Okafor" class="form-input" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address <span class="text-red-500">*</span></label>
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="you@example.com" class="form-input" required>
                                </div>
                            </div>

                            <div class="grid sm:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                                    <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="+234 xxx xxx xxxx" class="form-input">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Subject <span class="text-red-500">*</span></label>
                                    <input type="text" name="subject" value="{{ old('subject') }}" placeholder="How can we help?" class="form-input" required>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Message <span class="text-red-500">*</span></label>
                                <textarea name="message" rows="5" placeholder="Tell us more about what you need…" class="form-input resize-none" required>{{ old('message') }}</textarea>
                            </div>

                            <button type="submit" class="w-full flex items-center justify-center gap-3 text-white font-bold text-base py-4 px-8 rounded-xl shadow-lg hover:shadow-xl transition-all hover:-translate-y-0.5 group" style="background:linear-gradient(135deg,#0f2d5e,#1a4480)">
                                <svg class="w-5 h-5 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                                Send Message
                            </button>

                            <p class="text-center text-xs text-gray-400">Your message is sent directly to our team. We respond within 24 hours.</p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ══ FOOTER ══ --}}
    <footer style="background:#060f1e" class="text-white pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
                <div class="lg:col-span-2">
                    <div class="flex items-center gap-2.5 mb-5">
                        <img src="{{ asset('img/logo.svg') }}" alt="TIMMedia Logo" class="w-10 h-10" />
                        <span class="text-white font-black text-xl">TIM</span><span class="text-amber-400 font-black text-xl">MEDIA</span>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed max-w-sm mb-5">
                        Your trusted digital business centre at the heart of the FCE(T) Akoka academic community in Yaba, Lagos. Quality services, honest pricing, satisfied customers.
                    </p>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <span class="text-green-400 text-xs font-semibold">CAC Registered — BN No. 3296646</span>
                    </div>
                </div>

                <div>
                    <h4 class="font-bold text-white mb-5 text-sm uppercase tracking-wider">Our Services</h4>
                    <ul class="space-y-2.5">
                        @foreach (['Computer Training','Online Registration','Professional Typing','Document Printing','Photocopy Services','Document Scanning'] as $service)
                            <li><a href="#services" class="text-gray-400 hover:text-amber-400 text-sm transition-colors flex items-center gap-2"><span class="w-1 h-1 bg-amber-400 rounded-full"></span>{{ $service }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-white mb-5 text-sm uppercase tracking-wider">Contact Info</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3 text-sm">
                            <svg class="w-4 h-4 text-amber-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span class="text-gray-400">Shop 11, Aluta Shopping Complex, FCE(T) Akoka, Yaba, Lagos</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm">
                            <svg class="w-4 h-4 text-amber-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <span class="text-gray-400">info@timmedia.com.ng</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm">
                            <svg class="w-4 h-4 text-amber-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span class="text-gray-400">Mon – Sat: 8:00 AM – 6:00 PM</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-gray-500 text-sm">&copy; {{ date('Y') }} TIMMedia. All rights reserved.</p>
                <p class="text-gray-600 text-xs">Registered under the Companies and Allied Matters Act 2020</p>
            </div>
        </div>
    </footer>

    {{-- Back to Top --}}
    <button id="back-to-top" class="fixed bottom-8 right-8 w-12 h-12 text-white rounded-xl shadow-lg flex items-center justify-center transition-all duration-300 opacity-0 translate-y-4 hover:-translate-y-1 z-50" style="background:#0f2d5e">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/></svg>
    </button>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({ once: true, offset: 80, easing: 'ease-out-cubic' });

        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => navbar.classList.toggle('scrolled', window.scrollY > 60));

        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const iconOpen = document.getElementById('icon-open');
        const iconClose = document.getElementById('icon-close');
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('open');
            iconOpen.classList.toggle('hidden');
            iconClose.classList.toggle('hidden');
        });
        document.querySelectorAll('.mobile-link').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('open');
                iconOpen.classList.remove('hidden');
                iconClose.classList.add('hidden');
            });
        });

        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link');
        const obs = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    navLinks.forEach(link => {
                        link.classList.toggle('text-white', link.getAttribute('href') === '#' + entry.target.id);
                        link.classList.toggle('bg-white/20', link.getAttribute('href') === '#' + entry.target.id);
                    });
                }
            });
        }, { threshold: 0.4 });
        sections.forEach(s => obs.observe(s));

        const pb = document.getElementById('progress-bar');
        window.addEventListener('scroll', () => {
            pb.style.width = (window.scrollY / (document.body.scrollHeight - window.innerHeight) * 100) + '%';
        });

        const btt = document.getElementById('back-to-top');
        window.addEventListener('scroll', () => {
            btt.classList.toggle('opacity-0', window.scrollY <= 400);
            btt.classList.toggle('translate-y-4', window.scrollY <= 400);
            btt.classList.toggle('opacity-100', window.scrollY > 400);
            btt.classList.toggle('translate-y-0', window.scrollY > 400);
        });
        btt.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
    </script>
</body>
</html>

