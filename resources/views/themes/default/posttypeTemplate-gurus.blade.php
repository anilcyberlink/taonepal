@extends('themes.default.common.master')
@section('post_title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')

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
