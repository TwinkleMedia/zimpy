<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gracia | Zimpy</title>

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
            Gracia
        </h1>
        <p class="mt-4 font-montserrat text-sm sm:text-base text-white/60">Mini milk-filled chocolates in a premium window box</p>
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
                    <img src="./assets/Gracia.png" alt="Zimpy Gracia Assorted Milk Chocolate"
                         class="float-in w-full max-w-[300px] sm:max-w-[380px] h-auto object-contain drop-shadow-[0_24px_28px_rgba(53,27,22,0.25)]">
                </div>
                <div class="absolute -bottom-3 -right-3 w-20 h-20 sm:w-24 sm:h-24 border border-[#C9A227]/50 -z-10 pointer-events-none"></div>
                <div class="absolute -top-3 -left-3 w-12 h-12 border-t border-l border-[#C9A227]/60 pointer-events-none"></div>
            </div>

            <!-- DETAILS -->
            <div>
                <p class="font-montserrat text-sm font-semibold text-[#8C6D18]">Zimpy Premium Chocolatier</p>

                <h2 class="mt-3 font-playfair text-[34px] sm:text-4xl lg:text-5xl leading-[1.1] font-semibold text-[#351B16]">
                    Gracia Assorted Milk Chocolate
                </h2>

                <p class="mt-5 font-montserrat text-sm sm:text-[15px] leading-7 text-[#351B16]/70 max-w-xl">
                    Gracia is a premium pack of mini, milk-filled chocolates made with Alpine
                    milk chocolate. Each piece comes in a colourful wrapper, and the large
                    window box shows the assortment inside.
                </p>

                <!-- Packs -->
                <div class="mt-8">
                    <p class="font-montserrat text-sm font-semibold text-[#351B16]">Available packs</p>
                    <div class="mt-3 flex flex-wrap gap-2.5">
                        <span class="inline-flex items-center gap-2.5 bg-white border border-[#351B16]/15 hover:border-[#C9A227] px-4 py-2.5 font-montserrat text-xs font-semibold text-[#351B16] transition-colors">
                            <span class="w-3 h-3 rounded-full bg-[#D62828]"></span> Red Pack
                        </span>
                        <span class="inline-flex items-center gap-2.5 bg-white border border-[#351B16]/15 hover:border-[#C9A227] px-4 py-2.5 font-montserrat text-xs font-semibold text-[#351B16] transition-colors">
                            <span class="w-3 h-3 rounded-full bg-[#2B3A8C]"></span> Blue Pack
                        </span>
                    </div>
                </div>

                <!-- Specs -->
                <dl class="mt-8 grid grid-cols-2 bg-white border border-[#351B16]/10">
                    <div class="p-5 sm:p-6 border-b border-r border-[#351B16]/10">
                        <dt class="font-montserrat text-[13px] font-medium text-[#351B16]/60">MRP</dt>
                        <dd class="mt-1.5 font-montserrat text-[22px] sm:text-2xl font-bold tracking-tight text-[#351B16]">₹ 250</dd>
                    </div>
                    <div class="p-5 sm:p-6 border-b border-[#351B16]/10">
                        <dt class="font-montserrat text-[13px] font-medium text-[#351B16]/60">Net weight</dt>
                        <dd class="mt-1.5 font-montserrat text-[22px] sm:text-2xl font-bold tracking-tight text-[#351B16]">650 gm</dd>
                    </div>
                    <div class="p-5 sm:p-6 border-r border-[#351B16]/10">
                        <dt class="font-montserrat text-[13px] font-medium text-[#351B16]/60">Pieces per box</dt>
                        <dd class="mt-1.5 font-montserrat text-[22px] sm:text-2xl font-bold tracking-tight text-[#351B16]">
                            125 <span class="font-montserrat text-[13px] font-medium tracking-normal text-[#351B16]/60">pieces</span>
                        </dd>
                    </div>
                    <div class="p-5 sm:p-6">
                        <dt class="font-montserrat text-[13px] font-medium text-[#351B16]/60">Pack</dt>
                        <dd class="mt-1.5 font-montserrat text-[22px] sm:text-2xl font-bold tracking-tight text-[#351B16]">
                            12 boxes <span class="font-montserrat text-[13px] font-medium tracking-normal text-[#351B16]/60">per carton</span>
                        </dd>
                    </div>
                </dl>

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
                    Fine, smooth milk chocolate.
                </h3>
            </div>

            <div class="lg:col-span-3 space-y-4 font-montserrat text-sm sm:text-[15px] leading-7 text-[#351B16]/70">
                <p>
                    Gracia is made for those who enjoy a smooth, creamy milk chocolate. The
                    pack holds mini chocolates with a milk-filled centre, each in its own
                    brightly coloured wrapper, so every piece feels like a small treat.
                </p>
                <p>
                    Each box has a net weight of 650 gm and holds 125 pieces. Cartons are
                    packed with 12 boxes for easy stocking and distribution.
                </p>
                <p>
                    The premium look, with its large window front, makes Gracia a good option
                    for gifting, festive occasions and retail shelves.
                </p>
            </div>
        </div>

        <!-- Highlights -->
        <div class="mt-12 grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="border border-[#351B16]/10 bg-[#F8F3EA] p-6 hover:border-[#C9A227]/60 transition-colors">
                <svg class="w-6 h-6 text-[#C9A227]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3c3 4 6 7 6 11a6 6 0 0 1-12 0c0-4 3-7 6-11z"/></svg>
                <p class="mt-4 font-playfair text-lg font-semibold text-[#351B16]">Milk filled</p>
                <p class="mt-2 font-montserrat text-xs leading-5 text-[#351B16]/60">Mini milk chocolates with a milk-filled centre.</p>
            </div>
            <div class="border border-[#351B16]/10 bg-[#F8F3EA] p-6 hover:border-[#C9A227]/60 transition-colors">
                <div class="flex items-center gap-1.5 h-6" aria-hidden="true">
                    <span class="w-3 h-3 rounded-full bg-[#D62828]"></span>
                    <span class="w-3 h-3 rounded-full bg-[#2B3A8C]"></span>
                    <span class="w-3 h-3 rounded-full bg-[#C9A227]"></span>
                </div>
                <p class="mt-4 font-playfair text-lg font-semibold text-[#351B16]">Assorted wrappers</p>
                <p class="mt-2 font-montserrat text-xs leading-5 text-[#351B16]/60">125 colourful, individually wrapped pieces.</p>
            </div>
            <div class="border border-[#351B16]/10 bg-[#F8F3EA] p-6 hover:border-[#C9A227]/60 transition-colors">
                <svg class="w-6 h-6 text-[#C9A227]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="8" width="18" height="4" rx="1"/><path d="M5 12v8h14v-8M12 8v12M12 8c-2 0-4-1-4-3s3-2 4 3c1-5 4-5 4-3s-2 3-4 3z"/></svg>
                <p class="mt-4 font-playfair text-lg font-semibold text-[#351B16]">Gift ready</p>
                <p class="mt-2 font-montserrat text-xs leading-5 text-[#351B16]/60">Premium window box, 12 boxes per carton.</p>
            </div>
        </div>
    </div>
</section>

<?php include "./footer.php"; ?>

</body>
</html>