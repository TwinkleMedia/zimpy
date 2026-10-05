<!-- ============ HERO SLIDER (JS) ============ -->
<script>
    const initHeroSlider = () => {
        const track = document.getElementById('carouselTrack');
        if (!track) return;

        const slides = [...track.children];
        const total = slides.length;
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const dots = [...document.querySelectorAll('#dots .dot')];
        const hero = track.parentElement;
        let index = 0;
        let timer = null;

        /* Hide dots (and arrows) that have no matching slide */
        dots.forEach((dot, i) => { if (i >= total) dot.classList.add('hidden'); });
        if (total < 2) {
            [prevBtn, nextBtn].forEach(b => b && b.classList.add('!hidden'));
            const d = document.getElementById('dots');
            if (d) d.classList.add('hidden');
            return;
        }

        const go = (i) => {
            index = (i + total) % total;
            track.style.transform = `translateX(-${index * 100}%)`;
            dots.forEach((dot, n) => {
                const active = n === index;
                dot.classList.toggle('bg-white', active);
                dot.classList.toggle('scale-125', active);
                dot.classList.toggle('bg-white/60', !active);
            });
        };

        const start = () => { stop(); timer = setInterval(() => go(index + 1), 4000); };
        const stop = () => { if (timer) clearInterval(timer); timer = null; };

        prevBtn && prevBtn.addEventListener('click', () => { go(index - 1); start(); });
        nextBtn && nextBtn.addEventListener('click', () => { go(index + 1); start(); });
        dots.forEach((dot) => dot.addEventListener('click', () => {
            go(Number(dot.dataset.index)); start();
        }));

        /* Touch swipe */
        let startX = 0;
        hero.addEventListener('touchstart', (e) => { startX = e.touches[0].clientX; stop(); }, { passive: true });
        hero.addEventListener('touchend', (e) => {
            const dx = e.changedTouches[0].clientX - startX;
            if (Math.abs(dx) > 50) go(dx < 0 ? index + 1 : index - 1);
            start();
        });

        go(0);
        start();
    };

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initHeroSlider);
    } else {
        initHeroSlider();
    }
</script>