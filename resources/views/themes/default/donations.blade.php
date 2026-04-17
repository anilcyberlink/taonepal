@extends('themes.default.common.master')
@section('content')

<section class="py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-[1fr_auto] gap-12">
            <div >
                <div class="ornament mb-5 justify-start">
                    <span class="font-display text-xs tracking-[0.3em] text-gold">DONATION CAUSES</span>
                </div>
                @php
                    $icons = ['🏛', '🎓', '🌏', '❤'];
                @endphp
                <div class="space-y-4 mb-8">
                    @foreach($data as $row)
                        @php
                            $icon = $icons[array_rand($icons)];
                        @endphp
                        <div class="bg-card border border-border rounded-[2px] overflow-hidden transition-all duration-300 hover:-translate-y-1 hover:shadow-lg p-5 cursor-pointer donation-cause hover:border-gold transition-colors"
                            data-cause="temple">
                            <div class="flex items-center gap-4">
                                <div class="text-2xl">{{ $icon }}</div>
                                <div>
                                    <h4 class="font-display text-primary text-base font-semibold">{{ $row->circular_type }}</h4>
                                    <p class="font-body text-muted-foreground text-sm">{{ $row->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="ornament mb-5 justify-start">
                    <span class="font-display text-xs tracking-[0.3em] text-gold">PAYMENT METHODS</span>
                </div>
                <div class="grid grid-cols-3 gap-3">
                    <div class="bg-card border border-border rounded-[2px] overflow-hidden transition-all duration-300 hover:-translate-y-1 p-4 text-center cursor-pointer hover:border-primary transition-colors">
                        <div class="text-2xl mb-1">📱</div>
                        <div class="font-display text-primary text-xs font-bold">eSewa</div>
                    </div>
                    <div class="bg-card border border-border rounded-[2px] overflow-hidden transition-all duration-300 hover:-translate-y-1 p-4 text-center cursor-pointer hover:border-primary transition-colors">
                        <div class="text-2xl mb-1">💜</div>
                        <div class="font-display text-primary text-xs font-bold">Khalti</div>
                    </div>
                    <div class="bg-card border border-border rounded-[2px] overflow-hidden transition-all duration-300 hover:-translate-y-1 p-4 text-center cursor-pointer hover:border-primary transition-colors">
                        <div class="text-2xl mb-1">🏦</div>
                        <div class="font-display text-primary text-xs font-bold">Bank Transfer</div>
                    </div>
                </div>

                <div class="mt-6 bg-muted p-5 text-sm font-body text-muted-foreground">
                    <strong class="font-display text-primary text-xs tracking-widest">BANK DETAILS</strong><br /><br />
                    {!! $setting->welcome_title !!}
                </div>
            </div>

            <div class="bg-card border border-border rounded-[2px] overflow-hidden transition-all duration-300 hover:-translate-y-1 hover:shadow-lg p-8 relative border border-gold before:content-[''] before:absolute before:top-1 before:left-1 before:right-1 before:bottom-1 before:border before:border-gold before:pointer-events-none">
                <form action="{{ route('post.donations') }}" method="post">
                    @csrf
                    <input type="hidden" id="g_recaptcha_response" name="g_recaptcha_response"/>
                    <h3 class="font-display font-bold text-primary text-xl mb-6">Make a Donation</h3>
                    <div class="mb-5">
                        <label class="font-display text-xs tracking-widest text-muted-foreground block mb-3">Enter
                            AMOUNT</label>
                        {{-- <div class="grid grid-cols-3 gap-2 mb-3" id="amount-buttons">
                            <button class="amount-btn border border-border px-3 py-2 font-display text-xs tracking-widest hover:bg-primary hover:text-white hover:border-primary transition-colors" data-amount="500">NPR 500</button>
                            <button class="amount-btn border border-border px-3 py-2 font-display text-xs tracking-widest hover:bg hover:text-white hover:border-primary transition-colors" data-amount="1,000">NPR 1,000</button>
                            <button class="amount-btn border border-border px-3 py-2 font-display text-xs tracking-widest hover:bg hover:text-white hover:border-primary transition-colors" data-amount="2,500">NPR 2,500</button>
                            <button class="amount-btn border border-border px-3 py-2 font-display text-xs tracking-widest hover:bg hover:text-white hover:border-primary transition-colors" data-amount="5,000">NPR 5,000</button>
                            <button class="amount-btn border border-border px-3 py-2 font-display text-xs tracking-widest hover:bg hover:text-white hover:border-primary transition-colors" data-amount="10,000">NPR 10,000</button>
                            <button class="amount-btn border border-border px-3 py-2 font-display text-xs tracking-widest hover:bg hover:text-white hover:border-primary transition-colors" data-amount="25,000">NPR 25,000</button>
                        </div> --}}
                        <input class="w-full px-4 py-3 border border-border bg-card text-foreground font-body text-base outline-none transition-colors duration-300 focus:border-primary mt-2" placeholder="Enter amount (NPR)" id="custom-amount" name="amount" required/>
                    </div>
                    <div class="mb-5">
                        <label class="font-display text-xs tracking-widest text-muted-foreground block mb-2">FULL
                            NAME</label>
                        <input class="w-full px-4 py-3 border border-border bg-card text-foreground font-body text-base outline-none transition-colors duration-300 focus:border-primary" name="full_name" placeholder="Your full name" required/>
                    </div>
                    <div class="mb-5">
                        <label class="font-display text-xs tracking-widest text-muted-foreground block mb-2">PHONE</label>
                        <input class="w-full px-4 py-3 border border-border bg-card text-foreground font-body text-base outline-none transition-colors duration-300 focus:border-primary" name="phone" placeholder="Enter Phone Number" required/>
                    </div>
                    <div class="mb-5">
                        <label class="font-display text-xs tracking-widest text-muted-foreground block mb-2">EMAIL</label>
                        <input class="w-full px-4 py-3 border border-border bg-card text-foreground font-body text-base outline-none transition-colors duration-300 focus:border-primary" type="email" name="email" placeholder="Enter Email Address" required/>
                    </div>
                    <div class="mb-5">
                        <label class="font-display text-xs tracking-widest text-muted-foreground block mb-2">DONATE
                            TOWARDS</label>
                        <select class="w-full px-4 py-3 border border-border bg-card text-foreground font-body text-base outline-none transition-colors duration-300 focus:border-primary" name="purpose" required>
                            <option selected disabled value="">Select Event</option>
                            @foreach($data as $row)
                                <option value="{{ $row->circular_type }}">{{ $row->circular_type }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-6">
                        <label class="font-display text-xs tracking-widest text-muted-foreground block mb-2">PAYMENT
                            METHOD</label>
                        <select class="w-full px-4 py-3 border border-border bg-card text-foreground font-body text-base outline-none transition-colors duration-300 focus:border-primary" name="payment">
                            <option value="Bank">Bank Transfer</option>
                            <option value="eSewa">eSewa</option>
                            <option value="Khalti">Khalti</option>
                        </select>
                    </div>
                    <button type="submit" class="inline-block px-[2.2rem] py-[0.85rem] bg-gold text-white border border-gold font-display text-[0.7rem] uppercase tracking-widest cursor-pointer transition-all duration-300 no-underline hover:bg-transparent hover:text-gold w-full text-center py-4">Proceed with Donation 🙏</button>
                    <p class="text-xs text-muted-foreground font-body text-center mt-3">All donations are fully
                        transparent and used for the stated purpose.</p>
                </form>
            </div>
        </div>
    </div>
</section>

<script src="https://www.google.com/recaptcha/api.js?render={{env('SITE_KEY')}}"></script>
<script>
    grecaptcha.ready(function () {
        function executeRecaptcha() {
            grecaptcha.execute('<?php echo env("SITE_KEY"); ?>', {action: 'homepage'}).then(function (token) {
                document.getElementById('g_recaptcha_response').value = token;
            });
        }

        // Initial execution of reCAPTCHA
        executeRecaptcha();

        // Refresh the reCAPTCHA token every 100 seconds (less than 2 minutes)
        setInterval(executeRecaptcha, 900000);
    });

</script>
@stop
