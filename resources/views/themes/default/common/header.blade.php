<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TAO Association of Nepal (TAN)</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;900&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&family=Noto+Sans+Devanagari:wght@300;400;500&display=swap"
        rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <link rel="stylesheet" href="{{ asset('themes-assets/css/globals.css') }}" />
    <link rel="stylesheet" href="{{ asset('themes-assets/css/styles.css') }}" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        background: 'var(--background)',
                        foreground: 'var(--foreground)',
                        card: 'var(--card)',
                        'card-foreground': 'var(--card-foreground)',
                        primary: 'var(--primary)',
                        'primary-foreground': 'var(--primary-foreground)',
                        secondary: 'var(--secondary)',
                        'secondary-foreground': 'var(--secondary-foreground)',
                        muted: 'var(--muted)',
                        'muted-foreground': 'var(--muted-foreground)',
                        accent: 'var(--accent)',
                        'accent-foreground': 'var(--accent-foreground)',
                        destructive: 'var(--destructive)',
                        border: 'var(--border)',
                        input: 'var(--input)',
                        ring: 'var(--ring)',
                        gold: 'var(--gold)',
                        'gold-light': 'var(--gold-light)',
                        crimson: 'var(--crimson)',
                        navy: 'var(--navy)',
                    },
                    fontFamily: {
                        display: ['Cinzel', 'serif'],
                        body: ['Cormorant Garamond', 'serif'],
                        deva: ['Noto Sans Devanagari', 'sans-serif'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.8s ease forwards',
                        'slide-up': 'slideUp 0.7s ease forwards',
                        'slide-in-left': 'slideInLeft 0.7s ease forwards',
                        'float': 'float 6s ease-in-out infinite',
                        'shimmer': 'shimmer 2.5s linear infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': {
                                opacity: 0
                            },
                            '100%': {
                                opacity: 1
                            }
                        },
                        slideUp: {
                            '0%': {
                                opacity: 0,
                                transform: 'translateY(30px)'
                            },
                            '100%': {
                                opacity: 1,
                                transform: 'translateY(0)'
                            }
                        },
                        slideInLeft: {
                            '0%': {
                                opacity: 0,
                                transform: 'translateX(-30px)'
                            },
                            '100%': {
                                opacity: 1,
                                transform: 'translateX(0)'
                            }
                        },
                        float: {
                            '0%,100%': {
                                transform: 'translateY(0)'
                            },
                            '50%': {
                                transform: 'translateY(-12px)'
                            }
                        },
                        shimmer: {
                            '0%': {
                                backgroundPosition: '-200% 0'
                            },
                            '100%': {
                                backgroundPosition: '200% 0'
                            }
                        },
                    },
                    backgroundColor: {
                        'primary-mixed': 'color-mix(in srgb, var(--primary) 5%, transparent)',
                        'primary-mixed-10': 'color-mix(in srgb, var(--primary) 10%, transparent)',
                        'accent-mixed-10': 'color-mix(in srgb, var(--accent) 10%, transparent)',
                        'secondary-mixed': 'color-mix(in srgb, var(--secondary) 5%, transparent)',
                    },
                    backgroundImage: {
                        'hero-background': 'linear-gradient(to bottom, color-mix(in srgb, var(--primary) 10%, transparent), color-mix(in srgb, var(--accent) 5%, transparent))',
                        'primary-accent-gradient': 'linear-gradient(to right, var(--primary), var(--accent), var(--primary))',
                        'primary-transparent-gradient': 'linear-gradient(to bottom, var(--primary), transparent)',
                    }
                }
            }
        };
    </script>

</head>

