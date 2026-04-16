@extends('themes.default.common.master')
@section('content')

<div class="py-16 md:py-24">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-14">
            <div class="ornament mb-6">
                <span class="font-display text-xs tracking-[0.3em] text-gold uppercase">BROWSE BY ALBUM</span>
            </div>
        </div>
        <div class="mb-6">
            <div class="flex flex-wrap items-center justify-between gap-4 mb-4">
                <div class="flex flex-wrap gap-2" id="filter-tabs">
                    @foreach ($data as $cat)
                        @if ($cat->images->count() > 0)
                            <button class="tabs font-display text-xs px-6 py-2 whitespace-nowrap tracking-widest uppercase border border-border text-muted-foreground bg-transparent ease transition-all duration-200ms cursor-pointer hover:border-primary hover:text-primary [&.active]:bg-primary [&.active]:border-primary [&.active]:text-white active"
                                onclick="setTab('{{ $cat->id }}')" id="tab-{{ $cat->id }}">
                                {{ $cat->category }}
                            </button>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-5" id="photo-grid">
            @foreach ($data as $cat)
                @foreach ($cat->images as $img)
                    <div class="photo-item relative overflow-hidden bg-[#f9f7f3] transition-transform duration-300 hover:scale-[1.02]" data-category="{{ $cat->id }}">
                        <div class="relative aspect-square w-full overflow-hidden">
                            <img src="{{ asset('uploads/galleries/' . $img->picture) }}"
                                alt="{{ $img->caption }}"
                                data-caption="{{ $img->caption }}"
                                data-category="{{ $cat->id }}"
                                class="gallery-img h-full w-full object-cover cursor-pointer"
                                onclick="openLightbox(this)" />
                            <div class="overlay absolute inset-0 transition-all duration-300 pointer-events-none"></div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>

    <!-- Lightbox -->
    <div id="lightbox" class="fixed inset-0 hidden bg-black/90 z-50 items-center justify-center">

        <!-- Close -->
        <button class="absolute top-4 right-6 text-white text-3xl leading-none cursor-pointer z-10 hover:text-gray-300 transition" onclick="closeLightbox()">×</button>

        <!-- Prev -->
        <button id="lb-prev"
            class="absolute left-3 md:left-6 text-white text-5xl leading-none px-2 py-4 hover:text-gray-300 transition z-10"
            onclick="shiftLightbox(-1)">&#8249;</button>

        <!-- Next -->
        <button id="lb-next"
            class="absolute right-3 md:right-6 text-white text-5xl leading-none px-2 py-4 hover:text-gray-300 transition z-10"
            onclick="shiftLightbox(1)">&#8250;</button>

        <!-- Fixed image box + caption always below -->
        <div class="flex flex-col items-center" style="width: min(80vw, 700px);">

            <!-- Fixed-size image container — every image fills this box -->
            <div style="width: 100%; height: min(65vh, 500px); position: relative; background: #111;">
                <img id="lightbox-img"
                    style="position: absolute; inset: 0; width: 100%; height: 100%; object-fit: contain; transition: opacity 0.15s ease;"
                    src="" alt="" />
            </div>

            <!-- Caption always sits right here, same distance below every image -->
            <div class="text-center mt-4" style="min-height: 3rem;">
                <div id="lightbox-caption" class="text-white text-sm md:text-base font-display tracking-wide"></div>
                <div id="lightbox-counter" class="text-gray-400 text-xs tracking-widest mt-1"></div>
            </div>
        </div>
    </div>
</div>

<script>
    let currentImages = [];
    let currentIndex  = 0;

    function openLightbox(img) {
        const category = img.dataset.category;
        currentImages  = Array.from(document.querySelectorAll(`.gallery-img[data-category="${category}"]`));
        currentIndex   = currentImages.indexOf(img);

        showLightboxImage(false); // no fade on first open

        document.getElementById('lightbox').classList.remove('hidden');
        document.getElementById('lightbox').classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function showLightboxImage(fade = true) {
        const img   = currentImages[currentIndex];
        const lbImg = document.getElementById('lightbox-img');

        if (fade) {
            lbImg.style.opacity = '0';
            setTimeout(() => {
                lbImg.src = img.src;
                lbImg.alt = img.dataset.caption || '';
                document.getElementById('lightbox-caption').innerText = img.dataset.caption || '';
                document.getElementById('lightbox-counter').innerText = (currentIndex + 1) + ' / ' + currentImages.length;
                lbImg.style.opacity = '1';
            }, 150);
        } else {
            lbImg.src = img.src;
            lbImg.alt = img.dataset.caption || '';
            document.getElementById('lightbox-caption').innerText = img.dataset.caption || '';
            document.getElementById('lightbox-counter').innerText = (currentIndex + 1) + ' / ' + currentImages.length;
        }

        // Hide arrows if only one image
        document.getElementById('lb-prev').style.display = currentImages.length > 1 ? '' : 'none';
        document.getElementById('lb-next').style.display = currentImages.length > 1 ? '' : 'none';
    }

    function shiftLightbox(dir) {
        currentIndex = (currentIndex + dir + currentImages.length) % currentImages.length;
        showLightboxImage(true);
    }

    function closeLightbox() {
        document.getElementById('lightbox').classList.add('hidden');
        document.getElementById('lightbox').classList.remove('flex');
        document.body.style.overflow = '';
    }

    // Click backdrop to close
    document.getElementById('lightbox').addEventListener('click', function (e) {
        if (e.target === this) closeLightbox();
    });

    // Keyboard navigation
    document.addEventListener('keydown', function (e) {
        if (document.getElementById('lightbox').classList.contains('hidden')) return;
        if (e.key === 'ArrowRight') shiftLightbox(1);
        if (e.key === 'ArrowLeft')  shiftLightbox(-1);
        if (e.key === 'Escape')     closeLightbox();
    });
</script>

<script>
    function setTab(category) {
        document.querySelectorAll('.tabs').forEach(t => t.classList.remove('active'));
        const activeTab = document.querySelector(`[onclick="setTab('${category}')"]`);
        if (activeTab) activeTab.classList.add('active');

        document.querySelectorAll('.photo-item').forEach(item => {
            item.style.display = item.dataset.category == category ? 'block' : 'none';
        });
    }

    document.addEventListener("DOMContentLoaded", function () {
        const firstTab = document.querySelector('.tabs.active');
        if (firstTab) {
            const category = firstTab.getAttribute('onclick').match(/'(.*?)'/)[1];
            setTab(category);
        }
    });
</script>

@stop
