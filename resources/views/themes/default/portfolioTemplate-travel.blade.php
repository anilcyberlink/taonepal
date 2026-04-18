@extends('themes.default.common.master')
@section('post_title', $data->category)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')

<div class="py-16 md:py-24">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-14">
            <div class="ornament mb-4">
                <span class="font-display text-xs tracking-[0.3em] text-gold uppercase">
                    Tao Pilgrimage
                </span>
            </div>
            <h2 class="font-serif text-primary font-bold text-4xl mb-4">
                {{ $data->category_caption }}
            </h2>
        </div>
        <div class="max-w-6xl mx-auto px-6">
            <div class="space-y-12">
                @foreach($portfolios as $row)
                    @if($loop->odd)
                        <div class="bg-card border border-border rounded-[2px] overflow-hidden transitiona-all duration-300 ease-in-out shadow-sm hover:shadow-2xl overflow-hidden">
                            <div class="grid lg:grid-cols-2">
                                <div class="p-10">
                                    <div class="font-display text-gold text-xs tracking-[0.3em] uppercase mb-3">{{ $row->sub_title }}
                                    </div>
                                    <h2 class="font-display font-bold text-primary tracking-wide text-2xl mb-4">{{ $row->title }}</h2>
                                    <p class="font-body text-muted-foreground text-lg mb-5">
                                        {{ $row->brief }}
                                    </p>
                                    <a href="{{ route('page.portfoliodetail', $row->uri) }}">
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
                                    <img src="{{ $row->thumbnail ? asset('uploads/medium/'.$row->thumbnail) : asset('themes-assets/images/branch_2.jpg') }}" alt="{{ $row->title }}" class="w-full h-full min-h-72 object-cover" />
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="bg-card border border-border rounded-[2px] overflow-hidden transitiona-all duration-300 ease-in-out shadow-sm hover:shadow-2xl overflow-hidden">
                            <div class="grid lg:grid-cols-2">
                                <div>
                                    <img src="{{ $row->thumbnail ? asset('uploads/medium/'.$row->thumbnail) :  asset('themes-assets/images/branch_2.jpg') }}" alt="{{ $row->title }}" class="w-full h-full min-h-72 object-cover" />
                                </div>
                                <div class="p-10">
                                    <div class="font-display text-gold text-xs tracking-[0.3em] uppercase mb-3">{{ $row->sub_title }}
                                    </div>
                                    <h2 class="font-display font-bold text-primary tracking-wide text-2xl mb-4">{{ $row->title }}</h2>
                                    <p class="font-body text-muted-foreground text-lg mb-5">
                                        {{ $row->brief }}
                                    </p>
                                    <a href="{{ route('page.portfoliodetail', $row->uri) }}">
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
