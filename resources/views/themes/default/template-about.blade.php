@extends('themes.default.common.master')
@section('post_title', $data->post_title)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')

<!-- Main Content -->
<section class="py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-3 gap-12">

            <!-- Left: Main Content -->
            <div class="md:col-span-2 space-y-8">

                <!-- Hero Image -->
                <div class="rounded-lg overflow-hidden h-96 bg-muted flex items-center justify-center text-8xl">
                    <img src="{{ $data->banner ? asset('uploads/medium/' . $data->banner) : asset('themes-assets/images/image_1.jpeg') }}" alt="{{ $data->post_title }}" class="w-full h-full object-cover" />
                </div>

                <!-- Program Overview -->

                <div class="grid md:grid-cols-1 gap-8">

                    <div class="rounded-lg p-6 bg-accent-mixed-10">
                        <h2 class="font-bold text-lg text-foreground mb-4">{{ $data->post_title }}</h2>
                        <ul class="space-y-2">
                            {!! $data->post_excerpt !!}
                        </ul>
                    </div>
                </div>
                <div class="rounded-lg border border-border bg-card p-8">
                    <p class="text-md text-muted-foreground mb-6 leading-relaxed">
                        {!! $data->post_content !!}
                    </p>
                </div>
            </div>
            <!-- Right: Sidebar -->
            <div class="space-y-6">
                <div class="rounded-lg border border-border bg-card p-6">
                    <h3 class="text-xl font-bold mb-4 text-foreground font-display">Related Posts</h3>
                    <div class="space-y-3">
                        @foreach ($related as $row)
                            <a href="{{ route('page.pagedetail', $row->uri) }}"
                                class="block p-3 rounded-lg border border-border hover:bg-muted transition-colors">
                                <p class="font-semibold text-foreground text-sm">{{ $row->post_title }}</p>
                                <p class="text-xs text-muted-foreground">{{ $row->sub_title }}</p>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop
