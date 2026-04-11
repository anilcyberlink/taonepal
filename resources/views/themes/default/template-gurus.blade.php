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

                <!-- Profile Image -->
                <div class="rounded-lg overflow-hidden h-96 bg-muted flex items-center justify-center text-8xl">

                    @if($data->banner)
                        <img src="{{ asset('uploads/medium/' . $data->banner) }}" alt="{{ $data->post_title }}" class="w-full h-full object-cover" />
                    @else
                        🧘
                    @endif
                </div>

                <!-- Tabs -->
                <div>
                    <div class="grid grid-cols-3 gap-2 mb-6 bg-muted rounded-[1.5rem]">
                        @if(!empty($data->post_excerpt))
                            <button onclick="showTab('biography')" class="tab-btn px-4 py-2 transition-all duration-200 text-sm pointer text-muted-foreground dark:text-white bg-transparent w-full rounded-[1.5rem] hover:text-primary [&.active]:bg-primary [&.active]:text-primary-foreground active" data-tab="biography">Biography</button>
                        @endif

                        @if(!empty($data->post_content))
                            <button onclick="showTab('teachings')" class="tab-btn px-4 py-2 transition-all duration-200 text-sm pointer text-muted-foreground dark:text-white bg-transparent w-full rounded-[1.5rem] hover:text-primary [&.active]:bg-primary [&.active]:text-primary-foreground" data-tab="teachings">Teachings</button>
                        @endif
                        @if(!empty($data->post_content))
                            <button onclick="showTab('books')" class="tab-btn px-4 py-2 transition-all duration-200 text-sm pointer text-muted-foreground dark:text-white bg-transparent w-full rounded-[1.5rem] hover:text-primary [&.active]:bg-primary [&.active]:text-primary-foreground" data-tab="books">Works</button>
                        @endif
                    </div>

                    <!-- Biography -->
                    <div id="tab-biography" class="tab-content space-y-4 mt-6">
                        <div class="p-4 bg-card border border-border rounded-lg">
                            {!! $data->post_excerpt !!}
                        </div>
                    </div>

                    <!-- Teachings -->
                    <div id="tab-teachings" class="tab-content space-y-4 mt-6 hidden">
                        <div class="p-4 bg-card border border-border rounded-lg">
                            {!! $data->post_content !!}
                        </div>
                    </div>

                    <!-- Books / Works -->
                    <div id="tab-books" class="tab-content space-y-4 mt-6 hidden">
                        {{-- <p class="font-semibold text-foreground mb-3">Published Works</p> --}}
                        <div class="p-4 bg-card border border-border rounded-lg">
                            {!! $data->post_content !!}
                        </div>
                    </div>
                    <!-- Events -->
                </div>
            </div>

            <!-- Right: Sidebar -->
            <div class="space-y-6">
                <!-- About / Quick Info -->
                <div class="rounded-lg border border-border bg-card p-6">
                    <h3 class="text-xl font-bold mb-4 text-foreground font-display">Other Gurus</h3>
                    <div class="space-y-3">

                        @foreach ($related as $row)
                            <a href="{{ route('page.pagedetail', $row->uri) }}" class="group flex items-start gap-2">
                                <span class="mt-2 w-2 h-2 bg-gray-400 rounded-full group-hover:bg-blue-500 transition-colors"></span>

                                <div>
                                    <p class="text-foreground font-medium group-hover:text-blue-500 transition-colors">
                                        {{ $row->post_title }}
                                    </p>
                                    <p class="text-xs font-semibold text-muted-foreground uppercase tracking-wider group-hover:text-blue-400 transition-colors">
                                        {{ $row->sub_title }}
                                    </p>
                                </div>
                            </a>
                        @endforeach

                    </div>
                </div>

                <!-- Contact CTA -->
                <div class="rounded-lg p-6 bg-primary dark:bg-muted text-white">
                    <h4 class="font-bold mb-4 font-display">Learn from Guru {{ $data->post_title }}</h4>
                    <p class="text-sm mb-4">
                        Join an upcoming seminar or book a one-on-one session.
                    </p>
                    <a href=" ">
                        <button class="w-full py-2 px-4 rounded text-sm font-medium transition-colors bg-background text-primary hover:text-black dark:text-white dark:hover:bg-white dark:hover:text-black">
                            Get in Touch
                        </button>
                    </a>
                </div>

                <!-- Video -->
                {{-- <div class="rounded-lg border border-border bg-card p-6">
                    <h4 class="font-bold text-foreground mb-4 font-display">Video Messages</h4>
                    <div class="rounded-lg h-48 flex items-center justify-center bg-muted">
                        <p class="text-sm text-muted-foreground">Video coming soon</p>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
</section>

@stop
