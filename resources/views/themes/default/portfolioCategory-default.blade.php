@extends('themes.default.common.master')
@section('post_title', $data->category)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')

<div class="py-16 md:py-24">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-14">
            <div class="ornament mb-4">
                <span class="font-display text-xs tracking-[0.3em] text-gold uppercase">
                    Tao Pilgrimage
                </span>
            </div>
            <h2 class="font-serif text-primary font-bold text-4xl mb-4">
                Sacred Temple Tours
            </h2>
        </div>
        <div class="max-w-6xl mx-auto px-6">
            <div class="space-y-12">
                <div class="bg-card border border-border rounded-[2px] overflow-hidden transitiona-all duration-300 ease-in-out shadow-sm hover:shadow-2xl overflow-hidden">
                    <div class="grid lg:grid-cols-2">
                        <div class="p-10">
                            <div class="font-display text-gold text-xs tracking-[0.3em] uppercase mb-3">MAY 1–7, 2025
                            </div>
                            <h2 class="font-display font-bold text-primary tracking-wide text-2xl mb-4">Thailand Tao Temple Pilgrimage</h2>
                            <p class="font-body text-muted-foreground text-lg mb-5">
                                Our flagship annual pilgrimage to the sacred Tao temples of Thailand. Meet revered gurus, participate in traditional ceremonies, and deepen your spiritual practice in an authentic Tao environment.
                            </p>
                            <div class="space-y-2 mb-6 font-body text-sm">
                                <div class="flex gap-3">
                                    <span class="text-gold">✈</span>
                                    <span>
                                        <strong>Destination:</strong>
                                        <span>Bangkok & Chiang Mai, Thailand</span>
                                    </span>
                                </div>
                                <div class="flex gap-3">
                                    <span class="text-gold">📅</span>
                                    <span>
                                        <strong>Duration:</strong>
                                        <span>7 Days / 6 Nights</span>
                                    </span>
                                </div>
                                <div class="flex gap-3">
                                    <span class="text-gold">👥</span>
                                    <span>
                                        <strong>Group Size:</strong>
                                        <span>20–30 persons</span>
                                    </span>
                                </div>
                                <div class="flex gap-3">
                                    <span class="text-gold">💰</span>
                                    <span>
                                        <strong>Estimated Cost:</strong>
                                        <span>NPR 65,000 – 80,000</span>
                                    </span>
                                </div>
                            </div>
                            <a href="travel-details.php">
                                <button class="flex items-center gap-2 bg-primary dark:hover:text-background text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-icon lucide-eye">
                                        <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/>
                                        <circle cx="12" cy="12" r="3"/>
                                    </svg>
                                    <span class="hidden md:inline">View Details</span>
                                </button>
                            </a>
                        </div>
                        <div>
                            <img src="/images/branch_2.jpg" alt="Thailand Tao Temple Pilgrimage" class="w-full h-full min-h-72 object-cover" />
                        </div>
                    </div>
                </div>

                <div class="bg-card border border-border rounded-[2px] overflow-hidden transitiona-all duration-300 ease-in-out shadow-sm hover:shadow-2xl overflow-hidden">
                    <div class="grid lg:grid-cols-2">
                        <div class="p-10">
                            <div class="font-display text-gold text-xs tracking-[0.3em] uppercase mb-3">OCTOBER 2025
                            </div>
                            <h2 class="font-display font-bold text-primary tracking-wide text-2xl mb-4">Taiwan Sacred Temple Tour</h2>
                            <p class="font-body text-muted-foreground text-lg mb-5">A profound journey to the spiritual heartland of Taoism in Taiwan, visiting ancient temples, meeting the highest masters, and experiencing the full depth of Taoist religious tradition.</p>
                            <div class="space-y-2 mb-6 font-body text-sm">
                                <div class="flex gap-3">
                                    <span class="text-gold">✈</span>
                                    <span>
                                        <strong>Destination:</strong>
                                        <span>Taipei & Tainan, Taiwan</span>
                                    </span>
                                </div>
                                <div class="flex gap-3">
                                    <span class="text-gold">📅</span>
                                    <span>
                                        <strong>Duration:</strong>
                                        <span>10 Days / 9 Nights</span>
                                    </span>
                                </div>
                                <div class="flex gap-3">
                                    <span class="text-gold">👥</span>
                                    <span>
                                        <strong>Group Size:</strong>
                                        <span>15–25 persons</span>
                                    </span>
                                </div>
                                <div class="flex gap-3">
                                    <span class="text-gold">💰</span>
                                    <span>
                                        <strong>Estimated Cost:</strong>
                                        <span>NPR 1,10,000 – 1,30,000</span>
                                    </span>
                                </div>
                            </div>
                            <a href="travel-details.php">
                                <button class="flex items-center gap-2 bg-primary dark:hover:text-background text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-icon lucide-eye">
                                        <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/>
                                        <circle cx="12" cy="12" r="3"/>
                                    </svg>
                                    <span class="hidden md:inline">View Details</span>
                                </button>
                            </a>
                        </div>
                        <div>
                            <img src="/images/gallery_8.jpg" alt="Taiwan Sacred Temple Tour" class="w-full h-full min-h-72 object-cover" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@stop
