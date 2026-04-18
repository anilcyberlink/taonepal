@extends('themes.default.common.master')
@section('post_title', $data->post_title)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')

<div class="relative w-full py-12 md:py-20 lg:py-28 overflow-hidden"
     style="background-image: url('{{ $data->banner ? asset('uploads/medium/'.$data->banner) : asset('themes-assets/images/1.jpg') }}'); background-size: cover; background-position: center;">
    <!-- Decorative blobs -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 right-0 w-96 h-96 rounded-full bg-primary-mixed blur-[64px]"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 rounded-full bg-secondary-mixed blur-[64px]"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Content -->
        <div class="text-center max-w-3xl mx-auto">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-foreground mb-4 font-display">
                {{ $data->post_type }}
            </h1>
            <div class="text-lg text-muted-foreground mb-8 font-body">
                <a href="{{ url('/') }}" class="hover:text-foreground transition-colors">
                    Home/
                </a>
                <span class="text-muted-foreground"> {{ $data->post_type }} </span>
            </div>
            <!-- Decorative divider -->
            <div class="w-16 h-1 mx-auto my-8 rounded-full bg-primary-accent-gradient"></div>
        </div>

    </div>
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
                "The Tao that can be told is not the eternal Tao" — Lao Tzu
            </p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            <div class="bg-card border border-border overflow-hidden transition-transform duration-300 ease-in-out hover:-translate-y-1 hover:shadow-sm p-8 text-center">
                <div class="text-5xl mb-5">☯</div>
                <h3 class="text-primary text-lg font-semibold mb-3">Harmony</h3>
                <p class="text-muted-foreground text-sm">Living in balance with the natural order, aligning body,
                    mind, and spirit with the universal flow of existence.</p>
            </div>
            <div class="bg-card border border-border overflow-hidden transition-transform duration-300 ease-in-out hover:-translate-y-1 hover:shadow-sm p-8 text-center">
                <div class="text-5xl mb-5">🪷</div>
                <h3 class="text-primary text-lg font-semibold mb-3">Compassion</h3>
                <p class="text-muted-foreground text-sm">Cultivating love and kindness toward all beings — the
                    foundation of spiritual life and community service.</p>
            </div>
            <div class="bg-card border border-border overflow-hidden transition-transform duration-300 ease-in-out hover:-translate-y-1 hover:shadow-sm p-8 text-center">
                <div class="text-5xl mb-5">✨</div>
                <h3 class="text-primary text-lg font-semibold mb-3">Wisdom</h3>
                <p class="text-muted-foreground text-sm">Seeking truth through practice, meditation, and the
                    teachings of realized masters who have walked the path before us.</p>
            </div>
        </div>

    </div>
</section>

<div class="py-16 md:py-24">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-14">
            <div class="ornament mb-4">
                <span class="font-display text-xs tracking-[0.3em] text-gold uppercase">
                    Tao Pilgrimage
                </span>
            </div>
            <h2 class="font-serif text-primary font-bold text-4xl mb-4">
                {{ $data->caption }}
            </h2>
        </div>
        <div class="max-w-6xl mx-auto px-6">
            <div class="space-y-12">
                @foreach($posts as $row)
                    @if($loop->odd)
                        <div class="bg-card border border-border rounded-[2px] overflow-hidden transitiona-all duration-300 ease-in-out shadow-sm hover:shadow-2xl overflow-hidden">
                            <div class="grid lg:grid-cols-2">
                                <div class="p-10">
                                    <div class="font-display text-gold text-xs tracking-[0.3em] uppercase mb-3"></div>
                                    <h2 class="font-display font-bold text-primary tracking-wide text-2xl mb-4">{{ $row->post_title }}</h2>
                                    <p class="font-body text-muted-foreground text-lg mb-5">
                                        {!! $row->post_excerpt !!}
                                    </p>
                                    <a href="{{ route('page.pagedetail', $row->uri) }}">
                                        <button class="flex items-center gap-2 bg-primary dark:hover:text-background text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-icon lucide-eye">
                                                <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/>
                                                <circle cx="12" cy="12" r="3"/>
                                            </svg>
                                            <span class="hidden md:inline">View Details</span>
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <img src="{{ $row->page_thumbnail ? asset('uploads/medium/' . $row->page_thumbnail) : asset('themes-assets/images/branch_2.jpg') }}" alt="{{ $row->post_title }}" class="w-full h-full min-h-72 object-cover" />
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="bg-card border border-border rounded-[2px] overflow-hidden transitiona-all duration-300 ease-in-out shadow-sm hover:shadow-2xl overflow-hidden">
                            <div class="grid lg:grid-cols-2">
                                <div>
                                    <img src="{{ $row->page_thumbnail ? asset('uploads/medium/' . $row->page_thumbnail) : asset('themes-assets/images/gallery_8.jpg') }}" alt="{{ $row->post_title }}" class="w-full h-full min-h-72 object-cover" />
                                </div>
                                <div class="p-10">
                                    <div class="font-display text-gold text-xs tracking-[0.3em] uppercase mb-3"></div>
                                    <h2 class="font-display font-bold text-primary tracking-wide text-2xl mb-4">{{ $row->post_title }}</h2>
                                    <p class="font-body text-muted-foreground text-lg mb-5">
                                        {!! $row->post_excerpt !!}
                                    </p>

                                    <a href="{{ route('page.pagedetail', $row->uri) }}">
                                        <button class="flex items-center gap-2 bg-primary dark:hover:text-background text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-icon lucide-eye">
                                                <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/>
                                                <circle cx="12" cy="12" r="3"/>
                                            </svg>
                                            <span class="hidden md:inline">View Details</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>


@stop
