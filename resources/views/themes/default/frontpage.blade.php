@extends('themes.default.common.master')
@section('content')

{{-- Banner --}}
@include('themes.default.common.hero')
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
            <div
                class="bg-card border border-border overflow-hidden transition-transform duration-300 ease-in-out hover:-translate-y-1 hover:shadow-sm p-8 text-center">
                <div class="text-5xl mb-5">☯</div>
                <h3 class="text-primary text-lg font-semibold mb-3">Harmony</h3>
                <p class="text-muted-foreground text-sm">Living in balance with the natural order, aligning body,
                    mind, and spirit with the universal flow of existence.</p>
            </div>
            <div
                class="bg-card border border-border overflow-hidden transition-transform duration-300 ease-in-out hover:-translate-y-1 hover:shadow-sm p-8 text-center">
                <div class="text-5xl mb-5">🪷</div>
                <h3 class="text-primary text-lg font-semibold mb-3">Compassion</h3>
                <p class="text-muted-foreground text-sm">Cultivating love and kindness toward all beings — the
                    foundation of spiritual life and community service.</p>
            </div>
            <div
                class="bg-card border border-border overflow-hidden transition-transform duration-300 ease-in-out hover:-translate-y-1 hover:shadow-sm p-8 text-center">
                <div class="text-5xl mb-5">✨</div>
                <h3 class="text-primary text-lg font-semibold mb-3">Wisdom</h3>
                <p class="text-muted-foreground text-sm">Seeking truth through practice, meditation, and the
                    teachings of realized masters who have walked the path before us.</p>
            </div>
        </div>
    </div>
</section>

<!-- UPCOMING EVENTS HIGHLIGHT -->
<section class="py-16 md:py-24 bg-muted">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 reveal">
            <div class="ornament mb-4">
                <span class="font-display text-xs tracking-[0.3em] text-gold uppercase">What's Coming</span>
            </div>
            <h2 class="font-display text-4xl">Upcoming Seminars & Events</h2>
        </div>
        <div class="grid lg:grid-cols-3 gap-6">
            <div
                class="bg-card border border-border overflow-hidden transition-transform duration-300 ease-in-out hover:-translate-y-1 hover:shadow-sm text-center">
                <div class="bg-primary p-4 flex items-center gap-4">
                    <div class="text-center">
                        <div class="font-display text-gold text-3xl font-bold">15</div>
                        <div class="font-display text-white/70 text-xs tracking-widest">APR 2025</div>
                    </div>
                    <div>
                        <div class="text-white font-display text-sm font-semibold">Spring Tao Seminar</div>
                        <div class="text-white/60 text-xs font-body">Kathmandu HQ</div>
                    </div>
                </div>
                <div class="p-5">
                    <p class="text-muted-foreground font-body text-sm">A two-day intensive program exploring the core
                        principles of Taoist philosophy and meditation practice.</p>
                </div>
            </div>
            <div
                class="bg-card border border-border overflow-hidden transition-transform duration-300 ease-in-out hover:-translate-y-1 hover:shadow-sm text-center">
                <div class="bg-accent p-4 flex items-center gap-4">
                    <div class="text-center">
                        <div class="font-display text-white text-3xl font-bold">01</div>
                        <div class="font-display text-white/70 text-xs tracking-widest">MAY 2025</div>
                    </div>
                    <div>
                        <div class="text-white font-display text-sm font-semibold">Thailand Spiritual Tour</div>
                        <div class="text-white/60 text-xs font-body">Bangkok & Chiang Mai</div>
                    </div>
                </div>
                <div class="p-5">
                    <p class="text-muted-foreground font-body text-sm">Join our annual pilgrimage to sacred Tao temples
                        in Thailand — meet gurus and deepen your practice.</p>
                </div>
            </div>
            <div
                class="bg-card border border-border overflow-hidden transition-transform duration-300 ease-in-out hover:-translate-y-1 hover:shadow-sm text-center">
                <div class="p-4 flex items-center gap-4 bg-gold">
                    <div class="text-center">
                        <div class="font-display text-white text-3xl font-bold">20</div>
                        <div class="font-display text-white/70 text-xs tracking-widest">JUN 2025</div>
                    </div>
                    <div>
                        <div class="text-white font-display text-sm font-semibold">Temple Inauguration</div>
                        <div class="text-white/60 text-xs font-body">Pokhara Branch</div>
                    </div>
                </div>
                <div class="p-5">
                    <p class="text-muted-foreground font-body text-sm">Inauguration ceremony for the newly completed
                        Pokhara TAN temple — all members warmly invited.</p>
                </div>
            </div>
        </div>
        <div class="text-center mt-8">
            <a href="/seminars.php" class="bg-primary text-white font-display text-sm tracking-widest uppercase px-[2.2rem] py-[0.85rem] border border-primary cursor-pointer transition-all duration-300 ease-in-out inline-block no-underline hover:bg-transparent hover:text-primary">View All Events</a>
        </div>
    </div>
</section>

  <!-- DONATION CTA -->
<section class="py-16 md:py-24 bg-primary-accent-gradient dark:bg-hero-background">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
        <!-- <div class="py-20 text-center relative overflow-hidden before:content-['☸'] before:absolute before:text-[600px] before:text-primary/5 before:right-[-120px] before:top-[-120px] before:pointer-events-none before:leading-none bg-primary-accent-gradient"> -->
            <div class="max-w-2xl mx-auto px-6 relative z-10">
            <div class="text-6xl mb-6">🙏</div>
            <h2 class="font-display text-white text-4xl font-bold mb-4">Support Our Sacred Mission</h2>
            <p class="text-white/70 font-body text-xl mb-8">Your generosity helps us build temples, organize seminars, and spread the teachings of Tao across Nepal and beyond.</p>
            <a href="/donations.php" class="bg-gold text-white font-display text-sm tracking-widest uppercase px-[2.2rem] py-[0.85rem] border border-gold cursor-pointer transition-all duration-300 ease-in-out inline-block no-underline hover:bg-transparent hover:text-gold px-10 py-4">Donate Now</a>
            </div>
        </div>
    </div>
</section>
@stop
