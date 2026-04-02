<?php include('common/header.php'); ?>

<!-- Page Hero -->
<?php include('common/hero.php') ?>

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
          <button
            class="tabs font-display text-xs px-6 py-2 whitespace-nowrap tracking-widest uppercase border border-border text-muted-foreground bg-transparent ease transition-all duration-200ms cursor-pointer hover:border-primary hover:text-primary [&.active]:bg-primary [&.active]:border-primary [&.active]:text-white active"
            onclick="setTab('all')" id="tab-all">
            All Photos
          </button>
          <button
            class="tabs font-display text-xs px-6 py-2 whitespace-nowrap tracking-widest uppercase border border-border text-muted-foreground bg-transparent ease transition-all duration-200ms cursor-pointer hover:border-primary hover:text-primary [&.active]:bg-primary [&.active]:border-primary [&.active]:text-white"
            onclick="setTab('branches')" id="tab-branches">Branches &amp; Temples</button>
          <button
            class="tabs font-display text-xs px-6 py-2 whitespace-nowrap tracking-widest uppercase border border-border text-muted-foreground bg-transparent ease transition-all duration-200ms cursor-pointer hover:border-primary hover:text-primary [&.active]:bg-primary [&.active]:border-primary [&.active]:text-white"
            onclick="setTab('events')" id="tab-events">Temple Interiors</button>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-5" id="photo-grid">
      <div class="photo-item relative overflow-hidden bg-[#f9f7f3] transition-transform duration-300 hover:scale-[1.02]"
        data-category="all">
        <div class="relative aspect-square w-full overflow-hidden">
          <img src="https://placehold.co/350x350?text=Temple+Building" alt="Temple Building"
            class="h-full w-full object-cover transition-transform duration-300" />
          <div class="overlay absolute inset-0 transition-all duration-300"></div>
        </div>
      </div>

      <div class="photo-item relative overflow-hidden bg-[#f9f7f3] transition-transform duration-300 hover:scale-[1.02]"
        data-category="interiors">
        <div class="relative aspect-square w-full overflow-hidden">
          <img src="https://placehold.co/350x350?text=Temple+Interior" alt="Temple Interior with Flowers"
            class="h-full w-full object-cover transition-transform duration-300" />
          <div class="overlay absolute inset-0 transition-all duration-300"></div>
        </div>
      </div>

      <div class="photo-item relative overflow-hidden bg-[#f9f7f3] transition-transform duration-300 hover:scale-[1.02]"
        data-category="branches">
        <div class="relative aspect-square w-full overflow-hidden">
          <img src="https://placehold.co/350x350?text=Mountain+View" alt="Mountain View"
            class="h-full w-full object-cover transition-transform duration-300" />
          <div class="overlay absolute inset-0 transition-all duration-300"></div>
        </div>
      </div>

      <div class="photo-item relative overflow-hidden bg-[#f9f7f3] transition-transform duration-300 hover:scale-[1.02]"
        data-category="events">
        <div class="relative aspect-square w-full overflow-hidden">
          <img src="https://placehold.co/350x350?text=Temple+Gathering" alt="Temple Gathering"
            class="h-full w-full object-cover transition-transform duration-300" />
          <div class="overlay absolute inset-0 transition-all duration-300"></div>
        </div>
      </div>

      <div class="photo-item relative overflow-hidden bg-[#f9f7f3] transition-transform duration-300 hover:scale-[1.02]"
        data-category="interiors">
        <div class="relative aspect-square w-full overflow-hidden">
          <img src="https://placehold.co/350x350?text=Temple+Altar" alt="Temple Altar"
            class="h-full w-full object-cover transition-transform duration-300" />
          <div class="overlay absolute inset-0 transition-all duration-300"></div>
        </div>
      </div>

      <div class="photo-item relative overflow-hidden bg-[#f9f7f3] transition-transform duration-300 hover:scale-[1.02]"
        data-category="interiors">
        <div class="relative aspect-square w-full overflow-hidden">
          <img src="https://placehold.co/350x350?text=Temple+Hall" alt="Temple Hall"
            class="h-full w-full object-cover transition-transform duration-300" />
          <div class="overlay absolute inset-0 transition-all duration-300"></div>
        </div>
      </div>

      <div class="photo-item relative overflow-hidden bg-[#f9f7f3] transition-transform duration-300 hover:scale-[1.02]"
        data-category="interiors">
        <div class="relative aspect-square w-full overflow-hidden">
          <img src="https://placehold.co/350x350?text=Temple+Interior+2" alt="Temple Interior"
            class="h-full w-full object-cover transition-transform duration-300" />
          <div class="overlay absolute inset-0 transition-all duration-300"></div>
        </div>
      </div>

      <div class="photo-item relative overflow-hidden bg-[#f9f7f3] transition-transform duration-300 hover:scale-[1.02]"
        data-category="interiors">
        <div class="relative aspect-square w-full overflow-hidden">
          <img src="https://placehold.co/350x350?text=Prayer+Room" alt="Prayer Room"
            class="h-full w-full object-cover transition-transform duration-300" />
          <div class="overlay absolute inset-0 transition-all duration-300"></div>
        </div>
      </div>

      <div class="photo-item relative overflow-hidden bg-[#f9f7f3] transition-transform duration-300 hover:scale-[1.02]"
        data-category="branches">
        <div class="relative aspect-square w-full overflow-hidden">
          <img src="https://placehold.co/350x350?text=Temple+Entrance" alt="Temple Entrance"
            class="h-full w-full object-cover transition-transform duration-300" />
          <div class="overlay absolute inset-0 transition-all duration-300"></div>
        </div>
      </div>

      <div class="photo-item relative overflow-hidden bg-[#f9f7f3] transition-transform duration-300 hover:scale-[1.02]"
        data-category="branches">
        <div class="relative aspect-square w-full overflow-hidden">
          <img src="https://placehold.co/350x350?text=City+View" alt="City View"
            class="h-full w-full object-cover transition-transform duration-300" />
          <div class="overlay absolute inset-0 transition-all duration-300"></div>
        </div>
      </div>

      <div class="photo-item relative overflow-hidden bg-[#f9f7f3] transition-transform duration-300 hover:scale-[1.02]"
        data-category="events">
        <div class="relative aspect-square w-full overflow-hidden">
          <img src="https://placehold.co/350x350?text=Temple+Members" alt="Temple Members"
            class="h-full w-full object-cover transition-transform duration-300" />
          <div class="overlay absolute inset-0 transition-all duration-300"></div>
        </div>
      </div>

      <div class="photo-item relative overflow-hidden bg-[#f9f7f3] transition-transform duration-300 hover:scale-[1.02]"
        data-category="interiors">
        <div class="relative aspect-square w-full overflow-hidden">
          <img src="https://placehold.co/350x350?text=Sacred+Space" alt="Sacred Space"
            class="h-full w-full object-cover transition-transform duration-300" />
          <div class="overlay absolute inset-0 transition-all duration-300"></div>
        </div>
      </div>

      <div class="photo-item relative overflow-hidden bg-[#f9f7f3] transition-transform duration-300 hover:scale-[1.02]"
        data-category="branches">
        <div class="relative aspect-square w-full overflow-hidden">
          <img src="https://placehold.co/350x350?text=Temple+Architecture" alt="Temple Architecture"
            class="h-full w-full object-cover transition-transform duration-300" />
          <div class="overlay absolute inset-0 transition-all duration-300"></div>
        </div>
      </div>

      <div class="photo-item relative overflow-hidden bg-[#f9f7f3] transition-transform duration-300 hover:scale-[1.02]"
        data-category="interiors">
        <div class="relative aspect-square w-full overflow-hidden">
          <img src="https://placehold.co/350x350?text=Worship+Hall" alt="Worship Hall"
            class="h-full w-full object-cover transition-transform duration-300" />
          <div class="overlay absolute inset-0 transition-all duration-300"></div>
        </div>
      </div>

      <div class="photo-item relative overflow-hidden bg-[#f9f7f3] transition-transform duration-300 hover:scale-[1.02]"
        data-category="branches">
        <div class="relative aspect-square w-full overflow-hidden">
          <img src="https://placehold.co/350x350?text=Temple+Skyline" alt="Temple Skyline"
            class="h-full w-full object-cover transition-transform duration-300" />
          <div class="overlay absolute inset-0 transition-all duration-300"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Load more -->
  <div class="text-center mt-12">
    <button
      class="font-display text-sm px-6 py-2 whitespace-nowrap tracking-widest uppercase border border-border text-white bg-primary ease transition-all duration-200ms cursor-pointer">Load
      More</button>
  </div>

</div>

<?php include('common/footer.php'); ?>

<script>


</script>