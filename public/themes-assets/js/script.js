// Scroll shadow
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 10);
});

// Mobile menu toggle
const mobileMenuBtn = document.getElementById('mobile-menu-btn');
const mobileMenu = document.getElementById('mobile-menu');
const iconMenu = document.getElementById('icon-menu');
const iconClose = document.getElementById('icon-close');

mobileMenuBtn.addEventListener('click', () => {
    const isOpen = !mobileMenu.classList.contains('hidden');
    mobileMenu.classList.toggle('hidden', isOpen);
    iconMenu.classList.toggle('hidden', !isOpen);
    iconClose.classList.toggle('hidden', isOpen);
});

// Theme toggle
const themeToggle = document.getElementById('theme-toggle');
const iconMoon = document.getElementById('icon-moon');
const iconSun = document.getElementById('icon-sun');
let isDark = false;

themeToggle.addEventListener('click', () => {
    isDark = !isDark;
    document.documentElement.classList.toggle('dark', isDark);
    iconMoon.classList.toggle('hidden', isDark);
    iconSun.classList.toggle('hidden', !isDark);
});


// Guru details page tab toggle
function showTab(name) {
    document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
    document.querySelectorAll('.tab-btn').forEach(el => el.classList.remove('active'));
    document.getElementById('tab-' + name).classList.remove('hidden');
    document.querySelector('[data-tab="' + name + '"]').classList.add('active');
}

// Images in Home page
const container = document.getElementById('autoGallery');
const gap = 24;

function getVisibleCount() {
    const w = container.clientWidth;
    if (w >= 1024) return 3;
    if (w >= 640) return 2;
    return 1;
}

function setItemWidths() {
    const count = getVisibleCount();
    const itemWidth = (container.clientWidth - gap * (count - 1)) / count;
    document.querySelectorAll('.gallery-item').forEach(item => {
        item.style.minWidth = itemWidth + 'px';
    });
    return itemWidth;
}

// Set widths before cloning
setItemWidths();

// Clone for seamless loop
const originalItems = Array.from(container.querySelectorAll('.gallery-item'));
originalItems.forEach(item => {
    container.appendChild(item.cloneNode(true));
});

let currentIndex = 0;
const total = originalItems.length;

function getItemWidth() {
    return container.querySelector('.gallery-item').offsetWidth + gap;
}

setInterval(() => {
    currentIndex++;
    const itemWidth = getItemWidth();

    container.scrollTo({ left: currentIndex * itemWidth, behavior: 'smooth' });

    if (currentIndex >= total) {
        setTimeout(() => {
            container.scrollTo({ left: 0, behavior: 'instant' });
            currentIndex = 0;
        }, 600);
    }
}, 4500);

// Recalculate on resize
window.addEventListener('resize', () => {
    setItemWidths();
    currentIndex = 0;
    container.scrollTo({ left: 0, behavior: 'instant' });
});
// Banner
new Swiper('.hero-slider', {
    loop: true,
    autoplay: {
        delay: 8000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
