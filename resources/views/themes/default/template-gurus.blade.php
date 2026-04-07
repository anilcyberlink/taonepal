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
                    🧘
                    <!-- Replace with: <img src="/images/guru-ashok.jpg" alt="Guru Ashok" class="w-full h-full object-cover" /> -->
                </div>

                <!-- Tabs -->
                <div>
                    <div class="grid grid-cols-4 gap-2 mb-6 bg-muted rounded-[1.5rem]">
                        <button onclick="showTab('biography')" class="tab-btn px-4 py-2 transition-all duration-200 text-sm pointer text-muted-foreground dark:text-white bg-transparent w-full rounded-[1.5rem] hover:text-primary [&.active]:bg-primary [&.active]:text-primary-foreground active" data-tab="biography">Biography</button>
                        <button onclick="showTab('teachings')" class="tab-btn px-4 py-2 transition-all duration-200 text-sm pointer text-muted-foreground dark:text-white bg-transparent w-full rounded-[1.5rem] hover:text-primary [&.active]:bg-primary [&.active]:text-primary-foreground" data-tab="teachings">Teachings</button>
                        <button onclick="showTab('books')" class="tab-btn px-4 py-2 transition-all duration-200 text-sm pointer text-muted-foreground dark:text-white bg-transparent w-full rounded-[1.5rem] hover:text-primary [&.active]:bg-primary [&.active]:text-primary-foreground" data-tab="books">Works</button>
                        <button onclick="showTab('events')" class="tab-btn px-4 py-2 transition-all duration-200 text-sm pointer text-muted-foreground dark:text-white bg-transparent w-full rounded-[1.5rem] hover:text-primary [&.active]:bg-primary [&.active]:text-primary-foreground" data-tab="events">Events</button>
                    </div>

                    <!-- Biography -->
                    <div id="tab-biography" class="tab-content space-y-4 mt-6">
                        <p class="text-lg text-muted-foreground leading-relaxed">
                            Guru Ashok has dedicated his life to the study and practice of Tao philosophy. He spent two decades in China studying under traditional masters and has trained hundreds of students in Nepal.
                        </p>
                    </div>

                    <!-- Teachings -->
                    <div id="tab-teachings" class="tab-content space-y-4 mt-6 hidden">
                        <p class="text-lg text-muted-foreground leading-relaxed">
                            Focuses on the practical application of Tao principles to modern life, emphasizing balance and harmony.
                        </p>
                    </div>

                    <!-- Books / Works -->
                    <div id="tab-books" class="tab-content space-y-4 mt-6 hidden">
                        <p class="font-semibold text-foreground mb-3">Published Works</p>
                        <div class="p-4 bg-card border border-border rounded-lg">
                            <p class="font-medium text-foreground">The Way of Living: A Modern Guide to Tao</p>
                        </div>
                        <div class="p-4 bg-card border border-border rounded-lg">
                            <p class="font-medium text-foreground">Meditations on the Tao Te Ching</p>
                        </div>
                    </div>

                    <!-- Events -->
                    <div id="tab-events" class="tab-content space-y-4 mt-6 hidden">
                        <div class="grid md:grid-cols-2 gap-6">
                            <!-- Event Card -->
                            <a href="/seminars/seminar-001.php" class="group">
                                <div class="overflow-hidden rounded-lg border border-border bg-card hover:shadow-lg transition-all duration-300 h-full flex flex-col">
                                    <!-- Image -->
                                    <div class="relative h-48 overflow-hidden bg-muted">
                                        <img src="https://placehold.co/400x300?text=Tao+Seminar"
                                             alt="Introduction to Tao Philosophy"
                                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                                        <div class="absolute top-3 right-3">
                                            <span class="text-xs font-medium text-white px-2 py-0.5 rounded-full bg-primary">Seminar</span>
                                        </div>
                                        <div class="absolute top-3 left-3">
                                            <span class="text-xs font-medium px-2 py-0.5 rounded-full bg-accent text-foreground">15 seats left</span>
                                        </div>
                                    </div>
                                    <!-- Content -->
                                    <div class="p-4 flex flex-col flex-1">
                                        <div class="flex gap-2 items-center mb-3">
                                            <div class="w-12 h-12 rounded-lg flex flex-col items-center justify-center border bg-primary text-white">
                                                <span class="text-sm font-bold">Apr</span>
                                                <span class="text-xs font-bold">25</span>
                                            </div>
                                            <div class="flex-1">
                                                <p class="text-sm font-semibold text-foreground">10:00 AM - 12:00 PM</p>
                                                <div class="flex items-center gap-1 text-xs text-muted-foreground">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                                                    Kathmandu Main Center
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="font-bold text-lg mb-2 group-hover:text-primary transition-colors line-clamp-2">
                                            Introduction to Tao Philosophy
                                        </h3>
                                        <div class="flex items-center gap-2 text-sm text-muted-foreground mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                                            <span>Guru Ashok</span>
                                        </div>
                                        <p class="text-sm text-muted-foreground mb-4 line-clamp-2">
                                            Learn the fundamental principles of Tao philosophy and its practical applications in daily life.
                                        </p>
                                        <button class="w-full mt-auto py-2 px-4 rounded text-sm font-medium text-white bg-primary transition-colors">
                                            Register Now
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Sidebar -->
            <div class="space-y-6">
                <!-- About / Quick Info -->
                <div class="rounded-lg border border-border bg-card p-6">
                    <h3 class="text-xl font-bold mb-6 text-foreground font-display">About</h3>
                    <div class="space-y-4">

                        <div>
                            <p class="text-xs font-semibold text-muted-foreground uppercase tracking-wider">Title</p>
                            <p class="text-foreground font-medium">Master of Tao Philosophy</p>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-muted-foreground uppercase tracking-wider">Lineage</p>
                            <p class="text-foreground font-medium">Chen Style</p>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-muted-foreground uppercase tracking-wider">Specialty</p>
                            <p class="text-foreground font-medium">Philosophy &amp; Meditation</p>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-muted-foreground uppercase tracking-wider">Bio</p>
                            <p class="text-foreground text-sm">With over 30 years of experience in Taoist teachings and meditation practices.</p>
                        </div>

                    </div>
                </div>

                <!-- Contact CTA -->
                <div class="rounded-lg p-6 bg-primary dark:bg-muted text-white">
                    <h4 class="font-bold mb-4 font-display">Learn from Guru Ashok</h4>
                    <p class="text-sm mb-4">
                        Join an upcoming seminar or book a one-on-one session.
                    </p>
                    <a href="/contact.php">
                        <button class="w-full py-2 px-4 rounded text-sm font-medium transition-colors bg-background text-primary hover:text-black dark:text-white dark:hover:bg-white dark:hover:text-black">
                            Get in Touch
                        </button>
                    </a>
                </div>

                <!-- Video -->
                <div class="rounded-lg border border-border bg-card p-6">
                    <h4 class="font-bold text-foreground mb-4 font-display">Video Messages</h4>
                    <div class="rounded-lg h-48 flex items-center justify-center bg-muted">
                        <p class="text-sm text-muted-foreground">Video coming soon</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@stop
