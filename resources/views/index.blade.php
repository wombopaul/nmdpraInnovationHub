<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WAKANDA INNOVATION HUB - Strengthening Regulatory Oversight & Energy Supply Security</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800,900&display=swap" rel="stylesheet" />

        <!-- Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>

        <style>
            /* Custom color utilities - NMDPRA Official Colors */
            .bg-nmdpra-blue { background-color: #2D5F3F !important; }
            .text-nmdpra-blue { color: #2D5F3F !important; }
            .border-nmdpra-blue { border-color: #2D5F3F !important; }
            .hover\:text-nmdpra-blue:hover { color: #2D5F3F !important; }
            .hover\:bg-nmdpra-blue:hover { background-color: #2D5F3F !important; }

            .bg-nmdpra-green { background-color: #008751 !important; }
            .text-nmdpra-green { color: #008751 !important; }

            .bg-nmdpra-orange { background-color: #FFB300 !important; }
            .text-nmdpra-orange { color: #FFB300 !important; }

            .bg-nmdpra-blue\/10 { background-color: rgba(45, 95, 63, 0.1) !important; }
            .bg-nmdpra-green\/10 { background-color: rgba(0, 135, 81, 0.1) !important; }
            .bg-nmdpra-orange\/10 { background-color: rgba(255, 179, 0, 0.1) !important; }

            .hero-gradient {
                background: linear-gradient(135deg, #2D5F3F 0%, #008751 100%);
            }
            .card-hover {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            .card-hover:hover {
                transform: translateY(-5px);
                box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            }
            .stat-counter {
                font-feature-settings: 'tnum';
            }
            .section-divider {
                background: linear-gradient(90deg, transparent 0%, #e5e7eb 50%, transparent 100%);
                height: 1px;
            }
            html {
                scroll-behavior: smooth;
            }
            body {
                font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', sans-serif;
            }

            /* Hero Slider Styles */
            .hero-slider {
                position: relative;
                overflow: hidden;
                height: 100vh;
                min-height: 600px;
            }
            .slide {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                opacity: 0;
                transition: opacity 1s ease-in-out;
                background-size: cover;
                background-position: center;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .slide.active {
                opacity: 1;
            }
            .slide-video {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
                z-index: 1;
            }
            .slide-content {
                text-align: center;
                color: white;
                max-width: 1200px;
                padding: 0 20px;
                z-index: 2;
            }
            .slide-overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(135deg, rgba(0,51,102,0.8) 0%, rgba(0,135,81,0.6) 100%);
            }
            .slider-nav {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                background: rgba(255,255,255,0.2);
                border: none;
                color: white;
                padding: 15px;
                cursor: pointer;
                transition: background 0.3s ease;
                z-index: 3;
                border-radius: 50%;
            }
            .slider-nav:hover {
                background: rgba(255,255,255,0.4);
            }
            .slider-prev {
                left: 30px;
            }
            .slider-next {
                right: 30px;
            }
            .slider-indicators {
                position: absolute;
                bottom: 30px;
                left: 50%;
                transform: translateX(-50%);
                display: flex;
                gap: 10px;
                z-index: 3;
            }
            .indicator {
                width: 12px;
                height: 12px;
                border-radius: 50%;
                background: rgba(255,255,255,0.5);
                cursor: pointer;
                transition: background 0.3s ease;
            }
            .indicator.active {
                background: white;
            }
        </style>
    </head>
    <body class="font-sans antialiased bg-white">
        <!-- Header Navigation -->
        <nav class="bg-white border-b border-gray-200 sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <div class="flex items-center">
                        <img src="nmdpraLogo.png" alt="NMDPRA Logo" class="h-8 w-8 mr-3">
                        <span class="text-xl font-bold text-gray-900">WAKANDA INNOVATION HUB</span>
                    </div>
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="#about" class="text-gray-600 hover:text-nmdpra-blue transition-colors">About</a>
                        <a href="#focus-areas" class="text-gray-600 hover:text-nmdpra-blue transition-colors">Focus Areas</a>
                        <a href="#process" class="text-gray-600 hover:text-nmdpra-blue transition-colors">Process</a>
                         <a href="{{ route('admin.innovations.create') }}" class="text-gray-600 hover:text-nmdpra-blue transition-colors">Submit an Idea</a>
                          <a href="{{ route('admin.plrr.feedback') }}" class="text-gray-600 hover:text-nmdpra-blue transition-colors">PLRR Feedback</a>
                        <a href="#hall-of-fame" class="text-gray-600 hover:text-nmdpra-blue transition-colors">Innovators Hall of Fame</a>
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="bg-nmdpra-blue text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="text-gray-600 hover:text-nmdpra-blue transition-colors">Staff Login</a>
                            @endauth
                        @endif
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Slider Section -->
        <section class="hero-slider">
            <!-- Slide 1: Video Only -->
            <div class="slide active">
                <video class="slide-video" autoplay muted loop playsinline>
                    <source src="{{ asset('videos/innovation-hub-hero.mp4') }}" type="video/mp4">
                    <source src="{{ asset('videos/innovation-hub-hero.webm') }}" type="video/webm">
                    <!-- Fallback background image if video doesn't load -->
                </video>
                <!-- Fallback background for browsers that don't support video -->
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('slide-1.jpg'); z-index: 0;"></div>
                <div class="slide-overlay"></div>
            </div>

            <!-- Slide 2: Innovation Hub -->
            <div class="slide" style="background-image: url('slide-1.jpg');">
                <div class="slide-overlay"></div>
                <div class="slide-content">
                    <div class="inline-block bg-white/20 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                        <span class="text-sm font-medium">🚀 Internal Innovation Programme</span>
                    </div>
                    <h1 class="text-5xl lg:text-7xl font-bold mb-6">
                        WAKANDA INNOVATION HUB
                    </h1>
                    <h2 class="text-2xl lg:text-3xl font-light mb-8 text-blue-100">
                        Strengthening Regulatory Oversight & Energy Supply Security
                    </h2>
                    <p class="text-xl text-blue-100 max-w-4xl mx-auto mb-10 leading-relaxed">
                        The WAKANDA INNOVATION HUB Challenge is an exclusive internal programme designed for NMDPRA staff to generate, test, and scale regulatory innovations.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('admin.innovations.create') }}" class="bg-white text-nmdpra-blue px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-colors inline-flex items-center">
                            <i class="fas fa-lightbulb mr-2"></i>
                            Submit an Idea
                        </a>
                        <a href="#about" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-nmdpra-blue transition-colors inline-flex items-center">
                            <i class="fas fa-info-circle mr-2"></i>
                            Learn More
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Technology Innovation -->
            <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=2025&auto=format&fit=crop');">
                <div class="slide-overlay"></div>
                <div class="slide-content">
                    <div class="inline-block bg-white/20 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                        <span class="text-sm font-medium">💡 Digital Transformation</span>
                    </div>
                    <h1 class="text-5xl lg:text-7xl font-bold mb-6">
                        Technology Innovation
                    </h1>
                    <h2 class="text-2xl lg:text-3xl font-light mb-8 text-blue-100">
                        Modernizing Regulatory Processes Through Technology
                    </h2>
                    <p class="text-xl text-blue-100 max-w-4xl mx-auto mb-10 leading-relaxed">
                        Leverage cutting-edge technologies to enhance regulatory efficiency, improve data analytics, and create innovative solutions for Nigeria's petroleum industry.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#focus-areas" class="bg-nmdpra-orange text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-yellow-500 transition-colors inline-flex items-center">
                            <i class="fas fa-rocket mr-2"></i>
                            Explore Focus Areas
                        </a>
                        <a href="#process" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-nmdpra-blue transition-colors inline-flex items-center">
                            <i class="fas fa-cogs mr-2"></i>
                            View Process
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide 4: Energy Security -->
            <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?q=80&w=2070&auto=format&fit=crop');">
                <div class="slide-overlay"></div>
                <div class="slide-content">
                    <div class="inline-block bg-white/20 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                        <span class="text-sm font-medium">⚡ Energy Security</span>
                    </div>
                    <h1 class="text-5xl lg:text-7xl font-bold mb-6">
                        Energy Supply Security
                    </h1>
                    <h2 class="text-2xl lg:text-3xl font-light mb-8 text-blue-100">
                        Safeguarding Nigeria's Energy Future
                    </h2>
                    <p class="text-xl text-blue-100 max-w-4xl mx-auto mb-10 leading-relaxed">
                        Develop innovative approaches to ensure reliable energy supply, reduce systemic risks, and strengthen Nigeria's position in the global energy market.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#hall-of-fame" class="bg-nmdpra-green text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-green-600 transition-colors inline-flex items-center">
                            <i class="fas fa-trophy mr-2"></i>
                            Innovators Hall of Fame
                        </a>
                        <a href="#submit-idea" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-nmdpra-blue transition-colors inline-flex items-center">
                            <i class="fas fa-plus mr-2"></i>
                            Get Involved
                        </a>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <button class="slider-nav slider-prev" onclick="previousSlide()">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="slider-nav slider-next" onclick="nextSlide()">
                <i class="fas fa-chevron-right"></i>
            </button>

            <!-- Slide Indicators -->
            <div class="slider-indicators">
                <div class="indicator active" onclick="currentSlide(1)"></div>
                <div class="indicator" onclick="currentSlide(2)"></div>
                <div class="indicator" onclick="currentSlide(3)"></div>
                <div class="indicator" onclick="currentSlide(4)"></div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-nmdpra-blue stat-counter">5</div>
                        <div class="text-gray-600 mt-2">Years of Innovation</div>
                        <div class="text-sm text-gray-500 mt-1">Driving regulatory excellence</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-nmdpra-green stat-counter">127</div>
                        <div class="text-gray-600 mt-2">Total Innovations</div>
                        <div class="text-sm text-gray-500 mt-1">Ideas submitted by staff</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-nmdpra-orange stat-counter">34</div>
                        <div class="text-gray-600 mt-2">Successful Innovations</div>
                        <div class="text-sm text-gray-500 mt-1">Implemented Authority-wide</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-purple-600 stat-counter">100%</div>
                        <div class="text-gray-600 mt-2">Staff Driven</div>
                        <div class="text-sm text-gray-500 mt-1">Internal programme only</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Who Can Participate Section -->
        <section id="about" class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Who Can Participate?</h2>
                    <div class="section-divider w-24 mx-auto mb-8"></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center card-hover bg-white p-8 rounded-xl shadow-sm border">
                        <div class="w-16 h-16 bg-nmdpra-blue/10 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-users text-2xl text-nmdpra-blue"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">NMDPRA Staff Only</h3>
                        <p class="text-gray-600">(All levels welcome)</p>
                    </div>
                    <div class="text-center card-hover bg-white p-8 rounded-xl shadow-sm border">
                        <div class="w-16 h-16 bg-nmdpra-green/10 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-building text-2xl text-nmdpra-green"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">All Directorates</h3>
                        <p class="text-gray-600">All directorates and regional offices</p>
                    </div>
                    <div class="text-center card-hover bg-white p-8 rounded-xl shadow-sm border">
                        <div class="w-16 h-16 bg-nmdpra-orange/10 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-handshake text-2xl text-nmdpra-orange"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Team Collaboration</h3>
                        <p class="text-gray-600">Individual or cross-directorate teams</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Innovation Focus Areas -->
        <section id="focus-areas" class="py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Innovation Focus Areas</h2>
                    <div class="section-divider w-24 mx-auto mb-8"></div>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Strategic pillars driving regulatory excellence
                    </p>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <div class="card-hover bg-white p-8 rounded-xl shadow-sm border">
                        <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                            <i class="fas fa-clipboard-check text-2xl text-nmdpra-blue"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Regulatory Oversight</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Innovations that improve licensing quality, compliance monitoring, inspections, enforcement, and inter-directorate coordination.
                        </p>
                    </div>
                    <div class="card-hover bg-white p-8 rounded-xl shadow-sm border">
                        <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center mb-6">
                            <i class="fas fa-shield-alt text-2xl text-nmdpra-green"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Energy Supply Security</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Regulatory tools and processes that reduce supply disruption risks, improve infrastructure reliability, and support demand–supply balance.
                        </p>
                    </div>
                    <div class="card-hover bg-white p-8 rounded-xl shadow-sm border">
                        <div class="w-16 h-16 bg-orange-100 rounded-xl flex items-center justify-center mb-6">
                            <i class="fas fa-chart-line text-2xl text-nmdpra-orange"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Process & Data Innovation</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Digitalisation, data transparency, analytics, and feedback loops that strengthen evidence-based regulation.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Challenge Structure -->
        <section id="process" class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Challenge Structure</h2>
                    <div class="section-divider w-24 mx-auto mb-8"></div>
                    <p class="text-xl text-gray-600">From ideation to institution-wide implementation</p>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-2xl font-bold text-nmdpra-blue">01</span>
                        </div>
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-400 to-blue-600 rounded-xl flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-lightbulb text-2xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Call for Ideas</h3>
                        <p class="text-gray-600">Staff submit regulatory problem statements and solution concepts.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-2xl font-bold text-nmdpra-green">02</span>
                        </div>
                        <div class="w-20 h-20 bg-gradient-to-br from-green-400 to-green-600 rounded-xl flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-user-tie text-2xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Review & Mentoring</h3>
                        <p class="text-gray-600">Shortlisted ideas receive technical and policy mentoring.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-2xl font-bold text-nmdpra-orange">03</span>
                        </div>
                        <div class="w-20 h-20 bg-gradient-to-br from-orange-400 to-orange-600 rounded-xl flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-flask text-2xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Pilot & Validation</h3>
                        <p class="text-gray-600">Concepts are tested within real regulatory workflows.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-2xl font-bold text-purple-600">04</span>
                        </div>
                        <div class="w-20 h-20 bg-gradient-to-br from-purple-400 to-purple-600 rounded-xl flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-rocket text-2xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Scale & Institutionalise</h3>
                        <p class="text-gray-600">Successful innovations are adopted Authority-wide.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Submit Innovation Idea Form -->
        {{-- <section id="submit-idea" class="py-20 bg-gray-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Submit an Innovation Idea</h2>
                    <div class="section-divider w-24 mx-auto mb-8"></div>
                    <p class="text-xl text-gray-600">Mapped to Post-Licence Regulatory Review (PLRR) and material regulatory risks</p>
                </div>
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Your Name *</label>
                                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-nmdpra-blue focus:border-transparent" required>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address *</label>
                                <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-nmdpra-blue focus:border-transparent" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Your Directorate *</label>
                                <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-nmdpra-blue focus:border-transparent" required>
                                    <option>Select Directorate</option>
                                    <option>Upstream Operations</option>
                                    <option>Downstream Operations</option>
                                    <option>Gas Infrastructure</option>
                                    <option>Compliance & Enforcement</option>
                                    <option>Technical Standards</option>
                                    <option>Legal & Regulatory Affairs</option>
                                    <option>Corporate Services</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Idea Title *</label>
                                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-nmdpra-blue focus:border-transparent" required>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Regulatory Problem Statement *</label>
                            <textarea rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-nmdpra-blue focus:border-transparent" placeholder="Describe the regulatory challenge or inefficiency you've identified..." required></textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Proposed Solution *</label>
                            <textarea rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-nmdpra-blue focus:border-transparent" placeholder="Outline your innovative solution approach..." required></textarea>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">PLRR Root Cause *</label>
                                <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-nmdpra-blue focus:border-transparent" required>
                                    <option>Select Root Cause</option>
                                    <option>Process Inefficiency</option>
                                    <option>Information Gap</option>
                                    <option>Technology Limitation</option>
                                    <option>Resource Constraint</option>
                                    <option>Coordination Issue</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Regulatory Risk Category *</label>
                                <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-nmdpra-blue focus:border-transparent" required>
                                    <option>Select Risk Category</option>
                                    <option>Operational Risk</option>
                                    <option>Safety Risk</option>
                                    <option>Environmental Risk</option>
                                    <option>Financial Risk</option>
                                    <option>Strategic Risk</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Expected Impact</label>
                            <textarea rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-nmdpra-blue focus:border-transparent" placeholder="What measurable outcomes do you expect from this innovation?"></textarea>
                        </div>
                        <div class="flex gap-4">
                            <button type="submit" class="flex-1 bg-nmdpra-blue text-white py-4 px-8 rounded-lg font-semibold text-lg hover:bg-blue-700 transition-colors">
                                <i class="fas fa-paper-plane mr-2"></i>
                                Submit Innovation Idea
                            </button>
                            <button type="reset" class="bg-gray-500 text-white py-4 px-8 rounded-lg font-semibold text-lg hover:bg-gray-600 transition-colors">
                                Reset Form
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section> --}}

        <!-- Hall of Fame -->
        <section id="hall-of-fame" class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">NMDPRA Innovators Hall of Fame</h2>
                    <div class="section-divider w-24 mx-auto mb-8"></div>
                    <p class="text-xl text-gray-600">Celebrating our innovation champions and their groundbreaking contributions</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Innovation Champion 1 -->
                    <div class="card-hover bg-white p-6 rounded-xl shadow-sm border">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 relative overflow-hidden rounded-full flex-shrink-0">
                                <img src="{{ asset('images/innovators/ihf-1.png') }}"
                                     alt="Adebayo Mensah"
                                     class="w-full h-full object-cover"
                                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="w-full h-full bg-gradient-to-br from-blue-400 to-blue-600 rounded-full flex items-center justify-center text-white font-bold text-lg" style="display:none;">
                                    AM
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-bold text-gray-900">Adebayo Mensah</h3>
                                <p class="text-sm text-gray-600">Senior Compliance Officer</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded-full">2024</span>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2 py-1 rounded-full">Implemented</span>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Digital Licensing Portal</h4>
                        <p class="text-gray-600 text-sm">Developed an automated licensing workflow system that reduced processing time by 60% and improved transparency across all directorates.</p>
                    </div>

                    <!-- Innovation Champion 2 -->
                    <div class="card-hover bg-white p-6 rounded-xl shadow-sm border">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 relative overflow-hidden rounded-full flex-shrink-0">
                                <img src="{{ asset('images/innovators/ihf-2.jpg') }}"
                                     alt="Chioma Okonkwo"
                                     class="w-full h-full object-cover"
                                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="w-full h-full bg-gradient-to-br from-green-400 to-green-600 rounded-full flex items-center justify-center text-white font-bold text-lg" style="display:none;">
                                    CO
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-bold text-gray-900">Chioma Okonkwo</h3>
                                <p class="text-sm text-gray-600">Data Analytics Lead</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded-full">2023</span>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2 py-1 rounded-full">Implemented</span>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Risk Prediction Dashboard</h4>
                        <p class="text-gray-600 text-sm">Created a real-time analytics dashboard that identifies supply disruption risks 72 hours in advance, enabling proactive regulatory intervention.</p>
                    </div>

                    <!-- Innovation Champion 3 -->
                    <div class="card-hover bg-white p-6 rounded-xl shadow-sm border">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 relative overflow-hidden rounded-full flex-shrink-0">
                                <img src="{{ asset('images/innovators/ihf-1.png') }}"
                                     alt="Ibrahim Bello"
                                     class="w-full h-full object-cover"
                                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="w-full h-full bg-gradient-to-br from-orange-400 to-orange-600 rounded-full flex items-center justify-center text-white font-bold text-lg" style="display:none;">
                                    IB
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-bold text-gray-900">Ibrahim Bello</h3>
                                <p class="text-sm text-gray-600">Enforcement Specialist</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded-full">2024</span>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2 py-1 rounded-full">Implemented</span>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Mobile Inspection App</h4>
                        <p class="text-gray-600 text-sm">Designed a mobile application for field inspections that digitized compliance reporting and reduced paperwork by 85%.</p>
                    </div>

                    <!-- Innovation Champion 4 -->
                    <div class="card-hover bg-white p-6 rounded-xl shadow-sm border">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 relative overflow-hidden rounded-full flex-shrink-0">
                                <img src="{{ asset('images/innovators/ihf-2.jpg') }}"
                                     alt="Fatima Eze"
                                     class="w-full h-full object-cover"
                                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="w-full h-full bg-gradient-to-br from-purple-400 to-purple-600 rounded-full flex items-center justify-center text-white font-bold text-lg" style="display:none;">
                                    FE
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-bold text-gray-900">Fatima Eze</h3>
                                <p class="text-sm text-gray-600">Technical Services Manager</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded-full">2023</span>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2 py-1 rounded-full">Implemented</span>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Automated Compliance Alerts</h4>
                        <p class="text-gray-600 text-sm">Implemented an automated notification system that alerts stakeholders of compliance deadlines, reducing violations by 45%.</p>
                    </div>

                    <!-- Innovation Champion 5 -->
                    <div class="card-hover bg-white p-6 rounded-xl shadow-sm border">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 relative overflow-hidden rounded-full flex-shrink-0">
                                <img src="{{ asset('images/innovators/ihf-1.png') }}"
                                     alt="Oluwaseun Adebisi"
                                     class="w-full h-full object-cover"
                                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="w-full h-full bg-gradient-to-br from-teal-400 to-teal-600 rounded-full flex items-center justify-center text-white font-bold text-lg" style="display:none;">
                                    OA
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-bold text-gray-900">Oluwaseun Adebisi</h3>
                                <p class="text-sm text-gray-600">Operations Coordinator</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2 py-1 rounded-full">2024</span>
                            <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2 py-1 rounded-full">Pilot Stage</span>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Inter-Directorate Hub</h4>
                        <p class="text-gray-600 text-sm">Created a collaborative platform connecting all directorates for seamless information sharing and coordinated regulatory action.</p>
                    </div>

                    <!-- Innovation Champion 6 -->
                    <div class="card-hover bg-white p-6 rounded-xl shadow-sm border">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 relative overflow-hidden rounded-full flex-shrink-0">
                                <img src="{{ asset('images/innovators/ihf-2.jpg') }}"
                                     alt="Ngozi Akinola"
                                     class="w-full h-full object-cover"
                                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="w-full h-full bg-gradient-to-br from-pink-400 to-pink-600 rounded-full flex items-center justify-center text-white font-bold text-lg" style="display:none;">
                                    NA
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-bold text-gray-900">Ngozi Akinola</h3>
                                <p class="text-sm text-gray-600">Legal & Policy Advisor</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded-full">2023</span>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2 py-1 rounded-full">Implemented</span>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Regulatory Knowledge Base</h4>
                        <p class="text-gray-600 text-sm">Built a searchable database of regulatory precedents and interpretations, improving consistency in decision-making across regions.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-nmdpra-blue text-white py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h3 class="text-2xl font-bold mb-4">Nigerian Midstream and Downstream Petroleum Regulatory Authority</h3>
                    <p class="text-gray-400 mb-8">Internal Innovation Hub Programme</p>
                    <div class="flex justify-center space-x-8 mb-8">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">About NMDPRA</a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">Programme Guidelines</a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">Contact Support</a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">FAQs</a>
                    </div>
                    <div class="border-t border-white-800 pt-8">
                        <p class="text-gray-400">
                            © 2026 NMDPRA. All rights reserved. | Empowering regulatory excellence through innovation
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Smooth scrolling script -->
        <script>
            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            // Animate counters
            function animateCounters() {
                const counters = document.querySelectorAll('.stat-counter');
                counters.forEach(counter => {
                    const target = parseInt(counter.textContent);
                    const increment = target / 100;
                    let current = 0;

                    const timer = setInterval(() => {
                        current += increment;
                        if (current >= target) {
                            current = target;
                            clearInterval(timer);
                        }
                        counter.textContent = Math.floor(current) + (counter.textContent.includes('%') ? '%' : '');
                    }, 20);
                });
            }

            // Trigger animation when page loads
            window.addEventListener('load', animateCounters);

            // Hero Slider Functionality
            let slideIndex = 0;
            const slides = document.querySelectorAll('.slide');
            const indicators = document.querySelectorAll('.indicator');
            let slideInterval;

            function showSlide(index) {
                // Hide all slides
                slides.forEach(slide => slide.classList.remove('active'));
                indicators.forEach(indicator => indicator.classList.remove('active'));

                // Show current slide
                slides[index].classList.add('active');
                indicators[index].classList.add('active');
            }

            function nextSlide() {
                slideIndex = (slideIndex + 1) % slides.length;
                showSlide(slideIndex);
            }

            function previousSlide() {
                slideIndex = slideIndex === 0 ? slides.length - 1 : slideIndex - 1;
                showSlide(slideIndex);
            }

            function currentSlide(index) {
                slideIndex = index - 1;
                showSlide(slideIndex);
                resetAutoSlide();
            }

            function startAutoSlide() {
                slideInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
            }

            function resetAutoSlide() {
                clearInterval(slideInterval);
                startAutoSlide();
            }

            // Initialize slider
            document.addEventListener('DOMContentLoaded', function() {
                showSlide(0);
                startAutoSlide();

                // Pause auto-slide on hover
                const heroSlider = document.querySelector('.hero-slider');
                heroSlider.addEventListener('mouseenter', () => clearInterval(slideInterval));
                heroSlider.addEventListener('mouseleave', startAutoSlide);
            });
        </script>
    </body>
</html>
