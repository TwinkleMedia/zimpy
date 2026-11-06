<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Moments | Zimpy</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    <style>
        .font-montserrat { font-family: 'Montserrat', sans-serif; }
        .font-playfair { font-family: 'Playfair Display', serif; }

        /* Soft light behind the product */
        .product-stage {
            background: radial-gradient(circle at 50% 45%, #FFFFFF 0%, #FBF6EA 55%, #F3EAD6 100%);
        }
        @keyframes float-in { from { opacity: 0; transform: translateY(14px); } to { opacity: 1; transform: none; } }
        .float-in { animation: float-in .8s cubic-bezier(.2,.8,.2,1) both; }

        a:focus-visible { outline: 2px solid #C9A227; outline-offset: 3px; }
        @media (prefers-reduced-motion: reduce) { .float-in { animation: none; } }
    </style>
</head>
<body class="bg-[#F8F3EA] antialiased">
<?php include "./navbar.php"; ?>

<!-- ========================================= -->
<!-- BANNER HERO -->
<!-- ========================================= -->
<section class="relative bg-[#351B16] overflow-hidden">
    <div class="absolute -top-20 -right-20 w-56 h-56 rounded-full border border-[#C9A227]/20"></div>
    <div class="absolute -bottom-24 -left-24 w-64 h-64 rounded-full border border-[#C9A227]/10"></div>

    <div class="relative max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-14 sm:py-16 lg:py-20 text-center">
        <h1 class="font-playfair text-[44px] sm:text-6xl lg:text-7xl font-semibold text-[#C9A227] leading-none">
            Golden Moments
        </h1>
        <p class="mt-4 font-montserrat text-sm sm:text-base text-white/60">Premium milk chocolate pralines in a generous 700 gm pouch</p>
        <div class="mt-6 flex items-center justify-center gap-3">
            <span class="w-10 h-[1px] bg-[#C9A227]"></span>
            <span class="w-2 h-2 rotate-45 bg-[#C9A227]"></span>
            <span class="w-10 h-[1px] bg-[#C9A227]"></span>
        </div>
    </div>
</section>


<!-- ========================================= -->
<!-- PRODUCT INFORMATION -->
<!-- ========================================= -->
<section class="py-14 sm:py-20 lg:py-24">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            <!-- IMAGE -->
            <div class="relative">
                <div class="product-stage border border-[#351B16]/10 p-8 sm:p-12 flex items-center justify-center min-h-[340px] sm:min-h-[480px]">
                    <img src="./assets/ZimpyGoldenMoments.png" alt="Zimpy Golden Moments Premium Chocolate Pralines"
                         class="float-in w-full max-w-[300px] sm:max-w-[380px] h-auto object-contain drop-shadow-[0_24px_28px_rgba(53,27,22,0.25)]">
                </div>
                <div class="absolute -bottom-3 -right-3 w-20 h-20 sm:w-24 sm:h-24 border border-[#C9A227]/50 -z-10 pointer-events-none"></div>
                <div class="absolute -top-3 -left-3 w-12 h-12 border-t border-l border-[#C9A227]/60 pointer-events-none"></div>
            </div>

            <!-- DETAILS -->
            <div>
                <p class="font-montserrat text-sm font-semibold text-[#8C6D18]">Zimpy Chocolate</p>

                <h2 class="mt-3 font-playfair text-[34px] sm:text-4xl lg:text-5xl leading-[1.1] font-semibold text-[#351B16]">
                    Golden Moments Premium Chocolate Pralines
                </h2>

                <p class="mt-5 font-montserrat text-sm sm:text-[15px] leading-7 text-[#351B16]/70 max-w-xl">
                    Golden Moments is a premium assortment of milk chocolate pralines.
                    It comes in two ranges, Golden Moments and Premium Pralines,
                    both in a generous 700 gm pouch.
                </p>

                <!-- Assortment -->
                <div class="mt-8">
                    <p class="font-montserrat text-sm font-semibold text-[#351B16]">Assortment</p>
                    <div class="mt-3 flex flex-wrap gap-2.5">
                        <span class="inline-flex items-center gap-2.5 bg-white border border-[#351B16]/15 hover:border-[#C9A227] px-4 py-2.5 font-montserrat text-xs font-semibold text-[#351B16] transition-colors">
                            <span class="w-3 h-3 rounded-full bg-[#8B4A22]"></span> Assorted Milk Chocolate
                        </span>
                    </div>
                </div>

                <!-- Pack options -->
                <div class="mt-8">
                    <p class="font-montserrat text-sm font-semibold text-[#351B16]">Pack options</p>

                    <div class="mt-3 bg-white border border-[#351B16]/10 divide-y divide-[#351B16]/10">

                        <!-- Golden Moments -->
                        <div class="flex items-center justify-between gap-4 p-5 sm:p-6 hover:bg-[#FBF6EA] transition-colors">
                            <div>
                                <p class="font-playfair text-lg sm:text-xl font-semibold text-[#351B16]">Golden Moments Pouch</p>
                                <p class="mt-1.5 font-montserrat text-[13px] leading-5 text-[#351B16]/65">
                                    <span class="font-semibold text-[#351B16]">700 gm</span> · 70 pieces<br>
                                    16 pouches per carton
                                </p>
                            </div>
                            <p class="shrink-0 font-montserrat text-[22px] sm:text-2xl font-bold tracking-tight text-[#351B16]">₹ 400</p>
                        </div>

                        <!-- Premium Pralines -->
                        <div class="flex items-center justify-between gap-4 p-5 sm:p-6 hover:bg-[#FBF6EA] transition-colors">
                            <div>
                                <p class="font-playfair text-lg sm:text-xl font-semibold text-[#351B16]">Premium Pralines Pouch</p>
                                <p class="mt-1.5 font-montserrat text-[13px] leading-5 text-[#351B16]/65">
                                    <span class="font-semibold text-[#351B16]">700 gm</span> · 70 pieces<br>
                                    16 pouches per carton
                                </p>
                            </div>
                            <p class="shrink-0 font-montserrat text-[22px] sm:text-2xl font-bold tracking-tight text-[#351B16]">₹ 400</p>
                        </div>

                    </div>
                </div>

                <!-- Buttons -->
                <div class="mt-8 flex flex-col sm:flex-row gap-3">
                    <a href="./contact.php"
                       class="group inline-flex items-center justify-center gap-2 bg-[#351B16] hover:bg-[#4A241D] text-white px-8 py-4 font-montserrat text-xs font-semibold transition-colors duration-300">
                        Enquire Now
                        <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M5 12h14M13 6l6 6-6 6" />
                        </svg>
                    </a>
                    <a href="/product.php"
                       class="inline-flex items-center justify-center border border-[#351B16]/25 hover:border-[#C9A227] hover:bg-white text-[#351B16] px-8 py-4 font-montserrat text-xs font-semibold transition-colors duration-300">
                        All Products
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ========================================= -->
<!-- DESCRIPTION -->
<!-- ========================================= -->
<section class="bg-white py-14 sm:py-20 lg:py-24">
    <div class="max-w-5xl mx-auto px-5 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 lg:gap-16">
            <div class="lg:col-span-2">
                <div class="flex items-center gap-3 mb-4">
                    <span class="w-8 h-[1px] bg-[#C9A227]"></span>
                    <span class="font-montserrat text-sm font-semibold text-[#8C6D18]">Description</span>
                </div>
                <h3 class="font-playfair text-[28px] sm:text-4xl leading-[1.15] font-semibold text-[#351B16]">
                    Premium pralines, made to be shared.
                </h3>
            </div>

            <div class="lg:col-span-3 space-y-4 font-montserrat text-sm sm:text-[15px] leading-7 text-[#351B16]/70">
                <p>
                    Golden Moments is made of individually wrapped premium chocolate pralines in an
                    assorted milk chocolate mix. The pouches come in a range of pack colours,
                    with a window that shows the chocolates inside.
                </p>
                <p>
                    The range has two options, Golden Moments and Premium Pralines. Both are
                    available as a 700 gm pouch with 70 pieces, and each carton holds 16 pouches.
                </p>
                <p>
                    With a premium look and a large pack size, Golden Moments suits gifting,
                    festive occasions and retail, and gives businesses a strong shelf presence.
                </p>
            </div>
        </div>

        <!-- Highlights -->
        <div class="mt-12 grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="border border-[#351B16]/10 bg-[#F8F3EA] p-6 hover:border-[#C9A227]/60 transition-colors">
                <svg class="w-6 h-6 text-[#C9A227]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="3.5" fill="currentColor"/></svg>
                <p class="mt-4 font-playfair text-lg font-semibold text-[#351B16]">Premium Pralines</p>
                <p class="mt-2 font-montserrat text-xs leading-5 text-[#351B16]/60">Individually wrapped chocolate pralines.</p>
            </div>
            <div class="border border-[#351B16]/10 bg-[#F8F3EA] p-6 hover:border-[#C9A227]/60 transition-colors">
                <div class="flex items-center gap-1.5 h-6" aria-hidden="true">
                    <span class="w-3 h-3 rounded-full bg-[#8B4A22]"></span>
                    <span class="w-3 h-3 rounded-full bg-[#351B16]"></span>
                    <span class="w-3 h-3 rounded-full bg-[#C9A227]"></span>
                </div>
                <p class="mt-4 font-playfair text-lg font-semibold text-[#351B16]">Assorted Milk Chocolate</p>
                <p class="mt-2 font-montserrat text-xs leading-5 text-[#351B16]/60">A mixed assortment in every pouch.</p>
            </div>
            <div class="border border-[#351B16]/10 bg-[#F8F3EA] p-6 hover:border-[#C9A227]/60 transition-colors">
                <svg class="w-6 h-6 text-[#C9A227]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 7.5 12 3 4 7.5v9L12 21l8-4.5v-9z"/><path d="M4 7.5 12 12l8-4.5M12 12v9"/></svg>
                <p class="mt-4 font-playfair text-lg font-semibold text-[#351B16]">700 gm Pouch</p>
                <p class="mt-2 font-montserrat text-xs leading-5 text-[#351B16]/60">70 pieces in each resealable-style pouch.</p>
            </div>
        </div>
    </div>
</section>

<?php include "./footer.php"; ?>

</body>
</html>