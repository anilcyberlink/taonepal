@extends('themes.default.common.master')
@section('content')

    {{-- Banner  --}}
    <div class="swiper hero-slider w-full h-[400px] md:h-[500px] lg:h-[600px]">
        <div class="swiper-wrapper">

            <!-- Slide 1 -->
            @foreach ($banners as $row)
                <div class="swiper-slide relative">
                    <img src="{{ asset('uploads/banners/' . $row->picture) }}" alt="{{ $row->title }}"
                        class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                        <div class="text-center text-white px-4">
                            <h1 class="text-4xl md:text-6xl font-bold mb-4">
                                {{ $row->title }}
                            </h1>
                            <p class="text-xl">{{ $row->caption }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <!-- Tao Philosophy -->
    <section class="py-16 md:py-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14">
                <div class="ornament mb-4">
                    <span class="font-display text-xs tracking-[0.3em] text-gold uppercase">Our Philosophy</span>
                </div>
                <h2 class="font-serif text-primary font-bold text-4xl mb-4">The Way of Tao</h2>
                <p class="text-muted-foreground font-body text-xl max-w-2xl mx-auto italic">
                    {{ $setting->quote }}
                </p>
            </div>
            <div class="grid lg:grid-cols-3 gap-8">
                <div
                    class="bg-card border border-border overflow-hidden transition-transform duration-300 ease-in-out hover:-translate-y-1 hover:shadow-sm p-8 text-center">
                    <div class="text-5xl mb-5">☯</div>
                    <h3 class="text-primary text-lg font-semibold mb-3">Harmony</h3>
                    <p class="text-muted-foreground text-sm">{{ $setting->harmony }}</p>
                </div>
                <div
                    class="bg-card border border-border overflow-hidden transition-transform duration-300 ease-in-out hover:-translate-y-1 hover:shadow-sm p-8 text-center">
                    <div class="text-5xl mb-5">🪷</div>
                    <h3 class="text-primary text-lg font-semibold mb-3">Compassion</h3>
                    <p class="text-muted-foreground text-sm">{{ $setting->compassion }}</p>
                </div>
                <div
                    class="bg-card border border-border overflow-hidden transition-transform duration-300 ease-in-out hover:-translate-y-1 hover:shadow-sm p-8 text-center">
                    <div class="text-5xl mb-5">✨</div>
                    <h3 class="text-primary text-lg font-semibold mb-3">Wisdom</h3>
                    <p class="text-muted-foreground text-sm">{{ $setting->wisdom }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    @if($about)
        <section class="py-16 md:py-24 bg-muted">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-14">
                    <div class="ornament mb-4">
                        <span class="font-display text-xs tracking-[0.3em] text-gold uppercase">Who We Are</span>
                    </div>
                    <h2 class="font-serif text-primary font-bold text-4xl mb-4">Mission &amp; Vision</h2>
                    <p class="text-muted-foreground font-body text-xl max-w-2xl mx-auto italic">
                        {{ $about->caption }}
                    </p>
                </div>
                <div class="grid md:grid-cols-2 gap-12">
                    @foreach($posts as $row)
                        <div class="rounded-lg border border-border bg-card p-8">
                            <h3 class="text-2xl font-bold text-foreground mb-4">{{ $row->post_title }}</h3>
                            <p class="text-muted-foreground leading-relaxed mb-4">
                                {!! $row->post_excerpt !!}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Tao Gallery -->
    <section class="py-16 md:py-24">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14">
                <div class="ornament mb-4">
                    <span class="font-display text-xs tracking-[0.3em] text-gold uppercase">Our Albums</span>
                </div>
                <h2 class="font-serif text-primary font-bold text-4xl mb-4">Glance Of Us</h2>
            </div>
            <div id="autoGallery" class="flex overflow-x-hidden pb-4">
                @foreach($galleries as $img)
                    <div class="gallery-item group">
                        <img src="{{ $img->picture ? asset('uploads/galleries/' . $img->picture) : asset('themes-assets/images/branch_1.jpg') }}"
                            alt="{{ $img->caption }}"
                            class="w-full h-full object-cover transition duration-300 group-hover:scale-105" />
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-8">
                <a href="{{ route('gallery') }}"
                    class="bg-primary text-white font-display text-sm tracking-widest uppercase px-[2.2rem] py-[0.85rem] border border-primary cursor-pointer transition-all duration-300 ease-in-out inline-block no-underline hover:bg-transparent hover:text-primary">
                    View All Images
                </a>
            </div>
        </div>
    </section>

    <!-- DONATION CTA -->
    <section class="py-16 md:py-24 bg-primary-accent-gradient dark:bg-hero-background">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <!-- <div class="py-20 text-center relative overflow-hidden before:content-['☸'] before:absolute before:text-[600px] before:text-primary/5 before:right-[-120px] before:top-[-120px] before:pointer-events-none before:leading-none bg-primary-accent-gradient"> -->
                <div class="max-w-2xl mx-auto px-6 relative z-10">
                    <div class="text-6xl mb-6">🙏</div>
                    <h2 class="font-display text-white text-4xl font-bold mb-4">Support Our Sacred Mission</h2>
                    <p class="text-white/70 font-body text-xl mb-8">Your generosity helps us build temples, organize
                        seminars, and spread the teachings of Tao across Nepal and beyond.</p>
                    <a href="{{ route('donations') }}"
                        class="bg-gold text-white font-display text-sm tracking-widest uppercase px-[2.2rem] py-[0.85rem] border border-gold cursor-pointer transition-all duration-300 ease-in-out inline-block no-underline hover:bg-transparent hover:text-gold px-10 py-4">Donate
                        Now</a>
                </div>
            </div>
        </div>
    </section>
@stop
