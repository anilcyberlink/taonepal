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
                <div class="rounded-lg overflow-hidden h-96 bg-muted flex items-center justify-center text-6xl">
                    <img src="{{ $data->banner ? asset('uploads/medium/' . $data->banner) : asset('themes-assets/images/gallery_8.jpg') }}" alt="{{ $data->post_title }}" class="w-full h-full object-cover" />
                </div>
                <!-- Contact Information -->
                <div class="rounded-lg border border-border bg-card p-8">
                    <h2 class="text-2xl font-bold mb-6 text-foreground font-display">Contact Information</h2>
                    <div class="space-y-4">
                        <div class="flex gap-3 items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 flex-shrink-0 mt-1 text-primary"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>
                            <div>
                                <p class="font-semibold text-foreground">Address</p>
                                <p class="text-muted-foreground">{{ $data->place}}</p>
                            </div>
                        </div>

                        <div class="flex gap-3 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 flex-shrink-0 text-primary"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.54 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
                            </svg>
                            <div>
                                <p class="font-semibold text-foreground">Phone</p>
                                <a href="tel:+{{ $data->phone }}" class="text-primary hover:underline">{{ $data->phone }}</a>
                            </div>
                        </div>

                        <div class="flex gap-3 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 flex-shrink-0 text-primary"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <rect width="20" height="16" x="2" y="4" rx="2" />
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                            </svg>
                            <div>
                                <p class="font-semibold text-foreground">Email</p>
                                <p class="text-primary hover:underline">{{ $data->email }}</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Regular Activities -->
                <div class="rounded-lg border border-border bg-card p-8">
                    <h2 class="text-2xl font-bold mb-6 text-foreground font-display">Regular Activities</h2>
                    <div class="space-y-3">
                        <div class="flex gap-3 items-start">
                            <div class="h-2 w-2 rounded-full bg-primary mt-2 flex-shrink-0"></div>
                            <span class="text-muted-foreground">Daily meditation sessions</span>
                        </div>
                        <div class="flex gap-3 items-start">
                            <div class="h-2 w-2 rounded-full bg-primary mt-2 flex-shrink-0"></div>
                            <span class="text-muted-foreground">Weekly philosophy classes</span>
                        </div>
                        <div class="flex gap-3 items-start">
                            <div class="h-2 w-2 rounded-full bg-primary mt-2 flex-shrink-0"></div>
                            <span class="text-muted-foreground">Monthly seminars</span>
                        </div>
                        <div class="flex gap-3 items-start">
                            <div class="h-2 w-2 rounded-full bg-primary mt-2 flex-shrink-0"></div>
                            <span class="text-muted-foreground">Yoga &amp; breathing exercises</span>
                        </div>
                    </div>
                </div>

                <!-- Map -->
                <div class="rounded-lg border border-border bg-card overflow-hidden h-96">
                    <iframe width="100%" height="100%" frameborder="0"
                        src="https://www.openstreetmap.org/export/embed.html?bbox=85.2800%2C27.7100%2C85.3000%2C27.7300&layer=mapnik&marker=27.7200%2C85.2900"
                        allowfullscreen loading="lazy">
                    </iframe>
                </div>

            </div>

            <!-- Right: Sidebar -->
            <div class="space-y-6">
                <!-- Get in Touch -->
                <div class="rounded-lg p-6 bg-primary dark:bg-muted text-white">
                    <h3 class="text-lg font-bold mb-4 font-display">Get in Touch</h3>
                    <p class="text-sm mb-6">
                        Have questions? Send us a message.
                    </p>
                    <a href=" ">
                        <button
                            class="w-full flex items-center justify-center gap-2 py-2 px-4 rounded text-sm font-medium transition-colors bg-background text-primary hover:text-black dark:text-white dark:hover:bg-white dark:hover:text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z" />
                            </svg>
                            Send Message
                        </button>
                    </a>
                </div>

                <!-- Other Locations -->
                <div class="rounded-lg border border-border bg-card p-6">
                    <h3 class="font-bold text-foreground mb-4 font-display">Other Locations</h3>
                    <div class="space-y-3">
                        @foreach ($related as $row)
                            <a href="{{ route('page.pagedetail', $row->uri) }}"
                                class="block p-3 rounded-lg border border-border hover:bg-muted transition-colors">
                                <p class="font-semibold text-foreground text-sm">{{ $row->post_title }}</p>
                                <p class="text-xs text-muted-foreground">{{ $row->place }}</p>
                            </a>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@stop
