@extends('themes.default.common.master')
@section('post_title', $data->category)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')

<div class="py-16 md:py-24">
    <div class="max-w-6xl mx-auto px-6">
        <!-- Upcoming -->
        <div class="text-center mb-14">
            <div class="ornament mb-4">
                <span class="font-display text-xs tracking-[0.3em] text-gold uppercase">UPCOMING</span>
            </div>
            <h2 class="font-serif text-primary font-bold text-left text-4xl mb-4">Upcoming Events</h2>
        </div>
        <div class="space-y-5">
            @foreach($portfolios as $row)
                <div class="bg-card border border-border rounded-[2px] overflow-hidden
                transition-transform transition-shadow duration-300 ease-in-out
                shadow-md hover:-translate-y-1 hover:shadow-lg flex flex-col md:flex-row overflow-hidden">
                    <div class="bg-primary dark:bg-muted p-6 flex flex-col items-center justify-center min-w-28 text-center">
                        <div class="font-display text-gold text-2xl font-bold">{{ $row->sub_title }}</div>
                        {{-- <div class="font-display text-white/70 text-xs tracking-widest mt-1">APR</div>
                        <div class="font-display text-white/50 text-xs">2025</div> --}}
                    </div>
                    <div class="p-6 flex-1">
                        <div class="flex flex-wrap gap-2 items-center mb-2">
                            <h3 class="font-display text-primary text-lg font-semibold">{{ $row->title }}</h3>
                            <span
                                class="bg-muted text-muted-foreground text-xs font-display px-2 py-0.5 tracking-widest">SEMINAR</span>
                        </div>
                        <p class="font-body text-muted-foreground mb-3">{{ $row->brief }}</p>
                        <div class="flex flex-wrap gap-4 text-sm text-muted-foreground font-body">
                            <span>{!! $row->content !!}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<section class="py-16 md:py-24 bg-muted">
    <div class="max-w-6xl mx-auto px-6">
        <!-- Past events -->
        <div class="text-center mb-14">
            <div class="ornament mb-4">
                <span class="font-display text-xs tracking-[0.3em] text-gold uppercase">ARCHIVE</span>
            </div>
            <h2 class="font-serif text-primary font-bold text-left text-4xl mb-4">Past Events</h2>
        </div>
        <div class="grid md:grid-cols-2 gap-5">
            @foreach($portfolios as $row)
                <div class="bg-card border border-border rounded-[2px] overflow-hidden
                transition-transform transition-shadow duration-300 ease-in-out
                shadow-md hover:-translate-y-1 hover:shadow-lg p-5">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="bg-muted text-muted-foreground text-xs font-display px-2 py-0.5">{{ $row->sub_title }}</span>
                        <span class="font-display text-primary text-sm font-semibold">{{ $row->title }}</span>
                    </div>
                    <p class="font-body text-muted-foreground text-sm">{{ $row->brief }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>


@stop
