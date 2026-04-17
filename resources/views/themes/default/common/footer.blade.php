</main>
<footer
    class="bg-gradient-to-b from-[var(--footer-bg-from)] to-[var(--footer-bg-to)] text-[var(--footer-text)] border-t-2 border-[var(--footer-border-top)]">
    <!-- Main Footer -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
        <!-- Top Section -->
        <div class="mb-12 pb-8 border-b border-gold-light/20">
            <div class="flex items-start gap-4 mb-4">
                <div class="w-12 h-12 flex-shrink-0">
                    <img src="{{ asset('themes-assets/images/logo.jpeg') }}" alt="TAO Logo" width="48" height="48" class="w-full h-full" />
                </div>
                <div>
                    <h3 class="text-xl font-bold text-footer-text">{{ $setting->site_name }}</h3>
                    <p class="text-sm mt-1 text-footer-text opacity-70">{{ $setting->welcome_text }}</p>
                </div>
            </div>
        </div>

        <!-- Links Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-6">
            <!-- Programs -->
            <div>
                <h4 class="font-bold mb-4 text-footer-heading">Programs</h4>
                <ul class="space-y-2">
                    @foreach($programs as $program)
                        <li><a href="{{ route('page.program',$program->uri) }}" class="footer-link text-sm">{{ $program->category }}</a></li>
                    @endforeach
                    <li><a href="{{ route('gallery') }}" class="footer-link text-sm">Galleries</a></li>
                    <!-- <li><a href="/temples.php" class="footer-link text-sm">Temples</a></li>
                    <li><a href="/gurus.php" class="footer-link text-sm">Gurus</a></li> -->
                </ul>
            </div>

            <!-- Community -->
            <div>
                <h4 class="font-bold mb-4 text-footer-heading">Community</h4>
                <ul class="space-y-2">
                    @foreach ($navigations->take(3) as $row)
                        <li><a href="{{ url('tao/' . posttype_url($row->uri)) }}" class="footer-link text-sm">{{ $row->post_type }}</a></li>
                    @endforeach
                    <!-- <li><a href="/blog.php" class="footer-link text-sm">Blog</a></li>
                    <li><a href="/gallery.php" class="footer-link text-sm">Gallery</a></li>
                    <li><a href="/locations.php" class="footer-link text-sm">Locations</a></li> -->
                </ul>
            </div>

            <!-- Support -->
            <div>
                <h4 class="font-bold mb-4 text-footer-heading">Support</h4>
                <ul class="space-y-2">
                    @foreach($support->skip(3) as $sup)
                        <li>
                            <a href="{{ url('tao/' . posttype_url($sup->uri)) }}"
                                class="footer-link text-sm">{{ $sup->post_type }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-4 text-footer-heading">Contact</h4>
                <div class="space-y-2 text-sm text-footer-text opacity-70">
                    <div class="flex gap-2 items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-0.5 flex-shrink-0 text-accent"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                        <span>{{ $setting->location1 }}</span>
                    </div>
                    <div class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0 text-accent"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.54 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
                        </svg>
                        <a class="footer-link">{{ $setting->phone }},<br> {{ $setting->phone2 }}</a>
                    </div>
                    <div class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0 text-accent"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="16" x="2" y="4" rx="2" />
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                        </svg>
                        <a class="footer-link">{{ $setting->email_primary }} <br>{{ $setting->email_secondary }}</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="border-t border-gold-light/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div
                class="flex flex-col md:flex-row items-center justify-between gap-4 text-sm text-footer-text opacity-60">
                <div id="footer-copyright">{{ $setting->copyright_text }}</div>
                <div class="flex items-center gap-3">
                    <h3 class="font-bold text-footer-heading">Follow Us</h3>
                    <div class="flex gap-4">
                        <a href="{{ $setting->facebook_link }}" target="_blank" rel="noopener noreferrer" aria-label="Facebook"
                            class="footer-social">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                            </svg>
                        </a>
                        <a href="{{ $setting->instagram_link }}" target="_blank" rel="noopener noreferrer" aria-label="Instagram"
                            class="footer-social">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                            </svg>
                        </a>
                        <a href="{{ $setting->twitter_link }}" target="_blank" rel="noopener noreferrer" aria-label="Twitter"
                            class="footer-social">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z" />
                            </svg>
                        </a>
                        <a href="{{ $setting->youtube_link }}" target="_blank" rel="noopener noreferrer" aria-label="YouTube" class="footer-social">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-1.96C18.88 4 12 4 12 4s-6.88 0-8.6.46A2.78 2.78 0 0 0 1.46 6.42 29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58 2.78 2.78 0 0 0 1.94 1.96C5.12 20 12 20 12 20s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-1.96A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"/>
                                <polygon points="9.5 15.5 15.5 12 9.5 8.5 9.5 15.5"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset('themes-assets/js/script.js') }}"></script>
</body>

</html>
