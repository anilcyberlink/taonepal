@extends('themes.default.common.master')
@section('post_title', $data->post_title)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')

@include('themes.default.common.hero')
<!-- History Timeline -->
<section class="py-16 md:py-24">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <div class="ornament mb-4">
                <span class="font-display text-xs tracking-[0.3em] text-gold uppercase">Since 2020</span>
            </div>
            <h2 class="font-serif text-primary font-bold text-4xl mb-4">Our Journey</h2>
            <p class="text-muted-foreground font-body text-xl max-w-2xl mx-auto italic">
                How we grew from a vision to a thriving spiritual community
            </p>
        </div>

        <div class="space-y-8">

            <div class="flex gap-6">
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-full border-2 border-primary flex items-center justify-center flex-shrink-0 bg-primary-mixed-10">
                        <span class="font-bold text-primary text-sm">2020</span>
                    </div>
                    <div class="w-1 h-12 mt-2 bg-primary-transparent-gradient"></div>
                </div>
                <div class="pb-8">
                    <h3 class="text-xl font-bold text-foreground mb-2">Foundation &amp; Registration</h3>
                    <p class="text-muted-foreground">TAO Association formally registered in Nepal with government approval.</p>
                </div>
            </div>

            <div class="flex gap-6">
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-full border-2 border-primary flex items-center justify-center flex-shrink-0 bg-primary-mixed-10">
                        <span class="font-bold text-primary text-sm">2021</span>
                    </div>
                    <div class="w-1 h-12 mt-2 bg-primary-transparent-gradient"></div>
                </div>
                <div class="pb-8">
                    <h3 class="text-xl font-bold text-foreground mb-2">First Seminar</h3>
                    <p class="text-muted-foreground">Hosted our inaugural seminar with over 200 participants.</p>
                </div>
            </div>

            <div class="flex gap-6">
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-full border-2 border-primary flex items-center justify-center flex-shrink-0 bg-primary-mixed-10">
                        <span class="font-bold text-primary text-sm">2022</span>
                    </div>
                    <div class="w-1 h-12 mt-2 bg-primary-transparent-gradient"></div>
                </div>
                <div class="pb-8">
                    <h3 class="text-xl font-bold text-foreground mb-2">Sitapaila Temple Completion</h3>
                    <p class="text-muted-foreground">Opened our main temple and spiritual center in Kathmandu.</p>
                </div>
            </div>

            <div class="flex gap-6">
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-full border-2 border-primary flex items-center justify-center flex-shrink-0 bg-primary-mixed-10">
                        <span class="font-bold text-primary text-sm">2023</span>
                    </div>
                    <div class="w-1 h-12 mt-2 bg-primary-transparent-gradient"></div>
                </div>
                <div class="pb-8">
                    <h3 class="text-xl font-bold text-foreground mb-2">Expansion</h3>
                    <p class="text-muted-foreground">Established branches in Pokhara, Bhaktapur, and Patan.</p>
                </div>
            </div>

            <div class="flex gap-6">
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-full border-2 border-primary flex items-center justify-center flex-shrink-0 bg-primary-mixed-10">
                        <span class="font-bold text-primary text-sm">2024</span>
                    </div>
                    <div class="w-1 h-12 mt-2 bg-primary-transparent-gradient"></div>
                </div>
                <div class="pb-8">
                    <h3 class="text-xl font-bold text-foreground mb-2">International Programs</h3>
                    <p class="text-muted-foreground">Launched travel programs and extended retreat offerings.</p>
                </div>
            </div>

            <div class="flex gap-6">
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-full border-2 border-primary flex items-center justify-center flex-shrink-0 bg-primary-mixed-10">
                        <span class="font-bold text-primary text-sm">2025</span>
                    </div>
                </div>
                <div class="pb-8">
                    <h3 class="text-xl font-bold text-foreground mb-2">Growth &amp; Impact</h3>
                    <p class="text-muted-foreground">Serving over 2,500 active members with 50+ annual programs.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="py-16 md:py-24 bg-muted">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-14">
            <div class="ornament mb-4">
                <span class="font-display text-xs tracking-[0.3em] text-gold uppercase">Who We Are</span>
            </div>
            <h2 class="font-serif text-primary font-bold text-4xl mb-4">Mission &amp; Vision</h2>
            <p class="text-muted-foreground font-body text-xl max-w-2xl mx-auto italic">
                The purpose and direction that guides everything we do
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12">

            <div class="rounded-lg border border-border bg-card p-8">
                <h3 class="text-2xl font-bold text-foreground mb-4">Our Mission</h3>
                <p class="text-muted-foreground leading-relaxed mb-4">
                    To promote understanding and practice of Tao philosophy, facilitating spiritual growth and personal
                    transformation through authentic teachings and community engagement.
                </p>
                <p class="text-muted-foreground leading-relaxed">
                    We bridge ancient wisdom with modern life, making Taoist teachings accessible to all who seek
                    spiritual enlightenment and inner peace.
                </p>
            </div>

            <div class="rounded-lg border border-border bg-card p-8">
                <h3 class="text-2xl font-bold text-foreground mb-4">Our Vision</h3>
                <p class="text-muted-foreground leading-relaxed mb-4">
                    A world where Tao philosophy enriches the lives of practitioners across all cultures and backgrounds.
                </p>
                <p class="text-muted-foreground leading-relaxed">
                    We envision Nepal as a beacon of Taoist spiritual wisdom, with thriving meditation centers and
                    temples serving seekers of enlightenment.
                </p>
            </div>

        </div>
    </div>
