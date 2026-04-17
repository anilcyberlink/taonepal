@extends('themes.default.common.master')
@section('post_title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
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

<!-- Gurus Grid -->
<div class="py-16 md:py-24">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-14">
            <div class="ornament mb-4">
                <span class="font-display text-xs tracking-[0.3em] text-gold uppercase">Our Teachers</span>
            </div>
            <h2 class="font-serif text-primary font-bold text-4xl mb-4">{{ $data->caption}}</h2>
            <p class="text-muted-foreground font-body text-xl max-w-2xl mx-auto italic">
                {!! $data->content !!}
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Guru Card -->
            @foreach($posts as $row)
                <a href="{{ route('page.pagedetail', $row->uri) }}" class="group">
                    <div class="overflow-hidden rounded-lg border border-border bg-card flex flex-col h-full transition-all duration-300 hover:shadow-lg">
                        <div class="h-64 flex items-center justify-center text-6xl bg-muted">
                            🧘
                        </div>
                        <div class="p-6 flex flex-col flex-1">
                            <h3 class="font-bold text-xl text-foreground mb-1 group-hover:text-primary transition-colors">
                                {{ $row->post_title }}
                            </h3>
                            <p class="text-sm font-medium mb-3 text-primary">{{ $row->sub_title }}</p>
                            <div class="text-sm text-muted-foreground flex-1 mb-4 line-clamp-3">
                                {!! $row->post_excerpt !!}
                            </div>
                            <button class="w-full py-2 px-4 rounded text-sm font-medium text-white transition-colors bg-primary">
                                Learn More
                            </button>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

@stop