<body class="font-sans antialiased">
    <div class="flex flex-col min-h-screen">
        <nav id="navbar" class="sticky top-0 z-50 w-full transition-all duration-300">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16 md:h-20">

                    <!-- Logo -->
                    <a href="/" class="flex items-center gap-2 flex-shrink-0">
                        <!-- Mobile Logo -->
                        <div class="md:hidden w-10 h-10">
                            <img src="{{ asset('themes-assets/images/logo.png') }}" alt="TAO Logo" width="40"
                                height="40" class="w-full h-full" />
                        </div>
                        <!-- Desktop Logo -->
                        <div class="hidden md:block h-16">
                            <img src="{{ asset('themes-assets/images/logo-full.jpeg') }}" alt="TAO Association of Nepal"
                                height="64" width="300" class="h-full w-auto" />
                        </div>
                    </a>

                    <!-- Desktop Navigation -->
                    <div class="hidden md:flex items-center gap-1 flex-1 ml-12">

                        <a href="{{ url('/') }}" class="px-3 py-2 text-sm font-medium text-foreground hover:text-primary transition-colors">Home</a>
                        @foreach ($navigations as $row)
                            <a href="{{ url('tao/' . posttype_url($row->uri)) }}"
                                class="px-3 py-2 text-sm font-medium text-foreground hover:text-primary transition-colors">{{ $row->post_type }}</a>
                        @endforeach
                        <a href="{{ route('gallery') }}"
                                class="px-3 py-2 text-sm font-medium text-foreground hover:text-primary transition-colors">Galleries</a>

                        <!-- Programs with submenu -->
                        @if($programs->count() > 0)
                            <div class="relative nav-group">
                                <a class="px-3 py-2 text-sm font-medium text-foreground hover:text-primary transition-colors">Programs</a>
                                <div
                                    class="submenu absolute left-0 top-full mt-0 w-48 bg-white border border-gray-200 rounded-lg shadow-lg py-2">
                                    @foreach($programs as $program)
                                        <a href="{{ route('page.program',$program->uri) }}"
                                            class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100 hover:text-gray-900">{{ $program->category }}</a>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                    </div>

                    <!-- Right Actions -->
                    <div class="flex items-center gap-2 md:gap-4">

                        <!-- Search -->
                        {{-- <a href="/search">
                            <button
                                class="h-10 w-10 flex items-center justify-center rounded-md hover:bg-gray-100 dark:hover:!text-background transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-search-icon lucide-search">
                                    <path d="m21 21-4.34-4.34" />
                                    <circle cx="11" cy="11" r="8" />
                                </svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </a> --}}

                        <!-- Dark Mode Toggle -->
                        <button id="theme-toggle"
                            class="h-9 w-9 flex items-center justify-center rounded-md hover:bg-gray-100 dark:hover:!text-background transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" id="icon-moon" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-moon-icon lucide-moon">
                                <path
                                    d="M20.985 12.486a9 9 0 1 1-9.473-9.472c.405-.022.617.46.402.803a6 6 0 0 0 8.268 8.268c.344-.215.825-.004.803.401" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" id="icon-sun"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-sun-icon lucide-sun">
                                <circle cx="12" cy="12" r="4" />
                                <path d="M12 2v2" />
                                <path d="M12 20v2" />
                                <path d="m4.93 4.93 1.41 1.41" />
                                <path d="m17.66 17.66 1.41 1.41" />
                                <path d="M2 12h2" />
                                <path d="M20 12h2" />
                                <path d="m6.34 17.66-1.41 1.41" />
                                <path d="m19.07 4.93-1.41 1.41" />
                            </svg>
                            <span class="sr-only">Toggle theme</span>
                        </button>

                        <!-- Donate Button -->
                        <a href="/donations.php" class="hidden sm:flex">
                            <button
                                class="flex items-center gap-2 bg-primary dark:hover:text-background text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-heart-icon lucide-heart">
                                    <path
                                        d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5" />
                                </svg>
                                <span class="hidden md:inline">Donate</span>
                            </button>
                        </a>

                        <!-- Mobile Menu Toggle -->
                        <button id="mobile-menu-btn"
                            class="md:hidden h-10 w-10 flex items-center justify-center rounded-md hover:bg-gray-100 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" id="icon-menu"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-menu-icon lucide-menu">
                                <path d="M4 5h16" />
                                <path d="M4 12h16" />
                                <path d="M4 19h16" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" id="icon-close"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x-icon lucide-x">
                                <path d="M18 6 6 18" />
                                <path d="m6 6 12 12" />
                            </svg>
                            <span class="sr-only">Open menu</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Drawer -->
            <div id="mobile-menu" class="hidden md:hidden border-t border-gray-200 bg-white px-4 pb-6">
                <div class="flex flex-col gap-4 mt-8">

                    <a href="{{ url('/') }}" class="text-gray-900 hover:text-violet-600 font-medium">Home</a>
                    @foreach ($navigations as $row)
                        <a href="{{ url('tao/' . posttype_url($row->uri)) }}" class="text-gray-900 hover:text-violet-600 font-medium">{{ $row->post_type }}</a>
                    @endforeach

                    <!-- Programs submenu (expanded in mobile) -->
                    @if($programs->count() > 0)
                        <div>
                            <p class="font-semibold text-gray-900 mb-2">Programs</p>
                            <div class="pl-4 space-y-2">
                                @foreach($programs as $program)
                                    <a href="{{ route('page.program',$program->uri) }}" class="block text-sm text-gray-500 hover:text-violet-600">{{ $program->category }}</a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <a href="{{ route('gallery') }}" class="text-gray-900 hover:text-violet-600 font-medium">Galleries</a>

                    <a href="/donations.php" class="mt-4">
                        <button
                            class="w-full flex items-center justify-center gap-2 bg-violet-600 hover:bg-violet-500 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-heart-icon lucide-heart">
                                <path
                                    d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5" />
                            </svg>
                            Donate
                        </button>
                    </a>

                </div>
            </div>
        </nav>

        <main class="flex-1">
