<?php include('common/header.php'); ?>

<!-- Page Hero -->
<?php include('common/hero.php') ?>

<!-- Main Content -->
<section class="py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-3 gap-12">
            <!-- Contact Form -->
            <div class="md:col-span-2">
                <div class="rounded-lg border border-border bg-card p-8">
                    <h2 class="text-2xl font-bold text-foreground mb-6 font-display">Send us a Message</h2>
                    <!-- Form -->
                    <form id="contact-form" class="space-y-6">
                        <div>
                            <label class="text-sm font-medium text-foreground block mb-2">Full Name</label>
                            <input type="text" name="name" required placeholder="Your name" class="w-full px-4 py-2 border border-border rounded-lg bg-background text-foreground focus-2 focus:ring-primary" />
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="text-sm font-medium text-foreground block mb-2">Email</label>
                                <input type="email" name="email" required placeholder="your@email.com" class="w-full px-4 py-2 border border-border rounded-lg bg-background text-foreground focus-2 focus:ring-primary" />
                            </div>
                            <div>
                                <label class="text-sm font-medium text-foreground block mb-2">Subject</label>
                                <input type="text" name="subject" required placeholder="Subject" class="w-full px-4 py-2 border border-border rounded-lg bg-background text-foreground focus-2 focus:ring-primary" />
                            </div>
                        </div>

                        <div>
                            <label class="text-sm font-medium text-foreground block mb-2">Department</label>
                            <select name="department" class="w-full px-4 py-2 border border-border rounded-lg bg-background text-foreground focus-2 focus:ring-primary">
                                <option value="general">General Inquiry</option>
                                <option value="seminar">Seminar Registration</option>
                                <option value="donation">Donation &amp; Support</option>
                                <option value="travel">Travel Programs</option>
                                <option value="spiritual">Spiritual Guidance</option>
                            </select>
                        </div>

                        <div>
                            <label class="text-sm font-medium text-foreground block mb-2">Message</label>
                            <textarea name="message" required rows="6" placeholder="Your message..." class="w-full px-4 py-2 border border-border rounded-lg bg-background text-foreground focus-2 focus:ring-primary"></textarea>
                        </div>

                        <button type="submit" class="w-full py-4 px-4 rounded-lg text-lg font-medium text-white transition-colors bg-primary hover:bg-primary/90">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <!-- Head Office -->
                <div class="rounded-lg border border-border bg-card p-6">
                    <h3 class="text-lg font-bold text-foreground mb-4 font-display">Head Office</h3>
                    <div class="space-y-4">
                        <div class="flex gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0 mt-1 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                            <div>
                                <p class="font-semibold text-foreground text-sm">Address</p>
                                <p class="text-sm text-muted-foreground">Sitapaila, Kathmandu, Nepal</p>
                            </div>
                        </div>

                        <div class="flex gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.54 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            <div>
                                <p class="font-semibold text-foreground text-sm">Phone</p>
                                <a href="tel:+977-1-4700000" class="text-sm text-primary hover:underline">+977-1-4700000</a>
                            </div>
                        </div>

                        <div class="flex gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                            <div>
                                <p class="font-semibold text-foreground text-sm">Email</p>
                                <a href="mailto:info@taoassociation.org" class="text-sm text-primary hover:underline">info@taoassociation.org</a>
                            </div>
                        </div>

                        <div class="flex gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0 mt-1 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            <div>
                                <p class="font-semibold text-foreground text-sm">Hours</p>
                                <p class="text-sm text-muted-foreground">
                                    Mon - Fri: 9AM - 6PM<br>
                                    Sat: 10AM - 4PM<br>
                                    Sun: Closed
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Spiritual Guidance CTA -->
                <div class="rounded-lg p-6 bg-primary dark:bg-muted text-white">
                    <h3 class="text-lg font-bold mb-2 font-display">Spiritual Guidance</h3>
                    <p class="text-sm mb-4">Need immediate spiritual support or guidance?</p>
                    <a href="tel:+977-1-4700000"
                       class="block text-center px-4 py-2 rounded-lg font-medium transition-colors bg-background text-primary hover:text-black dark:text-white dark:hover:bg-white dark:hover:text-black">
                        Call Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('common/footer.php'); ?>