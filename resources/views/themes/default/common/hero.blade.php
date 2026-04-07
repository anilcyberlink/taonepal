<div class="relative w-full py-12 md:py-20 lg:py-28 overflow-hidden bg-hero-background">
    <!-- Decorative blobs -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 right-0 w-96 h-96 rounded-full bg-primary-mixed blur-[64px]"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 rounded-full bg-secondary-mixed blur-[64px]"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Breadcrumbs -->
        <div class="mb-8" aria-label="Breadcrumb">
            <ol class="flex items-center gap-2 text-sm">
                <li class="flex items-center gap-2">
                    <a href="{{ url('/') }}" class="text-muted-foreground hover:text-foreground transition-colors">Home</a>
                    <span class="text-muted-foreground">/</span>
                </li>
                <li>
                    <a class="text-muted-foreground hover:text-foreground transition-colors">About</a>
                </li>
            </ol>
        </div>

        <!-- Content -->
        <div class="text-center max-w-3xl mx-auto">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-foreground mb-4 font-display">
                About TAO Association of Nepal
            </h1>
            <p class="text-xl md:text-2xl text-primary mb-6 font-medium font-body">
                Our Journey of Spiritual Wisdom
            </p>
            <div class="text-lg text-muted-foreground mb-8 font-body">
                Optional description goes here
            </div>
            <!-- Decorative divider -->
            <div class="w-16 h-1 mx-auto my-8 rounded-full bg-primary-accent-gradient"></div>
        </div>

    </div>
</div>
