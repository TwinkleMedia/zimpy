<!-- ============ HOME PAGE ANIMATIONS (CSS) ============ -->
<style>
    #scrollProgress {
        position: fixed; top: 0; left: 0; width: 100%; height: 3px;
        background: linear-gradient(90deg, #C9A227, #ED1C24);
        transform: scaleX(0); transform-origin: left; z-index: 9999; pointer-events: none;
    }

    /* Decorative gold circles drift */
    .deco-float { animation: decoFloat 12s ease-in-out infinite alternate; }
    @keyframes decoFloat { from { transform: translate(0, 0); } to { transform: translate(-18px, 22px); } }

    /* Scroll reveal (only active when JS adds .js-anim) */
    .js-anim .reveal {
        opacity: 0;
        transform: translateY(32px);
        transition: opacity .85s cubic-bezier(.22, 1, .36, 1) var(--d, 0ms),
                    transform .85s cubic-bezier(.22, 1, .36, 1) var(--d, 0ms);
    }
    .js-anim .reveal.from-left  { transform: translateX(-48px); }
    .js-anim .reveal.from-right { transform: translateX(48px); }
    .js-anim .reveal.pop        { transform: scale(.92) translateY(20px); }
    .js-anim .reveal.in         { opacity: 1; transform: none; }

    @media (prefers-reduced-motion: reduce) {
        .deco-float { animation: none !important; }
    }
</style>

<!-- ============ HOME PAGE ANIMATIONS (JS) ============ -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const reduce = matchMedia('(prefers-reduced-motion: reduce)').matches;
        const $$ = (s, r = document) => [...r.querySelectorAll(s)];

        /* Scroll progress bar */
        const bar = document.createElement('div');
        bar.id = 'scrollProgress';
        document.body.appendChild(bar);
        const onScroll = () => {
            const h = document.documentElement.scrollHeight - innerHeight;
            bar.style.transform = `scaleX(${h > 0 ? scrollY / h : 0})`;
        };
        addEventListener('scroll', onScroll, { passive: true });
        onScroll();

        if (reduce) return;
        document.documentElement.classList.add('js-anim');

        /* Floating decorative circles */
        $$('div.absolute.rounded-full.border').forEach(el => el.classList.add('deco-float'));

        const reveal = (els, cls = '', step = 100, base = 0) =>
            els.filter(Boolean).forEach((el, i) => {
                el.classList.add('reveal');
                cls.split(' ').filter(Boolean).forEach(c => el.classList.add(c));
                el.style.setProperty('--d', `${base + i * step}ms`);
            });

        const section = (text) => $$('section').find(s => s.textContent.includes(text));
        const wrap = (s) => s && s.querySelector(':scope > .max-w-7xl');

        /* ABOUT */
        const about = document.getElementById('about');
        if (about) {
            const left = about.querySelector('.lg\\:col-span-5');
            const right = about.querySelector('.lg\\:col-span-7');
            if (left) reveal([...left.children], '', 110);
            if (right) {
                reveal([right.firstElementChild], 'from-right', 0, 150);
                reveal([right.querySelector('.absolute.bottom-0')], '', 0, 700);
            }
            const strip = about.querySelector('.border-t .grid');
            if (strip) reveal([...strip.children], 'pop', 120);
        }

        /* WHY CHOOSE ZIMPY */
        const why = section('Why Choose Zimpy');
        if (why) {
            const c = wrap(why);
            if (c) {
                reveal([c.children[0]], '', 0);
                reveal([...c.children[1].children], 'pop', 130, 150);
            }
        }

        /* B2B SOLUTIONS */
        const b2b = section('B2B Solutions');
        if (b2b) {
            const c = wrap(b2b);
            if (c) {
                reveal([c.children[0]], '', 0);
                reveal([...c.children[1].children], 'pop', 100, 100);
                reveal([c.children[2]], '', 0);
            }
        }

        /* TESTIMONIALS: reveal the carousel as one block so off-screen cards never stay hidden */
        const tes = section('Client Testimonials');
        if (tes) {
            const c = wrap(tes);
            if (c) {
                reveal([...c.children[0].children], '', 120);
                reveal([c.children[1]], 'pop', 0, 200);
                reveal([c.children[2]], '', 0, 400);
            }
        }

        /* Trigger on scroll; clean up afterwards so hover styles take over */
        const io = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (!e.isIntersecting) return;
                const el = e.target;
                el.classList.add('in');
                io.unobserve(el);
                const delay = parseFloat(el.style.getPropertyValue('--d')) || 0;
                setTimeout(() => {
                    el.classList.remove('reveal', 'from-left', 'from-right', 'pop', 'in');
                    el.style.removeProperty('--d');
                }, delay + 1100);
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -8% 0px' });

        $$('.reveal').forEach(el => io.observe(el));
    });
</script>