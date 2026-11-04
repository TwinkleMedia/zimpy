<?php
// Edit products here. Everything on the page is generated from this list.
$products = [
    ['Lovita',            'Zimpy Collection',   './assets/Lovita.png',                    './lovita.php',                          'Rich flavour and an enjoyable chocolate experience for every occasion.'],
    ['Dairy Luxe',        'Zimpy Collection',   './assets/Dairy Luxe.png',                './product-details-dairy-luxe.php',      'A smooth, indulgent chocolate made for everyday enjoyment.'],
    ['Gloria',            'Zimpy Collection',   './assets/Gloria.png',                    './product-details-gloria.php',          'A delicious confectionery with the rich character of the Zimpy brand.'],
    ['Choco Surfer',      'Zimpy Collection',   './assets/Choco  Surfer.png',             './product-details-choco-surfer.php',    'Flavour and fun come together in another exciting Zimpy choice.'],
    ['Gracia',            'Zimpy Collection',   './assets/Gracia.png',                    './product-details-gracia.php',          'Crafted as part of the diverse Zimpy portfolio.'],
    ['Choco Lush',        'Zimpy Collection',   './assets/ZimpyChocoLush.png',            './product-details-choco-lush.php',      'The indulgent character of chocolate, made for everyday moments.'],
    ['Le Reve',           'Zimpy Collection',   './assets/LuxuryLeRevéChocolate.png',     './product-details-le-reve.php',         'A refined touch for those who want an indulgent chocolate.'],
    ['Orlen',             'Zimpy Collection',   './assets/PistachioandOrange.png',        './product-details-orlen.php',           'A distinctive choice for chocolate and confectionery lovers.'],
    ['Greetings',         'Gifting Collection', './assets/Greetings.png',                 './gifting-collection.php',              'Chocolate gifting presented for celebrations and thoughtful moments.'],
    ['Goa Special',       'Special Collection', './assets/ZimpyGoaSpecial.png',           './product-details-goa.php',             'Chocolate with regional character in a special offering.'],
    ['Golden Moments',    'Gifting Collection', './assets/ZimpyGoldenMoments.png',        './productdetailsgolden-moments.php',    'A premium touch for occasions worth celebrating.'],
    ['Premium Pralines',  'Premium Collection', './assets/p',                             './PremiumPralines.php',                 'An elegant range for premium chocolate and gifting occasions.'],
    ['Gifting Collection','Gifting Collection', './assets/GiftCollection.png',            './gifting-collection.php',              'Zimpy chocolates in carefully presented gift formats.'],
];
$cats = array_values(array_unique(array_column($products, 1)));
$e = fn($s) => htmlspecialchars($s, ENT_QUOTES);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products | Zimpy Chocolates</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500&family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        .zp-serif { font-family: 'Cormorant Garamond', Georgia, serif; }
        .zp-sans  { font-family: 'Raleway', system-ui, sans-serif; }

        /* Hero texture: soft diagonal weave in the brand maroon */
        .zp-hero {
            background:
                radial-gradient(ellipse at 85% 0%, rgba(201,162,74,.22), transparent 55%),
                radial-gradient(ellipse at 0% 100%, rgba(165,28,48,.45), transparent 55%),
                repeating-linear-gradient(45deg, rgba(255,255,255,.025) 0 2px, transparent 2px 14px),
                #4A1A17;
        }

        /* Cards */
        .zp-card { transition: transform .35s ease, box-shadow .35s ease; }
        .zp-card:hover { transform: translateY(-6px); box-shadow: 0 22px 40px -18px rgba(74,26,23,.45); }
        .zp-card img { transition: transform .7s ease; }
        .zp-card:hover img { transform: scale(1.06); }
        .zp-card:focus-within { outline: 2px solid #A51C30; outline-offset: 3px; }

        /* Filter chips */
        .zp-chip { transition: background .2s, color .2s, border-color .2s; }
        .zp-chip[aria-pressed="true"] { background: #5A211D; color: #FFF8EE; border-color: #5A211D; }
        .zp-chip:focus-visible { outline: 2px solid #A51C30; outline-offset: 2px; }

        /* One-time reveal on load (hero only) */
        @keyframes zp-rise { from { opacity: 0; transform: translateY(14px); } to { opacity: 1; transform: none; } }
        .zp-rise { animation: zp-rise .8s ease both; }
        .zp-rise-2 { animation-delay: .12s; }
        .zp-rise-3 { animation-delay: .24s; }
        @media (prefers-reduced-motion: reduce) {
            .zp-rise, .zp-card, .zp-card img { animation: none; transition: none; }
            .zp-card:hover, .zp-card:hover img { transform: none; }
        }
    </style>
</head>

<body class="zp-sans bg-[#FFF8EE] text-[#54251F]">
    <?php include "./navbar.php"; ?>

    <!-- ========== HERO ========== -->
    <section class="zp-hero relative overflow-hidden">
        <div class="relative max-w-5xl mx-auto px-5 py-20 md:py-28 text-center">
            <p class="zp-rise text-[#E2C77D] text-sm font-medium tracking-wide">Zimpy Chocolates</p>

            <h1 class="zp-serif zp-rise zp-rise-2 mt-3 text-5xl sm:text-6xl md:text-7xl font-semibold leading-[1.02] text-white">
                Discover the <em class="text-[#E2C77D] font-medium">Zimpy</em> range
            </h1>

            <p class="zp-rise zp-rise-3 mt-6 max-w-xl mx-auto text-[15px] md:text-base leading-7 text-[#F4E5D3]/90">
                Everyday favourites, premium pralines and gifting collections. Find the chocolate that fits the moment.
            </p>

            <div class="zp-rise zp-rise-3 mt-8 flex items-center justify-center gap-3" aria-hidden="true">
                <span class="w-14 h-px bg-[#C9A24A]"></span>
                <span class="w-2 h-2 rotate-45 bg-[#C9A24A]"></span>
                <span class="w-14 h-px bg-[#C9A24A]"></span>
            </div>
        </div>
        <!-- curved edge into the page -->
        <svg class="block w-full h-8 md:h-12 text-[#FFF8EE]" viewBox="0 0 1440 48" preserveAspectRatio="none" aria-hidden="true">
            <path fill="currentColor" d="M0 48V20C240 -2 480 -4 720 14s480 20 720 -2v36z" />
        </svg>
    </section>

    <!-- ========== PRODUCTS ========== -->
    <main class="max-w-6xl mx-auto px-5 pt-6 pb-20 md:pb-28">

        <!-- Filters -->
        <div class="flex flex-wrap items-center justify-center gap-2.5 mb-12" role="group" aria-label="Filter products by collection">
            <button type="button" class="zp-chip px-5 py-2 rounded-full border border-[#D8B866] text-sm font-semibold" data-filter="all" aria-pressed="true">
                All (<?= count($products) ?>)
            </button>
            <?php foreach ($cats as $c): ?>
                <button type="button" class="zp-chip px-5 py-2 rounded-full border border-[#D8B866] text-sm font-semibold" data-filter="<?= $e($c) ?>" aria-pressed="false">
                    <?= $e($c) ?>
                </button>
            <?php endforeach; ?>
        </div>

        <!-- Grid -->
        <div id="zp-grid" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            <?php foreach ($products as [$name, $cat, $img, $link, $desc]): ?>
                <article class="zp-card group relative flex flex-col overflow-hidden rounded-2xl bg-white border border-[#EBD9BC]" data-cat="<?= $e($cat) ?>">

                    <div class="relative overflow-hidden bg-[#F4E5D3] aspect-[4/3]">
                        <img src="<?= $e($img) ?>" alt="Zimpy <?= $e($name) ?>" loading="lazy"
                             class="w-full h-full object-cover"
                             onerror="this.style.display='none'">
                        <span class="absolute top-3 left-3 rounded-full bg-[#5A211D]/90 text-[#F4E5D3] text-xs font-medium px-3 py-1 backdrop-blur-sm">
                            <?= $e($cat) ?>
                        </span>
                    </div>

                    <div class="flex flex-col flex-1 p-6">
                        <h2 class="zp-serif text-3xl font-semibold leading-none"><?= $e($name) ?></h2>
                        <div class="w-10 h-[2px] bg-[#A51C30] mt-4 mb-4"></div>
                        <p class="text-sm leading-6 text-[#6B4A43] flex-1"><?= $e($desc) ?></p>

                        <a href="<?= $e($link) ?>"
                           class="mt-6 inline-flex items-center justify-between rounded-full bg-[#A51C30] hover:bg-[#861626] text-white text-sm font-semibold pl-6 pr-2 py-2 transition-colors after:absolute after:inset-0 after:content-['']">
                            See <?= $e($name) ?>
                            <span class="ml-4 grid place-items-center w-8 h-8 rounded-full bg-white/15 text-base" aria-hidden="true">→</span>
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <p id="zp-empty" class="hidden text-center text-[#6B4A43] mt-10">No products in this collection yet.</p>
    </main>

    <?php include "./footer.php"; ?>

    <script>
        // Collection filter
        (function () {
            var chips = document.querySelectorAll('.zp-chip');
            var cards = document.querySelectorAll('#zp-grid [data-cat]');
            var empty = document.getElementById('zp-empty');
            chips.forEach(function (chip) {
                chip.addEventListener('click', function () {
                    var f = chip.dataset.filter, shown = 0;
                    chips.forEach(function (c) { c.setAttribute('aria-pressed', c === chip ? 'true' : 'false'); });
                    cards.forEach(function (card) {
                        var show = f === 'all' || card.dataset.cat === f;
                        card.style.display = show ? '' : 'none';
                        if (show) shown++;
                    });
                    empty.classList.toggle('hidden', shown !== 0);
                });
            });
        })();
    </script>
</body>

</html>