</section>

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
            <div class="bg-card border border-border overflow-hidden transition-transform duration-300 ease-in-out hover:-translate-y-1 hover:shadow-sm p-8 text-center">
                <div class="text-5xl mb-5">☯</div>
                <h3 class="text-primary text-lg font-semibold mb-3">Harmony</h3>
                <p class="text-muted-foreground text-sm">Living in balance with the natural order, aligning body,
                    mind, and spirit with the universal flow of existence.</p>
            </div>
            <div class="bg-card border border-border overflow-hidden transition-transform duration-300 ease-in-out hover:-translate-y-1 hover:shadow-sm p-8 text-center">
                <div class="text-5xl mb-5">🪷</div>
                <h3 class="text-primary text-lg font-semibold mb-3">Compassion</h3>
                <p class="text-muted-foreground text-sm">Cultivating love and kindness toward all beings — the
                    foundation of spiritual life and community service.</p>
            </div>
            <div class="bg-card border border-border overflow-hidden transition-transform duration-300 ease-in-out hover:-translate-y-1 hover:shadow-sm p-8 text-center">
                <div class="text-5xl mb-5">✨</div>
                <h3 class="text-primary text-lg font-semibold mb-3">Wisdom</h3>
                <p class="text-muted-foreground text-sm">Seeking truth through practice, meditation, and the
                    teachings of realized masters who have walked the path before us.</p>
            </div>
        </div>

    </div>
</section>

