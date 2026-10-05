<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us </title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- ============ ANIMATION CSS ============ -->
    <style>
        #scrollProgress {
            position: fixed; top: 0; left: 0; width: 100%; height: 3px;
            background: linear-gradient(90deg, #C9A227, #ED1C24);
            transform: scaleX(0); transform-origin: left; z-index: 9999; pointer-events: none;
        }

        /* ---------- HERO: runs on page load ---------- */
        .hero-in { animation: heroUp .9s cubic-bezier(.22, 1, .36, 1) both; animation-delay: var(--d, 0ms); }
        @keyframes heroUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: none; } }

        /* Product packs: use the independent `translate` property so Tailwind's rotate stays intact */
        .pack-in { animation: packIn 1.1s cubic-bezier(.22, 1, .36, 1) both; animation-delay: var(--d, 0ms); }
        @keyframes packIn {
            from { opacity: 0; translate: var(--fx, 0) var(--fy, 60px); scale: .85; }
            to   { opacity: 1; translate: 0 0; scale: 1; }
        }

        /* Continuous gentle float on the image inside each wrapper */
        .pack-float { animation: packFloat 6s ease-in-out infinite; animation-delay: var(--fd, 0s); }
        @keyframes packFloat { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-12px); } }

        .ring-spin { animation: ringSpin 40s linear infinite; }
        @keyframes ringSpin { to { transform: rotate(360deg); } }
        .bg-breathe { animation: breathe 7s ease-in-out infinite; }
        @keyframes breathe { 0%, 100% { transform: scale(1); } 50% { transform: scale(1.06); } }

        .tag-pop { animation: tagPop .8s cubic-bezier(.34, 1.56, .64, 1) both; animation-delay: 1.3s; }
        @keyframes tagPop { from { opacity: 0; transform: scale(.6) translateY(12px); } to { opacity: 1; transform: none; } }

        .drift { animation: drift 10s ease-in-out infinite alternate; }
        @keyframes drift { from { transform: translate(0, 0); } to { transform: translate(-20px, 24px); } }

        /* ---------- SCROLL REVEAL ---------- */
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

        /* Hover polish */
        .why-item { transition: background-color .4s ease; }
        .why-item:hover { background-color: rgba(201, 162, 39, .06); }
        .why-item .icon-box { transition: transform .45s cubic-bezier(.22, 1, .36, 1), background-color .3s, color .3s; }
        .why-item:hover .icon-box { transform: rotate(10deg) scale(1.12); background-color: #C9A227; color: #351B16; }
        .why-item:hover .num { color: rgba(201, 162, 39, 1); }
        .why-item .num { transition: color .3s; }
        .story-point { transition: transform .35s ease; }
        .story-point:hover { transform: translateX(6px); }

        @media (prefers-reduced-motion: reduce) {
            .hero-in, .pack-in, .tag-pop { animation: none !important; }
            .pack-float, .ring-spin, .bg-breathe, .drift { animation: none !important; }
        }
    </style>
</head>
<body>
<?php
include "./navbar.php"
?>

<!-- ========================================= -->
<!-- ZIMPY HERO SECTION -->
<!-- ========================================= -->
<section class="relative overflow-hidden bg-[#F8F3EA]">

    <!-- SUBTLE BACKGROUND ACCENTS -->
    <div class="drift absolute -right-32 -top-32 w-72 h-72 rounded-full bg-[#C9A227]/[0.06]"></div>
    <div class="drift absolute -left-40 bottom-0 w-72 h-72 rounded-full bg-[#351B16]/[0.03]" style="animation-direction: alternate-reverse;"></div>

    <div class="relative max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

        <div class="min-h-[560px] lg:min-h-[600px] grid grid-cols-1 lg:grid-cols-2 items-center gap-8 lg:gap-12 py-10 sm:py-12 lg:py-14">

            <!-- LEFT CONTENT -->
            <div class="max-w-lg text-center lg:text-left">

                <div class="hero-in flex items-center justify-center lg:justify-start gap-2.5 mb-4" style="--d:100ms">
                    <span class="w-7 h-px bg-[#C9A227]"></span>
                    <span class="font-montserrat text-[9px] sm:text-[10px] font-semibold uppercase tracking-[0.2em] text-[#8C6D18]">Premium Confectionery</span>
                </div>

                <h1 class="hero-in font-playfair text-[34px] sm:text-[42px] lg:text-[50px] xl:text-[56px] leading-[1.06] font-semibold text-[#351B16]" style="--d:250ms">
                    Crafting
                    <span class="text-[#C9A227]">Chocolate</span>
                    Moments
                    <span class="block">for Every Business.</span>
                </h1>

                <p class="hero-in mt-5 max-w-md mx-auto lg:mx-0 font-montserrat text-[13px] sm:text-sm leading-6 text-[#351B16]/65" style="--d:450ms">
                    From everyday favourites to premium gifting
                    collections, Zimpy brings quality chocolate and
                    confectionery products to businesses across
                    every occasion.
                </p>

                <div class="hero-in mt-6 flex flex-col sm:flex-row items-center lg:justify-start justify-center gap-2.5" style="--d:600ms">
                    <a href="/products.html"
                        class="group inline-flex items-center justify-center gap-2 w-full sm:w-auto bg-[#351B16] hover:bg-[#4A241D] text-white px-6 py-3 font-montserrat text-[11px] sm:text-xs font-semibold transition-all duration-300">
                        Explore Products
                        <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M5 12h14M13 6l6 6-6 6" />
                        </svg>
                    </a>
                    <a href="/contact.html"
                        class="inline-flex items-center justify-center gap-2 w-full sm:w-auto border border-[#351B16]/20 hover:border-[#C9A227] text-[#351B16] hover:text-[#8C6D18] px-6 py-3 font-montserrat text-[11px] sm:text-xs font-semibold transition-all duration-300">
                        Become a Partner
                    </a>
                </div>

                <div class="hero-in mt-6 flex items-center justify-center lg:justify-start gap-2.5" style="--d:750ms">
                    <div class="flex -space-x-1.5">
                        <span class="w-6 h-6 rounded-full bg-[#351B16] border-2 border-[#F8F3EA]"></span>
                        <span class="w-6 h-6 rounded-full bg-[#C9A227] border-2 border-[#F8F3EA]"></span>
                        <span class="w-6 h-6 rounded-full bg-[#ED1C24] border-2 border-[#F8F3EA]"></span>
                    </div>
                    <p class="font-montserrat text-[10px] sm:text-[11px] text-[#351B16]/50">
                        Chocolate made for businesses,
                        gifting & everyday moments.
                    </p>
                </div>
            </div>


            <!-- RIGHT PRODUCT DISPLAY -->
            <div class="relative flex items-center justify-center min-h-[330px] sm:min-h-[400px] lg:min-h-[450px]">

                <!-- Soft Background -->
                <div class="bg-breathe absolute w-[250px] h-[250px] sm:w-[330px] sm:h-[330px] lg:w-[400px] lg:h-[400px] rounded-full bg-[#351B16]/[0.04]"></div>

                <!-- Gold Ring (dashed so the rotation is visible) -->
                <div class="ring-spin absolute w-[235px] h-[235px] sm:w-[310px] sm:h-[310px] lg:w-[370px] lg:h-[370px] rounded-full border border-dashed border-[#C9A227]/30"></div>

                <!-- MAIN PRODUCT -->
                <div class="pack-in relative z-20 w-[155px] sm:w-[190px] lg:w-[220px] rotate-[-3deg] drop-shadow-[0_20px_25px_rgba(53,27,22,0.20)]"
                     style="--d:300ms; --fx:0px; --fy:-70px">
                    <img src="./assets/Gloria.png" alt="Zimpy Gloria Chocolate" class="pack-float w-full h-auto object-contain">
                </div>

                <!-- LEFT PRODUCT -->
                <div class="pack-in absolute z-10 left-[7%] sm:left-[10%] lg:left-[5%] bottom-[10%] sm:bottom-[12%] lg:bottom-[13%] w-[85px] sm:w-[105px] lg:w-[120px] rotate-[-10deg] drop-shadow-[0_15px_18px_rgba(53,27,22,0.16)]"
                     style="--d:650ms; --fx:-70px; --fy:40px">
                    <img src="./assets/Lovita.png" alt="Zimpy Lovita Chocolate" class="pack-float w-full h-auto object-contain" style="--fd:-2s">
                </div>

                <!-- RIGHT PRODUCT -->
                <div class="pack-in absolute z-10 right-[7%] sm:right-[10%] lg:right-[5%] top-[10%] sm:top-[12%] lg:top-[13%] w-[85px] sm:w-[105px] lg:w-[120px] rotate-[9deg] drop-shadow-[0_15px_18px_rgba(53,27,22,0.16)]"
                     style="--d:850ms; --fx:70px; --fy:-40px">
                    <img src="./assets/Dairy Luxe.png" alt="Zimpy Dairy Luxe Chocolate" class="pack-float w-full h-auto object-contain" style="--fd:-4s">
                </div>

                <!-- SMALL LABEL -->
                <div class="tag-pop absolute z-30 bottom-[3%] right-[7%] sm:right-[12%] lg:right-[5%] bg-[#351B16] text-white px-3.5 py-2 sm:px-4 sm:py-2.5 shadow-md">
                    <p class="font-montserrat text-[8px] sm:text-[9px] uppercase tracking-[0.16em] text-[#D4AF37]">Zimpy</p>
                    <p class="font-playfair text-xs sm:text-sm">Made to Share</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ========================================= -->
<!-- WHY BUSINESSES CHOOSE ZIMPY -->
<!-- ========================================= -->
<section class="relative bg-[#351B16] overflow-hidden">

    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-11 sm:py-14 lg:py-16">

        <div class="why-header max-w-xl mb-8 sm:mb-10">
            <div class="flex items-center gap-2.5 mb-3">
                <span class="w-6 h-px bg-[#C9A227]"></span>
                <span class="font-montserrat text-[9px] font-semibold uppercase tracking-[0.2em] text-[#D4AF37]">Why Zimpy</span>
            </div>

            <h2 class="font-playfair text-[28px] sm:text-[34px] lg:text-[38px] leading-[1.1] font-semibold text-white">
                Why Businesses
                <span class="text-[#C9A227]">Choose Zimpy</span>
            </h2>

            <p class="mt-3 max-w-lg font-montserrat text-xs sm:text-[13px] leading-6 text-white/55">
                A diverse confectionery range designed to meet
                different business and customer needs.
            </p>
        </div>

        <div id="whyGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 border-t border-[#C9A227]/20">

            <!-- 01 -->
            <div class="why-item group py-6 sm:px-5 lg:px-6 lg:first:pl-0 border-b sm:border-r lg:border-b-0 border-[#C9A227]/20">
                <div class="flex items-center gap-3">
                    <span class="num font-playfair text-2xl text-[#C9A227]/50">01</span>
                    <div class="icon-box w-8 h-8 flex items-center justify-center border border-[#C9A227]/25 text-[#C9A227]">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                    </div>
                </div>
                <h3 class="mt-4 font-playfair text-lg sm:text-xl text-white">Wide Product Portfolio</h3>
                <p class="mt-2 font-montserrat text-[11px] sm:text-xs leading-5 text-white/45">
                    A diverse range across everyday,
                    premium and gifting categories.
                </p>
            </div>

            <!-- 02 -->
            <div class="why-item group py-6 sm:px-5 lg:px-6 border-b lg:border-b-0 lg:border-r border-[#C9A227]/20">
                <div class="flex items-center gap-3">
                    <span class="num font-playfair text-2xl text-[#C9A227]/50">02</span>
                    <div class="icon-box w-8 h-8 flex items-center justify-center border border-[#C9A227]/25 text-[#C9A227]">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 21h18M5 21V7l7-4 7 4v14M9 21v-6h6v6M8 10h1M8 13h1M15 10h1M15 13h1" />
                        </svg>
                    </div>
                </div>
                <h3 class="mt-4 font-playfair text-lg sm:text-xl text-white">Business-Focused Solutions</h3>
                <p class="mt-2 font-montserrat text-[11px] sm:text-xs leading-5 text-white/45">
                    Products suited to different retail
                    and business requirements.
                </p>
            </div>

            <!-- 03 -->
            <div class="why-item group py-6 sm:px-5 lg:px-6 border-b sm:border-b-0 sm:border-r lg:border-r border-[#C9A227]/20">
                <div class="flex items-center gap-3">
                    <span class="num font-playfair text-2xl text-[#C9A227]/50">03</span>
                    <div class="icon-box w-8 h-8 flex items-center justify-center border border-[#C9A227]/25 text-[#C9A227]">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <h3 class="mt-4 font-playfair text-lg sm:text-xl text-white">Consistent Quality</h3>
                <p class="mt-2 font-montserrat text-[11px] sm:text-xs leading-5 text-white/45">
                    A focus on maintaining product
                    quality across the range.
                </p>
            </div>

            <!-- 04 -->
            <div class="why-item group py-6 sm:px-5 lg:px-6 lg:pr-0">
                <div class="flex items-center gap-3">
                    <span class="num font-playfair text-2xl text-[#C9A227]/50">04</span>
                    <div class="icon-box w-8 h-8 flex items-center justify-center border border-[#C9A227]/25 text-[#C9A227]">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20H4v-2a4 4 0 014-4h1m4-4a4 4 0 100-8 4 4 0 000 8zm6 0a3 3 0 100-6 3 3 0 000 6z" />
                        </svg>
                    </div>
                </div>
                <h3 class="mt-4 font-playfair text-lg sm:text-xl text-white">Long-Term Partnerships</h3>
                <p class="mt-2 font-montserrat text-[11px] sm:text-xs leading-5 text-white/45">
                    Built around reliable and lasting
                    business relationships.
                </p>
            </div>
        </div>
    </div>

    <div class="h-[1px] bg-[#C9A227]"></div>
</section>


<!-- ========================================= -->
<!-- OUR STORY SECTION -->
<!-- ========================================= -->
<section class="relative bg-[#F8F3EA] overflow-hidden">

    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-24">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            <!-- LEFT: IMAGE -->
            <div class="relative order-2 lg:order-1">

                <div class="story-img relative overflow-hidden rounded-sm">
                    <img src="./assets/aboutus.png" alt="Zimpy Chocolate and Confectionery Products"
                        class="w-full h-[320px] sm:h-[400px] lg:h-[500px] object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#351B16]/20 via-transparent to-transparent"></div>
                </div>

                <div class="story-box absolute -bottom-4 -right-3 sm:-bottom-5 sm:-right-5 w-20 h-20 sm:w-28 sm:h-28 border border-[#C9A227]/40"></div>

                <div class="story-badge absolute bottom-5 left-5 sm:bottom-7 sm:left-7 bg-[#351B16] px-5 py-4 sm:px-6 sm:py-5">
                    <p class="font-playfair text-xl sm:text-2xl text-[#C9A227]">Zimpy</p>
                    <p class="mt-1 font-montserrat text-[9px] sm:text-[10px] uppercase tracking-[0.18em] text-white/70">Chocolate & Confectionery</p>
                </div>
            </div>


            <!-- RIGHT: STORY CONTENT -->
            <div id="storyText" class="order-1 lg:order-2">

                <div class="flex items-center gap-3 mb-5">
                    <span class="w-8 h-px bg-[#C9A227]"></span>
                    <span class="font-montserrat text-[10px] sm:text-xs font-semibold uppercase tracking-[0.22em] text-[#8C6D18]">Our Story</span>
                </div>

                <h2 class="font-playfair text-[34px] sm:text-[42px] lg:text-[50px] leading-[1.08] font-semibold text-[#351B16]">
                    Made with a passion
                    <span class="text-[#C9A227]">for chocolate.</span>
                </h2>

                <div class="mt-5 mb-6 flex items-center gap-3">
                    <span class="w-12 h-[2px] bg-[#C9A227]"></span>
                    <span class="w-2 h-2 rotate-45 bg-[#C9A227]"></span>
                </div>

                <div class="story-paras space-y-4 font-montserrat text-sm sm:text-[15px] leading-7 text-[#351B16]/65">
                    <p>
                        At Zimpy, chocolate is more than a sweet
                        treat. It is a part of celebrations,
                        conversations, gifting and everyday moments.
                    </p>
                    <p>
                        Our journey is built around creating
                        chocolate and confectionery products that
                        bring together enjoyable taste, appealing
                        presentation and dependable quality.
                    </p>
                    <p>
                        From everyday favourites to premium
                        collections, our range is created to serve
                        different occasions and business needs.
                    </p>
                </div>

                <div class="story-points mt-8 grid grid-cols-2 gap-x-6 gap-y-5 border-t border-[#351B16]/10 pt-7">
                    <div class="story-point">
                        <p class="font-playfair text-lg sm:text-xl text-[#351B16]">Quality</p>
                        <p class="mt-1 font-montserrat text-[10px] sm:text-xs leading-5 text-[#351B16]/50">Thoughtful products for every occasion.</p>
                    </div>
                    <div class="story-point">
                        <p class="font-playfair text-lg sm:text-xl text-[#351B16]">Variety</p>
                        <p class="mt-1 font-montserrat text-[10px] sm:text-xs leading-5 text-[#351B16]/50">Everyday chocolates to premium gifting.</p>
                    </div>
                    <div class="story-point">
                        <p class="font-playfair text-lg sm:text-xl text-[#351B16]">Taste</p>
                        <p class="mt-1 font-montserrat text-[10px] sm:text-xs leading-5 text-[#351B16]/50">Made to create memorable moments.</p>
                    </div>
                    <div class="story-point">
                        <p class="font-playfair text-lg sm:text-xl text-[#351B16]">Partnership</p>
                        <p class="mt-1 font-montserrat text-[10px] sm:text-xs leading-5 text-[#351B16]/50">Built with businesses in mind.</p>
                    </div>
                </div>

                <div class="story-link mt-8">
                    <a href="/about.html" class="group inline-flex items-center gap-3 font-montserrat text-xs sm:text-sm font-semibold text-[#351B16]">
                        Discover Our Story
                        <span class="flex items-center justify-center w-7 h-7 border border-[#351B16]/20 group-hover:border-[#C9A227] group-hover:bg-[#C9A227] transition-all duration-300">
                            <svg class="w-3.5 h-3.5 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M5 12h14M13 6l6 6-6 6" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include "./footer.php"
?>

<!-- ============ ANIMATIONS (JS) ============ -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const reduce = matchMedia('(prefers-reduced-motion: reduce)').matches;
        const $ = (s, r = document) => r.querySelector(s);
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

        const reveal = (els, cls = '', step = 90, base = 0) =>
            els.filter(Boolean).forEach((el, i) => {
                el.classList.add('reveal');
                cls.split(' ').filter(Boolean).forEach(c => el.classList.add(c));
                el.style.setProperty('--d', `${base + i * step}ms`);
            });

        // WHY
        reveal([$('.why-header')], '', 0);
        reveal($$('#whyGrid > div'), 'pop', 130, 100);

        // STORY
        reveal([$('.story-box')], 'from-right', 0, 700);
        reveal([$('.story-badge')], '', 0, 900);
        reveal($$('#storyText > div:not(.story-paras):not(.story-points), #storyText > h2'), 'from-right', 110);
        reveal($$('.story-paras p'), '', 140, 300);
        reveal($$('.story-points > div'), 'pop', 110);
        reveal([$('.story-link')], '', 0);

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
                }, delay + 1900);
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -8% 0px' });

        $$('.reveal').forEach(el => io.observe(el));
    });
</script>

</body>
</html>