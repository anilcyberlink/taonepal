@extends('themes.default.common.master')
@section('post_title', $data->post_title)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')

<div class="py-16 md:py-24">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-14">
            <div class="ornament mb-4">
                <span class="font-display text-xs tracking-[0.3em] text-gold uppercase">Where We Are</span>
            </div>
            <h2 class="font-serif text-primary font-bold text-4xl mb-4">Our Locations</h2>
        </div>
        <div class="grid lg:grid-cols-2 gap-8">
            <!-- Kathmandu HQ -->
            @foreach($posts->take(2) as $row)
                <a href="{{ route('page.pagedetail', $row->uri) }}"
                    class="bg-card border border-border rounded-[2px] transition-transform transition-shadow duration-300 ease-in-out shadow-sm hover:-translate-y-1 hover:shadow-lg overflow-hidden">
                    <!-- <img src="/images/branch_1.jpg" class="w-full h-48 object-cover" /> -->
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-2">
                            @if($loop->first)
                                <span class="bg-destructive text-white text-xs font-display px-2 py-0.5 tracking-widest">
                                    HEADQUARTERS
                                </span>
                            @else
                                <span class="bg-primary text-white text-xs font-display px-2 py-0.5 tracking-widest">BRANCH</span>
                            @endif
                        </div>
                        <h3 class="font-display text-primary text-xl font-bold mb-2">{{ $row->post_title }}</h3>
                        <p class="text-sm text-muted-foreground mb-3">{{ $row->sub_title }}</p>
                        <div class="text-sm text-sm text-muted-foreground space-y-1">
                            <div>📍 {{ $row->place }}</div>
                            <div>📞 {{ $row->phone }}</div>
                            <div>✉ {{ $row->email }}</div>
                        </div>
                        <div class="mt-4">
                            <iframe class="border-0 w-full h-[300px] grayscale-[20%] rounded"
                                src="https://maps.google.com/maps?q=Sitapaila,Kathmandu,Nepal&output=embed" allowfullscreen
                                loading="lazy"></iframe>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>

<!-- Other branches list -->
<section class="py-16 md:py-24 bg-muted">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-14">
            <div class="ornament mb-4">
                <span class="font-display text-xs tracking-[0.3em] text-gold uppercase">Our Branches</span>
            </div>
            <h2 class="font-serif text-primary font-bold text-4xl mb-4">Other Branch Locations</h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($posts->skip(2) as $row)
                <a href="{{ route('page.pagedetail', $row->uri) }}"
                    class="bg-card border border-border rounded-[2px] overflow-hidden transition-all duration-300 shadow-sm hover:-translate-y-1 hover:shadow-lg p-5">
                    <h4 class="font-display text-primary text-base font-semibold mb-1">{{ $row->post_title }}</h4>
                    <p class="text-muted-foreground text-sm text-sm">{{ $row->place }}</p>
                    <p class="text-xs text-muted-foreground mt-2"> 📞{{ $row->phone }}</p>
                </a>
            @endforeach
        </div>
    </div>
</section>
@stop
