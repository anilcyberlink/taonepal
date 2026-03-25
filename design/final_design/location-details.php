<?php include('common/header.php'); ?>

<!-- Page Hero -->
<?php include('common/hero.php') ?>

<!-- Main Content -->
<section class="py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-3 gap-12">
            <!-- Left: Main Content -->
            <div class="md:col-span-2 space-y-8">
                <!-- Hero Image -->
                <div class="rounded-lg overflow-hidden h-96 bg-muted flex items-center justify-center text-6xl">
                    <img src="/images/gallery_8.jpg" alt="Kathmandu Branch" class="w-full h-full object-cover" />
                </div>
                <!-- Contact Information -->
                <div class="rounded-lg border border-border bg-card p-8">
                    <h2 class="text-2xl font-bold mb-6 text-foreground font-display">Contact Information</h2>
                    <div class="space-y-4">
                        <div class="flex gap-3 items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 flex-shrink-0 mt-1 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                            <div>
                                <p class="font-semibold text-foreground">Address</p>
                                <p class="text-muted-foreground">Sitapaila, Kathmandu, Nepal</p>
                            </div>
                        </div>

                        <div class="flex gap-3 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 flex-shrink-0 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.54 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            <div>
                                <p class="font-semibold text-foreground">Phone</p>
                                <a href="tel:+977-1-4700000" class="text-primary hover:underline">+977-1-4700000</a>
                            </div>
                        </div>

                        <div class="flex gap-3 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 flex-shrink-0 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                            <div>
                                <p class="font-semibold text-foreground">Email</p>
                                <a href="mailto:kathmandu@taoassociation.org" class="text-primary hover:underline">kathmandu@taoassociation.org</a>
                            </div>
                        </div>

                        <div class="flex gap-3 items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 flex-shrink-0 mt-1 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            <div>
                                <p class="font-semibold text-foreground">Hours</p>
                                <p class="text-muted-foreground">Daily: 9:00 AM – 8:00 PM</p>
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
                    <iframe
                        width="100%"
                        height="100%"
                        frameborder="0"
                        src="https://www.openstreetmap.org/export/embed.html?bbox=85.2800%2C27.7100%2C85.3000%2C27.7300&layer=mapnik&marker=27.7200%2C85.2900"
                        allowfullscreen
                        loading="lazy">
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
                    <a href="/contact.php?location=kathmandu">
                        <button class="w-full flex items-center justify-center gap-2 py-2 px-4 rounded text-sm font-medium transition-colors bg-background text-primary hover:text-black dark:text-white dark:hover:bg-white dark:hover:text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/></svg>
                            Send Message
                        </button>
                    </a>
                </div>

                <!-- Other Locations -->
                <div class="rounded-lg border border-border bg-card p-6">
                    <h3 class="font-bold text-foreground mb-4 font-display">Other Locations</h3>
                    <div class="space-y-3">
                        <a href="/location-details.php" class="block p-3 rounded-lg border border-border hover:bg-muted transition-colors">
                            <p class="font-semibold text-foreground text-sm">Pokhara Branch</p>
                            <p class="text-xs text-muted-foreground">Gandaki District</p>
                        </a>

                        <a href="/location-details.php" class="block p-3 rounded-lg border border-border hover:bg-muted transition-colors">
                            <p class="font-semibold text-foreground text-sm">Chitwan Branch</p>
                            <p class="text-xs text-muted-foreground">Bagmati District</p>
                        </a>

                        <a href="/location-details.php" class="block p-3 rounded-lg border border-border hover:bg-muted transition-colors">
                            <p class="font-semibold text-foreground text-sm">Bhairahawa Branch</p>
                            <p class="text-xs text-muted-foreground">Lumbini Province</p>
                        </a>

                    </div>
                </div>

                <!-- Quick Info -->
                <div class="rounded-lg border border-border p-6 bg-muted">
                    <h3 class="font-bold text-foreground mb-4 font-display">Quick Info</h3>
                    <div class="space-y-2 text-sm text-muted-foreground">
                        <div>
                            <p class="font-semibold text-foreground text-xs uppercase tracking-wider">District</p>
                            <p>Kathmandu</p>
                        </div>
                        <div>
                            <p class="font-semibold text-foreground text-xs uppercase tracking-wider mt-3">Activities</p>
                            <div class="flex flex-wrap gap-1 mt-1">
                                <span class="text-xs px-2 py-0.5 rounded-full bg-muted-foreground text-white dark:text-background">Meditation</span>
                                <span class="text-xs px-2 py-0.5 rounded-full bg-muted-foreground text-white dark:text-background">Philosophy</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include('common/footer.php'); ?>