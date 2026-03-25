<?php include('common/header.php'); ?>

<!-- Page Hero -->
<?php include('common/hero.php') ?>

<!-- Gurus Grid -->
<div class="py-16 md:py-24">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-14">
            <div class="ornament mb-4">
                <span class="font-display text-xs tracking-[0.3em] text-gold uppercase">Our Teachers</span>
            </div>
            <h2 class="font-serif text-primary font-bold text-4xl mb-4">Gurus &amp; Masters</h2>
            <p class="text-muted-foreground font-body text-xl max-w-2xl mx-auto italic">
                Our gurus bring decades of spiritual practice and teaching experience.
                Learn from masters dedicated to authentic Tao wisdom.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Guru Card -->
            <a href="guru-details.php" class="group">
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
            <a href="guru-details.php" class="group">
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
            <a href="guru-details.php" class="group">
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
    </div>
</section>

<?php include('common/footer.php'); ?>