<!-- Our Gurus -->
<section class="py-16 md:py-24 bg-muted">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-14">
            <div class="ornament mb-4">
                <span class="font-display text-xs tracking-[0.3em] text-gold uppercase">Meet Our Teachers</span>
            </div>
            <h2 class="font-serif text-primary font-bold text-4xl mb-4">Our Gurus &amp; Masters</h2>
            <p class="text-muted-foreground font-body text-xl max-w-2xl mx-auto italic">
                Experienced spiritual teachers dedicated to sharing Tao wisdom
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 mb-12">

            <!-- Guru Card -->
            <a href="/gurus/master-chen-wei.php" class="group">
                <div class="overflow-hidden rounded-lg border border-border bg-card flex flex-col h-full transition-all duration-300 hover:shadow-lg">
                    <div class="h-64 flex items-center justify-center text-6xl bg-muted">
                        🧘
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="font-bold text-xl text-foreground mb-1 group-hover:text-primary transition-colors">
                            Master Chen Wei
                        </h3>
                        <p class="text-sm font-medium mb-3 text-primary">Grandmaster &amp; Founder</p>
                        <p class="text-sm text-muted-foreground flex-1 mb-4 line-clamp-3">
                            A revered Taoist master with over 40 years of practice, guiding the association since its founding.
                        </p>
                        <button class="w-full py-2 px-4 rounded text-sm font-medium text-white transition-colors bg-primary">
                            Learn More
                        </button>
                    </div>
                </div>
            </a>

            <!-- Guru Card -->
            <a href="/gurus/sifu-ananda-gurung.php" class="group">
                <div class="overflow-hidden rounded-lg border border-border bg-card flex flex-col h-full transition-all duration-300 hover:shadow-lg">
                    <div class="h-64 flex items-center justify-center text-6xl bg-muted">
                        🧘
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="font-bold text-xl text-foreground mb-1 group-hover:text-primary transition-colors">
                            Sifu Ananda Gurung
                        </h3>
                        <p class="text-sm font-medium mb-3 text-primary">Senior Spiritual Teacher</p>
                        <p class="text-sm text-muted-foreground flex-1 mb-4 line-clamp-3">
                            Specializing in Qi Gong and meditation, Sifu Ananda has been teaching for over two decades across Nepal.
                        </p>
                        <button class="w-full py-2 px-4 rounded text-sm font-medium text-white transition-colors bg-primary">
                            Learn More
                        </button>
                    </div>
                </div>
            </a>

            <!-- Guru Card -->
            <a href="/gurus/teacher-priya-lama.php" class="group">
                <div class="overflow-hidden rounded-lg border border-border bg-card flex flex-col h-full transition-all duration-300 hover:shadow-lg">
                    <div class="h-64 flex items-center justify-center text-6xl bg-muted">
                        🧘
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="font-bold text-xl text-foreground mb-1 group-hover:text-primary transition-colors">
                            Teacher Priya Lama
                        </h3>
                        <p class="text-sm font-medium mb-3 text-primary">Meditation &amp; Qi Gong Guide</p>
                        <p class="text-sm text-muted-foreground flex-1 mb-4 line-clamp-3">
                            Dedicated to sharing the healing arts of Taoism, Teacher Priya leads retreats and weekly meditation sessions.
                        </p>
                        <button class="w-full py-2 px-4 rounded text-sm font-medium text-white transition-colors bg-primary">
                            Learn More
                        </button>
                    </div>
                </div>
            </a>

        </div>

        <div class="text-center">
            <a href="/gurus.php"
               class="inline-block py-3 px-8 rounded text-sm font-medium text-white transition-colors bg-primary">
                Explore All Gurus
            </a>
        </div>

    </div>
</section>

<!-- Organization Structure -->
<section class="py-16 md:py-24">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-14">
            <div class="ornament mb-4">
                <span class="font-display text-xs tracking-[0.3em] text-gold uppercase">How We Work</span>
            </div>
            <h2 class="font-serif text-primary font-bold text-4xl mb-4">Organization Structure</h2>
            <p class="text-muted-foreground font-body text-xl max-w-2xl mx-auto italic">
                How we organize to serve our community
            </p>
        </div>

        <div class="rounded-lg border border-border bg-card p-8">
            <div class="space-y-8">

                <!-- Level 1 -->
                <div class="flex justify-center">
                    <div class="bg-primary rounded-lg px-6 py-4 font-bold text-center text-white">
                        General Assembly
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="w-px h-8 bg-border"></div>
                </div>

                <!-- Level 2 -->
                <div class="flex justify-center">
                    <div class="bg-secondary rounded-lg px-6 py-4 font-bold text-center text-white">
                        Board of Directors
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="w-px h-8 bg-border"></div>
                </div>

                <!-- Level 3 -->
                <div class="grid md:grid-cols-3 gap-4 max-w-2xl mx-auto">
                    <div class="rounded-lg px-4 py-3 text-center font-semibold text-foreground border border-accent bg-accent-mixed-10">
                        Spiritual Council
                    </div>
                    <div class="rounded-lg px-4 py-3 text-center font-semibold text-foreground border border-accent bg-accent-mixed-10">
                        Administrative Department
                    </div>
                    <div class="rounded-lg px-4 py-3 text-center font-semibold text-foreground border border-accent bg-accent-mixed-10">
                        Community Outreach
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@stop
