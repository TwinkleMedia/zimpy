<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Zimpy Chocolates</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Registers the font-playfair / font-montserrat classes (the original page used them but never defined them)
        tailwind.config = {
            theme: { extend: { fontFamily: {
                playfair: ['"Playfair Display"', 'Georgia', 'serif'],
                montserrat: ['Montserrat', 'system-ui', 'sans-serif'],
            } } }
        };
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">

    <style>
        #scrollProgress {
            position: fixed; top: 0; left: 0; width: 100%; height: 3px;
            background: linear-gradient(90deg, #C9A227, #ED1C24);
            transform: scaleX(0); transform-origin: left; z-index: 9999; pointer-events: none;
        }

        /* Hero: one entrance sequence on load */
        .hero-in { animation: heroUp .9s cubic-bezier(.22, 1, .36, 1) both; animation-delay: var(--d, 0ms); }
        @keyframes heroUp { from { opacity: 0; transform: translateY(26px); } to { opacity: 1; transform: none; } }

        .pack-in { animation: packIn 1.1s cubic-bezier(.22, 1, .36, 1) both; animation-delay: var(--d, 0ms); }
        @keyframes packIn {
            from { opacity: 0; translate: var(--fx, 0) var(--fy, 60px); scale: .85; }
            to   { opacity: 1; translate: 0 0; scale: 1; }
        }
        .pack-float { animation: packFloat 6s ease-in-out infinite; animation-delay: var(--fd, 0s); }
        @keyframes packFloat { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
        .ring-spin { animation: ringSpin 50s linear infinite; }
        @keyframes ringSpin { to { transform: rotate(360deg); } }

        /* Scroll reveal: only the section blocks, nothing fancier */
        .js-anim .reveal { opacity: 0; transform: translateY(24px); transition: opacity .8s ease var(--d, 0ms), transform .8s cubic-bezier(.22, 1, .36, 1) var(--d, 0ms); }
        .js-anim .reveal.in { opacity: 1; transform: none; }

        /* Value cards */
        .why-item { transition: background-color .35s ease; }
        .why-item:hover { background-color: rgba(201, 162, 39, .08); }
        .why-item .icon-box { transition: background-color .3s, color .3s; }
        .why-item:hover .icon-box { background-color: #C9A227; color: #351B16; }

        a:focus-visible, button:focus-visible { outline: 2px solid #C9A227; outline-offset: 3px; }

        @media (prefers-reduced-motion: reduce) {
            .hero-in, .pack-in, .pack-float, .ring-spin { animation: none !important; }
        }
    </style>
</head>

<body class="font-montserrat bg-[#F8F3EA] text-[#351B16]">
    <?php include "./navbar.php"; ?>

    <!-- ========== HERO ========== -->
    <section class="relative overflow-hidden bg-[#F8F3EA]">
        <div class="absolute -right-32 -top-32 w-96 h-96 rounded-full bg-[#C9A227]/10 blur-2xl"></div>
        <div class="absolute -left-40 bottom-0 w-96 h-96 rounded-full bg-[#351B16]/5 blur-2xl"></div>

        <div class="relative max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
            <div class="min-h-[600px] lg:min-h-[660px] grid lg:grid-cols-2 items-center gap-10 lg:gap-14 py-12 lg:py-16">

                <div class="max-w-xl mx-auto lg:mx-0 text-center lg:text-left">
                    <p class="hero-in text-sm font-semibold text-[#8C6D18]" style="--d:100ms">Premium confectionery for business</p>

                    <h1 class="hero-in font-playfair mt-4 text-[40px] sm:text-5xl lg:text-6xl leading-[1.05] font-semibold" style="--d:250ms">
                        Chocolate moments for every business.
                    </h1>

                    <p class="hero-in mt-6 max-w-md mx-auto lg:mx-0 text-base leading-7 text-[#351B16]/70" style="--d:450ms">
                        From everyday favourites to premium gifting collections, Zimpy supplies quality chocolate and confectionery for every occasion.
                    </p>

                    <div class="hero-in mt-8 flex flex-col sm:flex-row gap-3 justify-center lg:justify-start" style="--d:600ms">
                        <a href="./product.php" class="group inline-flex items-center justify-center gap-2 bg-[#351B16] hover:bg-[#4A241D] text-white px-7 py-3.5 text-sm font-semibold rounded-full transition-colors">
                            Explore products
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M5 12h14M13 6l6 6-6 6" /></svg>
                        </a>
                        <a href="#our-story" class="inline-flex items-center justify-center px-7 py-3.5 text-sm font-semibold rounded-full border border-[#351B16]/25 hover:border-[#351B16] transition-colors">
                            Read our story
                        </a>
                    </div>
                </div>

                <!-- Product display -->
                <div class="relative flex items-center justify-center min-h-[360px] sm:min-h-[440px] lg:min-h-[500px]" aria-hidden="false">
                    <div class="absolute w-[280px] h-[280px] sm:w-[360px] sm:h-[360px] lg:w-[430px] lg:h-[430px] rounded-full bg-[#351B16]/[0.05]"></div>
                    <div class="ring-spin absolute w-[260px] h-[260px] sm:w-[340px] sm:h-[340px] lg:w-[400px] lg:h-[400px] rounded-full border border-dashed border-[#C9A227]/40"></div>

                    <div class="pack-in relative z-20 w-[165px] sm:w-[200px] lg:w-[235px] rotate-[-3deg] drop-shadow-[0_20px_25px_rgba(53,27,22,0.22)]" style="--d:300ms; --fy:-70px">
                        <img src="./assets/Gloria.png" alt="Zimpy Gloria chocolate" class="pack-float w-full h-auto object-contain">
                    </div>
                    <div class="pack-in absolute z-10 left-[6%] lg:left-[4%] bottom-[10%] w-[90px] sm:w-[115px] lg:w-[130px] rotate-[-10deg] drop-shadow-[0_15px_18px_rgba(53,27,22,0.18)]" style="--d:650ms; --fx:-70px; --fy:40px">
                        <img src="./assets/Lovita.png" alt="Zimpy Lovita chocolate" class="pack-float w-full h-auto object-contain" style="--fd:-2s">
                    </div>
                    <div class="pack-in absolute z-10 right-[6%] lg:right-[4%] top-[10%] w-[90px] sm:w-[115px] lg:w-[130px] rotate-[9deg] drop-shadow-[0_15px_18px_rgba(53,27,22,0.18)]" style="--d:850ms; --fx:70px; --fy:-40px">
                        <img src="./assets/Dairy Luxe.png" alt="Zimpy Dairy Luxe chocolate" class="pack-float w-full h-auto object-contain" style="--fd:-4s">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== WHY ZIMPY ========== -->
    <section class="bg-[#351B16]">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-16 lg:py-20">

            <div class="reveal max-w-2xl mb-12">
                <h2 class="font-playfair text-3xl sm:text-4xl lg:text-[44px] leading-[1.1] font-semibold text-white">
                    Why businesses choose Zimpy
                </h2>
                <p class="mt-4 text-base leading-7 text-white/65">
                    A diverse confectionery range designed to meet different business and customer needs.
                </p>
            </div>

            <div id="whyGrid" class="grid sm:grid-cols-2 lg:grid-cols-4 gap-px bg-[#C9A227]/20 border border-[#C9A227]/20 rounded-2xl overflow-hidden">
                <?php
                $why = [
                    ['Wide product portfolio',     'A diverse range across everyday, premium and gifting categories.', 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4'],
                    ['Business-focused solutions', 'Products suited to different retail and business requirements.',  'M3 21h18M5 21V7l7-4 7 4v14M9 21v-6h6v6M8 10h1M8 13h1M15 10h1M15 13h1'],
                    ['Consistent quality',         'A focus on maintaining product quality across the range.',         'M9 12l2 2 4-4m6-2a9 9 0 11-18 0 9 9 0 0118 0z'],
                    ['Long-term partnerships',     'Built around reliable and lasting business relationships.',        'M17 20h5v-2a4 4 0 00-4-4h-1M9 20H4v-2a4 4 0 014-4h1m4-4a4 4 0 100-8 4 4 0 000 8zm6 0a3 3 0 100-6 3 3 0 000 6z'],
                ];
                foreach ($why as [$t, $d, $icon]): ?>
                    <div class="why-item bg-[#351B16] p-7 lg:p-8">
                        <div class="icon-box w-12 h-12 rounded-full flex items-center justify-center border border-[#C9A227]/40 text-[#C9A227]">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="<?= $icon ?>" /></svg>
                        </div>
                        <h3 class="font-playfair mt-6 text-xl text-white"><?= $t ?></h3>
                        <p class="mt-3 text-sm leading-6 text-white/60"><?= $d ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ========== OUR STORY ========== -->
    <section id="our-story" class="overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-20 lg:py-28">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                <div class="reveal relative order-2 lg:order-1">
                    <div class="relative overflow-hidden rounded-2xl">
                        <img src="./assets/aboutNew.png" alt="Zimpy chocolate and confectionery products"
                             class="w-full h-[340px] sm:h-[420px] lg:h-[540px] object-cover" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#351B16]/30 via-transparent to-transparent"></div>
                    </div>
                    <div class="absolute -bottom-5 -right-3 sm:-right-6 w-24 h-24 sm:w-32 sm:h-32 rounded-2xl border border-[#C9A227]/50 -z-0" aria-hidden="true"></div>
                    <div class="absolute bottom-6 left-6 bg-[#351B16] rounded-xl px-6 py-4 shadow-lg">
                        <p class="font-playfair text-2xl text-[#C9A227]">Zimpy</p>
                        <p class="mt-1 text-xs text-white/75">Chocolate &amp; Confectionery</p>
                    </div>
                </div>

                <div class="reveal order-1 lg:order-2">
                    <h2 class="font-playfair text-4xl sm:text-5xl leading-[1.08] font-semibold">
                        Made with a passion for chocolate.
                    </h2>

                    <div class="mt-6 mb-7 flex items-center gap-3" aria-hidden="true">
                        <span class="w-12 h-[2px] bg-[#C9A227]"></span>
                        <span class="w-2 h-2 rotate-45 bg-[#C9A227]"></span>
                    </div>

                    <div class="space-y-5 text-base leading-8 text-[#351B16]/75 max-w-xl">
                        <p>At Zimpy, chocolate is more than a sweet treat. It is part of celebrations, conversations, gifting and everyday moments.</p>
                        <p>Our journey is built around chocolate and confectionery that bring together enjoyable taste, appealing presentation and dependable quality.</p>
                        <p>From everyday favourites to premium collections, our range is created to serve different occasions and business needs.</p>
                    </div>

                    <dl class="mt-10 grid grid-cols-2 gap-x-8 gap-y-7 border-t border-[#351B16]/15 pt-8 max-w-xl">
                        <?php
                        $values = [
                            ['Quality',     'Thoughtful products for every occasion.'],
                            ['Variety',     'Everyday chocolates to premium gifting.'],
                            ['Taste',       'Made to create memorable moments.'],
                            ['Partnership', 'Built with businesses in mind.'],
                        ];
                        foreach ($values as [$k, $v]): ?>
                            <div>
                                <dt class="font-playfair text-xl"><?= $k ?></dt>
                                <dd class="mt-1.5 text-sm leading-6 text-[#351B16]/60"><?= $v ?></dd>
                            </div>
                        <?php endforeach; ?>
                    </dl>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== CLOSING CTA ========== -->
    <section class="bg-[#351B16]">
        <div class="reveal max-w-4xl mx-auto px-5 py-16 lg:py-20 text-center">
            <h2 class="font-playfair text-3xl sm:text-4xl font-semibold text-white">See what Zimpy can offer your business</h2>
            <p class="mt-4 text-base leading-7 text-white/65 max-w-xl mx-auto">
                Browse the full range, from everyday chocolates to premium pralines and gifting collections.
            </p>
            <a href="./product.php" class="group mt-8 inline-flex items-center gap-2 bg-[#C9A227] hover:bg-[#D4AF37] text-[#351B16] px-8 py-3.5 text-sm font-bold rounded-full transition-colors">
                Explore products
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M13 6l6 6-6 6" /></svg>
            </a>
        </div>
    </section>

    <?php include "./footer.php"; ?>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Scroll progress bar
            var bar = document.createElement('div');
            bar.id = 'scrollProgress';
            document.body.appendChild(bar);
            function onScroll() {
                var h = document.documentElement.scrollHeight - innerHeight;
                bar.style.transform = 'scaleX(' + (h > 0 ? scrollY / h : 0) + ')';
            }
            addEventListener('scroll', onScroll, { passive: true });
            onScroll();

            if (matchMedia('(prefers-reduced-motion: reduce)').matches) return;
            document.documentElement.classList.add('js-anim');

            // Reveal section blocks once as they enter the viewport
            var io = new IntersectionObserver(function (entries) {
                entries.forEach(function (e) {
                    if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); }
                });
            }, { threshold: 0.12 });
            document.querySelectorAll('.reveal').forEach(function (el) { io.observe(el); });
        });
    </script>
</body>

</html>