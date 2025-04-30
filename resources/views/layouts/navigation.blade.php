<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <style>
        /* Base styles */
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }
        
        /* Navbar styles */
        nav {
            background-color: transparent;
            position: absolute;
            width: 100%;
            z-index: 50;
            transition: all 0.3s ease;
        }
        
        nav.scrolled {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: fixed;
        }
        
        /* Navbar link colors */
        .nav-link {
            color: white !important;
            transition: color 0.3s ease;
        }
        
        .nav-link:hover {
            color: rgba(255,255,255,0.8) !important;
        }
        
        nav.scrolled .nav-link {
            color: #333 !important;
        }
        
        nav.scrolled .nav-link:hover {
            color: #000 !important;
        }
        
        /* Logo text color */
        .logo-text {
            color: white;
            transition: color 0.3s ease;
        }
        
        nav.scrolled .logo-text {
            color: #333;
        }
        
        /* Logout button styles */
        .btn-dex {
            background: transparent;
            border: none;
            cursor: pointer;
            color: white !important;
            transition: color 0.3s ease;
        }
        
        nav.scrolled .btn-dex {
            color: #333 !important;
        }
        
        .btn-dex:hover {
            opacity: 0.8;
        }
        
        /* Hero section styles */
        .hero {
            height: 100vh;
            width: 100%;
            position: relative;
            background-image: url("/images/image.png");            
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.3);
        }
        
        .hero-content {
            position: relative;
            z-index: 10;
            max-width: 800px;
            padding: 0 20px;
        }
        
        .hero h2 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
        }
        
        .hero p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
        }
        
        .shop-now-btn {
            background-color: white;
            color: #333;
            padding: 12px 30px;
            border-radius: 4px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .shop-now-btn:hover {
            background-color: #f8f8f8;
            transform: translateY(-2px);
        }
        
        /* Content styles */
        .content {
            padding-top: 100vh;
        }
        
        /* Utility classes */
        [x-cloak] { display: none !important; }
    </style>
</head>
<body>
    <div class="relative">
        <!-- Navigation -->
        <nav class="" x-data="{ isOpen: false }" id="mainNav">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <!-- Logo -->
                    <div class="flex-shrink-0 group" style="margin-top: 40px;">
                        <a href="{{ route('welcome') }}" class="flex flex-col items-center no-underline">
                            <div class="relative mb-1">
                                <div class="absolute inset-0 rounded-full bg-purple-100 blur-md opacity-0 group-hover:opacity-70 transition-all duration-500 -z-10"></div>
                                <img src="{{ asset('images/logo.png') }}" 
                                    alt="EleganceVibe Logo" 
                                    class="h-16 w-16 rounded-full object-cover border-2 border-white shadow-lg transition-all duration-500 ease-out group-hover:scale-110 group-hover:rotate-3">
                            </div>
                            <span class="relative overflow-hidden -mt-1">
                                <span class="text-xl tracking-wider logo-text" style="font-family: 'Kaushan Script'">
                                    EleganceVibe
                                    <span class="absolute bottom-0 left-0 h-0.5 w-0 group-hover:w-full transition-all duration-700 ease-in-out" style="background-color: #896527;"></span>
                                </span>
                            </span>
                        </a>
                    </div>

                    <!-- Desktop Links -->
                    <div class="hidden md:flex space-x-8">
                        <x-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')" class="nav-link font-medium">
                            {{ __('Accueil') }}
                        </x-nav-link>
                        <x-nav-link href="#" class="nav-link">
                            {{ __('Services') }}
                        </x-nav-link>
                        <x-nav-link href="#" class="nav-link">
                            {{ __('Gallerie') }}
                        </x-nav-link>
                        <x-nav-link 
                            href="{{ route('productClient') }}" 
                            :active="request()->routeIs('productClient')" 
                            class="nav-link font-semibold">  
                            {{ __("Produits") }}
                        </x-nav-link>
                        <x-nav-link href="#" class="nav-link">
                            {{ __('Contacts') }}
                        </x-nav-link>
                    </div>

                    <!-- Desktop Buttons -->
                    <div class="hidden md:flex items-center space-x-4">
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn-dex">
                                    {{ __('Déconnexion') }}
                                </button>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="nav-link">
                                {{ __('Se connecter') }}
                            </a>
                            <a href="{{ route('register') }}" class="ml-4 bg-gray-800 text-white px-4 py-2 rounded-md hover:bg-gray-700">
                                {{ __('S\'inscrire') }}
                            </a>
                        @endauth
                    </div>

                    <!-- Mobile Menu Button -->
                    <div class="md:hidden flex items-center">
                        <button @click="isOpen = !isOpen" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-gray-200 focus:outline-none nav-button">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': isOpen, 'inline-flex': !isOpen}" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': !isOpen, 'inline-flex': isOpen}" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu -->
                <div class="md:hidden" x-show="isOpen" x-cloak @click.away="isOpen = false">
                    <div class="px-2 pt-2 pb-3 space-y-1 bg-white shadow-lg">
                        <x-responsive-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')">
                            {{ __('Accueil') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link href="#">
                            {{ __('Services') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link href="#">
                            {{ __('Gallerie') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link href="{{ route('products.index') }}" :active="request()->routeIs('products.index')">
                            {{ __('Produits') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link href="#">
                            {{ __('Contacts') }}
                        </x-responsive-nav-link>

                        <div class="border-t pt-4 mt-4 space-y-2">
                            @auth
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block w-full px-3 py-2 text-left text-gray-600 hover:text-gray-900">
                                        {{ __('Déconnexion') }}
                                    </button>
                                </form>
                            @else
                                <a href="{{ route('login') }}" class="block px-3 py-2 text-gray-600 hover:text-gray-900">
                                    {{ __('Se connecter') }}
                                </a>
                                <a href="{{ route('register') }}" class="block px-3 py-2 text-white bg-gray-800 rounded-md hover:bg-gray-700">
                                    {{ __('S\'inscrire') }}
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="hero">
            <div class="hero-content">
                <h2>Sublimez votre beauté naturelle</h2>
                <p>Découvrez notre collection soigneusement sélectionnée de soins de la peau et d'essentiels beauté haut de gamme.</p>
                <a href="{{ route('products.index') }}" class="shop-now-btn">Shop now</a>
            </div>
        </div>
    </div>

    <!-- Main Content (pushes content below hero) -->
    <div class="content">
        <!-- Your page content goes here -->
    </div>

    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const nav = document.getElementById('mainNav');
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });
    </script>